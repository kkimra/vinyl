@extends('layouts.admin')

@section('title')
  LP
@endsection

@section('styles')

@endsection

@section('content1')
<div class="upload">
 <form action="{{route('create')}}" method="post" enctype="multipart/form-data">
   <div class=inputg>
     <label for="author_id">Author</label>
     <input type="text" name="author_id" id="author_id">
   </div>
   <div class=inputg>
     <label for="author_id">Authorinfo</label>
     <textarea name="info" id="info" rows="4" cols="30"></textarea>
   </div>
   <div class="inputg">
     <label for="name">Name</label>
     <input type="text" name="name">
   </div>
  <div class="inputg">
    <input type="file" name="image">
  </div>
  <div class="inputg">
    <label for="tracklist">tracklist</label>
    <textarea name="tracklist" id="tracklist" rows="8" cols="80"></textarea>
  </div>
  <input type="hidden" name="_token" value="{{Session::token()}}">
  <button type="submit"  name="button">submit</button>

 </form>
</div>


@endsection
