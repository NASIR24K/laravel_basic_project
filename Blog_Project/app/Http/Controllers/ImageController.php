<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

//use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\emplyoee;
use App\Models\people;
use Carbon\Carbon;
class ImageController extends Controller
{  
   function imagdata(){
       return view('image');
   }



    function imageUploadData(Request $request){
   
    if($request->HasFile('data_id')){
        //$path=base_path('public\images');
      $imge_name=$request->data_id;
      $name_random=Str::random(5);
      $extension=$imge_name->GetClientOriginalExtension();//GetClientOriginalName();
      $img_name=$name_random.".".$extension;
      //dd($img_name);
     //$request->image->move( $path, $img_name);
     $imge_name->move('public/images', $img_name);
     //$request->move("{{asset('public/images') }}", $img_name);
     //return $request->image->store('app/images', $img_name);
    
    }
    
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

      //dd($request->number);
   // dd($request->all());
       
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
          $img_name->move('public/images',$image_name);
/////object data insert/////////////////
          $data=new people();
          $data->Name=$request->name;
          $data->E_mail=$request->e_mail;
          $data->Number=$request->number;
          $data->Password=Hash::make($request->password);
          $data->Address=$request->address;
          $data->image=$image_name;
    
          $data->save();
      }

  //////model data insert system////

   /*    people::insert([
          'Name'=> $request->name,
          'E_mail'=> $request->e_mail,
          'Number'=> $request->number,
          'image'=>$image_name,
          'Password'=> Hash::make($request->password),
          'Address'=> $request->address,
          'created_at'=> carbon::now(),
      ]); */
      return response()->Json('Data added Successfully');
      //return redirect()->route('people.store');
      return response()->Json(route('people.store'));
    //return back();// back to same page
   //return redirect(route('people.store'));// redirect location system
   //return redirect()->route('people.store');// redirect location system
  }
//////////insert end/////////////////
     function updateData($id){
     //dd($id); /method get thaktehobe
     //$data= people::find($id);
     $data= people::findOrFail($id);
     return view('edit', compact('data'));
     }  

     function editData(Request $request, $id){
      //dd($request->all());
        $request->validate([ 
            'name'=>'min:5|max:24|unique:people,name,'.$id,
            'e_mail'=>'required|regex:/(.+)@(.+)\.(.+)/i|unique:people,e_mail,'.$id,
            'number'=>'integer|min:5',
            'file_image' => 'max:10000|mimes:jpg,png,jpeg',
           // 'password'=>'required|min:5',
          ]);

          $data=people::findOrFail($id);

          if($request->HasFile('file_image')){
             //dd($data);
            @unlink('public/images/'.$data->image);
            $img_name=$request->file_image;
            $image_name=Str::random(6).'.'.$img_name->GetClientOriginalExtension();
            $img_name->move('public/images',$image_name);

          $data->Name=$request->name;
          $data->E_mail=$request->e_mail;
          $data->Number=$request->number;
          $data->Password=Hash::make($request->password);
          $data->Address=$request->address;
          $data->image=$image_name;
    /*         people::findOrFail($id)->update([
                'Name'=> $request->name,
                'E_mail'=> $request->e_mail,
                'Number'=> $request->number,
                'Address'=> $request->address,
                'image'=>$image_name,
                'updated_at'=> carbon::now(),
            ]); */
        }else{
       
            $data->Name=$request->name;
            $data->E_mail=$request->e_mail;
            $data->Number=$request->number;
            $data->Password=Hash::make($request->password);
            $data->Address=$request->address;
            $data->image=$image_name;
        }
      
        $data->update();
        return redirect()->route('people.store');
     }
     /////end edit//// 
     function DeleteData($id){
         $data=people::findOrFail($id);
         @unlink('public/images/'.$data->image);
         $data->delete();
         return redirect()->route('people.store');
     }
   
}
