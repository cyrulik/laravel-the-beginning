<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller {

    /**
     * @Get("/")
     */
    public function index()
    {
        $page = ['title' => 'Home page'];

        return view('home/index', compact('page'));
    }

    /**
     * @Get("/account/{id}")
     */
    public function account($id)
    {
        $page = ['title' => 'Account'];

        return view('home/account', compact('page'))->with('id', $id);
    }

    /**
     * @Get("/about")
     */
    public function about()
    {
        $page = ['title' => 'About'];

        return view('home/about', compact('page'));
    }

}
