<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Ajax_qrController extends Controller
{
    function query_ajax(){
        return view('jrajx');
    }

    function query_ajax_return(Request $request){
    //dd($request->all());
    $data=20;
    $subtotal=$request->n1 + $request->n2;
    $total= $subtotal+$data;
    return $total;
    }

    function ajax_select_method(){
    
        $data=DB::table('people')->get();
        
            return view('ajax_select', compact('data'));
        }

////////////////insert//////////////////////////
        function ajax_get_in(){
            
            return view('ajax_insert');
        }
        

        function ajax_put_in(){
    
            function insertData(request $request){
               $request->validate([ 
                  'name'=>'required|min:5|max:24|unique:people',
                  'e_mail'=>'required|regex:/(.+)@(.+)\.(.+)/i|unique:people|email',
                  'number'=>'required|integer|min:5',
                  'password'=>'required|min:5',
                  'file_image' => 'required|max:10000|mimes:jpg,png,jpeg',
                ]);
                if($request->HasFile('file_image')){
                    
                    $img_name=$request->file_image;
                    $image_name=Str::random(6).'.'.$img_name->GetClientOriginalExtension();
                    $img_name->move('public/ajax/images',$image_name);
                    people::insert([
                        'Name'=> $request->name,
                        'E_mail'=> $request->e_mail,
                        'Number'=> $request->number,
                        'image'=>$image_name,
                        'Password'=> Hash::make($request->password),
                        'Address'=> $request->address,
                        'created_at'=> carbon::now(),
                    ]);
                    return redirect()->route('people.select');
            }
        }
    }

}
