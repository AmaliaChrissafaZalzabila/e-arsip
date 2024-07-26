<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class ArsipInternal_model extends Model
{
    protected $table = 'ArsipInternal';
 
    public function getDokumen($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
 
    public function saveDokumen($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
}