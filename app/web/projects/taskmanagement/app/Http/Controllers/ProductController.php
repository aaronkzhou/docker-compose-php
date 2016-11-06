<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
	public function index()
	{

		$product = Product::find(2)
               ->take(1);
		//echo "life is like a strugger";
		return view('product.index')->with('product',$product);
				
	}
}
