<template>
    <div>
        <section class="content" id="networkConnections">
            <div class="container-fluid">
                <div class="row">
                    <div class='card w-100'>
                        <h6 class="card-header text-success p-3 font-weight-bold">Coding Challenge - Network connections</h6>
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link text-sm active" id="nav-Suggestions-tab" data-toggle="tab" data-target="#nav-Suggestions" type="button" role="tab" aria-controls="nav-Suggestions" aria-selected="true">Suggestions <span class="badge badge-info pt-1 rounded ml-2">{{ suggestions_count }}</span></button>
                                    <button class="nav-link text-sm ml-2" id="nav-Send-Request-tab" data-toggle="tab" data-target="#nav-Send-Request" type="button" role="tab" aria-controls="nav-Send-Request" aria-selected="false">Send Request <span class="badge badge-info pt-1 rounded ml-2">{{ send_requests_count }}</span></button>
                                    <button class="nav-link text-sm ml-2" id="nav-Receive-Request-tab" data-toggle="tab" data-target="#nav-Receive-Request" type="button" role="tab" aria-controls="nav-Receive-Request" aria-selected="false">Receive Request <span class="badge badge-info pt-1 rounded ml-2">{{ receive_requests_count }}</span></button>
                                    <button class="nav-link text-sm ml-2" id="nav-Connections-tab" data-toggle="tab" data-target="#nav-Connections" type="button" role="tab" aria-controls="nav-Connections" aria-selected="false">Connections <span class="badge badge-info pt-1 rounded ml-2">{{ connections_count }}</span></button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-Suggestions" role="tabpanel" aria-labelledby="nav-Suggestions-tab">
                                    <div v-for="obj in data.suggestions" :key="obj.id" class="row mt-3 p-2 rounded shadow">
                                        <div class="col-11">
                                            <h6 class="pt-3">{{ obj.first_name }} {{ obj.last_name }} - {{ obj.email }}</h6>
                                        </div>
                                        <button class="btn btn-info" @click="sendRequest(obj.id)">Connect</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-Send-Request" role="tabpanel" aria-labelledby="nav-Send-Request-tab">
                                    <div v-for="obj in data.send_requests" :key="obj.id" class="row mt-3 p-2 rounded shadow">
                                        <div class="col-10">
                                            <h6 class="pt-3">{{ obj.first_name }} {{ obj.last_name }} - {{ obj.email }}</h6>
                                        </div>
                                        <button class="btn btn-danger" @click="withdrawRequest(obj.id)">Withdraw Request</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-Receive-Request" role="tabpanel" aria-labelledby="nav-Receive-Request-tab">
                                    <div v-for="obj in data.receive_requests" :key="obj.id" class="row mt-3 p-2 rounded shadow">
                                        <div class="col-11">
                                            <h6 class="pt-3">{{ obj.first_name }} {{ obj.last_name }} - {{ obj.email }}</h6>
                                        </div>
                                        <button class="btn btn-info" @click="acceptRequest(obj.id)">Accept</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-Connections" role="tabpanel" aria-labelledby="nav-Connections-tab">
                                   <div v-for="obj in data.connections" :key="obj.id" class="row mt-3 p-2 rounded shadow">
                                        <div class="col-7">
                                            <h6 class="pt-3">{{ obj.first_name }} {{ obj.last_name }} - {{ obj.email }}</h6>
                                            <ul :class="[{'d-none': !obj.is_common_connect}, {'d-block' : obj.is_common_connect} ]">
                                                <li v-for="connection in obj.common_connections" :key="connection.email">
                                                    {{ connection.first_name }} {{ connection.last_name }} - {{ connection.email }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-primary mr-2" @click="obj.is_common_connect = !obj.is_common_connect"> Connection is {{ obj.common_connections ? 'Common (' + (obj.common_connections).length + ')' : 'Not Common' }}</button>
                                            <button class="btn btn-danger" @click="removeConnection(obj.id)">Remove Connection</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right pr-5 pb-4">
                            <button class="btn btn-primary" @click="loadMore">Load More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    name: "network-connections",
    props: [],
    data() {
        return {
            data: { suggestions: [], send_requests: [], receive_requests: [], connections: [] },
            suggestions_count: 0,
            send_requests_count: 0,
            receive_requests_count: 0,
            connections_count: 0,
            data_loading: false,
            is_common_connect: false,
            recordsPerPage: 10,
            loadedRecords: 0,
        }
    },
    methods: {
        getData(status) {
            this.data_loading = true;
            if (status) {
                this.recordsPerPage = 10;
                this.loadedRecords = 0;
            }
            axios({
                url: `/get/data/${this.loadedRecords}/${this.recordsPerPage}`,
                method: 'GET',
            })
                .then((response) => {
                this.data_loading = false;
                if (status) {
                    this.data.suggestions = response.data.suggestions;
                    this.data.send_requests = response.data.send_requests;
                    this.data.receive_requests = response.data.receive_requests;
                    this.data.connections = response.data.connections;
                }
                else {
                    this.data.suggestions.push(...response.data.suggestions);
                    this.data.send_requests.push(...response.data.send_requests);
                    this.data.receive_requests.push(...response.data.receive_requests);
                    this.data.connections.push(...response.data.connections);
                }
                this.suggestions_count = response.data.suggestions_count;
                this.send_requests_count = response.data.send_requests_count;
                this.receive_requests_count = response.data.receive_requests_count;
                this.connections_count = response.data.connections_count;
            })
            .catch((error) => {
            this.errorToast(error.response.error);
            });
        },
        loadMore() {
            this.loadedRecords += this.recordsPerPage;
            this.getData(false);
        },
        toggleCommonConnections(user) {
            console.log(user)
            user.is_common_connect = !user.is_common_connect;
        },
        sendRequest(objId) {
            axios({
                url: `/send/request/${objId}`,
                method: 'GET',
            })
            .then(response => {
                this.data_loading = false
                this.getData(true)
            })
            .catch(error => {
                this.errorToast(error.response.error)
            })
        },
        withdrawRequest(objId) {
            axios({
                url: `/with-draw/request/${objId}`,
                method: 'GET',
            })
            .then(response => {
                this.data_loading = false
                this.getData(true)
            })
            .catch(error => {
                this.errorToast(error.response.error)
            })
        },
        acceptRequest(objId) {
            axios({
                url: `/accept/request/${objId}`,
                method: 'GET',
            })
            .then(response => {
                this.data_loading = false
                this.getData(true)
            })
            .catch(error => {
                this.errorToast(error.response.error)
            })
        },
        removeConnection(objId) {
            axios({
                url: `/remove/connection/${objId}`,
                method: 'GET',
            })
            .then(response => {
                this.data_loading = false
                this.getData(true)
            })
            .catch(error => {
                this.errorToast(error.response.error)
            })
        }
    },
    mounted() {
        // It will get the data for component
        this.getData(false);
    }
}
</script>

<style scoped>
/* Your styles here */
</style>
