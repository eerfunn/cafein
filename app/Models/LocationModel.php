<?php
namespace App\Models;

use CodeIgniter\Model;

class LocationModel extends Model
{
    protected $table = 'location';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
        protected $allowedFields = ['id','address','slug'];

    public function getLocation($slug = false){
        if($slug == false){
            return $this->findAll();
        }        
        return $this->where(['slug' => $slug]) -> first();

    }
}