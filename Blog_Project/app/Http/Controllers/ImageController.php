<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\emplyoee;
use App\Models\people;
class ImageController extends Controller
{
   function imagdata(){
       return view('image');
   }



    function imageUpload(Request $request){
   
    if($request->HasFile('data_id')){
        //$path=base_path('public\images');
        $images="";
      $imge_name=$request->data_id;
      $name_random=Str::random(5);
      $extension=$imge_name->GetClientOriginalExtension();//GetClientOriginalName();
      $img_name=$name_random.".".$extension;
      //dd($img_name);
      //image->move(public_path('images'), $img_name);
     // $request->image->storeAs('images', $img_name);
     //$request->image->move( $path, $img_name);
     //$request->image->move( 'public/images', $img_name);
     //$images->move('public/images', "'.$img_name.'");
     
     return $request->image->store('app/images', $img_name);
    }
   // dd($img_name);

    //$request->image->storeAs('images', $img_name);
}

/////get, alll, select data///////////////
function selectData(){
  //$data= DB::table('emplyoees')->get(); quiry builder
  //dd($data);
 $data=emplyoee::get();
    return view('home', compact('data'));
}
 

function selectDataRow(){
    
$data=DB::table('people')->get();

    return view('select', compact('data'));
}
/////////ddddd////////////
function createdata(){
    return view('insert');
}


  function insertData(request $request){
      
   dd( $request->all());
  }
}
