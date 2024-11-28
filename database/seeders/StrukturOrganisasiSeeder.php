<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StrukturOrganisasi;

class StrukturOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
           // Data tanpa parent (posisi teratas)
           ['posisi' => 'Tuhan Yesus Kristus', 'nama' => 'Tuhan Yesus Kristus', 'bidang' => NULL, 'parent_id' => NULL, 'created_at' => now(), 'updated_at' => now()],
            
           // Majelis GKJ Sedayu yang memiliki parent_id 1 (Tuhan Yesus Kristus)
           ['posisi' => 'Majelis GKJ Sedayu', 'nama' => 'Majelis GKJ Sedayu', 'bidang' => NULL, 'parent_id' => 1, 'created_at' => now(), 'updated_at' => now()],
           
           // Ketua I yang memiliki parent_id 2 (Majelis GKJ Sedayu)
           ['posisi' => 'Ketua I', 'nama' => 'Pdt. Surono', 'bidang' => NULL, 'parent_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Ketua II', 'nama' => 'Pdt. Ananda', 'bidang' => NULL, 'parent_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Ketua III', 'nama' => 'Pdt. Hariananta', 'bidang' => NULL, 'parent_id' => 2, 'created_at' => now(), 'updated_at' => now()],
           
           // Sekretaris dan Bendahara yang memiliki parent_id 3 (Ketua I, II, III)
           ['posisi' => 'Sekretaris', 'nama' => 'Sdri. Rina', 'bidang' => 'Administrasi', 'parent_id' => 3, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Bendahara', 'nama' => 'Sdr. Budi', 'bidang' => 'Keuangan', 'parent_id' => 3, 'created_at' => now(), 'updated_at' => now()],
           
           // Bidang yang memiliki parent_id 3
           ['posisi' => 'Bidang Kesaksian dan Ibadah', 'nama' => 'Nama Bidang Kesaksian', 'bidang' => 'Kesaksian dan Ibadah', 'parent_id' => 3, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Bidang Pembinaan Warga Gereja', 'nama' => 'Nama Bidang Pembinaan', 'bidang' => 'Pembinaan Warga Gereja', 'parent_id' => 4, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Bidang Pelayanan dan Penatalayanan', 'nama' => 'Nama Bidang Pelayanan', 'bidang' => 'Pelayanan dan Penatalayanan', 'parent_id' => 5, 'created_at' => now(), 'updated_at' => now()],
           
           // Komisi-komisi yang memiliki parent_id sesuai dengan bidang
           ['posisi' => 'Komisi Liturgi', 'nama' => 'Sdri. Maria', 'bidang' => 'Liturgi', 'parent_id' => 8, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Komunikasi-Seni Budaya', 'nama' => 'Sdr. Andi', 'bidang' => 'Komunikasi dan Seni Budaya', 'parent_id' => 8, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Paduan Suara', 'nama' => 'Sdri. Clara', 'bidang' => 'Paduan Suara', 'parent_id' => 8, 'created_at' => now(), 'updated_at' => now()],
           
           // Komisi Anak, Remaja, Pemuda yang memiliki parent_id 9
           ['posisi' => 'Komisi Anak', 'nama' => 'Sdri. Tania', 'bidang' => 'Anak', 'parent_id' => 9, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Remaja dan Pemuda', 'nama' => 'Sdr. Adi', 'bidang' => 'Remaja dan Pemuda', 'parent_id' => 9, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Warga Dewasa dan Lansia', 'nama' => 'Sdri. Eva', 'bidang' => 'Warga Dewasa dan Lansia', 'parent_id' => 9, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Pemberdayaan Wanita', 'nama' => 'Sdri. Maya', 'bidang' => 'Wanita', 'parent_id' => 9, 'created_at' => now(), 'updated_at' => now()],
           
           // Komisi Pemerhati yang memiliki parent_id 10
           ['posisi' => 'Komisi Pemerhati', 'nama' => 'Sdr. Zain', 'bidang' => 'Pemerhati', 'parent_id' => 10, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Pelayanan Kesehatan', 'nama' => 'Sdri. Yuni', 'bidang' => 'Kesehatan', 'parent_id' => 10, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Rumah Tangga', 'nama' => 'Sdr. Rahman', 'bidang' => 'Rumah Tangga', 'parent_id' => 10, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Peningkatan Ekonomi Jemaat', 'nama' => 'Sdr. Roni', 'bidang' => 'Ekonomi Jemaat', 'parent_id' => 10, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Litbang dan Verifikasi', 'nama' => 'Sdri. Nina', 'bidang' => 'Litbang dan Verifikasi', 'parent_id' => 10, 'created_at' => now(), 'updated_at' => now()],
           ['posisi' => 'Komisi Multi Media dan IT', 'nama' => 'Sdr. Johan', 'bidang' => 'Multi Media dan IT', 'parent_id' => 10, 'created_at' => now(), 'updated_at' => now()],
       ];


        foreach ($data as $item) {
            StrukturOrganisasi::create($item);
        }
    }
}
