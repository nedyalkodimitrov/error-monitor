<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technolooies = [
          ['name' => 'PHP', 'version' => [
              '7.0', '7.1', '7.2', '7.3', '7.4', '8.0','8.1','8.2','8.3'
          ]],
            ['name' => 'Laravel', 'version' => [
              '7', '8', '9', '10', '11'
          ]],
        ];

        foreach ($technolooies as $technology) {
            $technologyModel = \App\Models\Technology::create([
                'name' => $technology['name'],
            ]);

            foreach ($technology['version'] as $version) {
                $technologyModel->versions()->create([
                    'version' => $version,
                ]);
            }
        }
    }
}
