<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnyIdea\Comment\StoreRequest;
use App\Models\AnyIdea;
use App\Models\Comment;
use Illuminate\Http\Request;

class AnyIdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anyIdea = AnyIdea::all();
        return  view('any_idea.index')->with('any_idea',$anyIdea);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('any_idea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        AnyIdea::create($input);
        return redirect('any_idea')->with('flash_message', 'any idea Addedd!');
    }

    public function __invoke(AnyIdea $anyIdea, StoreRequest $request)
    {

        $date = $request->validated();
        $date['id_user'] = auth()->user()->id;
        $date['id_any_idea'] = $anyIdea->id;

        Comment::create($date);


        return redirect()->route('any_idea.show', $anyIdea->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $any_idea = AnyIdea::find($id);
        //$comments = auth()->user()->comments;

        return view('any_idea.show')->with('any_idea', $any_idea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $any_idea = AnyIdea::find($id);
        return view('any_idea.edit')->with('any_idea', $any_idea);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $any_idea = AnyIdea::find($id);
        $input = $request->all();
        $any_idea->update($input);
        return redirect('any_idea')->with('flash_message', 'Any idea Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AnyIdea::destroy($id);
        return redirect('any_idea')->with('flash_message', 'Any idea deleted!');
    }
}
