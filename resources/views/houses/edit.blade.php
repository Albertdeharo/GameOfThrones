
@extends('layouts.app')

@section('title' , 'Houses Edit')

@section('content')

    <div class="container">
    <form class="form-group" method="POST" action="/houses/{{$house->slug}}" enctype="multipart/form-data">
    @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{$house->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    </div>
@endsection 


