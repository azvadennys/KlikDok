<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animasi = [
            [
                'nama' => 'Demodikosis',
                'video_animasi' => 'images/animasi/P001.mp4',
                'id_penyakit' => ['P001'],
                'narator' => ''
            ],
            [
                'nama' => 'Parainfluenza',
                'video_animasi' => 'images/animasi/P002.mp4',
                'id_penyakit' => ['P002'],
                'narator' => ''
            ],
            [
                'nama' => 'Ancylostomiasis',
                'video_animasi' => 'images/animasi/P003.mp4',
                'id_penyakit' => ['P003'],
                'narator' => ''
            ],
            [
                'nama' => 'Otitis',
                'video_animasi' => 'images/animasi/P004.mp4',
                'id_penyakit' => ['P004'],
                'narator' => ''
            ],
            [
                'nama' => 'Canine Distemper',
                'video_animasi' => 'images/animasi/P005.mp4',
                'id_penyakit' => ['P005'],
                'narator' => ''
            ],

            [
                'nama' => 'Rabies',
                'video_animasi' => 'images/animasi/P006.mp4',
                'id_penyakit' => ['P006'],
                'narator' => ''
            ],
            [
                'nama' => 'LUTD (Lower Urinary Tract Disease)',
                'video_animasi' => 'images/animasi/P007.mp4',
                'id_penyakit' => ['P007'],
                'narator' => ''
            ],
            [
                'nama' => 'Leptospirosis',
                'video_animasi' => 'images/animasi/P008.mp4',
                'id_penyakit' => ['P008'],
                'narator' => ''
            ],
            [
                'nama' => 'Parvovirus',
                'video_animasi' => 'images/animasi/P009.mp4',
                'id_penyakit' => ['P009'],
                'narator' => ''
            ],
            [
                'nama' => 'Hepatitis (Infectious Canine Hepatitis)',
                'video_animasi' => 'images/animasi/P010.mp4',
                'id_penyakit' => ['P010'],
                'narator' => ''
            ],
        ];

        // Encode id_penyakit menjadi JSON sebelum menyimpan ke database
        foreach ($animasi as $index => $item) {
            $animasi[$index]['id_penyakit'] = json_encode($item['id_penyakit']);
        }

        // Simpan data animasi ke dalam tabel
        DB::table('animasi')->insert($animasi);
    }
}
