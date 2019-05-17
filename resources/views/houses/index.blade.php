@extends('layouts.app')

@section('title', 'Houses')

@section('content')

    @foreach($houses as $house)
    <p>{{$house->name}}</p>
    
    @endforeach
@endsection