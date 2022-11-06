<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnyIdea\Comment\StoreRequest;
use App\Models\AnyIdea;
use App\Models\Comment;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(AnyIdea $anyIdea, StoreRequest $request)
    {

        $date = $request->validated();
        $date['id_user'] = auth()->user()->id;
        $date['id_any_idea'] = $anyIdea->id;

        Comment::create($date);


        return redirect()->route('any_idea.show', $anyIdea->id);
    }
}
