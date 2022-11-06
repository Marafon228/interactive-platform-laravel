<?php

namespace App\Http\Controllers;

use App\Models\CurrentIdea;
use Illuminate\Http\Request;

class CurrentIdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_idea = CurrentIdea::all();
        return  view('current_idea.index')->with('current_idea',$current_idea);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('current_idea.create');
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
        CurrentIdea::create($input);
        return redirect('current_idea')->with('flash_message', 'Current idea Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $current_idea = CurrentIdea::find($id);
        return view('current_idea.show')->with('current_idea', $current_idea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $current_idea = CurrentIdea::find($id);
        return view('current_idea.edit')->with('current_idea', $current_idea);
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
        $current_idea = CurrentIdea::find($id);
        $input = $request->all();
        $current_idea->update($input);
        return redirect('current_idea')->with('flash_message', 'Current idea Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CurrentIdea::destroy($id);
        return redirect('current_idea')->with('flash_message', 'Current idea deleted!');
    }
}
