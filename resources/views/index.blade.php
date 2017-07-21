@extends('layouts.master')

@section('title')
  LP
@endsection

@section('styles')

@endsection

@section('content')
<div class="vinyl">
      @if(count($vinyls) == 0)
        <h1>No vinyls</h1>
      @else
      @foreach ($vinyls as $vinyl)
      <article class="vinyls">
      <a href="{{route('singlevinyl',['vinyl_id' => $vinyl->id])}}">{{$vinyl->name}}</a>
      <br>
      <img src="{{URL::asset('uploads/' . $vinyl->image)}}" />
      <br>
      <span class="info">{{$vinyl->author->author_id}}|{{$vinyl->created_at}}</span>
      </article>
    @endforeach
    @endif
</div>
@if($vinyls->lastPage()>1)
  <section class="pagination">
    @if($vinyls->currentPage() !== 1)
      <a href="{{$vinyls->previousPageUrl()}}"><i class="fa fa-caret-left"></i></a>
    @endif
      @if($vinyls->currentPage() !== $vinyls->lastPage())
        <a href="{{$vinyls->nextPageUrl()}}"><i class="fa fa-caret-right"></i></a>
      @endif
  </section>
@endif
</div>

@endsection
