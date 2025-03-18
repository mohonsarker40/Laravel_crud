<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use function PHPUnit\Framework\name;

class PeopleController extends Controller
{

    public function index()
    {
        $people['people'] = People::orderBy('id', 'desc')->get();
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
        return redirect()->route('people.index');

    }


    public function show(People $people)
    {
        //
    }


    public function edit($id)
    {
        $people = People::where('id', $id)->first();
        return view('peoples.edit')->with('people', $people);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name'=> 'required',
            'nid'=> 'required',
            'phone'=> 'required',
        ]);

        $people = People::where('id', $id)->first();
        if($people){
            $people->name = $request->input('name');
            $people->nid = $request->input('nid');
            $people->phone = $request->input('phone');
            $people->save();
        }

        return redirect()->route('people.index');

    }


    public function destroy($id)
    {
        $people = People::where('id', $id)->first();
        $people->delete();
        return redirect()->back();
    }
}
