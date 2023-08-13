<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Store data for connections
        DB::table('users')->insert([
            array('name' => 'Sasha Blick', 'email' => 'treutel.oliver@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Marcos Kuhn', 'email' => 'kasey04@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Esmeralda Corwin', 'email' => 'vmcclure@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Sean Bashirian', 'email' => 'camille.welch@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Ayden Schowalter', 'email' => 'heathcote.regan@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Cassie Renner', 'email' => 'rlebsack@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Angelica Oberbrunner', 'email' => 'lilyan.okeefe@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Caden O\'Reilly', 'email' => 'kunde.grayce@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Dedric Hickle', 'email' => 'daniela29@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Demarco Koepp', 'email' => 'nmann@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Leopold Stamm', 'email' => 'virginia19@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Marcellus Champlin', 'email' => 'berdman@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Keven Schulist', 'email' => 'helga91@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Buster Luettgen', 'email' => 'bailee.predovic@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Halie Waelchi', 'email' => 'qrempel@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Isaiah Casper', 'email' => 'bill26@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Dawson Kerluke', 'email' => 'jalyn67@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Tiara Keeling', 'email' => 'josue83@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Al Osinski', 'email' => 'mcormier@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Rosa Johnson', 'email' => 'misael.bernier@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Bettye Williamson', 'email' => 'margaret57@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Jarod Douglas', 'email' => 'jkassulke@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Shayna Beer', 'email' => 'aron02@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Molly Williamson', 'email' => 'marshall.ryan@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Newell Cassin', 'email' => 'dayana20@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Ralph Lindgren', 'email' => 'hobart.hermiston@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Talia Rosenbaum', 'email' => 'luis53@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Courtney Johns', 'email' => 'kariane85@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Eliane Rosenbaum', 'email' => 'nia.nitzsche@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Jayce Kreiger', 'email' => 'wzieme@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Abe Schmitt', 'email' => 'ofelia.von@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Dena Kassulke', 'email' => 'kblick@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Joshua Schmeler', 'email' => 'hodkiewicz.malika@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Lucienne Turcotte', 'email' => 'willie86@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Jazmyn Runolfsdottir', 'email' => 'arch.price@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Terrance Feest', 'email' => 'delphia69@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Jarod Wilkinson', 'email' => 'jamaal04@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Simeon Barrows', 'email' => 'walsh.kobe@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Bradley Block', 'email' => 'murphy.cassin@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Luis Moen', 'email' => 'baumbach.herman@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Clemmie Deckow', 'email' => 'dorian.gislason@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Fae Cormier', 'email' => 'jamal31@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Melany Jacobson', 'email' => 'nstark@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Jabari Schowalter', 'email' => 'tristin29@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Taylor Rowe', 'email' => 'cartwright.koby@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Maurice Gleason', 'email' => 'runolfsson.ethyl@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Jack Conroy', 'email' => 'carole80@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Nia Towne', 'email' => 'carroll.myra@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Carlie Greenholt', 'email' => 'tokeefe@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Dulce Klein', 'email' => 'audrey07@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Brisa Christiansen', 'email' => 'garland.zieme@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Broderick Eichmann', 'email' => 'nsawayn@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Pearlie Rogahn', 'email' => 'harvey.pearline@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Stevie Cremin', 'email' => 'mozell29@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Arvid Nolan', 'email' => 'newton.gleichner@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Genevieve Zulauf', 'email' => 'hirthe.ottilie@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Beulah Leannon', 'email' => 'skye58@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Charlie Murazik', 'email' => 'madelynn89@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Adonis Jaskolski', 'email' => 'dave.huel@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Rosanna Runolfsson', 'email' => 'trevion46@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Susana Mayert', 'email' => 'zlittel@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Melvin Kuhn', 'email' => 'demetrius17@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Silas Cormier', 'email' => 'estanton@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Kiarra Conn', 'email' => 'hintz.shanon@example.org', 'password' => bcrypt(123456789)) ,
            array('name' => 'Jabari Kassulke', 'email' => 'lehner.alessandra@example.net', 'password' => bcrypt(123456789)) ,
            array('name' => 'Sydni Pollich', 'email' => 'rosenbaum.luigi@example.com', 'password' => bcrypt(123456789)) ,
            array('name' => 'Abbigail Bayer', 'email' => 'christiansen.velma@example.org', 'password' => bcrypt(123456789)),
            array('name' => 'Elza Bergstrom', 'email' => 'kihn.rachael@example.net', 'password' => bcrypt(123456789))
        ]);
    }
}
