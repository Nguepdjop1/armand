@extends('layouts.a')

@section('content')
<p style="color:#550dff">{{session('status')}}</p>
connexion reusie!
<h3 style="color: deeppink;">bienvenue au seins de la nguelov de vente en ligne!!!</h3>
<a href="/deconnexion"><button type="submit" style="color:black" class="btn btn-primary">deconnexion</button></a> 
@endsection