<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamaPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penyakit = [
            [
                'kode_penyakit' => 'P001',
                'nama_penyakit' => 'Demodikosis',
                'deskripsi' => 'Demodikosis, juga dikenal sebagai demodectic mange atau kudis folikular, adalah penyakit kulit yang disebabkan oleh infestasi tungau mikroskopis dari genus Demodex. Tungau ini biasanya hidup di dalam folikel rambut dan kelenjar sebaceous anjing sehat, tetapi tidak menimbulkan masalah jika populasinya terkendali. Ketika jumlahnya meningkat secara tidak normal, dapat menyebabkan peradangan kulit parah. Kondisi ini sering terkait dengan sistem kekebalan tubuh yang melemah, baik karena faktor genetik, penyakit lain, stres, atau penggunaan obat imunosupresif. Anjing muda atau yang imunitasnya belum berkembang sempurna lebih rentan terkena demodikosis.',
                'foto_penyakit' => 'images/penyakit/P001.jpg',
            ],

            [
                'kode_penyakit' => 'P002',
                'nama_penyakit' => 'Parainfluenza',
                'deskripsi' => 'Parainfluenza pada anjing adalah penyakit infeksi saluran pernapasan yang disebabkan oleh Canine Parainfluenza Virus. Virus ini merupakan salah satu penyebab utama Kennel Cough (batuk kandang), penyakit pernapasan menular yang sering menyerang anjing di lingkungan padat seperti penampungan, kandang komersial, atau acara kumpul anjing. Virus menyebar melalui droplet udara ketika anjing terinfeksi batuk/bersin, serta kontak langsung dengan cairan hidung. Penyakit ini lebih parah pada anak anjing atau anjing dengan kekebalan lemah.',
                'foto_penyakit' => 'images/penyakit/P002.jpg',
            ],

            [
                'kode_penyakit' => 'P003',
                'nama_penyakit' => 'Ancylostomiasis',
                'deskripsi' => 'Ancylostomiasis pada anjing adalah infeksi yang disebabkan oleh cacing tambang (Ancylostoma spp.) yang hidup di usus kecil. Cacing ini menempel pada dinding usus dan menghisap darah inangnya, menyebabkan kerusakan jaringan serta anemia parah jika infeksinya berat. Penularan dapat melalui penetrasi kulit, konsumsi larva terkontaminasi, atau transmisi melalui ASI induk ke anak anjing. Lingkungan lembab dan tidak bersih meningkatkan risiko penyebaran.',
                'foto_penyakit' => 'images/penyakit/P003.jpg',
            ],

            [
                'kode_penyakit' => 'P004',
                'nama_penyakit' => 'Otitis',
                'deskripsi' => 'Otitis pada anjing adalah peradangan atau infeksi pada telinga luar, tengah, atau dalam. Umumnya terjadi pada anjing bertelinga terkulai atau sering terkena air. Penyebabnya termasuk infeksi bakteri, jamur, parasit, atau alergi. Jika tidak ditangani, dapat menimbulkan komplikasi serius seperti kerusakan permanen pada telinga dan gangguan pendengaran.',
                'foto_penyakit' => 'images/penyakit/P004.jpg',
            ],

            [
                'kode_penyakit' => 'P005',
                'nama_penyakit' => 'Canine Distemper',
                'deskripsi' => 'Canine Distemper adalah penyakit viral sangat menular yang menyerang sistem pernapasan, pencernaan, dan saraf. Disebabkan oleh Canine Distemper Virus (CDV) dari famili Paramyxoviridae. Penularan melalui droplet udara atau kontak langsung dengan cairan tubuh anjing terinfeksi. Distemper sangat mematikan, terutama pada anak anjing atau anjing yang tidak divaksinasi.',
                'foto_penyakit' => 'images/penyakit/P005.jpg',
            ],

            [
                'kode_penyakit' => 'P006',
                'nama_penyakit' => 'Rabies',
                'deskripsi' => 'Rabies adalah penyakit viral akut yang sangat mematikan, menyerang sistem saraf pusat anjing dan mamalia lain termasuk manusia. Disebabkan oleh Rabies virus (genus Lyssavirus). Penularan biasanya melalui gigitan hewan terinfeksi. Rabies memiliki dua bentuk klinis: furious rabies (agresif, hiperaktif) dan dumb rabies (kelumpuhan progresif).',
                'foto_penyakit' => 'images/penyakit/P006.jpg',
            ],

            [
                'kode_penyakit' => 'P007',
                'nama_penyakit' => 'LUTD (Lower Urinary Tract Disease)',
                'deskripsi' => 'LUTD adalah istilah umum untuk berbagai gangguan pada saluran kemih bawah anjing, termasuk kandung kemih dan uretra. Penyebabnya bisa infeksi bakteri, batu kemih, cedera, atau masalah metabolik. LUTD dapat bersifat akut atau kronis, dari infeksi ringan hingga obstruksi uretra serius. Faktor risiko meliputi usia, jenis kelamin, pola makan, dan riwayat kesehatan.',
                'foto_penyakit' => 'images/penyakit/P007.jpg',
            ],

            [
                'kode_penyakit' => 'P008',
                'nama_penyakit' => 'Leptospirosis',
                'deskripsi' => 'Leptospirosis adalah infeksi bakteri zoonosis yang disebabkan oleh Leptospira spp. Bakteri spiral ini hidup di air/tanah terkontaminasi urin hewan terinfeksi (terutama tikus). Infeksi terjadi melalui kontak langsung dengan urin atau jaringan hewan, maupun tidak langsung melalui lingkungan. Leptospirosis dapat menyerang hati, ginjal, paru-paru, hingga sistem saraf pusat.',
                'foto_penyakit' => 'images/penyakit/P008.jpg',
            ],

            [
                'kode_penyakit' => 'P009',
                'nama_penyakit' => 'Parvovirus',
                'deskripsi' => 'Parvovirus anjing adalah penyakit viral sangat menular yang menyerang sistem pencernaan dan kadang jantung. Disebabkan oleh Canine Parvovirus type 2 (CPV-2). Virus menyebar melalui kontak langsung dengan anjing terinfeksi atau lingkungan terkontaminasi. CPV-2 sangat tahan lama di lingkungan, sering menyebabkan kerusakan parah pada usus, dehidrasi, malnutrisi, serta infeksi sekunder.',
                'foto_penyakit' => 'images/penyakit/P009.jpg',
            ],

            [
                'kode_penyakit' => 'P010',
                'nama_penyakit' => 'Hepatitis (Infectious Canine Hepatitis)',
                'deskripsi' => 'Hepatitis pada anjing biasanya disebabkan oleh Canine Adenovirus type 1 (CAV-1). Penyakit ini menyerang hati, ginjal, dan selaput lendir mata, bersifat akut atau kronis. Virus menyebar melalui air liur, urin, dan feses anjing terinfeksi. Komplikasi termasuk kerusakan hati parah dan kondisi “blue eye” (perubahan warna mata akibat edema kornea). Vaksinasi adalah pencegahan utama.',
                'foto_penyakit' => 'images/penyakit/P010.jpg',
            ],
        ];

        DB::table('penyakit')->insert($penyakit);
    }
}
