<?php

namespace App\Controllers;

use App\Models\DataJadwalModel;

class Admin extends BaseController
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
            'user_name' => 'CodeBreak'
        ];

        return view('admin/dashboard', $data);
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
            'user_name' => 'CodeBreak',
            'data_jadwal' => $dataJadwal->paginate(10, 'jadwal'),
            'pager' => $dataJadwal->pager,
            'current_page' => $current_page,
            'keyword' => $keyword

        ];
        return view('admin/jadwal-skripsi', $data);
    }

    public function add_jadwal()
    {

        $data = [
            'title' => 'Tambah Jadwal Ujian | Sistem Informasi',
            'user_name' => 'CodeBreak',
            'validation' => \Config\Services::validation()

        ];
        return view('admin/add-jadwal', $data);
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
            'user_name' => 'CodeBreak',
            'edit_status' => $editStatus,
            'data_jadwal' => $dataJadwal,
            'nim' => $nim,
            'validation' => \Config\Services::validation()

        ];
        return view('admin/detail-jadwal', $data);
    }

    public function save_jadwal()
    {

        if (!$this->validate([
            'studentName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'jadwal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'dPembimbing' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'dPenguji' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ]
        ])) {
            session()->setFlashdata('Failed', "Data Gagal Disimpan");
            return redirect()->to(base_url('admin/add_jadwal'))->withInput();
        }

        $jadwal = $this->dataJadwalModel;
        $jadwal->save([
            'nama_mahasiswa' => $this->request->getVar('studentName'),
            'nim' => $this->request->getVar('nim'),
            'judul_skripsi' => $this->request->getVar('judul'),
            'jadwal_ujian' => $this->request->getVar('jadwal'),
            'dosen_pembimbing' => $this->request->getVar('dPembimbing'),
            'dosen_penguji' => $this->request->getVar('dPenguji')
        ]);
        session()->setFlashdata('Success', "Data Berhasil Disimpan");
        return redirect()->to(base_url('admin/jadwal'));
    }

    public function update_jadwal()
    {

        if (!$this->validate([
            'studentName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'nim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'jadwal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'dPembimbing' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ],
            'dPenguji' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Wajib Diisi',
                ]
            ]
        ])) {
            session()->setFlashdata('Failed', "Data Gagal Diubah");
            return redirect()->to(base_url('admin/detail_jadwal/' . $this->request->getVar('nim')))->withInput();
        }

        $getjadwalId = $this->dataJadwalModel->where(['nim' => $this->request->getVar('nim')])->first();
        $jadwal = $this->dataJadwalModel;
        $jadwal->save([
            'id' => $getjadwalId['id'],
            'nama_mahasiswa' => $this->request->getVar('studentName'),
            'nim' => $this->request->getVar('nim'),
            'judul_skripsi' => $this->request->getVar('judul'),
            'jadwal_ujian' => $this->request->getVar('jadwal'),
            'dosen_pembimbing' => $this->request->getVar('dPembimbing'),
            'dosen_penguji' => $this->request->getVar('dPenguji')
        ]);
        session()->setFlashdata('Success', "Data Berhasil Diubah");
        return redirect()->to(base_url('admin/detail_jadwal/' . $this->request->getVar('nim')));
    }

    public function delete_jadwal($id)
    {

        $this->dataJadwalModel->delete($id);
        return redirect()->to('admin/jadwal');
    }
}
