@extends('layouts.master')

@section('title')
  LP
@endsection

@section('styles')

@endsection

@section('content')
<div class="vinyl">
      <article class="vinyl-single">
      <h3>{{$vinyl->name}}</h3>
      <img src="{{URL::asset('uploads/' . $vinyl->image)}}" />
      <br>
      <span class="info">{{$authors->author_id}}|{{$vinyl->created_at}}</span>
      <h4>{!!$vinyl->tracklist!!}</h4>
      </article>
</div>
@endsection
