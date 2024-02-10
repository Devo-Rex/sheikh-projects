<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryPage(){
        return "Hi this is category page";
    }

    public function createCategory(Request $request){
        $createCategory = Category::create([
            'title' => $request->title
        ]);
    }

}
