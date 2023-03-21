<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbCont2 extends Controller
{
    public function getData(){
        $data=DB::select('select * from  Module ');
        return view('index',['elements'=>$data]);
    }
    public function addData(Request $request){
        $codeM= $request->codeM;
        $titre= $request->Titre;
        $MasseH= $request->MasseH;
        $data=DB::insert('insert into Module values(?,?,?)',[$codeM,$titre,$MasseH]);
        return redirect('/index');
    }

    public function updateData($id){
        $m=DB::select('select * from Module where codeModule=?',[$id]);
        return view('edit',['elem'=>$m]);
    }

    public function saveData(Request $request){
        $codeM= $request->codeM;
        $titre= $request->Titre;
        $MasseH= $request->MasseH;
        $data=DB::update("update Module SET Titre=?,MasseH=? WHERE codeModule = ? ",[$titre,$MasseH,$codeM]);
        return redirect('/index');
    }

    public function deleteData($id){
        $d=DB::delete('delete from Module where codeModule = ?',[$id]);
        return redirect('/index');
    }
}
