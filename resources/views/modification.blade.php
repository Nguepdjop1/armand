@extends('layouts.a')

@section('content')

<form method="POST" action="/traitementmodifier">
    @csrf
    <div class="form-group">
        <label for="id" class="form-label">id:</label>
        <input type="number" id="id" name="id" value="{{$e->id}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="name" class="form-label">nom:</label>
        <input type="test" id="name" name="name" value="{{$e->name}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="email" class="form-label">email:</label>
        <input type="email" id="email" name="email" value="{{$e->email}}" class="form-control">
    </div>

    <div class="form-group">
        <label for="password" class="form-label">mot de passe:</label>
        <input type="password" id="password" name="password" value="{{$e->password}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">modifier</button>
</form>
@endsection