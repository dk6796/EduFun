<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::factory()->createMany([
            [
                'CategoryID' => 1,
                'SubjectName' => 'Human and Computer Interaction'
            ],
            [
                'CategoryID' => 1,
                'SubjectName' => 'User Experience'
            ],
            [
                'CategoryID' => 1,
                'SubjectName' => 'User Experience for Digital Immersive Technology'
            ],
            [
                'CategoryID' => 2,
                'SubjectName' => 'Pattern Software Design'
            ],
            [
                'CategoryID' => 2,
                'SubjectName' => 'Agile Software 
                Development'
            ],
            [
                'CategoryID' => 2,
                'SubjectName' => 'Code Reengineering'
            ],
        ]);
    }
}
