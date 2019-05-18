@extends('layouts.app')

@section('title', 'House')

@section('content')

<img style="heigth: 200px; width: 200px; background-color: #EFEFEF; margin: 20px" class="card-img-top rounded-cicrcle mx-auto d-block" src="/images/{{$house->avatar}}" alt="">
<div class="text-center">
<h5 class="card-title">{{$house->name}}</h5>
<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloribus numquam itaque possimus mollitia non enim a eum quam. Laudantium debitis asperiores excepturi temporibus reiciendis consequatur labore enim doloribus fugit.</p>    
</div>

@endsection