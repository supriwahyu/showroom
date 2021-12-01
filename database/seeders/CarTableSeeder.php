<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
         'id' => '1',
         'name' => 'user1',
        'price'    => 'Rp. 100.000.000',
        'size'    => 'Large',
        'model'    => 'bmw',
        ]);
        Car::create([
         'id' => '2',
         'name' => 'user2',
        'price'    => 'Rp. 120.000.000',
        'size'    => 'medium',
        'model'    => 'audi',
        ]);
        Car::create([
         'id' => '3',
         'name' => 'user3',
        'price'    => 'Rp. 125.000.000',
        'size'    => 'small',
        'model'    => 'toyota',
        ]);
        Car::create([
         'id' => '4',
         'name' => 'user4',
        'price'    => 'Rp.130.000.000',
        'size'    => 'large',
        'model'    => 'ford',
        ]);
    }
}
