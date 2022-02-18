<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class ProfileDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Profile';
        $action = __FUNCTION__;
		$bottom = false;
        $footer = false;
        $header = 'header-back';


        $nomor_telepon = auth()->user()->nomor_telepon;

        $biodata = Biodata::where('nomor_telepon', $nomor_telepon)->get();

        if($biodata == '[]'){
            return view('profile.index', compact('page_title', 'action', 'bottom', 'footer', 'header'));
        }
        else{            
            // return $biodata;
            $biodata = Biodata::where('nomor_telepon', $nomor_telepon)->get()[0];
            return view('profile.show', compact('page_title', 'action', 'bottom', 'footer', 'header'), ['biodata'=>$biodata]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Edit Profile';
        $action = __FUNCTION__;
		$bottom = false;
        $footer = false;
        $header = 'header-back';

        return view('profile.create', compact('page_title', 'action', 'bottom', 'footer', 'header'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_telepon' => 'required|unique:biodatas',
            'no_kk' => 'required',
            'nik' => 'required|unique:biodatas',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        
        Biodata::create($validatedData);

        return redirect('/profile')->with('success', 'Berhasil Mengubah Data Diri!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Profile';
        $action = __FUNCTION__;
		$bottom = false;
        $footer = false;
        $header = 'header-back';

        $biodata = Biodata::find($id);

        return view('profile.edit', compact('page_title', 'action', 'bottom', 'footer', 'header'), ['biodata'=>$biodata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nomor_telepon' => 'required',
            'no_kk' => 'required',
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);
        
        // return $validatedData;

        Biodata::where('id', $id)
                    ->update($validatedData);

        return redirect('/profile')->with('success', 'Data Diri Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $biodata)
    {
        //
    }
}
