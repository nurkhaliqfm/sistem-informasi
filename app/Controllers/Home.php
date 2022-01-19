<?php

namespace App\Controllers;

use App\Models\DataJadwalModel;

class Home extends BaseController
{
    protected $dataJadwalModel;

    public function __construct()
    {
        $this->dataJadwalModel = new DataJadwalModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Sistem Informasi',
            'user_name' => 'Guest'
        ];

        return view('home/dashboard', $data);
    }

    public function jadwal()
    {
        $current_page = $this->request->getVar('page_dosen') ? $this->request->getVar('page_dosen') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dataJadwal = $this->dataJadwalModel->search($keyword);
        } else {
            $dataJadwal = $this->dataJadwalModel;
        }

        $data = [
            'title' => 'Jadwal Ujian | Sistem Informasi',
            'user_name' => 'Guest',
            'data_jadwal' => $dataJadwal->paginate(10, 'jadwal'),
            'pager' => $dataJadwal->pager,
            'current_page' => $current_page,
            'keyword' => $keyword

        ];
        return view('home/jadwal-skripsi', $data);
    }

    public function detail_jadwal($nim = '')
    {
        $editStatus = $this->request->getVar('addJadwal');
        $title = 'Edit Jadwal Ujian | Sistem Informasi';

        if (!$editStatus) {
            $editStatus = 'notEdited';
            $title = 'Detail Jadwal Ujian | Sistem Informasi';
        }

        $dataJadwal = $this->dataJadwalModel->where(['nim' => $nim])->first();

        $data = [
            'title' => $title,
            'user_name' => 'Guest',
            'edit_status' => $editStatus,
            'data_jadwal' => $dataJadwal,
            'nim' => $nim,

        ];
        return view('home/detail-jadwal', $data);
    }
}
