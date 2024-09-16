@extends('layouts.a')

@section('content')

@foreach($p as $m)
<div style="text-align: center;"><tr>{{ $m->name}}</tr><br><br></div>

@endforeach



@endsection