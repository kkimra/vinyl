@extends('layouts.master')

@section('title')
  LP
@endsection

@section('styles')

@endsection

@section('content')
<div class="container">
  <div class="vinyl">
        <article class="vinyl-single">
        <h2>{{$vinyl->name}}</h2>
        <img src="{{URL::asset('uploads/' . $vinyl->image)}}" />
        <br>
        <span class="info">{{$authors->author_id}}|{{$vinyl->created_at}}</span>
        {!!$vinyl->tracklist!!}
        </article>
  </div>
</div>

@endsection
