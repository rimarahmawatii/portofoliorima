<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    //
    function show(){
        $data['portofolio']=Portofolio::all();
        return view('portofolio',$data);
    }
    function add(){
        $data = [
            'action'=>url('portofolio/create'),
            'tombol'=>'simpan',
            'portofolio'=>(object)[
                'nama'=>'',
                'kategori'=>'',
                'deskripsi'=>'',
                'foto'=>''
            ],
        ];
        return view ('formportofolio', $data);

    }
    function create (Request $req){
        Portofolio::create([
            'nama'=>$req->nama,
            'kategori'=>$req->kategori,
            'deskripsi'=>$req->deskripsi,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('portofolio');
    }
    function hapus($id){
        $portofolio=Portofolio::where('id',$id)->first();
        $portofolio->delete();
        // Storage::delete($portofolio->foto);
        return redirect('portofolio');
    }
    function edit ($id) {
        $data['portofolio']=Portofolio::find($id);
        $data['action']=url('portofolio/update').'/'.$data['portofolio']->id;
        $data['tombol']='update';
        return view('formportofolio',$data);
    }
    function update(Request $req){
        Portofolio::where('id',$req->id)->update([
            'nama'=>$req->nama,
            'kategori'=>$req->kategori,
            'deskripsi'=>$req->deskripsi,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('portofolio');
    }
}


