<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Form Rekam Medis',
            'cardTitle' => 'FORM PENDAFTARAN PASIEN BARU'
        );

        return view('page.pelayanan.pasien_baru', $data);
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
        try {
            $data = $request->all();

            $request->validate([
                'nomor_mr' => 'required|numeric|min:10|min:20',
                'nama_pasien' => 'required',
                'nomor_ktp' => 'required|numeric|min:16',
                'tgl_lahir' => 'required|date',
                'tempat_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'pekerjaan' => 'required',
                'golongan' => 'required',
                'nomor_hp' => 'required|numeric|min:11'
            ]);

            $pasien = new Pelayanan;
            $pasien->create($data);

        } catch (\Exception $e) {

            Log::info($e->getMessage());
            return redirect()
                            ->back()
                            ->withInput()
                            ->with('error', $e->getMessage());

        }



        Pelayanan::create($request->except('_token'));
        return redirect()->route('pasienbaru');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
