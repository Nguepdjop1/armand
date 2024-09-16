@extends('layouts.a')

@section('content')

<form method="POST" action="{{route('connecte') }}" class="form-group">
    @csrf

    <div id="block">
    <div class="form-group">
        <label for="name" class="form-label">name:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" placeholder="guideon" autofocus>

        @if($errors->has('name'))
        <p style="color:red">{{$errors->first('name')}}</p>
        
        @endif
    </div>

    <div class="form-group">
        <label for="email" class="form-label">email:</label>
        <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="guideon1@gmail.com">

        @if($errors->has('email'))
        <p style="color:red">{{$errors->first('email')}}</p>
        
        @endif
    </div>

    
    



    <div class="form-group">
        <label for="password" class="form-label">mot de passe:</label>
        <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control" placeholder="LazaR1000$" >

        @if($errors->has('password'))
        <p style="color:red">{{$errors->first('password')}}</p>
        @endif
    </div>
    <button type="submit" class="btn btn-primary" id="button">se-connecter</button>
    <div id="nav"><p id="s">d</p></div>
    </div>
    

    
</form>

<style>
    #block{
        background-color:chocolate;
        border: 3px dashed black;
        display: inline-block;
        width: 400px;
        height: 200px;
        margin-left: 420px;
        padding-top: 50px;
        padding-left: 100px;
    }
    #email{
        margin-top: 20px;
    }
    #password{
        margin-top: 20px;
    }
    #button{
        margin-top: 20px;
    }
    #nav{
         border: 1px solid lime;
         width: 300px;
    }
    #s:hover{
        float: right;
        clear: left;
    }
   
</style>
@endsection