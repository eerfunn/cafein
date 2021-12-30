<?php
namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table = 'banner';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id','nama','slug','preview'];

      public function getBanner($slug = false){
        if($slug == false){
            return $this->findAll();
        }        
        return $this->where(['slug' => $slug]) -> first();

    }
}