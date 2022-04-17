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
</head>
<body>
    <div class="container">
        <div class="row">
         
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  method="POST" action="{{route('fake')}}">
                @csrf
            <div class="form-group">
                <label for="name" class="name">Name</label>
                <input type="text" class="form-control m-2" name="name" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="E-mail" class="e-mail">E-mail</label>
                <input type="email" class="form-control m-2" name="e-mail" id="e-mail" placeholder="Enter your Email">
              </div>
              <div class="form-group">
                <label for="number" class="e-number">Number</label>
                <input type="number" class="form-control m-2" name="e-number" id="number" placeholder="Enter your Number">
                </div>
                <div class="form-group">
                    <label for="password" class="password">Password</label>
                    <input type="password" class="form-control m-2" name="password" id="password" placeholder="Enter your Password">
                    </div>
                    <div class="form-group">
                        <label for="address" class="address">Address</label>
                        <input type="address" class="form-control m-2" name="address" id="address" placeholder="Enter your Address">
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