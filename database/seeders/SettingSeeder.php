<?php

namespace Database\Seeders;

use App\Models\SetingModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = [
            [
                'start_delay_minning' => 600,
                'finish_delay_minning' => 700,
                'grouping' => 1,
                'start_delay_blash' => 1200,
                'finish_delay_blash' => 1300,
                'max_group_blash' => 50,
                'start_delay_group_blash' => 20,
                'finish_delay_group_blash' => 30,
                'created_by' => 'Admin 1'
            ]
        ];

        foreach ($setting as $key => $value) {
            SetingModel::create($value);
        }
    }
}
