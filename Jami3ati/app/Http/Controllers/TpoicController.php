<?php

namespace App\Http\Controllers;

use App\Tpoic;
use Illuminate\Http\Request;

class TpoicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $topics = Tpoic::latest()->paginate(5);
        return view('topics.index',compact('topics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:5',
            'content'=> 'required|min:10'
        ]);

        $topic = auth()->user()->topics()->create($data);

        return redirect()->route('topics.show',$topic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tpoic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Tpoic $topic)
    {
        return view('topics.show',compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tpoic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Tpoic $topic)
    {
        //$this->authorize('update',$topic);

        return view('topics.edit',compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Tpoic $topic
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, Tpoic $topic)
    {
        //$this->authorize('update',$topic);


        $data = $request->validate([
            'title' => 'required|min:5',
            'content'=> 'required|min:10'
        ]);
        $topic->update($data);

        return redirect()->route('topics.show',$topic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Tpoic $topic
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Tpoic $topic)
    {
        //$this->authorize('delete',$topic);


        Tpoic::destroy($topic->id);

        return redirect('/');
    }
}
