<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\contact;

class ProductController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    $products = Product::all();
    return view('product', ['products' => $products]);
  }
}
