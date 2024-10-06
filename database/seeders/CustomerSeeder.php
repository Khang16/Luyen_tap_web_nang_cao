<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->count(20)->create();
        // for($i=0;$i<10;$i++){
        //     Customer::create([
        //         'fullname' => 'asdasd'.$i,
        //         'email' => 'abcd@gmail'.$i.'.com',
        //     ]);
        // }
        
    }
}
