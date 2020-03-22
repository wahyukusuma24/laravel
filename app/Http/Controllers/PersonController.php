<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = \App\Person::all();
       
        return view('person.index', ['person' => $person]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   $person = new Person;
    //   $person->nama = $request->nama;
    //   $person->email = $request->email;

    //   $person->save();

    // Person::create([
    //     'nama' => $request->nama,
    //     'email' => $request->email,
    // ]);
    $request->validate([
        'email' => 'required',
        
    ]);

    person::create($request->all());

     return redirect('/person')->with('status','data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('person.show', compact('person') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {

        return view('person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        person::where('id', $person->id)
            ->update([
                'email' =>$request->email
            ]);
            return redirect('/person')->with('status','data user berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person::destroy($person->id);

        return redirect('/person')->with('status','data user berhasil dihapus');
    }
}
