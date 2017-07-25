@extends('layouts.admin')

@section('title')
  LP
@endsection

@section('styles')

@endsection

@section('content1')
  <br>
  <br>
<div class="container">
  <div class="upload">
   <form action="{{route('create')}}" method="post" enctype="multipart/form-data">
     <div class=inputg>
       <label for="author_id">Author</label>
       <input type="text" class="form-control" name="author_id" id="author_id">
     </div>
     <div class=inputg>
       <label for="author_id">Authorinfo</label>
       <textarea name="info" class="form-control" id="info" rows="2" cols="10"></textarea>
     </div>
     <div class="inputg">
       <label for="name">Name</label>
       <input type="text" class="form-control" name="name">
     </div>
    <div class="inputg">
      <label for="file"> Album image</label>
      <input type="file" class="form-control" name="image">
    </div>
    <div class="inputg">
      <label for="tracklist">tracklist</label>
      <textarea name="tracklist" class="form-control" id="tracklist" rows="8" cols="80"></textarea>
    </div>
    <input type="hidden" name="_token" value="{{Session::token()}}">
    <button type="submit"  name="button">submit</button>

   </form>
  </div>
</div>
@endsection
