<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

use App\Models\Product;

class sellerController extends Controller
{
    //
    // function index(Request $req) {
    //     return "some code";
    // }

    function list() {
        // return Seller::all();
        // return Seller::find(11); // finds data from seller
        return Seller::find(11)->productData; // finds data from product table using the relationship defined in the Seller model. It will return the Product related to the Seller with primary key 11.
    }

    function OneToManyList() {
        return Seller::find(11)->ProductManyData; // finds data from product table using the relationship defined in the Seller model. It will return all Products related to the Seller with primary key 11.
    }

    function manyToOneList() {
        $data = Product::with('seller')->get(); // finds data from seller table using the relationship defined in the Product model. It will return all Products with their related Seller data.
        return $data;
    }
}
