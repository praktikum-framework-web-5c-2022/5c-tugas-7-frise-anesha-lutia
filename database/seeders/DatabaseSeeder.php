<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use App\Models\Ukm;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->seed(123);

        for($i=0;$i<10;$i++){
            Mahasiswa::create([
                'npm' => $faker->unique()->numerify('20###########'),
                'nama' => $faker->firstName." ".$faker->lastName,
            ]);
        }

        Ukm::create([
            'kode' => 'TI001',
            'nama_ukm' => 'Fakustik'
        ]);
        Ukm::create([
            'kode' => 'TI002',
            'nama_ukm' => 'Unit Kegiatan Olahraga',
        ]);
        Ukm::create([
            'kode' => 'TI003',
            'nama_ukm' => 'Pramuka',
        ]);
        Ukm::create([
            'kode' => 'TI004',
            'nama_ukm' => 'Parasika',
        ]);
        Ukm::create([
            'kode' => 'TI005',
            'nama_ukm' => 'Fokus',
        ]);
    }
}
