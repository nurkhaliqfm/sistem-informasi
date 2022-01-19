<?php

namespace App\Models;

use CodeIgniter\Model;

class DataJadwalModel extends Model
{
    protected $table = 'data_jadwal';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_mahasiswa', 'nim', 'judul_skripsi', 'jadwal_ujian', 'dosen_pembimbing', 'dosen_penguji'];

    public function search($keyword)
    {
        return $this->table('data_jadwal')->like('nim', $keyword);
    }
}
