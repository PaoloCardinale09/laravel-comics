@extends('layouts.app')

@section('page_name')
    Comics
@endsection

@section('main_content')
lista di comics
<section class="comics-list">
    <div class="container">
      <div class="current-series text-light">
        <p class="fw-bold">CURRENT SERIES</p>
      </div>
        <div class="row">
          @foreach ($comics as $comic)
              
          <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
            <a href="{{route('details', ['index' => $loop->index])}}">
              <div class="card h-100 border-0 " >
                <img class="" src=" {{ $comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-light">{{ $comic['title'] }}</p>
                </div>
              </div>
            </a>
           
          </div>
          @endforeach
        </div>
    </div>

</section>

@endsection

