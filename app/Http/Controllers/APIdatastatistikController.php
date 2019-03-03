<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tabel_pendidikan;
use App\data_penduduk;
use App\tabel_agama;
use App\tabel_jenis_pekerjaan;

class APIdatastatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabel_pendidikans=tabel_pendidikan::all();
        return response()->json(["tabel_pendidikans" => $tabel_pendidikans]);

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


    public function pendidikan()
    {
        //

        $tabel_pendidikans=tabel_pendidikan::all();

        // $data_pendidikans=data_penduduk::where('Pendidikan','=',$kategori)->where('Jenis_Kelamin','=',$kelamin)->count();

        for($i=0;$i<$tabel_pendidikans->count();$i++){

            $data_pendidikans_totals[$i]=data_penduduk::where('Pendidikan','=',$tabel_pendidikans[$i]->id)->count();
        }

         // dd($data_pendidikans_totals);


        return response()->json(["tabel_pendidikans" => $tabel_pendidikans,"data_pendidikans_totals" => $data_pendidikans_totals]);
    }

    public function agama()
    {

        $tabel_agamas=tabel_agama::all();

        // $data_agamas=data_penduduk::where('Agama','=',$kategori)->where('Jenis_Kelamin','=',$kelamin)->count();

        for($i=0;$i<$tabel_agamas->count();$i++){

            $tabel_agamas_totals[$i]=data_penduduk::where('Agama','=',$tabel_agamas[$i]->id)->count();
        }



        return response()->json(["tabel_agamas" => $tabel_agamas,"tabel_agamas_totals" => $tabel_agamas_totals]);
    }


    public function jenispekerjaan()
    {

        $tabel_jenis_pekerjaans=tabel_jenis_pekerjaan::all();

        // $data_jenis_pekerjaans=data_penduduk::where('jenis_pekerjaan','=',$kategori)->where('Jenis_Kelamin','=',$kelamin)->count();

        for($i=0;$i<$tabel_jenis_pekerjaans->count();$i++){

            $tabel_jenis_pekerjaans_totals[$i]=data_penduduk::where('jenis_pekerjaan','=',$tabel_jenis_pekerjaans[$i]->id)->count();
        }



        return response()->json(["tabel_jenis_pekerjaans" => $tabel_jenis_pekerjaans,"tabel_jenis_pekerjaans_totals" => $tabel_jenis_pekerjaans_totals]);
    }



}
