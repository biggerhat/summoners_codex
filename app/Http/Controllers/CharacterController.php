<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CharacterController extends Controller {
    public function index(Request $request) {
        return Inertia::render("Characters/Index", [
            "characters" => fn () => Character::with("attributes")->get(),
        ]);
    }

    public function view(Request $request, Character $character) {
        return Inertia::render("Characters/View", [
            "character" => fn () => $character->loadMissing("set", "attributes", "cards"),
        ]);
    }
}
