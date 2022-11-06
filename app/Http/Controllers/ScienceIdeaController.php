<?php

namespace App\Http\Controllers;

use App\Models\ScienceIdea;
use Illuminate\Http\Request;

class ScienceIdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $science_idea = ScienceIdea::all();
        return  view('science_idea.index')->with('science_idea',$science_idea);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('science_idea.create');
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
        ScienceIdea::create($input);
        return redirect('science_idea')->with('flash_message', 'Science idea Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $science_idea = ScienceIdea::find($id);
        return view('science_idea.show')->with('science_idea', $science_idea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $science_idea = ScienceIdea::find($id);
        return view('science_idea.edit')->with('science_idea', $science_idea);
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
        $science_idea = ScienceIdea::find($id);
        $input = $request->all();
        $science_idea->update($input);
        return redirect('science_idea')->with('flash_message', 'Science idea Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ScienceIdea::destroy($id);
        return redirect('science_idea')->with('flash_message', 'Science idea deleted!');
    }
}
