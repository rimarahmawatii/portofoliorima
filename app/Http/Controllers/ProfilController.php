<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    //
    function show(){
        $data['profi']=Profil::all();
        return view('profil',$data);
    }
    function add(){
        $data = [
            'action'=>url('profil/create'),
            'tombol'=>'simpan',
            'profil'=>(object)[
                'nis'=>'',
                'nama'=>'',
                'no_telpon'=>'',
                'email'=>'',
                'JK'=>'',
                'deskripsi'=>'',
                'alamat'=>'',
                'foto'=>''
            ],
        ];
        return view ('home', $data);

    }
    function create (Request $req){
        Profil::create([
            'nis'=>$req->nis,
            'nama'=>$req->nama,
            'no_telpon'=>$req->no_telpon,
            'email'=>$req->email,
            'JK'=>$req->JK,
            'deskripsi'=>$req->deskripsi,
            'alamat'=>$req->alamat,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('home');
    }
    function hapus($id){
        $profil = Profil::where('nis',$id) -> first();
        $profil->delete();
        // Storage::delete($profil->foto);
        return redirect('home');
    }
    function edit ($id) {
        $data['profil']=Profil::find($id);
        $data['action']=url('profil/update').'/'.$data['profil']->nis;
        $data['tombol']='update';
        return view('profil',$data);
    }
    function update(Request $req){
        Profil::where('nis',$req->nis)->update([
            'nis'=>$req->nis,
            'nama'=>$req->nama,
            'no_telpon'=>$req->no_telpon,
            'email'=>$req->email,
            'JK'=>$req->JK,
            'deskripsi'=>$req->deskripsi,
            'alamat'=>$req->alamat,
            'foto'=>$req->file('foto')->store('foto')
        ]);
        return redirect('home');
    }
}


