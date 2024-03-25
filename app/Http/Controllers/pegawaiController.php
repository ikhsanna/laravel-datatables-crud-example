<?php

namespace App\Http\Controllers;

use App\Models\dataPegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class pegawaiController extends Controller
{
    public function index(Request $req)
    {
        $data = dataPegawai::get();
        if ($req -> ajax()){
            
            return datatables()->of($data)
            ->addColumn('action', function ($data) {
              $button = " <button class='edit btn  btn-danger' id='" . $data->id . "' >Edit</button>";
              $button .= " <button class='hapus btn  btn-danger' id='" . $data->id . "' >Hapus</button>";
              return $button;
          })
          ->rawColumns(['action'])
            ->make(true);
        }
        return view('pegawacci');
    }
    

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name'                => 'required',
        //     'address'   => 'required',
        //   ],[
        //     'name.required'       => 'kolom name masih kosong!',
        //     'address.required' => 'kolom address masih kosong',
        //   ]);

          $pegawai = new dataPegawai();
          $pegawai -> name = $request -> name;
          $pegawai -> address = $request -> address;
          $simpan = $pegawai -> save();
          if ($simpan){
              return response()->json(['data'=>$pegawai, 'text'=> 'Data berhasil disimpan'], 200);

          }else{
            return response()->json(['data'=>$pegawai, 'text'=> 'Data berhasil disimpan']);
          }
        
    }

    public function edit(Request $request)
    {
      $id = $request->id;
      $data = dataPegawai::find($id);
      return response()->json(['data' => $data]);
    }

    public function updates(Request $request)
    {
        // dd($request->all());
        $id = $request->id;
        $datas = [
            'name' => $request->name,
            'address' => $request->address
        ];
        $data = dataPegawai::find($id);
        $simpan = $data->update($datas);
        if ($simpan) {
            return response()->json(['text' => 'berhasil diubah'], 200);
        } else {
            return response()->json(['text' => 'Gagal diubah'], 422);
        }
    }

    public function destroy(Request $request)
    {
      $id = $request->id;
      $data = dataPegawai::find($id);
      $data->delete();
      return response()->json(['text' => 'berhasil dihapus'], 200);
    }
}


