<?php

namespace App\Http\Controllers;

use App\Models\Story;

use Illuminate\Http\Request;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data['q'] = $request->query('q');
        $data['status'] = $request->query('status');
        //$data['statuses'] = Status::where('id', 'on')->orWhere('id', 'off')->get();

        $query = Story::select('stories.*')
            ->where(function ($query) use ($data) {
                $query->where('stories.name', 'like', '%' . $data['q'] . '%');
            });

        // if ($data['status'])
        //     $query->where('categories.status', $data['status']);

        $data['stories'] = $query->paginate(30)->withQueryString();
        
        // dd($data);

        return view('stories.index',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'story' => 'required',
            'title' => 'required',
        ]);

        // dd($request->all());
      
        Story::create($request->all());
       
        return redirect()->route('stories.index')
                        ->with('success','Your story has been sent.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
