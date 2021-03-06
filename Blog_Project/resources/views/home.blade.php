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
      <div class="col-md-6 m-5">
        <table class="table table-striped text-center">
            <thead>
            
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Destination</th>
                <th scope="col">Salary</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $key => $data)
              <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->Name}}</td>
                <td>{{$data->Destination}}</td>
                <td>{{$data->Salary}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
    


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


      <script type="text/javascript" src="{{asset('js/custom.js')}}" ></script>
      <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>
      <script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
</body>
</html>