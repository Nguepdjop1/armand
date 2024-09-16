@extends('layouts.a')

@section('content')

<form action="{{ route('supression.sup', $supression->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">suprimer</button>
</form>

@endsection