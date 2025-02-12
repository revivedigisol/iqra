<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateSmBaseSetupsSeeder extends Seeder
{
    public function run()
    {
        // Data to update or insert
        $data = [
            ['base_group_id' => 1, 'base_setup_name' => 'Male'],
            ['base_group_id' => 1, 'base_setup_name' => 'Female'],
            ['base_group_id' => 1, 'base_setup_name' => 'Others'],
            ['base_group_id' => 2, 'base_setup_name' => 'Islam'],
            ['base_group_id' => 2, 'base_setup_name' => 'Christianity'],
            ['base_group_id' => 2, 'base_setup_name' => 'Others'],
            ['base_group_id' => 3, 'base_setup_name' => 'A+'],
            ['base_group_id' => 3, 'base_setup_name' => 'O+'],
            ['base_group_id' => 3, 'base_setup_name' => 'B+'],
            ['base_group_id' => 3, 'base_setup_name' => 'AB+'],
            ['base_group_id' => 3, 'base_setup_name' => 'A-'],
            ['base_group_id' => 3, 'base_setup_name' => 'O-'],
            ['base_group_id' => 3, 'base_setup_name' => 'B-'],
            ['base_group_id' => 3, 'base_setup_name' => 'AB-'],
        ];

        // Insert or update data
        foreach ($data as $row) {
            DB::table('sm_base_setups')->updateOrInsert(
                ['base_setup_name' => $row['base_setup_name']], // Condition to check existing records
                ['base_group_id' => $row['base_group_id']] // Update values if the record exists
            );
        }
    }
}
