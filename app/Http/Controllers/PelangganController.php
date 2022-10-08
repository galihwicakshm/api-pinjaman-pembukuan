<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();

        return response()->json(['status' => 200, 'message' => 'Data berhasil ditampilkan', 'data' => $pelanggan]);
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
                'nama_pelanggan' => ['required', 'unique:pelanggans'],
                'total_bulan' => ['required', 'numeric'],
            ]

        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $pelanggan = Pelanggan::create($request->all());
            return response()->json(['status' => 200, 'message' => 'Data berhasil ditambahkan', 'data' => $pelanggan]);
        } catch (\Exception $e) {
            return response()->json(['status' => 400, 'message' => 'Data gagal ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pelanggan)

    {
        $pelanggan = DB::table('pelanggans')
            ->where('id_pelanggan', $id_pelanggan)
            ->get();

        if ($pelanggan != '[]') {
            return response()->json(['status' => 200, 'message' => 'Data berhasil ditampilkan', 'data' => $pelanggan]);
        } else if ($pelanggan == '[]') {
            return response()->json(['status' => 404, 'message' => 'Data tidak ditemukan']);
        }
    }


    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pelanggan)
    {

        $pelanggan = Pelanggan::findorfail($id_pelanggan);
        $validator = Validator::make(
            $request->all(),
            [
                'nama_pelanggan' => ['required', 'unique:pelanggans'],
                'total_bulan' => ['required', 'numeric'],
            ]

        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $pelanggan->update($request->all());
            return response()->json(['status' => 200, 'message' => 'Data berhasil diperbarui', 'data' => $pelanggan]);
        } catch (\Exception $e) {
            return response()->json(['status' => 400, 'message' => 'Data gagal diperbarui']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pelanggan)
    {
        $pelanggan = Pelanggan::find($id_pelanggan);


        try {
            $pelanggan->delete();
            DB::table('datas')
                ->where('id_pelanggan', $id_pelanggan)
                ->delete();
            return response()->json(['status' => 200, 'message' => 'Data berhasil dihapus']);
        } catch (\Throwable $e) {
            return response()->json(['status' => 400, 'message' => 'Data gagal dihapus']);
        }
    }
    public function search(Request $request)
    {

        if ($request->has('search')) {
            $data = DB::table('pelanggans')

                ->where('nama_pelanggan', 'LIKE', '%' . $request->search . '%')
                ->select('*')
                ->get();
            if ($data != '[]') {
                return response()->json(['status' => 200, 'message' => 'Data berhasil ditemukan', 'data' => $data]);
            } else if ($data == '[]') {
                return response()->json(['status' => 404, 'message' => 'Data tidak ditemukan']);
            }
        } else {
            $data = Pelanggan::all();
        }
    }
}
