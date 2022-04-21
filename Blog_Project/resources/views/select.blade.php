<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/select.bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
</head>
<body>
    

<div class="conmtainer">

    <div class="row">
        <div class="col-md-12 mt-5">
            <table class="table table-striped text-center">
             <!--<a href="{{route('people.create')}}" class="btn btn-primary btn_pr"  role="button">addPeople</a> -->
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Addpeople</button>
             <thead>
                
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">E_mail</th>
                    <th scope="col">Number</th>
                    
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $key => $data)
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$data->Name}}</td>
                    <td><img src="{{asset('public/images/'.$data->image)}}" width="60px"></td>
                    <td>{{$data->E_mail}}</td>
                    <td>{{$data->Number}}</td>
                    <td>{{$data->Address}}</td>
                    <td>
                     
                      <a class="btn btn-primary" href="{{route('people.update',$data->id)}}">edit</a>
                      <a class="btn btn-primary" href="{{route('people.delete',$data->id)}}">Delete</a>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    


<!-- Large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container">
            <div class="col-md-12">
                <form id="insert_form" method="POST" action="{{route('people.insert')}}" enctype="multipart/form-data" >
                    @csrf
                <div class="form-group">
                    <label for="name" class="name">Name</label>
                    <input type="text" class="form-control m-2"  name="name" value="{{old('name')}}" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="E-mail" class="e_mail">E-mail</label>
                    <input type="text" class="form-control m-2" name="e_mail"  value="{{old('e_mail')}}" placeholder="Enter your Email">
                  </div>
                  <div class="form-group">
                    <label for="number" class="number">Number</label>
                    <input type="text" class="form-control m-2" name="number" value="{{old('number')}}" placeholder="Enter your Number">
                    </div>
                    <div class="form-group">
                        <label for="password" class="password">Password</label>
                        <input type="password" class="form-control m-2"  name="password" id="password" placeholder="Enter your Password">
                        </div>
                        <div class="form-group">
                            <label for="file_image" class="file_image">Password</label>
                            <input type="file" class="form-control m-2"  name="file_image">
                            </div>
                        <div class="form-group">
                            <label for="address" class="address">Address</label>
                            <input type="text" class="form-control m-2" name="address" value="{{old('address')}}" placeholder="Enter your Address">
                            </div>
                        <button type="submit" class="btn btn-primary">submit</button>
                        </form> 
                      
        </div>
    </div>
        </div>
  </div>
</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

      <script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
      <script type="text/javascript" src="{{asset('js/custom.js')}}" ></script>
      <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>

      <script>
        $('#insert_form').submit(function(event){
       event.preventDefault();
       var form=$(this);
       
       //console.log(form.serialize());
       $.ajax({
           'type' : "POST",
           'url'  : form.attr('action'),
           data : new FormData(this),
           dataType: "JSON"
           contentType: false,
           cache: false,
           processData: false,
           success: function(data)
           {
               console.log(data);
           }
       });
        });
       
  
   </script>
     
</body>
</html>