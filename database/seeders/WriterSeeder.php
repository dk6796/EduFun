<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Writer::factory()->createMany([
            [
                'WriterDesc' => 'Interactive Multimedia Specialist',
                'WriterProfPict' => 'https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg'
            ],
            [
                'WriterDesc' => 'Software Engineering Specialist',
                'WriterProfPict' => 'https://i.natgeofe.com/n/4f5aaece-3300-41a4-b2a8-ed2708a0a27c/domestic-dog_thumb_square.jpg'
            ],
            [
                'WriterDesc' => 'Interactive Multimedia Specialist',
                'WriterProfPict' => 'https://www.otterspecialistgroup.org/osg-newsite/wp-content/uploads/2017/04/ThinkstockPhotos-827261360.jpg'
            ]
        ]);
    }
}
