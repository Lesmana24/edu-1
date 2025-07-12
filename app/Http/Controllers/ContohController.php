<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index()
    {

        $title = 'Belajar Laravel';
        $products = ['Laptop', 'Keyboard', 'Mouse']; 
        // return view('contoh', [
        //     'products' => $products,
        // ]);
        return view('contoh', compact('products', 'title'));
    }

    public function coba()
    {
        $title = 'Belajar Blade';
        $ifLogin = false;
        $products = ['Laptop', 'Keyboard', 'Mouse'];
        return view ('coba', compact('title','ifLogin', 'products'));

        }
}
