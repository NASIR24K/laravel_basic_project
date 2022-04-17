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
    <form action="{{url('image')}}" method="POST" enctype="multipart/form-data">
        @csrf
<div class="container">
    <div class="row">
        <div class="col-md-6 m-5 p-2">
            <div class="card">
                <div class="card-header">
            <h4 class="card-title">Laravel picuture Upload</h4>
                </div>
         <div class="card-body">
             <input type="file" id="data_id" name="data_id" class=" form-control my-3" >
             <input type="submit" id="buttonID" name="buttonID" class="btn  btn-primary ">
         </div>
        </div>
        </div>
    </div>
</div>

    </form>






    <script type="text/javascript" src="{{asset('js/custom.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
</body>
</html>