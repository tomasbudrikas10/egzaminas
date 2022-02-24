<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autoservice;
use App\Models\Specialization;
use App\Models\Expert;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Specialization::create(['name' => 'Service Technician']);
        Specialization::create(['name' => 'Diagnostic Technician']);
        Specialization::create(['name' => 'Brake and Transmission Technician']);
        Specialization::create(['name' => 'Body Repair Technician']);
        Specialization::create(['name' => 'Vehicle Inspector']);
        
        Autoservice::create(['name' => 'Autofortas', 'location' => '9-ojo Forto g. 63, LT-48101 Kaunas']);
        Autoservice::create(['name' => 'AKSTĖ-servisas', 'location' => 'Taikos pr. 139A, LT-51131 Kaunas']);
        Autoservice::create(['name' => 'Šasi', 'location' => 'Paliūniškio g. 13, LT-35114 Panevėžys']);
        Autoservice::create(['name' => 'Melga', 'location' => 'Savanorių pr. 151A, LT-03150 Vilnius']);
        Autoservice::create(['name' => 'Ausegra', 'location' => 'Gelvonų g. 2, LT-07149 Vilnius']);

        Expert::create(['name' => 'Jonas', 'lastname' => 'Jonaitis', 'specialization_id' => '1', 'autoservice_id' => '1', 'city' => 'Klaipėda']);
        Expert::create(['name' => 'Petras', 'lastname' => 'Petrauskis', 'specialization_id' => '2', 'autoservice_id' => '2', 'city' => 'Klaipėda']);
        Expert::create(['name' => 'Bronius', 'lastname' => 'Bronskius', 'specialization_id' => '3', 'autoservice_id' => '3', 'city' => 'Kaunas']);
        Expert::create(['name' => 'Darius', 'lastname' => 'Dariauskas', 'specialization_id' => '4', 'autoservice_id' => '4', 'city' => 'Vilnius']);
        Expert::create(['name' => 'Lukas', 'lastname' => 'Lukauskas', 'specialization_id' => '5', 'autoservice_id' => '5', 'city' => 'Klaipėda']);
        Expert::create(['name' => 'Andrius', 'lastname' => 'Andriauskas', 'specialization_id' => '2', 'autoservice_id' => '3', 'city' => 'Klaipėda']);
        Expert::create(['name' => 'Orestas', 'lastname' => 'Orestauskas', 'specialization_id' => '3', 'autoservice_id' => '2', 'city' => 'Alytus']);
        Expert::create(['name' => 'Kasparas', 'lastname' => 'Kasparauskas', 'specialization_id' => '4', 'autoservice_id' => '2', 'city' => 'Telšiai']);
        Expert::create(['name' => 'Deividas', 'lastname' => 'Deividauskas', 'specialization_id' => '5', 'autoservice_id' => '1', 'city' => 'Plungė']);
        Expert::create(['name' => 'Ignas', 'lastname' => 'Ignauskas', 'specialization_id' => '1', 'autoservice_id' => '5', 'city' => 'Ignalina']);


    }
}
