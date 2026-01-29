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
        return view('pages.about');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
