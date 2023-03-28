@extends('layouts.app')

@section('page_name')
    Comics
@endsection

@section('main_content')
lista di comics
<section class="comics-list">
    <div class="container">
        <div class="row">
          @foreach ($comics as $comic)
              
          <div class="col-2">
            <div class="card" ">
              <img src=" {{ $comic['thumb']}}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">{{ $comic['title'] }}</p>
              </div>
            </div>
           
          </div>
          @endforeach
        </div>
    </div>

</section>

@endsection

