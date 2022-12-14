<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::all();
        return view('contact.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
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
            'username'=>['required', 'string', 'max:255', 'unique:users'],
            'password'=>['required', 'string', 'min:8'],
            'name'=>['required', 'string', 'max:255'],
            'surname'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);
        Contact::create($request->all());
        return redirect('/contact');
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
        $data = Contact::find($id);
        return view('contact.edit',compact(['data']));
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
        $request->validate([
            'username'=>['required', 'string', 'max:255', 'unique:users'],
            'password'=>['required', 'string', 'min:8'],
            'name'=>['required', 'string', 'max:255'],
            'surname'=>['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);
        Contact::find($id)->update($request->all());
        return redirect('/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        return redirect('/contact');
    }
}
