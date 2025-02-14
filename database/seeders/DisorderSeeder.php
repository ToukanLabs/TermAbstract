<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Disorder;

class DisorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disorder::factory()->create([
            'term' => 'Cataract',
            'snomed' => '12345678'
        ]);

        Disorder::factory()->create([
            'term' => 'Glaucoma',
            'snomed' => '234567'
        ]);
    }
}
