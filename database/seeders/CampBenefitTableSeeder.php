<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportunity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Winal Project Certificate'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Courses Videos'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Courses Videos'
            ],
        ];

        foreach ($camps as $key => $camp) {
            CampBenefit::create($camp);
        }
    }
}
