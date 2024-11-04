<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nis' => 'NIS021', 'nama' => 'Aulia Rahman', 'alamat' => 'Jl. Raya No. 21, Jakarta', 'no_hp' => '101234567890', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Berenang', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2004-05-01'],
            ['nis' => 'NIS022', 'nama' => 'Lina Agustina', 'alamat' => 'Jl. Kebon No. 22, Bandung', 'no_hp' => '102345678901', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Menulis', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2004-06-02'],
            ['nis' => 'NIS023', 'nama' => 'Yudi Setiawan', 'alamat' => 'Jl. Cendana No. 23, Surabaya', 'no_hp' => '103456789012', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Bermain Musik', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Kristen', 'tanggal_lahir' => '2004-07-03'],
            ['nis' => 'NIS024', 'nama' => 'Intan Permatasari', 'alamat' => 'Jl. Hujan No. 24, Medan', 'no_hp' => '104567890123', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Fotografi', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Kristen', 'tanggal_lahir' => '2004-08-04'],
            ['nis' => 'NIS025', 'nama' => 'Riko Saputra', 'alamat' => 'Jl. Melati No. 25, Yogyakarta', 'no_hp' => '105678901234', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Membaca', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2004-09-05'],
            ['nis' => 'NIS026', 'nama' => 'Diana Lestari', 'alamat' => 'Jl. Kenangan No. 26, Bali', 'no_hp' => '106789012345', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Menari', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Hindu', 'tanggal_lahir' => '2004-10-06'],
            ['nis' => 'NIS027', 'nama' => 'Bobby Nugroho', 'alamat' => 'Jl. Harapan No. 27, Solo', 'no_hp' => '107890123456', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Bersepeda', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2004-11-07'],
            ['nis' => 'NIS028', 'nama' => 'Rina Puspitasari', 'alamat' => 'Jl. Taman No. 28, Makassar', 'no_hp' => '108901234567', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Berkebun', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2004-12-08'],
            ['nis' => 'NIS029', 'nama' => 'Anton Prabowo', 'alamat' => 'Jl. Angkasa No. 29, Semarang', 'no_hp' => '109012345678', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Gaming', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Kristen', 'tanggal_lahir' => '2005-01-09'],
            ['nis' => 'NIS030', 'nama' => 'Nia Sari', 'alamat' => 'Jl. Cinta No. 30, Palembang', 'no_hp' => '110123456789', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Yoga', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2005-02-10'],
            // Tambahan data mahasiswa lainnya hingga mencapai 30
            ['nis' => 'NIS031', 'nama' => 'Fauzi Ramadhan', 'alamat' => 'Jl. Bahagia No. 31, Padang', 'no_hp' => '111234567890', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Travelling', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2005-03-11'],
            ['nis' => 'NIS032', 'nama' => 'Tina Bunga', 'alamat' => 'Jl. Indah No. 32, Pontianak', 'no_hp' => '112345678901', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Berkebun', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Kristen', 'tanggal_lahir' => '2005-04-12'],
            ['nis' => 'NIS033', 'nama' => 'Agung Wicaksono', 'alamat' => 'Jl. Sinar No. 33, Jambi', 'no_hp' => '113456789012', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Memancing', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2005-05-13'],
            ['nis' => 'NIS034', 'nama' => 'Putri Rahmawati', 'alamat' => 'Jl. Kesuma No. 34, Ambon', 'no_hp' => '114567890123', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Menari', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Hindu', 'tanggal_lahir' => '2005-06-14'],
            ['nis' => 'NIS035', 'nama' => 'Rizky Ananda', 'alamat' => 'Jl. Melati No. 35, Cirebon', 'no_hp' => '115678901234', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Berenang', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2005-07-15'],
            ['nis' => 'NIS036', 'nama' => 'Indri Sari', 'alamat' => 'Jl. Bunga No. 36, Banjarmasin', 'no_hp' => '116789012345', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Seni Lukis', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Kristen', 'tanggal_lahir' => '2005-08-16'],
            ['nis' => 'NIS037', 'nama' => 'Dwi Santoso', 'alamat' => 'Jl. Taman No. 37, Batam', 'no_hp' => '117890123456', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Bermain Musik', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2005-09-17'],
            ['nis' => 'NIS038', 'nama' => 'Maya Lestari', 'alamat' => 'Jl. Pelangi No. 38, Tangerang', 'no_hp' => '118901234567', 'jenis_kelamin' => 'Perempuan', 'hobi' => 'Menari', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Islam', 'tanggal_lahir' => '2005-10-18'],
            ['nis' => 'NIS039', 'nama' => 'Gerry Sutanto', 'alamat' => 'Jl. Cinta No. 39, Depok', 'no_hp' => '119012345678', 'jenis_kelamin' => 'Laki-laki', 'hobi' => 'Berkendara', 'foto' => 'fotomahasiwa.jpeg', 'agama' => 'Kristen', 'tanggal_lahir' => '2005-11-19'],
        ];

        foreach ($data as $siswa) {
            Siswa::create($siswa);
        }
    }
}
