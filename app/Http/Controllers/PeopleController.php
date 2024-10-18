<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use function PHPUnit\Framework\name;

class PeopleController extends Controller
{

    public function index()
    {
        $people['people'] = People::all();
        return view('peoples.index')->with( $people);
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

//        return redirect()->back();
        return redirect()->route('people.index')->with('success', 'Person added successfully.');

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
