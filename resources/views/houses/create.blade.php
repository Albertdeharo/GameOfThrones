
@extends('layouts.app')

@section('title' , 'Houses Create')

@section('content')
    @if ($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error}}</p>
            @endforeach
    @endif
    <div class="container">
    <form class="form-group" method="POST" action="/houses" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
@endsection 


