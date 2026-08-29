<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeedr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            'model_vehicle' => 'COROLA',
            'brand_vehicle' => 'TOYOTA',
            'plate_vehicle' => 'QXZ5J30',
            'year_vehicle' => '2022',
            'chassi_vehicle' => '9C2JC6S32D51',
            'crv_vehicle' => '223665847',
            'renavan_vehicle'  => '0023654128',
            'color_vehicle' => 'AZUL',
            'status_vehicle' => true,
            'observation_vehicle' => 'VEÍCULO 0KM',
        ]);

        Vehicle::create([
            'model_vehicle' => 'CIVIC LSX',
            'brand_vehicle' => 'HINDA',
            'plate_vehicle' => 'SHS6G44',
            'year_vehicle' => '2022',
            'chassi_vehicle' => 'O98JC6S32D66',
            'crv_vehicle' => '7752148652',
            'renavan_vehicle'  => '0055214489',
            'color_vehicle' => 'PRETO',
            'status_vehicle' => true,
            'observation_vehicle' => 'VEÍCULO SEGUNDA MÃO',
        ]);
    }
}
