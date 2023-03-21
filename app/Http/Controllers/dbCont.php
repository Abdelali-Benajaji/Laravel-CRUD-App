<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbCont extends Controller
{
    
    public function index(){
        //insert data
        //DB::insert('insert into Module(codeModule,Titre,MasseH) Values(?,?,?)',[205,'Python',100]);

        //Update data
        // DB::update('UPDATE Module SET MasseH=? where codeModule=?',[120,201]);
        
        //delete data
        // DB::delete('delete from Module where codeModule=?',[204]);
        
        //transaction
        DB::transaction(function () {
            DB::insert('insert into insert into Module(codeModule,Titre,MasseH) Values(107,Cloud,90)');
            DB::delete('delete from Module where codeM=101');
        });

        //read data
                $DB=DB::select('select * from Module');
                return view('base',['data'=>$DB]);
        

    }  
  
}
