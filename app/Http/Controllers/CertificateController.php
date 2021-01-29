<?php

namespace App\Http\Controllers;

use App\certificate;
use Illuminate\Http\Request;
use InImage;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.index');
    }
    public function generateImage()
    {
        $img = InImage::make(public_path('images/Dummy.png'));
        $img->text('Nur Firdaus', 300, 200, function ($font) {
            $font->file(public_path('fonts/lora.ttf'));
            $font->size(24);
            $font->color('#202020');
            $font->align('center');
            $font->valign('center');
            $font->angle(0);
        });
        $img->save(public_path('images/Dummy4.jpg'));
        return redirect('main');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(certificate $certificate)
    {
        //
    }
}
