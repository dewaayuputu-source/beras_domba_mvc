<?php
// Controller untuk halaman utama Beras Domba.

class HomeController extends Controller
{
    public function index(): void
    {
        $productModel = new Product();
        $products = $productModel->all();
        $appConfig = require dirname(__DIR__) . '/config/app.php';

        $this->view('home/index', [
            'products' => $products,
            'whatsappNumber' => $appConfig['whatsapp_number'] ?? '',
        ]);
    }
}
