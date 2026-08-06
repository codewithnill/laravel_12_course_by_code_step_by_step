<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ProductsController extends Controller
{
    //
    // function index(Request $req) {
    //     return "some code";
    // }

    function productList() {
        // return "product list";
        // return Blade::render("<h1>Product List</h1>"); // Render a Blade template with a heading


        // using dynamic data in blade template
        $totalProducts = 100; // Example dynamic data
        return Blade::render('<h1>{{ $total }} Product List</h1>', ['total' => $totalProducts]); // inline blade template with dynamic data, for only one line of code we can use this method, but for multiple lines of code we can use blade file and return view('view_name', ['data' => $data]);
    }

    function addProduct() {
        // return "add product";
        return Blade::render("<h1>Add Product</h1>");
    }

    function updateProduct() {
        // return "update product";
        return Blade::render("<h1>Update Product</h1>");
    }
}
