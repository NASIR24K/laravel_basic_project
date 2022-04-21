<!DOCTYPE html>
<html lang="en">
    @php
    //dd($data);
        //dd($data->Address);
    @endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/select.bootstrap.min.css')}}" rel="stylesheet">
</head>
</head>
<body>
    <div class="container">
        <div class="row">
         
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-md-12">
            <form  method="POST" action="{{route('people.edit',$data->id)}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="name" class="name">Name</label>
                <input type="text" class="form-control m-2" name="name" value="{{$data->Name}}" placeholder="Enter your name">
              </div>
              <!--<input type="text" value=""">-->
              <div class="form-group">
                <label for="E-mail" class="e_mail">E-mail</label>
                <input type="email" class="form-control m-2" name="e_mail" value="{{$data->E_mail}}" placeholder="Enter your Email">
              </div>
              <div class="form-group">
                <label for="number" class="number">Number</label>
                <input type="number" class="form-control m-2" name="number" value="{{$data->Number}}" placeholder="Enter your Number">
                </div>
                <div class="form-group">
                    <label for="file_image" class="file_image">Password</label>
                    <input type="file" class="form-control m-2"  name="file_image">
                    <img src="{{asset('public/images/'.$data->image)}}" width="60px">
                    </div>
              
                    <div class="form-group">
                        <label for="address" class="address">Address</label>
                        <input type="address" class="form-control m-2" name="address" value="{{$data->Address}}" placeholder="Enter your Address">
                        </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                    </form> 
                  
    </div>
</div>



    <script type="text/javascript" src="{{asset('js/custom.js')}}" ></script>
      <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>
      <script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
</body>
</html>