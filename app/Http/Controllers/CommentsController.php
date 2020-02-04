<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    public function showUser($id) {
    	return Comments::where('user_id', $id)->get();
    }

    public function showGame($id) {
    	return Comments::where('game_id', $id)->get();
    }
}
