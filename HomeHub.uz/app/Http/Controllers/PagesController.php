<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PagesController extends Controller {


    


    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        
        return view('pages.index')->with('posts', $posts);
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getSignup() {
        return view('pages.signup');
    }

    public function getSignin() {
        return view('pages.signin');
    }

    public function getDashboard() {
        return view('pages.dashboard');
    }

    public function getPosts() {
        return view('pages.posts');
    }

    public function getEditpost() {
        return view('pages.editpost');
    }
}
