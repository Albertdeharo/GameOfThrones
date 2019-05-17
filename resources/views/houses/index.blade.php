@extends('layouts.app')

@section('title', 'Houses')

@section('content')

    <div class="row">
     @foreach($houses as $house)
        <div class="card" style="width: 18rem;">
            <div class="col-sm">
                <div class="card-body">
                    <h5 class="card-title">{{$house->name}}</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloribus numquam itaque possimus mollitia non enim a eum quam. Laudantium debitis asperiores excepturi temporibus reiciendis consequatur labore enim doloribus fugit.</p>    
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    
    @endforeach
    </div>
@endsection