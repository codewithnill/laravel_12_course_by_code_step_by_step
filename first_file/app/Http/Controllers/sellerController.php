<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

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

    function manyList() {
        return Seller::find(11)->ProductManyData; // finds data from product table using the relationship defined in the Seller model. It will return all Products related to the Seller with primary key 11.
    }
}
