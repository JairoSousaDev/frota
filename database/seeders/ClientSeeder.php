<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name_client' => 'MARCOS',
            'cpf_client' => '08081048618',
            'rg_client' => '635241',
            'phone_client' => '33999518283',
            'email_client' => 'C@C.COM',
            'state_client' => 'MG',
            'city_client' => 'SETUBINHA',
            'district_client' => 'PALMEIRAS',
            'number_client' => '137',
            'address_client'  => 'RUA 01',
            'observation_client'  => 'CLIENTE 01',
        ]);
        
    }
}
