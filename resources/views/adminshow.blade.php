@extends('layouts.admin')

@section('title')
  LP
@endsection

@section('styles')

@endsection

@section('content1')
<div class="vinyl">
      @if(count($vinyls) == 0)
        <h1>No vinyls</h1>
      @else
      @for($i = 0; $i < count($vinyls); $i++)
      <article class="vinyls">
      <a class="delete" href="{{route('admin.vinyl.delete' , ['vinyl_id' => $vinyls[$i]->id])}}"><i class="fa fa-trash" id="trash" aria-hidden="false"></i></a>
      <a href="{{route('editVinyl' , ['vinyl_id' => $vinyls[$i]->id])}}">{{$vinyls[$i]->name}}</a>
      <br>
      <img src="{{URL::asset('uploads/' . $vinyls[$i]->image)}}" />
      <br>
      <span class="info">{{$vinyls[$i]->author->author_id}}|{{$vinyls[$i]->created_at}}</span>
      </article>
    @endfor
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
