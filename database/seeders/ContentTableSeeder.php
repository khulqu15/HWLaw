<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create([
            'header_title' => 'Biarkan Keadilan Berdiri Meski Semesta Bekecamuk',
            'header_description' => 'HW Lawfirm adalah kantor hukum yang menawarkan berbagai jenis bantuan hukum yang komprehensif kepada klien, termasuk dalam urusan bisnis dan perselisihan korporasi di lintas bidang industri',
            'header_motto' => 'Integritas Tak Tegoyahkan',
            'header_motivation_title' => 'Membela Keadilan, Menghargai Klien',
            'header_motivation_subtitle' => 'Mengatasi Tantangan Hukum dengan Keahlian',
            'area_motto' => 'Area Praktek Kami',
            'area_title' => 'Meeting Your Legal Justice Requirements',
            'area_description' => 'HW Lawfirm, berdiri sejak 2021 dengan 17 tahun keahlian hukum, adalah kantor hukum responsif dan kontemporer di Indonesia. Kami fokus pada integritas dan up-to-date dengan perubahan hukum, menawarkan layanan di bidang pidana, perdata, korporasi, dan lainnya. Kebenaran dan keadilan adalah misi kami dalam memberikan konsultasi',
            'contact_title' => 'Jangan ragu untuk berkomunikasi dengan kami untuk pertanyaan Anda.',
            'contact_description' => 'Silahkan hubungi kami melalui form atau informasi kontak yang ada di halaman ini, dengan senang hati kami akan membalas pesan Anda secepatnya.',
            'footer_description' => 'Di HWLawfirm, kami memahami betapa pentingnya keadilan dan integritas dalam setiap aspek hukum. Sebagai firma hukum yang berdedikasi, kami menggabungkan pengetahuan mendalam, pengalaman bertahun-tahun, dan pendekatan personal untuk memastikan setiap klien mendapatkan representasi hukum terbaik.',
        ]);
    }
}
