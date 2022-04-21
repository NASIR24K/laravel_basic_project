</div>
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
          