<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Biodata;
use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KmsDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'KMS';
        $action = __FUNCTION__;
        $bottom = true;
        $footer = false;
        $header = 'header-title';
        
        $nomor_telepon = auth()->user()->nomor_telepon;

        // $biodata = Biodata::find($nomor_telepon);
        $biodata = Biodata::where('nomor_telepon', $nomor_telepon)->get();

        if($biodata == '[]'){
            return view('kms.index', compact('page_title', 'action', 'bottom', 'footer', 'header'));
        }
        else{            
            // return $biodata;
            $biodata = Biodata::where('nomor_telepon', $nomor_telepon)->get()[0];
            $balita = Balita::where('no_kk', $biodata->no_kk)->get();

            return view('kms.index', compact('page_title', 'action', 'bottom', 'footer', 'header'), ['balita'=>$balita]);
        }


        // return $biodata;
        // $balita = Balita::where('no_kk', $biodata->no_kk)->get();

        // return $balita;
        // return view('kms.index', compact('page_title', 'action', 'bottom', 'footer', 'header'), ['balita'=>$balita]);
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
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Detail KMS';
        $action = __FUNCTION__;
		$bottom = false;
        $footer = false;
        $header = 'header-back';

        $balita = Balita::find($id);
        $kehadiran = Kehadiran::where('nik', $balita->nik)->get();

        return view('kms.show', compact('page_title', 'action', 'bottom', 'footer', 'header'), ['balita'=>$balita, 'kehadiran'=>$kehadiran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function edit(Balita $balita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balita $balita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balita $balita)
    {
        //
    }
}
