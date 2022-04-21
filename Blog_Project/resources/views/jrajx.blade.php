<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery with Ajax</title>

    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
    <script type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}" ></script>

</head>
<body>
    <div class="container mt-6">
        <div class="row my-5">
            <label>NUMBER 1</label>
             <input type="text"  id="n1" value="">
             
             <input type="text"   id="n2" value="">
             <label>NUMBER 2</label>
             <button type="submit" class="submit_btn btn btn-primary mt-3">submit</button>
            <input type="text" id="input">
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




    <script>
  $('.submit_btn').click(function(){
      //e.preventdefaault();
      var n1=parseInt($('#n1').val());
      var n2=parseInt($('#n2').val());
     
      $.ajax({
          'type': "GET",
          'url': '{{Route('ajax')}}',
          data:{
              "n1": n1,
              "n2": n2
          },
          success:function(data){
            $('#input').val(data);
          }
      })
  })

        
        </script>

</body>
</html>