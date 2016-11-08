<?php
/**
 * Created by PhpStorm.
 * User: alyson
 * Date: 07/11/16
 * Time: 23:54
 */

namespace CodeCommerce\Http\Controllers;


use CodeCommerce\Category;

class WelcomeController extends Controller
{

    private $categories;

    public function __construct(Category $category){
        $this->categories = $category;
    }

    public function index(){
        return view('welcome');
    }

    public function exemplo(){

        $categories = $this->categories->all();

        return view('home',['categories' => $categories]);
    }
}