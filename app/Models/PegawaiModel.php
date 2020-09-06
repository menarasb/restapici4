<?php 
namespace App\Models;
use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table  = 'pegawai';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nip', 'kantor', 'homebase'];

    public function getPegawai($id = false)
    {   
        if($id == false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id])->getRowArray();
        }
    }

    public function wherePegawai($data)
    {
        return $this->getWhere($data)->getRowArray();
    }

    public function addPegawai($data){
        return $this->db->table($this->table)->insert($data);
    }

    public function updatePegawai($data, $id){
        return $this->db->table($this->table)->update($data, $id);
    }
}