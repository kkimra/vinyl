<div class="container" id="container">
<div class="col-xs-6 col-sm-12 col-lg-12">
      @if(count($vinyls) == 0)
        <h1>No vinyls</h1>
      @else
      @for($i = 0; $i < count($vinyls); $i++)
      <article class="vinyls">
      {{$vinyls[$i]->name}}
      <br>
      <img src="{{URL::asset('uploads/' . $vinyls[$i]->image)}}" />
      <br>
      <span class="info">{{$vinyls[$i]->author->author_id}}|{{$vinyls[$i]->created_at}}</span>
      <a class=" btn btn-default" href="{{route('singlevinyl',['vinyl_id' => $vinyls[$i]->id])}}">Details</a>
      </article>
    @endfor
    @endif
    <section class="paginator">
      {{$vinyls->links()}}
    </section>
</div>
</div>
