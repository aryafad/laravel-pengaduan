<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
// use Yajra\Datatables\Facades\DataTables;
use Datatables;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $getData    = Pengaduan::query();

        if ($request->status) {
            $getData->where('status', $request->status);
        }

        return Datatables::eloquent($getData)->make(true);
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

        $request->validate([
            'name'          => 'required',
            'nik'           => 'required',
            'alamat'        => 'required',
            'photo_ktp'     => 'required',
            'description'   => 'required',
        ]);

        $photo      = '';

        if ($request->hasFile('photo_ktp')) {
            $photo = date("Ymd").time().rand().'.'.$request->photo_ktp->extension();
            $request->photo_ktp->move(public_path('image'), $photo);
        }

        $create     = Pengaduan::create([
            'name'          => $request->name,
            'nik'           => $request->nik,
            'alamat'        => $request->alamat,
            'description'   => $request->description,
            'photo_ktp'     => $photo,
            'status'        => 1
        ]);

        $response   = [
            'message'   => 'Pengaduan berhasil dibuat !',
            'data'      => $create
        ];

        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findData   = Pengaduan::find($id);

        if (!$findData) {
            return response()->json(['message' => 'Data Not Found !'], 404);
        }

        $response   = [
            'message'   => 'Data fetched successfully !',
            'data'      => $findData
        ];

        return response()->json($response, 200);
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
        $findData   = Pengaduan::find($id);

        if (!$findData) {
            return response()->json(['message' => 'Data Not Found !'], 404);
        }

        $request->validate([
            'keterangan'    => 'required',
            'status'        => 'required',
        ]);

        $findData->update([
            'feedback'      => $request->keterangan,
            'status'        => $request->status,
        ]);

        $updated   = Pengaduan::find($id);

        $response   = [
            'message'   => 'Pengaduan berhasil diupdate !',
            'data'      => $updated
        ];

        return response()->json($response, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findData   = Pengaduan::find($id);

        if (!$findData) {
            return response()->json(['message' => 'Data Not Found !'], 404);
        }

        if ($findData->photo_ktp != null && file_exists(public_path() . '/image/' . $findData->photo_ktp)) {
            unlink('image/'.$findData->photo_ktp);
        }

        $findData->delete();

        $response   = [
            'message'   => 'Data deleted successfully'
        ];

        return response()->json($response, 200);
    }

    public function check_pengaduan(Request $request)
    {
        $request->validate([
            'nik'   => 'required'
        ]);

        $findData   = Pengaduan::where('nik', $request->nik)->first();

        if (!$findData) {
            return response()->json(['message' => 'Data not found !'], 422);
        }

        $response   = [
            'message'   => 'Data fetched successfully',
            'data'      => $findData
        ];
       

        return response()->json($response, 200);
    }
}
