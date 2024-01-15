<?php
namespace App\Action;

use App\Helpers\StaticContent;


class DefaultDataBanyuwangiHijau
{
         private function contentListTujuan()
         {
                  $attributes = [
                           'Memperkuat Unit Pelaksana Teknis Daerah (UPTD) Pengelolaan Sampah dan mengembangkannya menjadi UPTD – Pola Pengelolaan Keuangan Badan Layanan Umum Daerah (PPK BLUD) Persampahan.',
                           'Mendorong praktik perilaku pengelolaan sampah berkelanjutan di tingkat
                           masyarakat.',
                           'Mengembangkan sistem pengelolaan sampah yang menguntungkan secara',
                           'Mengembangkan lingkungan yang mendukung bagi keterlibatan swasta dalam
                           investasi dan pengoperasian sistem pengelolaan sampah yang berkelanjutan.',
                           'Menguji coba skema inovasi pendanaan untuk persampahan.'
                  ];
                  return $attributes;
         }
         public function index()
         {
                  $attributes['list_tujuan'] = $this->contentListTujuan();
                  $attributes['youtube_layanan_persampahan'] = StaticContent::getContent('banyuwangi-hijau', 'youtube_layanan_persampahan', "https://www.youtube.com/embed/JKOU6ddb4w4");
                  $attributes['deskripsi_tentang'] = StaticContent::getContent(
                           'banyuwangi-hijau',
                           'deskripsi_tentang',
                           'Program Banyuwangi Hijau (BWH) adalah inisiatif Pemerintah Kabupaten Banyuwangi untuk pengelolaan sampah berkelanjutan. Diluncurkan pada 21 Februari 2022, BWH menggabungkan model pengelolaan sampah perkotaan dalam konsep sampah sirkular dengan penekanan pada solusi daur ulang guna meningkatkan nilai ekonomi sampah. BWH mendorong partisipasi aktif masyarakat dan keterlibatan multi-pihak untuk menyediakan layanan persampahan terintegrasi. Program ini diharapkan dapat mendukung pemulihan ekonomi lokal dan meningkatkan kesehatan masyarakat, sejalan dengan misi Program Banyuwangi Rebound. Dilaksanakan pada periode 2022-2024, BWH memiliki komponen program, termasuk Tata Kelola dan Kelembagaan, Sistem Operasional Persampahan, Komunikasi Perubahan Perilaku, dan Inovasi Pendanaan. Tujuannya adalah mendukung pencapaian target JAKSTRANAS Pengelolaan Sampah Rumah Tangga dan Sampah Sejenis Sampah Rumah Tangga tahun 2025, dengan fokus pada peningkatan penanganan sampah hingga 70% dan pengurangan timbulan sampah hingga 30%. BWH merupakan hasil kerjasama antara Pemerintah Daerah Kabupaten Banyuwangi, Systemiq dengan dukungan Kerajaan Norwegia, Borealis, P4G (Partnering for Green Growth and the Global Goals), dan Accenture. Program ini berkomitmen untuk menyusun sistem pengelolaan sampah yang terstruktur dan berdaya guna.'
                  );
                  $attributes['deskripsi_tujuan'] = StaticContent::getContent('banyuwangi-hijau', 'deskripsi_tujuan', "Secara umum, tujuan dari Program Banyuwangi Hijau adalah meningkatkan cakupan
                  layanan persampahan yang berkelanjutan, dan memenuhi prinsip cost recovery,
                  serta berkontribusi terhadap penurunan prevalensi stunting, melalui kemitraan
                  multi-pihak. Dimana hal ini bisa dicapai dengan lima tujuan program.");
                  return $attributes;
         }
}