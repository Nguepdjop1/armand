@extends('layouts.a')

@section('content')

<form method="POST" action="/visiteur" class="form-group">
    @csrf
    <div id="block_visiteur">
    <div class="form-group">
        <label for="id" class="form-label">id:</label>
        <input type="number" id="id" name="id" class="form-control" placeholder="champ non obligatoire!!!">
    </div>

    <div class="form-group">
        <label for="name" class="form-label">nom:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" autofocus>

        @if($errors->has('name'))
        <p style="color:red">{{$errors->first('name')}}</p>
        @endif
    </div>

    <div class="form-group">
        <label for="email" class="form-label">email:</label>
        <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control">

        @if($errors->has('email'))
        <p style="color:red">{{$errors->first('email')}}</p>
        
        @endif
    </div>
    



    <div class="form-group">
        <label for="password" class="form-label">mot de passe:</label>
        <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control">

        @if($errors->has('password'))
        <p style="color:red">{{$errors->first('password')}}</p>
        @endif
    </div>
    <div><button type="submit" class="btn btn-primary" id="button">submit</button></div>
    </div>

</form>

<style>
    #block_visiteur
    {
        background-color:deepskyblue;
        border: 2px outset #526;
        display: inline-block;
        width: 400px;
        height: 200px;
        margin-left: 420px;
        padding-top: 50px;
        padding-left: 100px;
        box-shadow: 2px 3px 1px lime;
    }
    #name{
        margin-top: 20px;
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
</style>
@endsection