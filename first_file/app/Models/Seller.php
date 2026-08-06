<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    function productData() {
        return $this->hasOne('App\Models\Product', 'seller_id');
        // if table name was owner_id, we had to mention this in second parameter. But since the table name is seller_id, we don't need to mention it as it will be automatically detected by Laravel. It is detected by the name of the function. The function name is productData, so Laravel will look for a foreign key named product_data_id in the products table. But since we have defined the foreign key as seller_id, we need to mention it explicitly in the second parameter.


        // parameters: related model, foreign key, local key
        // local key means the primary key of the current model (Seller) which is 'id' by default.
    }

    function ProductManyData() {
        return $this->hasMany('App\Models\Product');
    }
}
