

@extends('layouts.admin')


@section('title')

Admin Dashboard

@endsection()


@section('body') 

<div class="card-body">
                
        <form action="{{route('client.submit')}}"  onsubmit="return validateForm()" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
        <br><br>

    <label for="name">Enter client name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="enter name">
    <span id=name class='text-danger'></span>
    </div>

    <div class="form-group"> 
    <label for="name">Enter client email</label>
    <input type="email" class="form-control" name="email" id="e-mail" placeholder="enter email">
    </div>

    <div class="form-group"> 
    <label for="name">Enter client number</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter number">
    </div>

    <div class="form-group"> 
    <label for="name">Enter client address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="enter address">
    </div>

    <button type="submit"  class="btn btn-success">save</button>
       
    </form>
                
</div>

  <script>
        function validateForm()
        {   var X = document.getElementById('name').value;
            if(x=='')
            {
               
            alert('Name must be  required');
                return false;
            }
            // var z = document.getElementById('email').value; 
            
            var y = document.getElementById('address').value;
            if(y=='')
            {
                alert('Address must be  required');
                return false;
            }
        } 

            
           
            
    </script> 



 @endsection() 

