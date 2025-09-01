<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gejala = [
            [
                'kode_gejala' => 'G01',
                'nama_gejala' => 'Gatal-gatal',
                'deskripsi_gejala' => 'Kondisi di mana anjing terus-menerus menggaruk, menjilat, atau menggigit area tubuh tertentu. Gatal yang intens dapat menyebabkan iritasi kulit dan infeksi sekunder apabila digaruk berlebihan.',
                'foto_gejala' => 'images/gejalas/G01.jpg',
                'kategori' => 'Kulit & Bulu'
            ],

            [
                'kode_gejala' => 'G02',
                'nama_gejala' => 'Lesi Kulit yang Berkerak',
                'deskripsi_gejala' => 'Luka atau area kulit yang mengalami pengerasan dan penebalan. Lesi ini dapat berwarna kemerahan atau keabu-abuan dan sering kali disertai dengan peradangan atau nanah.',
                'foto_gejala' => 'images/gejalas/G02.jpg',
                'kategori' => 'Kulit & Bulu'
            ],

            [
                'kode_gejala' => 'G03',
                'nama_gejala' => 'Kebotakan yang Menyebar',
                'deskripsi_gejala' => 'Kehilangan bulu yang terjadi pada area tertentu atau menyebar ke seluruh tubuh. Kondisi ini sering kali menunjukkan adanya masalah dermatologis atau infestasi parasit.',
                'foto_gejala' => 'images/gejalas/G03.jpg',
                'kategori' => 'Kulit & Bulu'
            ],

            [
                'kode_gejala' => 'G04',
                'nama_gejala' => 'Penebalan Kulit',
                'deskripsi_gejala' => 'Kulit yang menjadi lebih tebal dan kaku akibat peradangan kronis, infeksi, atau iritasi yang berkepanjangan. Biasanya disertai dengan perubahan warna dan tekstur kulit.',
                'foto_gejala' => 'images/gejalas/G04.jpg',
                'kategori' => 'Kulit & Bulu'
            ],

            [
                'kode_gejala' => 'G05',
                'nama_gejala' => 'Infeksi Akibat Luka',
                'deskripsi_gejala' => 'Luka yang terinfeksi oleh bakteri atau mikroorganisme lainnya. Gejala ini sering menyebabkan pembengkakan, keluarnya nanah, dan bau tidak sedap dari area yang terluka.',
                'foto_gejala' => 'images/gejalas/G05.jpg',
                'kategori' => 'Kulit & Bulu'
            ],

            [
                'kode_gejala' => 'G06',
                'nama_gejala' => 'Batuk Kering',
                'deskripsi_gejala' => 'Batuk keras yang biasanya tidak disertai dengan keluarnya lendir. Kondisi ini dapat mengindikasikan infeksi saluran pernapasan atau iritasi pada trakea.',
                'foto_gejala' => 'images/gejalas/G06.jpg',
                'kategori' => 'Pernapasan'
            ],

            [
                'kode_gejala' => 'G07',
                'nama_gejala' => 'Demam',
                'deskripsi_gejala' => 'Peningkatan suhu tubuh yang biasanya diakibatkan oleh infeksi atau peradangan. Anjing yang demam dapat menunjukkan gejala seperti lemas, menghindari aktivitas, dan nafsu makan menurun.',
                'foto_gejala' => 'images/gejalas/G07.jpg',
                'kategori' => 'Sistem Umum / Metabolik'
            ],

            [
                'kode_gejala' => 'G08',
                'nama_gejala' => 'Kelelahan atau Lemas',
                'deskripsi_gejala' => 'Kondisi di mana anjing tampak tidak energik, malas bergerak, dan lebih sering tidur dari biasanya. Hal ini dapat disebabkan oleh berbagai penyakit atau masalah metabolik.',
                'foto_gejala' => 'images/gejalas/G08.jpg',
                'kategori' => 'Sistem Umum / Metabolik'
            ],

            [
                'kode_gejala' => 'G09',
                'nama_gejala' => 'Hidung Berlendir',
                'deskripsi_gejala' => 'Sekresi cairan dari hidung yang dapat berupa lendir encer atau kental. Biasanya terkait dengan infeksi pernapasan atau alergi.',
                'foto_gejala' => 'images/gejalas/G09.jpg',
                'kategori' => 'Pernapasan'
            ],

            [
                'kode_gejala' => 'G10',
                'nama_gejala' => 'Nafsu Makan Menurun',
                'deskripsi_gejala' => 'Penolakan terhadap makanan atau penurunan jumlah makanan yang dikonsumsi. Kondisi ini dapat mengindikasikan masalah pencernaan, infeksi, atau gangguan metabolik.',
                'foto_gejala' => 'images/gejalas/G10.jpg',
                'kategori' => 'Pencernaan'
            ],

            [
                'kode_gejala' => 'G11',
                'nama_gejala' => 'Diare Berdarah',
                'deskripsi_gejala' => 'Buang air besar yang disertai dengan darah, menunjukkan adanya peradangan atau kerusakan pada saluran pencernaan. Dapat menyebabkan dehidrasi berat jika tidak ditangani.',
                'foto_gejala' => 'images/gejalas/G11.jpg',
                'kategori' => 'Pencernaan'
            ],

            [
                'kode_gejala' => 'G12',
                'nama_gejala' => 'Gusi Pucat',
                'deskripsi_gejala' => 'Perubahan warna gusi menjadi lebih pucat atau putih, yang sering kali menandakan anemia atau gangguan sirkulasi darah.',
                'foto_gejala' => 'images/gejalas/G12.jpg',
                'kategori' => 'Sistem Umum / Metabolik'
            ],

            [
                'kode_gejala' => 'G13',
                'nama_gejala' => 'Penurunan Berat Badan yang Cepat',
                'deskripsi_gejala' => 'Kehilangan berat badan yang terjadi secara drastis dalam waktu singkat, sering kali disebabkan oleh masalah penyerapan nutrisi atau penyakit metabolik.',
                'foto_gejala' => 'images/gejalas/G13.jpg',
                'kategori' => 'Sistem Umum / Metabolik'
            ],

            [
                'kode_gejala' => 'G14',
                'nama_gejala' => 'Gatal di Area Perut',
                'deskripsi_gejala' => 'Rasa gatal yang intens pada perut yang menyebabkan anjing sering menggaruk atau menjilati area tersebut. Hal ini dapat mengindikasikan alergi, parasit, atau infeksi kulit.',
                'foto_gejala' => 'images/gejalas/G14.jpg',
                'kategori' => 'Kulit & Bulu'
            ],

            [
                'kode_gejala' => 'G15',
                'nama_gejala' => 'Keluar Cairan dari Telinga',
                'deskripsi_gejala' => 'Pengeluaran cairan dari telinga yang dapat berupa nanah, cairan bening, atau lendir kental. Biasanya disertai dengan bau tidak sedap dan iritasi.',
                'foto_gejala' => 'images/gejalas/G15.jpg',
                'kategori' => 'Mata & Telinga'
            ],

            [
                'kode_gejala' => 'G16',
                'nama_gejala' => 'Bau Tidak Sedap dari Telinga',
                'deskripsi_gejala' => 'Aroma yang tidak menyenangkan dari telinga, sering kali diakibatkan oleh infeksi bakteri atau jamur.',
                'foto_gejala' => 'images/gejalas/G16.jpg',
                'kategori' => 'Mata & Telinga'
            ],

            [
                'kode_gejala' => 'G17',
                'nama_gejala' => 'Kepala Sering Digelengkan',
                'deskripsi_gejala' => 'Gerakan menggoyangkan kepala berulang-ulang yang menunjukkan ketidaknyamanan pada telinga, biasanya disebabkan oleh infeksi atau iritasi.',
                'foto_gejala' => 'images/gejalas/G17.jpg',
                'kategori' => 'Mata & Telinga'
            ],

            [
                'kode_gejala' => 'G18',
                'nama_gejala' => 'Gatal pada Telinga',
                'deskripsi_gejala' => 'Perasaan gatal yang menyebabkan anjing terus menggaruk atau menggosokkan telinganya pada benda.',
                'foto_gejala' => 'images/gejalas/G18.jpg',
                'kategori' => 'Mata & Telinga'
            ],

            [
                'kode_gejala' => 'G19',
                'nama_gejala' => 'Bengkak atau Kemerahan pada Telinga',
                'deskripsi_gejala' => 'Pembengkakan atau perubahan warna pada telinga yang menunjukkan adanya peradangan atau infeksi.',
                'foto_gejala' => 'images/gejalas/G19.jpg',
                'kategori' => 'Mata & Telinga'
            ],

            [
                'kode_gejala' => 'G20',
                'nama_gejala' => 'Mata Merah',
                'deskripsi_gejala' => 'Peradangan atau iritasi pada mata yang menyebabkan warna putih mata berubah menjadi merah.',
                'foto_gejala' => 'images/gejalas/G20.jpg',
                'kategori' => 'Mata & Telinga'
            ],

            [
                'kode_gejala' => 'G21',
                'nama_gejala' => 'Kejang',
                'deskripsi_gejala' => 'Gerakan tubuh yang tidak terkontrol akibat gangguan sistem saraf. Kejang dapat berlangsung beberapa detik hingga menit.',
                'foto_gejala' => 'images/gejalas/G21.jpg',
                'kategori' => 'Perilaku & Saraf'
            ],

            [
                'kode_gejala' => 'G22',
                'nama_gejala' => 'Kesulitan Bergerak',
                'deskripsi_gejala' => 'Gangguan dalam melakukan gerakan normal seperti berjalan, berdiri, atau mengangkat anggota tubuh.',
                'foto_gejala' => 'images/gejalas/G22.jpg',
                'kategori' => 'Perilaku & Saraf'
            ],

            [
                'kode_gejala' => 'G23',
                'nama_gejala' => 'Muntah-Muntah',
                'deskripsi_gejala' => 'Pengeluaran isi perut secara paksa melalui mulut. Dapat disebabkan oleh masalah pencernaan, infeksi, atau keracunan.',
                'foto_gejala' => 'images/gejalas/G23.jpg',
                'kategori' => 'Pencernaan'
            ],

            [
                'kode_gejala' => 'G24',
                'nama_gejala' => 'Agresif',
                'deskripsi_gejala' => 'Perubahan perilaku yang ditandai dengan sifat galak, menggigit, atau menyerang tanpa alasan yang jelas.',
                'foto_gejala' => 'images/gejalas/G24.jpg',
                'kategori' => 'Perilaku & Saraf'
            ],

            [
                'kode_gejala' => 'G25',
                'nama_gejala' => 'Hipersalivasi',
                'deskripsi_gejala' => 'Produksi air liur yang berlebihan, sering kali menetes dari mulut secara terus-menerus.',
                'foto_gejala' => 'images/gejalas/G25.jpg',
                'kategori' => 'Pencernaan'
            ],

            [
                'kode_gejala' => 'G26',
                'nama_gejala' => 'Kesulitan Menelan',
                'deskripsi_gejala' => 'Ketidakmampuan atau kesulitan dalam menelan makanan atau air.',
                'foto_gejala' => 'images/gejalas/G26.jpg',
                'kategori' => 'Pencernaan'
            ],

            [
                'kode_gejala' => 'G27',
                'nama_gejala' => 'Perubahan Perilaku',
                'deskripsi_gejala' => 'Perubahan pola perilaku yang mencolok seperti kebingungan, ketakutan berlebihan, atau apatis.',
                'foto_gejala' => 'images/gejalas/G27.jpg',
                'kategori' => 'Perilaku & Saraf'
            ],

            [
                'kode_gejala' => 'G28',
                'nama_gejala' => 'Susah Kencing',
                'deskripsi_gejala' => 'Kesulitan dalam buang air kecil yang dapat mengindikasikan infeksi, penyumbatan, atau masalah pada saluran kemih.',
                'foto_gejala' => 'images/gejalas/G28.jpg',
                'kategori' => 'Urin & Ginjal'
            ],

            [
                'kode_gejala' => 'G29',
                'nama_gejala' => 'Perut Mengeras',
                'deskripsi_gejala' => 'Kondisi perut yang terasa kaku dan membesar. Hal ini bisa mengindikasikan adanya masalah serius seperti peradangan atau penyumbatan.',
                'foto_gejala' => 'images/gejalas/G29.jpg',
                'kategori' => 'Pencernaan'
            ],

            [
                'kode_gejala' => 'G30',
                'nama_gejala' => 'Adanya Darah dalam Urin',
                'deskripsi_gejala' => 'Urin yang bercampur dengan darah yang menunjukkan adanya kerusakan atau iritasi pada saluran kemih.',
                'foto_gejala' => 'images/gejalas/G30.jpg',
                'kategori' => 'Urin & Ginjal'
            ],

            [
                'kode_gejala' => 'G31',
                'nama_gejala' => 'Jaundice',
                'deskripsi_gejala' => 'Perubahan warna kulit, gusi, atau mata menjadi kekuningan akibat masalah fungsi hati atau hemolisis.',
                'foto_gejala' => 'images/gejalas/G31.jpg',
                'kategori' => 'Sistem Umum / Metabolik'
            ],

            [
                'kode_gejala' => 'G32',
                'nama_gejala' => 'Urinasi yang Berlebihan',
                'deskripsi_gejala' => 'Buang air kecil yang lebih sering dari biasanya, sering kali disebabkan oleh masalah metabolik atau infeksi.',
                'foto_gejala' => 'images/gejalas/G32.jpg',
                'kategori' => 'Urin & Ginjal'
            ],

            [
                'kode_gejala' => 'G33',
                'nama_gejala' => 'Dehidrasi Berat',
                'deskripsi_gejala' => 'Kekurangan cairan tubuh yang menyebabkan mulut kering, kulit tidak elastis, dan mata cekung.',
                'foto_gejala' => 'images/gejalas/G33.jpg',
                'kategori' => 'Sistem Umum / Metabolik'
            ],

            [
                'kode_gejala' => 'G34',
                'nama_gejala' => 'Blue Eye',
                'deskripsi_gejala' => 'Perubahan warna mata menjadi biru akibat edema kornea atau reaksi imunologis.',
                'foto_gejala' => 'images/gejalas/G34.jpg',
                'kategori' => 'Mata & Telinga'
            ],

            [
                'kode_gejala' => 'G35',
                'nama_gejala' => 'Perilaku Tidak Normal Saat Buang Air Kecil',
                'deskripsi_gejala' => 'Anjing menunjukkan tanda kesakitan atau ketidaknyamanan saat buang air kecil.',
                'foto_gejala' => 'images/gejalas/G35.jpg',
                'kategori' => 'Urin & Ginjal'
            ],

            [
                'kode_gejala' => 'G36',
                'nama_gejala' => 'Susah Bernapas',
                'deskripsi_gejala' => 'Kesulitan bernapas yang dapat mengindikasikan gangguan pernapasan yang serius.',
                'foto_gejala' => 'images/gejalas/G36.jpg',
                'kategori' => 'Pernapasan'
            ],

            [
                'kode_gejala' => 'G37',
                'nama_gejala' => 'Sempoyongan',
                'deskripsi_gejala' => 'Ketidakstabilan dalam berjalan atau berdiri, biasanya disebabkan oleh gangguan saraf atau keseimbangan.',
                'foto_gejala' => 'images/gejalas/G37.jpg',
                'kategori' => 'Perilaku & Saraf'
            ],

            [
                'kode_gejala' => 'G38',
                'nama_gejala' => 'Suara Serak',
                'deskripsi_gejala' => 'Perubahan suara menjadi parau atau lemah akibat masalah pada saluran pernapasan atau laring.',
                'foto_gejala' => 'images/gejalas/G38.jpg',
                'kategori' => 'Pernapasan'
            ],
        ];

        DB::table('gejala')->insert($gejala);
    }
}
