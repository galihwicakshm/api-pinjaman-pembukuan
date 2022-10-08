<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('datas')
            ->join('pelanggans', 'datas.id_pelanggan', '=', 'pelanggans.id_pelanggan')
            ->select('*')
            ->get();

        // $data = Data::all();

        return response()->json(['status' => 200, 'message' => 'Data berhasil ditampilkan', 'data' => $data]);
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
        $validator = Validator::make(
            $request->all(),
            [
                'id_pelanggan' => ['required', 'numeric'],
                'bayar' => ['required', 'numeric'],
                'bulanan_ke' => ['required', 'numeric'],
                'tanggal_bayar' => ['required', 'date'],
            ]

        );

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            $data = Data::create($request->all());
            return response()->json(['status' => 200, 'message' => 'Pelanggan berhasil ditambahkan', 'data' => $data,]);
        } catch (QueryException $e) {
            return response()->json(['message' => 'Failed' . $e]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_data)
    {
        $data = DB::table('datas')->join('pelanggans', 'datas.id_pelanggan', '=', 'pelanggans.id_pelanggan')->where('datas.id_data', $id_data)->get();
        if ($data != '[]') {
            return response()->json(['status' => 200, 'message' => 'Data berhasil ditampilkan', 'data' => $data]);
        } else if ($data == '[]') {
            return response()->json(['status' => 404, 'message' => 'Data tidak ditemukan']);
        }
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
    public function update(Request $request, $id_data)
    {

        $data = Data::findorfail($id_data);
        $validator = Validator::make(
            $request->all(),
            [
                'id_pelanggan' => ['required', 'numeric'],
                'bayar' => ['required', 'numeric'],
                'bulanan_ke' => ['required', 'numeric'],
                'tanggal_bayar' => ['required', 'date'],
            ]

        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $data->update($request->all());
            $dataupdate =
                DB::table('datas')->join('pelanggans', 'datas.id_pelanggan', '=', 'pelanggans.id_pelanggan')->where('datas.id_data', $id_data)->get();
            return response()->json(['status' => 200, 'message' => 'Data berhasil diperbarui', 'data' => $dataupdate]);
        } catch (QueryException $e) {
            return response()->json(['status' => 400, 'message' => 'Data gagal diperbarui']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Data::find($id);

        try {
            $data->delete();
            return response()->json(['status' => 200, 'message' => 'Data berhasil dihapus']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 400, 'message' => 'Data gagal dihapus']);
        }
    }
}
