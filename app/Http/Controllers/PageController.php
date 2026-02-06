<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $clients = [
            ['logo' => 'img/profile-1.png', 'name' => 'Clients 1'],
            ['logo' => 'img/profile-1.png', 'name' => 'Clients 2'],
            ['logo' => 'img/profile-1.png', 'name' => 'Clients 3'],
            ['logo' => 'img/profile-1.png', 'name' => 'Clients 4'],
            ['logo' => 'img/profile-1.png', 'name' => 'Clients 5'],
            ['logo' => 'img/profile-1.png', 'name' => 'Clients 6'],
        ];

        return view('pages.home', compact('clients') + ['title' => 'Home']);
    }

    public function about()
    {
        $title = 'About';
        return view('pages.about', compact('title'));
    }

    public function products()
    {
        $products = [
            [
                'nama' => 'Stove 1 Burner with Stand',
                'gambar' => 'img/products/Stove 1 Burner with Stand.jpg',
                'kategori' => 'Kitchen Equipment',
            ],

            [
                'nama' => 'Sauce Table 1 Undershelf',
                'gambar' => 'img/products/Sauce Table 1 Undershelf.jpg',
                'kategori' => 'Kitchen Equipment',
            ],

            [
                'nama' => 'Rice Steamer 12 Tray',
                'gambar' => 'img/products/Rice Steamer 12 Tray.jpg',
                'kategori' => 'Kitchen Equipment',
            ],

            [
                'nama' => 'Food Service Trolley 3 Tray',
                'gambar' => 'img/products/Food Service Trolley 3 Tray.jpg',
                'kategori' => 'Kitchen Equipment',
            ],

            [
                'nama' => 'Stove with Oven',
                'gambar' => 'img/products/Stove with Oven.jpg',
                'kategori' => 'Kitchen Equipment',
            ],

            [
                'nama' => 'Warm Cabinet with Sliding Door',
                'gambar' => 'img/products/Warm Cabinet with Sliding Door.jpg',
                'kategori' => 'Kitchen Equipment',
            ],

            [
                'nama' => 'Cooling Rack Trolley',
                'gambar' => 'img/products/Cooling Rack Trolley.jpg',
                'kategori' => 'Kitchen Equipment',
            ],

            [
                'nama' => 'Exhaust Hood',
                'gambar' => 'img/products/Exhaust Hood.jpg',
                'kategori' => 'Kitchen Equipment',
            ],
        ];

        return view('pages.products', compact('products')+ ['title' => 'Products']);
    }

    public function blog()
    {
        $title = 'Blog';
        return view('pages.blog', compact('title'));
    }

    public function contact()
    {
        $title = 'Contact';
        return view('pages.contact', compact('title'));
    }
}
