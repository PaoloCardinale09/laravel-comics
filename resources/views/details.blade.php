@extends('layouts.app')
@section('page_name')
    Details
@endsection

@section('main_content')

<div class="container">
    <div class="thumb-details" >
        <img class="h-100" src="{{$comic['thumb']}}" alt="thumb">
    </div>
    <h1 class="text-light">{{$comic['title']}}</h1>
</div>    

    
@endsection