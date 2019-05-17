
@extends('layouts.app')

@section('title' , 'Houses Create')

@section('content')

    <div class="container">
    <form class="form-group" method="POST" action="/houses">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
@endsection 


