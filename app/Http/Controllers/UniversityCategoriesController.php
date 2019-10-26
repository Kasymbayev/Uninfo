<?php

namespace App\Http\Controllers;

use App\Entities\UniversityCategories;
use Illuminate\Support\Facades\Request;

class UniversityCategoriesController extends Controller
{
    public function Categories(){
        $objCategories = new UniversityCategories();
        $categories = $objCategories->get();
        return view('admin.categories',['categories' => $categories]);
    }

    public function addCategories()
    {
        return view('admin.add_category');
    }

    public function addRequestCategories(){

        $category = new UniversityCategories();
        $category -> category_name = Request::input('category_name');

        $saveFlag = $category->save();
        if($saveFlag){
            return redirect(route('admin_categories'))->with('success', 'Категория успешно добавлена');
        }

    }
}
