<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorCategory;

class VendorCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Category_name' => 'Planning','Category_description' => '',],
            ['Category_name' => 'Photography and Video','Category_description' => '',],
            ['Category_name' => 'Ceremony','Category_description' => '',],
            ['Category_name' => 'Gift list','Category_description' => '',],
            ['Category_name' => 'Reception','Category_description' => '',],
            ['Category_name' => 'Music','Category_description' => '',],
            ['Category_name' => 'Bride accessories','Category_description' => '',],
            ['Category_name' => 'Other','Category_description' => '',],
            ['Category_name' => 'Wedding invitations','Category_description' => '',],
            ['Category_name' => 'Health and beauty','Category_description' => '',],
            ['Category_name' => 'Flowers and Decoration','Category_description' => '',],
            ['Category_name' => 'Legal processes','Category_description' => '',],
            ['Category_name' => 'Jewellery','Category_description' => '',],
            ['Category_name' => 'Honeymoon','Category_description' => '',],
            ['Category_name' => 'Transport','Category_description' => '',],
            ['Category_name' => 'Groom accessories','Category_description' => '',],
            ['Category_name' => 'Wedding favours','Category_description' => '',],
            ['Category_name' => 'Studio','Category_description' => '',],
        ];


        VendorCategory::insert($data);


    }
}
