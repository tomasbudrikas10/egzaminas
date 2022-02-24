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
        
    }
}
