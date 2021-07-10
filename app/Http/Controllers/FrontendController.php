<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Index page
     * @return View
     */
    public function index() {
        $data['title'] = 'Home';

        return view('frontend.index', $data);
    }

    /**
     * About page
     * @return View
     */
    public function about_us() {
        $data['title'] = 'About Us';

        return view('frontend.about', $data);
    }

    /**
     * Contact page
     * @return View
     */
    public function contact_us() {
        $data['title'] = 'Contact Us';

        return view('frontend.contact', $data);
    }
    /**
     * Contact page
     * @return View
     */
    public function register() {
        $data['title'] = 'Register';

        return view('frontend.register', $data);
    }
}
