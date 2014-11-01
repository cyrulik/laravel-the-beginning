<?php namespace App\Http\Controllers;

use App\Character;
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
     * @Get("/about")
     */
    public function about()
    {
        $page = ['title' => 'About'];

        return view('home/about', compact('page'));
    }
}
