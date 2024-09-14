@extends('layouts.a')




@section('content')
<style>
h3{
    color: crimson;
}
.table{
    border: 1px ridge black;
    box-shadow: 3px 3px 1px #fa55cd ;
}
#bouton{
    text-transform: capitalize;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

</style>


<div style="text-align: center;">

<p style="color:#550dff">{{session('status')}}</p>


<h3>les utilisateurs Name@gmail de notre base de donnee</h3>


<table border="2" align="center" bgcolor="#00ffa5" class="table">
<tr><th><b>#</b></th><th>nom</th><th>email</th><th>actions</th><th></th></tr>
@foreach($a as $b)
<tr>
<td><b>{{$b->id}}</b></td>
<td>{{$b->name}}</td>
<td>{{$b->email}}</td>
<td><a href="/supression/{{$b->id}}"><button type="submit" style="color:black" class="inline-block; btn btn-danger" id="bouton" confirm="ete vous sur">suprimer</button></a>
<a href="/modifier/{{$b->id}}"><button type="submit" style="color:black" class="btn btn-primary" id="bouton">modifier</button></a>
</td>

</tr>

@endforeach
</table>
<div class="x"><a href="/visiteur"><button type="submit" style="color:black" class="btn btn-secondary">ajouter</button></a></div>

</div>



<div style="position: absolute; top:20px;">
<form method="GET" action="/recherche" class="form-group" >
    @csrf
<input type="text" name="cherche" class="form-control" placeholder="qui rechercher vous ?" id="cherche">
<button type="submit" >recherche</button>
</form>
</div>




<script>


    var a = document.getElementById('sup');
    a = addEventListener('click', nom);
    function nom()
    {
        this.innerHTML="bien";
    }
</script>

@endsection