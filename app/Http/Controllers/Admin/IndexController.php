<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Comments;
use App\Http\Controllers\Controller;
use App\Navigation;
use App\News;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('admin.index')->
        with('page', 'admin.index');
    }

    public function newsManagement(){
        return view('admin.news-management')->
        with('categories', Category::readCategory())->
        with('admin_nav', Navigation::getAdminNav())->
        with('page', 'admin.news-management');
    }

    public function userManagement(){
        return view('admin.user-management')->
        with('admin_nav', Navigation::getAdminNav())->
        with('page', 'admin.user-management');
    }
}
