<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(Request $request) {

    	$data = Game::query();

    	if ($request->has('name')) {
    		$data->where('name', 'like', '%' . $request->get('name') . '%');
    	}

    	if ($request->has('publisher')) {
    		$data->where('publisher', 'like', '%' . $request->get('publisher') . '%');
    	}

    	if ($request->has('release_date')) {
    		$data->where('release_date', 'like', '%' . $request->get('release_date') . '%');
    	}

    	return $data->get();
    }
}
