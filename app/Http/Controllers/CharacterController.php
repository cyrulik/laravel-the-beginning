<?php namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CharacterController extends Controller {

    /**
     * @Get("/character/add")
     */
    public function add()
    {
        $page      = ['title' => 'New character'];
        $character = new Character();

        return view('character/add', compact('page'))->with('character', $character);
    }

    /**
     * @Post("/character/add")
     */
    public function create(Request $request)
    {
        $page      = ['title' => 'New character'];
        $character = new Character();
        $character->fill($request->input())->save();

        return view('character/create', compact('page'))->with('character', $character);
    }

    /**
     * @Get("/character/{id}")
     */
    public function index($id)
    {
        $page      = ['title' => 'Character page'];
        $character = Character::find($id);

        return view('character/index', compact('page'))->with('character', $character);
    }

    /**
     * @Get("/character/{id}/edit")
     */
    public function edit($id)
    {
        $page      = ['title' => 'Character edit'];
        $character = Character::find($id);

        return view('character/edit', compact('page'))->with('character', $character);
    }
}
