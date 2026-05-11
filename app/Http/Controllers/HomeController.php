<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua produk beserta data UMKM pembuatnya
        $products = Product::with('umkm')->latest()->get();

        return view('welcome', compact('products'));
    }
}
