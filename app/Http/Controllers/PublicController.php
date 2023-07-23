<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Blogs;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request){
        return view("index");
    }
    public function portfolio(Request $request){
        $portfolios = Portfolio::all();
        return view("portfolio",compact('portfolios'));
    }
    public function about(Request $request){
        return view("about");
    }
    public function blog(Request $request,$id){
        $blog = Blog::find($id);
        return view("blog",compact('blog'));
    }
    public function contact(Request $request){
        return view("contact");
    }
    public function blogs(Request $request){
        $blogs = Blog::all();
        return view("blogs",compact('blogs'));
    }
}
