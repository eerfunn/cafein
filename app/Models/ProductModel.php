<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primarykey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'name', 'slug', 'image', 'price', 'description', 'rating', 'category'];

    public function getProduct($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();

    }

    public function getPopularProduct()
    {
        return $this->where('rating', 5)->findAll();
    }

    public function getProductByCat($cat = '')
    {
        if ($cat == false) {
            return $this->findAll();
        }
        return $this->where('category', $cat)->findAll();
    }
}