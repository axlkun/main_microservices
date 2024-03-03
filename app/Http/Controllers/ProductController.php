<?php

namespace App\Http\Controllers;

use Http;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function like($id, Request $request){
        $response = \Http::get('http://docker.for.mac.localhost:8000/api/user');

        return $response->json();
    }
}
