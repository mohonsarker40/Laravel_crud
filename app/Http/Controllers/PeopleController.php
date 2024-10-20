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

        People::create($request->all());
        return redirect()->route('people.index')->with('success', 'Person added successfully.');

    }


    public function show(People $people)
    {
        //
    }


    public function edit(People $people)
    {
        $id = request()->input('id');
        $people = People::where('id', $id)->first();
        return redirect()->route('people.edit', $people)->with('success', 'update');

    }


    public function update(Request $request, People $people)
    {
        $request->validate([
            'name' => 'required',
            'nid' => 'required',
            'phone' => 'required',
        ]);

        $people->update($request->all());
        return redirect()->route('people.index', $people )->with('success', 'update');
    }


    public function destroy($id)
    {
        $people = People::where('id', $id)->first();
        $people->delete();
        return redirect()->back();
    }
}
