<?php

namespace App\Controllers;

use App\Models\homeIkhtisar;
use App\Models\homepic;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function rumah(): string
    {
        $homepic = new homepic();
        $dart = $homepic->findAll();

        $homeIkhtisar = new homeIkhtisar();
        $yapping = $homeIkhtisar->findAll();

        $data = [
            'ikhtisar' => $yapping,
            'dataset' => $dart,
            'title' => 'home || Penalaran'
        ];

        echo view('templateUser/header', $data);
        echo view('user/rumah', $data);
        echo view('templateUmum/cardDivisi');
        echo view('templateUmum/dokumentasiAfterCard');
        echo view('templateUser/footer');

        return 0;
    }

    public function about(): string
    {
        $data = [
            'title' => 'About || Penalaran'
        ];
        echo view('templateUser/header', $data);
        echo view('user/about', $data);
        echo view('templateUser/footer');
        return 0;
    }

    public function getImages()
    {
        $homepic = new homepic();
        $dart = $homepic->findAll(); // Ambil semua data gambar dari database

        // Formatkan data menjadi array URL
        $imageUrls = [];
        foreach ($dart as $row) {
            $imageUrls[] = $row['image_url'];
        }

        // Kirim data sebagai JSON
        return $this->response->setJSON($imageUrls);
    }
}