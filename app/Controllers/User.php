<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\ProductModel;

class User extends BaseController
{
    protected $bannerModel;
    protected $productModel;
    protected $uri;

    public function __construct()
    {
        $this->bannerModel = new BannerModel();
        $this->productModel = new ProductModel();
        $this->uri = service('uri');
    }
    public function index()
    {
        $banner = $this->bannerModel->findAll();
        $data = [
            'title' => 'home',
            'banner' => $banner,
            'product' => $this->productModel->getPopularProduct(),
        ];

        return view('pages/home', $data);
    }

    public function product()
    {
        $uri = current_url(true);
        $cat = substr($uri->getQuery(), 4);

        $product = $this->productModel->getProductByCat();
        if ($cat) {
            $product = $this->productModel->getProductByCat($cat);
        }

        $data = [
            'title' => 'product',
            'product' => $product,
            'cat' => (string) $cat,
        ];
        return view('pages/product', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Produk',
            'product' => $this->productModel->getProduct($slug),
        ];

        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product ' . $slug . ' Not Found');
        }
        return view('product/detail', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'about',
        ];
        return view('pages/about', $data);
    }

    public function location()
    {$location = $this->locationModel->findAll();

        $data = [
            'title' => 'location',
            'location' => $location,
        ];
        return view('pages/location', $data);
    }
}