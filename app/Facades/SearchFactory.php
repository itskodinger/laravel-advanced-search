<?php 

namespace App\Facades;

use App\Blog;
use App\Product;

class SearchFactory {

    public function blog($query) {
        return Blog::search($query);
    }

    public function product($query) {
        return Product::search($query);
    }

}