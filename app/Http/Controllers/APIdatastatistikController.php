<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tabel_pendidikan;
use App\data_penduduk;
use App\tabel_agama;
use App\tabel_jenis_pekerjaan;
use App\tabel_jenis_kelamin;
use App\tabel_golongan_darah;

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

        $tabel_pendidikans=tabel_pendidikan::all();


        for($i=0;$i<$tabel_pendidikans->count();$i++){

            $data_pendidikans_totals[$i]=data_penduduk::where('Pendidikan','=',$tabel_pendidikans[$i]->id)->count();
            $data_pendidikans_L[$i]=data_penduduk::where('Pendidikan','=',$tabel_pendidikans[$i]->id)->where('Jenis_Kelamin','=',1)->count();
            $data_pendidikans_P[$i]=data_penduduk::where('Pendidikan','=',$tabel_pendidikans[$i]->id)->where('Jenis_Kelamin','=',2)->count();
        }



        return response()->json(["tabel_pendidikans" => $tabel_pendidikans,"data_pendidikans_totals" => $data_pendidikans_totals,"data_pendidikans_L" => $data_pendidikans_L,"data_pendidikans_P" => $data_pendidikans_P]);
    }

    public function agama()
    {

        $tabel_agamas=tabel_agama::all();


        for($i=0;$i<$tabel_agamas->count();$i++){

            $tabel_agamas_totals[$i]=data_penduduk::where('Agama','=',$tabel_agamas[$i]->id)->count();
            $data_agamas_L[$i]=data_penduduk::where('Agama','=',$tabel_agamas[$i]->id)->where('Jenis_Kelamin','=',1)->count();
            $data_agamas_P[$i]=data_penduduk::where('Agama','=',$tabel_agamas[$i]->id)->where('Jenis_Kelamin','=',2)->count();
        }



        return response()->json(["tabel_agamas" => $tabel_agamas,"tabel_agamas_totals" => $tabel_agamas_totals,"data_agamas_L" => $data_agamas_L,"data_agamas_P" => $data_agamas_P]);
    }


    public function jenis_pekerjaan()
    {

        $tabel_jenis_pekerjaans=tabel_jenis_pekerjaan::all();


        for($i=0;$i<$tabel_jenis_pekerjaans->count();$i++){

            $tabel_jenis_pekerjaans_totals[$i]=data_penduduk::where('Jenis_Pekerjaan','=',$tabel_jenis_pekerjaans[$i]->id)->count();
            $data_jenis_pekerjaans_L[$i]=data_penduduk::where('Jenis_Pekerjaan','=',$tabel_jenis_pekerjaans[$i]->id)->where('Jenis_Kelamin','=',1)->count();
            $data_jenis_pekerjaans_P[$i]=data_penduduk::where('Jenis_Pekerjaan','=',$tabel_jenis_pekerjaans[$i]->id)->where('Jenis_Kelamin','=',2)->count();
        }



        return response()->json(["tabel_jenis_pekerjaans" => $tabel_jenis_pekerjaans,"tabel_jenis_pekerjaans_totals" => $tabel_jenis_pekerjaans_totals,"data_jenis_pekerjaans_L" => $data_jenis_pekerjaans_L,"data_jenis_pekerjaans_P" => $data_jenis_pekerjaans_P]);
    }

    public function jenis_kelamin()
    {

        $tabel_jenis_kelamins=tabel_jenis_kelamin::all();

        // $data_jenis_kelamins=data_penduduk::where('jenis_kelamin','=',$kategori)->where('Jenis_Kelamin','=',$kelamin)->count();

        for($i=0;$i<$tabel_jenis_kelamins->count();$i++){

            $tabel_jenis_kelamins_totals[$i]=data_penduduk::where('Jenis_Kelamin','=',$tabel_jenis_kelamins[$i]->id)->count();
            $data_jenis_kelamins_L[$i]=data_penduduk::where('Jenis_Kelamin','=',$tabel_jenis_kelamins[$i]->id)->count();
            $data_jenis_kelamins_P[$i]=data_penduduk::where('Jenis_Kelamin','=',$tabel_jenis_kelamins[$i]->id)->count();
        }



        return response()->json(["tabel_jenis_kelamins" => $tabel_jenis_kelamins,"tabel_jenis_kelamins_totals" => $tabel_jenis_kelamins_totals,"data_jenis_kelamins_L" => $data_jenis_kelamins_L,"data_jenis_kelamins_P" => $data_jenis_kelamins_P]);
    }

    public function golongan_darah()
    {

        $tabel_golongan_darahs=tabel_golongan_darah::all();


        for($i=0;$i<$tabel_golongan_darahs->count();$i++){

            $tabel_golongan_darahs_totals[$i]=data_penduduk::where('Golongan_Darah','=',$tabel_golongan_darahs[$i]->id)->count();
            $data_golongan_darahs_L[$i]=data_penduduk::where('Golongan_Darah','=',$tabel_golongan_darahs[$i]->id)->where('Jenis_Kelamin','=',1)->count();
            $data_golongan_darahs_P[$i]=data_penduduk::where('Golongan_Darah','=',$tabel_golongan_darahs[$i]->id)->where('Jenis_Kelamin','=',2)->count();
        }



        return response()->json(["tabel_golongan_darahs" => $tabel_golongan_darahs,"tabel_golongan_darahs_totals" => $tabel_golongan_darahs_totals,"data_golongan_darahs_L" => $data_golongan_darahs_L,"data_golongan_darahs_P" => $data_golongan_darahs_P]);
    }

    public function kelompok_umur()
    {

        $tabel_kelompok_umurs=tabel_kelompok_umur::all();

        // $data_kelompok_umurs=data_penduduk::where('kelompok_umur','=',$kategori)->where('Jenis_Kelamin','=',$kelamin)->count();

        for($i=0;$i<$tabel_kelompok_umurs->count();$i++){

            $tabel_kelompok_umurs_totals[$i]=data_penduduk::where('kelompok_umur','=',$tabel_kelompok_umurs[$i]->id)->count();
            $data_pendidikans_L=data_penduduk::where('Pendidikan','=',$kategori)->where('Jenis_Kelamin','=',1)->count();
            $data_pendidikans_P=data_penduduk::where('Pendidikan','=',$kategori)->where('Jenis_Kelamin','=',2)->count();
        }



        return response()->json(["tabel_kelompok_umurs" => $tabel_kelompok_umurs,"tabel_kelompok_umurs_totals" => $tabel_kelompok_umurs_totals]);
    }



}
