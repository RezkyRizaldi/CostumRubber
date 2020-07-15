<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required|unique:chat',
            'username' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ],
            [
                'email.required' => 'Harap Masukkan E-mail !',
                'username.required' => 'Harap Masukkan Nama !',
                'subject.required' => 'Harap Masukkan Subjek !',
                'message.required' => 'Harap Masukkan Pesan !',
            ]
        );

           $posts = Contact::create([
                'email' => $request->input('email'),
                'username' => $request->input('username'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ]);
 
            if ($posts) {
                return redirect('/contact')->with('success', 'Pesan berhasil terkirim!');
               
            } else{
                return redirect('/contact')->with('success', 'Pesan gagal terkirim!');
            }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}