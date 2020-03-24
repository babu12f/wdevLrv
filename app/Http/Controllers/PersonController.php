<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PersonController extends Controller
{
    public function index()
    {
        $persons = People::all();

        return view('person.index',[
            'persons' => $persons
        ]);
    }

    public function create()
    {
        return view("person.create");
    }

    public function addPeople()
    {
        return view('addPeople');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|min:3|max:20|alpha',
            'father_name' => 'required|min:3|max:20|string'
        ]);

        $name = request('name');
        $fatherName = request('father_name');

        People::create([
            'name' => $name,
            'father_name' => $fatherName
        ]);

        return back();
    }

    public function list()
    {
        $person_list = People::all();

        return view('list', [
            'student_list' => $person_list
        ]);
    }

    public function edit($id)
    {
        $person = People::find($id); //"select * from persons where id=$id";
        return view('person.edit', [
            'person' => $person
        ]);
    }

    public function update($id)
    {
        $person = People::find($id);

        request()->validate([
            'name' => 'required|min:3|max:20|alpha',
            'father_name' => 'required|min:3|max:20|alpha'
        ]);

        $name = request('name');
        $fatherName = request('father_name');

        $person->update([
            'name' => $name,
            'father_name' => $fatherName
        ]);

        return back();
    }
}
