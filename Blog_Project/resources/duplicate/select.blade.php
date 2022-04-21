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
</head>
<body>
    

<div class="conmtainer">

    <div class="row">
        <div class="col-md-12 mt-5">
            <table class="table table-striped text-center">
              <a href="{{route('people.create')}}" class="btn btn-primary"  role="button">addPeople</a>
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
    





      <script type="text/javascript" src="{{asset('js/custom.js')}}" ></script>
      <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>
      <script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
</body>
</html>