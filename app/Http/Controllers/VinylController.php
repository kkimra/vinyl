<?php
namespace App\Http\Controllers;

use App\author;
use App\Vinyl;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Input;

class VinylController extends Controller
{
  public function postVinyl(Request $request)
  {
    $authorText = $request['author_id'];
    $authorinfo = $request['info'];
    $author = author::where('author_id', $authorText)->first();
    if (!$author) {
      $author = new author();
      $author->author_id = $authorText;
      $author->info = $authorinfo;
      $author->save();
    }
    $vinyl = new Vinyl();
    $vinyl->author_id = $request['author_id'];
    $vinyl->name = $request['name'];
    $vinyl->image = $request['image']->getClientOriginalName();
    $vinyl->tracklist = $request['tracklist'];
    $author->vinyls()->save($vinyl);


    if(Input::hasFile('image')){
      $file = Input::file('image');
      $file->move('uploads', $file->getClientOriginalName());
    }
    return redirect()->route('index');
   }
  public function getVinyl() {
    $vinyls = Vinyl::paginate(6);
    return view('index' , ['vinyls' => $vinyls]);
  }

  public function getVinylAdmin()
  {
    $vinyls = Vinyl::paginate(6);
    return view('adminshow' , ['vinyls' => $vinyls]);
  }

  public function vinylUpdate(Request $request)
  {
    $authorText = $request['author_id'];
    $authorinfo = $request['info'];
    $author = author::where('author_id', $authorText)->first();
    if (!$author) {
      $author = new author();
      $author->author_id = $authorText;
      $author->info = $authorinfo;
      $author->save();
    }

    $vinyl = Vinyl::find($request['vinyl_id']);
    $vinyl->author_id = $request['author_id'];
    $vinyl->name = $request['name'];
    $vinyl->image = $request['image']->getClientOriginalName();
    $vinyl->tracklist = $request['tracklist'];
    $author->vinyls()->save($vinyl);

    return redirect()->route('index');
  }


  public function getDeleteVinyl($vinyl_id)
  {
    $authors = author::find($vinyl_id);
    $vinyl = Vinyl::find($vinyl_id);
    $image = $vinyl->image;
    if (!$vinyl) {
      return redirect()->route('index')->with(['fail'=>'Post not found!']);
    }
    $vinyl->delete();
    File::delete('uploads/' . $image);
    return redirect()->route('adminshow')->with(['success' => 'Post successfully deleted']);
  }
public function getSingleVinyl($vinyl_id)
  {
    $authors = author::find($vinyl_id);
    $vinyl = Vinyl::find($vinyl_id);
    if (!$vinyl) {
      return redirect()->route('singlevinyl')->with(['fail'=>'Post not found!']);
    }
    return view('singlevinyl' , ['vinyl' => $vinyl , 'authors' => $authors]);
  }


public function getEditVinyl($vinyl_id)
  {
    $authors = author::find($vinyl_id);
    $vinyl = Vinyl::find($vinyl_id);
    if (!$vinyl) {
      return redirect()->route('singlevinyl')->with(['fail'=>'Post not found!']);
    }
    return view('editVinyl' , ['vinyl' => $vinyl , 'authors' => $authors]);
  }
}
 ?>
