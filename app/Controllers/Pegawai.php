<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use CodeIgniter\RESTful\ResourceController;

class Pegawai extends ResourceController
{
    protected $format = 'json';
    protected $pegawaiModel;

    public function __construct()
    {
        $this->pegawaiModel = new PegawaiModel();
    }

    public function index()
    {
        $data = $this->pegawaiModel->getPegawai();
        $response = [
            'status' => 200,
            'data' => $data
        ];
        return $this->respond($response, 200);
    }

    public function show($id = null)
    {
        $data = $this->pegawaiModel->getPegawai($id);
        if (!$data) {
            $response = [
                'message' => 'data tidak ditemukan',
                'status' => 400,
            ];
        } else {
            $response = [
                'data' => $data,
            ];
        }
        return $this->respond($response, 200);
    }

    public function create()
    {
        // validation rules
        $validation = \Config\Services::validation();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nip' => $this->request->getVar('nip'),
            'kantor' => $this->request->getVar('kantor'),
            'homebase' => $this->request->getVar('homebase'),
        ];
        // cek validation
        if (!$validation->run($data, 'pegawai_insert')) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {

            $result = $this->pegawaiModel->addPegawai($data);
            if ($result) {
                $response = [
                    'message' => 'data berhasil ditambahkan',
                ];
                return $this->respond($response, 200);
            }
        }
    }

    public function update($id = null)
    {
        $validation = \Config\Services::validation();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nip' => $this->request->getVar('nip'),
            'kantor' => $this->request->getVar('kantor'),
            'homebase' => $this->request->getVar('homebase'),
        ];
        $niplama = $this->pegawaiModel->getPegawai($id);
        if ($niplama['nip'] == $this->request->getVar('nip')) {
            $valid = $validation->run($data, 'pegawai_update');
        } else {
            $valid = $validation->run($data, 'pegawai_insert');
        }

        // cek validation
        if (!$valid) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $result = $this->pegawaiModel->updatePegawai($data, ['id' => $id]);
            if ($result) {
                $response = [
                    'message' => 'data berhasil diupdate',
                ];
                return $this->respond($response, 200);
            }
        }
    }

    public function delete($id = null)
    {
        if ($this->pegawaiModel->delete($id)) {
            $response = [
                'status' => 500,
                'error' => false,
                'message' => 'data berhasil di hapus',
            ];
        } else {
            $response = [
                'status' => 200,
                'error' => true,
                'message' => 'data gagal dihapus',
            ];
        }
        return $this->respond($response);
    }
}
