<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\LocationModel;
use App\Models\ProductModel;

class Admin extends BaseController
{
    protected $bannerModel;
    protected $productModel;
    protected $locationModel;
    protected $session;

    public function __construct()
    {
        $this->bannerModel = new BannerModel();
        $this->productModel = new ProductModel();
        $this->locationModel = new LocationModel();
        $this->session = session();
    }

    // ----------DASHBOARD CONTROLLERS START---------- //
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'name' => $this->session->get('user_name'),
        ];

        return view('pages/admin/dashboard', $data);
    }
    // ----------DASHBOARD CONTROLLERS END---------- //

    // ----------BANNER CONTROLLERS START---------- //
    public function banner()
    {
        $data = [
            'title' => 'Home Page',
            'banner' => $this->bannerModel->findAll(),
            'name' => $this->session->get('user_name'),
        ];

        return view('pages/admin/banner/index', $data);
    }

    public function add_banner()
    {
        $data = [
            'title' => 'Home Page',
            'name' => $this->session->get('user_name'),
        ];

        return view('pages/admin/banner/add', $data);
    }

    public function addbanner()
    {
        $file = $this->request->getFile('preview');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->bannerModel->insert([
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'preview' => $imageName,
        ]);
        session()->setFlashdata('message', "Data berhasil ditambahkan");
        return redirect()->to('/admin/home');
    }

    public function update_banner($slug)
    {
        $data = [
            'title' => 'Update Banner',
            'tidakvalid' => \Config\Services::validation(),
            'banner' => $this->bannerModel->getBanner($slug),
            'name' => $this->session->get('user_name'),
        ];
        // dd($data);
        return view('pages/admin/banner/update', $data);
    }

    public function updatebanner($id)
    {

        //check nama
        $bannerLama = $this->bannerModel->getBanner($this->request->getVar('slug'));
        if ($bannerLama['nama'] == $this->request->getVar('nama')) {
            $rule_name = 'required';
        } else {
            $rule_name = 'required|is_unique[banner.nama]';
        }

        if (!$this->validate([
            'nama' => [
                'rules' => $rule_name,
                'errors' => [
                    'required' => '{field} banner harus diisi',
                    'is_unique' => '{field} banner sudah terdaftar',
                ],
            ],
        ])) {
            $tidakvalid = \Config\Services::validation();
            return redirect()->to('/admin/banner/updatebanner/' . $this->request->getVar('slug'))->withInput()->with('tidakvalid', $tidakvalid);
        }
        $file = $this->request->getFile('preview');
        //  dd($file);
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->bannerModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'preview' => $imageName,
        ]);

        session()->setFlashdata('pesan', "Data berhasil diupdate");

        return redirect()->to('/admin/home');
    }

    public function delete_banner($id)
    {
        $this->bannerModel->delete($id);
        session()->setFlashdata('pesan', "Data berhasil dihapus");
        return redirect()->to('/admin/home');
    }
    // ----------BANNER CONTROLLERS END---------- //

    // ----------PRODUCT CONTROLLERS START---------- //
    public function product()
    {
        $product = $this->productModel;

        $data = [
            'title' => 'Product Page',
            'product' => $product->paginate(5),
            'pager' => $product->pager,
            'name' => $this->session->get('user_name'),
        ];

        return view('pages/admin/product/index', $data);
    }

    public function add_product()
    {
        $data = [
            'title' => 'ADD Product',
            'tidakvalid' => \Config\Services::validation(),
            'name' => $this->session->get('user_name'),
        ];

        return view('pages/admin/product/add', $data);
    }

    public function addproduct()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[product.name]',
                'errors' => [
                    'required' => '{field} produk harus diisi',
                    'is_unique' => '{field} produk sudah terdaftar',
                ],
            ],
            'image' => [
                'rules' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
                'errors' => [
                    'uploaded' => 'Gambar Produk Belum Dipilih',
                    'max_size' => 'Ukuran Gambar Terlalu Besar (>1MB)',
                    'is_image' => 'Yang anda pilih bukan gambar',
                ],
            ],
        ])) {
            return redirect()->to('/admin/add_product')->withInput();
        }

        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->productModel->insert([
            'id' => $this->request->getVar('id'),
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'image' => $imageName,
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'rating' => $this->request->getVar('rating'),
            'category' => $this->request->getVar('category'),
        ]);

        session()->setFlashdata('pesan', "Data berhasil ditambahkan");

        return redirect()->to('/admin/product');
    }

    public function update_product($slug)
    {
        $data = [
            'title' => 'Update Product',
            'tidakvalid' => \Config\Services::validation(),
            'product' => $this->productModel->getProduct($slug),
            'name' => $this->session->get('user_name'),
        ];
        return view('pages/admin/product/update', $data);
    }

    public function updateproduct($id)
    {

        //check nama
        $productLama = $this->productModel->getProduct($this->request->getVar('slug'));

        if ($productLama['name'] == $this->request->getVar('name')) {
            $rule_name = 'required';
        } else {
            $rule_name = 'required|is_unique[product.name]';
        }
        if (!$this->validate([
            'name' => [
                'rules' => $rule_name,
                'errors' => [
                    'required' => '{field} produk harus diisi',
                    'is_unique' => '{field} produk sudah terdaftar',
                ],
            ],
        ])) {
            $tidakvalid = \Config\Services::validation();
            return redirect()->to('/admin/update/' . $this->request->getVar('slug'))->withInput()->with('tidakvalid', $tidakvalid);
        }
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->productModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'image' => $imageName,
            'price' => $this->request->getVar('price'),
            'description' => $this->request->getVar('description'),
            'rating' => $this->request->getVar('rating'),
            'category' => $this->request->getVar('category'),
        ]);

        session()->setFlashdata('pesan', "Data berhasil diupdate");

        return redirect()->to('/admin/product');
    }

    public function delete_product($id)
    {
        $this->productModel->delete($id);
        session()->setFlashdata('pesan', "Data berhasil dihapus");
        return redirect()->to('/admin/product');
    }
    // ----------PRODUCT CONTROLLERS END---------- //

    // ----------LOCATION CONTROLLERS START---------- //
    public function location()
    {
        $data = [
            'title' => 'Location Page',
            'location' => $this->locationModel->findAll(),
            'name' => $this->session->get('user_name'),
        ];

        return view('pages/admin/location/index', $data);
    }

    public function add_location()
    {
        $data = [
            'title' => 'Location Page',
            'name' => $this->session->get('user_name'),
        ];

        return view('pages/admin/location/add', $data);
    }

    public function addlocation()
    {
        $slug = url_title($this->request->getVar('address'), '-', true);
        $this->locationModel->insert([
            'id' => $this->request->getVar('id'),
            'address' => $this->request->getVar('address'),
            'slug' => $slug,
        ]);
        session()->setFlashdata('message', "Data berhasil ditambahkan");
        return redirect()->to('/admin/location');
    }

    public function update_location($slug)
    {
        $data = [
            'title' => 'Update Location',
            'tidakvalid' => \Config\Services::validation(),
            'location' => $this->locationModel->getLocation($slug),
            'name' => $this->session->get('user_name'),
        ];
        return view('pages/admin/location/update', $data);
    }

    public function updatelocation($id)
    {

        //check nama
        $lokasiLama = $this->locationModel->getLocation($this->request->getVar('slug'));
        if ($lokasiLama[0]['address'] == $this->request->getVar('address')) {
            $rule_name = 'required';
        } else {
            $rule_name = 'required|is_unique[location.address]';
        }

        if (!$this->validate([
            'address' => [
                'rules' => $rule_name,
                'errors' => [
                    'required' => '{field} location harus diisi',
                    'is_unique' => '{field} location sudah terdaftar',
                ],
            ],
        ])) {
            $tidakvalid = \Config\Services::validation();
            return redirect()->to('/admin/updatelocation/' . $this->request->getVar('slug'))->withInput()->with('tidakvalid', $tidakvalid);
        }

        $slug = url_title($this->request->getVar('address'), '-', true);
        $this->locationModel->save([
            'id' => $id,
            'address' => $this->request->getVar('address'),
            'slug' => $slug,
        ]);

        session()->setFlashdata('message', "Data berhasil diupdate");

        return redirect()->to('/admin/location');
    }

    public function delete_location($id)
    {
        $this->locationModel->delete($id);
        session()->setFlashdata('pesan', "Data berhasil dihapus");
        return redirect()->to('/admin/location');
    }
    // ----------LOCATION CONTROLLERS END---------- //
}