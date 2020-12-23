<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Posts;
use\App\Category;

class BlogController extends Controller
{
    public function index(Posts $posts) {
        $category_side = Category::all();
        $data = $posts->latest()->take(4)->get();
        return view('blog', compact('data', 'category_side'));
    }

    public function field_blog($slug) {
        $category_side = Category::all();
        $data = Posts::where('slug', $slug)->get();
        return view('blog.field_post', compact('data', 'category_side'));
    }

    public function list_post() {
        $category_side = Category::all();
        $data = Posts::latest()->paginate(6);
        return view('blog.list_post', compact('data', 'category_side'));
    }

    public function list_category(category $category) {
        $category_side = Category::all();

        $data = $category->posts()->paginate();
        return view('blog.list_post', compact('data', 'category_side'));
    }

    public function contact(category $category) {
        $category_side = Category::all();

        $data = $category->posts()->paginate();
        return view('blog.contact', compact('category_side'));
    }

    public function about(category $category) {
        $category_side = Category::all();

        $data = $category->posts()->paginate();
        return view('blog.about', compact('category_side'));
    }

    public function search(request $request) {
        $category_side = Category::all();

        $data = Posts::where('judul', $request->search)->orWhere('judul','like','%'.$request->search.'%')->paginate(6);
        return view('blog.list_post', compact('data', 'category_side'));
    }
}
