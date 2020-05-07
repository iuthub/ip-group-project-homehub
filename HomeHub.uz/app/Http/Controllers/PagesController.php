<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.index');
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
