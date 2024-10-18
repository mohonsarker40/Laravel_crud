<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index()
    {
        $peoples = People::all();
        return view('peoples.index')->with('$peoples', $peoples);
    }


    public function create()
    {
        return view('peoples.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nid' => 'required',
            'phone' => 'required',
        ]);

        $input = $request->except('_token');

        $peoples = new People();
        $peoples->fill($input);
        $peoples->save();

        return redirect()->back();
    }


    public function show(People $people)
    {
        //
    }


    public function edit(People $people)
    {
        //
    }


    public function update(Request $request, People $people)
    {
        //
    }


    public function destroy(People $people)
    {
        //
    }
}
