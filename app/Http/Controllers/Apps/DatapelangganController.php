<?php

namespace App\Http\Controllers\aPPS;

use App\Models\Data;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DatapelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('datas')
            ->join('pelanggans', 'datas.id_pelanggan', '=', 'pelanggans.id_pelanggan')
            ->select('*')
            ->get();

        $data = array(
            'data' => $datas,
        );

        return view('data.index', $data);
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
        Validator::make(
            $request->all(),
            [
                'id_pelanggan' => ['required'],
                'tanggal_bayar' => ['required', 'date'],
                'bayar' => ['required', 'numeric'],
                'bulanan_ke' => ['required', 'numeric'],
            ]

        );
        Data::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pelanggan)
    {
        $datas = DB::table('datas')
            ->join('pelanggans', 'datas.id_pelanggan', '=', 'pelanggans.id_pelanggan')
            ->select('*')
            ->where('datas.id_pelanggan', $id_pelanggan)
            ->get();

        $id_pelanggan = Pelanggan::findorfail($id_pelanggan);

        $data = array(
            'data' => $datas,
            'id_pelanggan' => $id_pelanggan,

        );

        return view('pelanggan.data', $data);
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
