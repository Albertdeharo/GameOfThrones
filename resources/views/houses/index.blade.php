@extends('layouts.app')

@section('title', 'Houses')

@section('content')

    <div class="row">
     @foreach($houses as $house)
        <div class="card text-center" style="width: 18rem; margin-top: 70px">
            <img style="heigth: 100px; width: 100px; background-color: #EFEFEF; margin: 20px" class="card-img-top rounded-cicrcle mx-auto d-block" src="images/{{$house->avatar}}" alt="">
            <div class="col-sm">
                <div class="card-body">
                    <h5 class="card-title">{{$house->name}}</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloribus numquam itaque possimus mollitia non enim a eum quam. Laudantium debitis asperiores excepturi temporibus reiciendis consequatur labore enim doloribus fugit.</p>    
                    <a href="/houses/{{$house->id}}" class="btn btn-primary">Ver más...</a>
                </div>
            </div>
        </div>
    
    @endforeach
    </div>
@endsection