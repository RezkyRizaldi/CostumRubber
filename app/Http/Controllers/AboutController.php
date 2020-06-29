<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about.about');
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
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique',
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

        if($validator->fails()){
            return redirect('/contact')->with('success', 'Silakan isi bidang yang kosong!');
        } else {
            $posts = Post::create([
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}