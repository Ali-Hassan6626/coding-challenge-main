<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\ReceiveRequest;
use App\Models\SendRequest;
use stdClass;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // Get data on request and with range data
    public function getData($start = 0, $limit = 10)
    {
        try {
            $obj = new stdClass();

            $suggestions_count = Suggestion::all()->count();
            $send_requests_count = SendRequest::all()->count();
            $receive_requests_count = ReceiveRequest::all()->count();
            $connections_count = Connection::all()->count();

            $suggestions = Suggestion::select('id', 'first_name', 'last_name', 'email')
            ->skip($start)
                ->take($limit)
                ->get();

            $send_requests = SendRequest::select('id', 'first_name', 'last_name', 'email')
            ->skip($start)
                ->take($limit)
                ->get();

            $receive_requests = ReceiveRequest::select('id', 'first_name', 'last_name', 'email')
            ->skip($start)
                ->take($limit)
                ->get();

            $connections = Connection::select('id', 'first_name', 'last_name', 'email', 'is_common_connect', 'common_connections')
            ->skip($start)
                ->take($limit)
                ->get();

            $obj->suggestions = $suggestions;
            $obj->send_requests = $send_requests;
            $obj->receive_requests = $receive_requests;
            $obj->connections = $connections;
            $obj->suggestions_count = $suggestions_count;
            $obj->send_requests_count = $send_requests_count;
            $obj->receive_requests_count = $receive_requests_count;
            $obj->connections_count = $connections_count;

            return response()->json($obj, 200);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    //It will send request and remove form suggestions
    public function sendRequest($objId)
    {
        try {
            $suggestion = Suggestion::findOrFail($objId);

            $send_request = new SendRequest();

            $send_request->first_name = $suggestion->first_name;
            $send_request->last_name = $suggestion->last_name;
            $send_request->email = $suggestion->email;

            $send_request->save();

            $suggestion->delete();


        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    //It will withdraw request and put into suggestions
    public function withDrawRequest($objId)
    {
        try {
            $send_request = SendRequest::findOrFail($objId);

            $suggestion = new Suggestion();

            $suggestion->first_name = $send_request->first_name;
            $suggestion->last_name = $send_request->last_name;
            $suggestion->email = $send_request->email;

            $suggestion->save();

            $send_request->delete();

        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    //It will accept request and shift it to connections
    public function acceptRequest($objId)
    {
        try {
            $receive_request = ReceiveRequest::findOrFail($objId);

            $connection = new Connection();

            $connection->first_name = $receive_request->first_name;
            $connection->last_name = $receive_request->last_name;
            $connection->email = $receive_request->email;

            $connection->save();

            $receive_request->delete();

        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    //Remove connection and put it back into suggestion
    public function removeConnection($objId)
    {
        try {
            $connection = Connection::findOrFail($objId);

            $suggestion = new Suggestion();

            $suggestion->first_name = $connection->first_name;
            $suggestion->last_name = $connection->last_name;
            $suggestion->email = $connection->email;

            $suggestion->save();

            $connection->delete();

        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
