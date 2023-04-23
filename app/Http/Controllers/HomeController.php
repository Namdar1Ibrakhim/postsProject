<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class HomeController extends Controller
{
    public function addPost(Request $request){

    $post= new Post;
    $post->title = $request->input('title');
    $post->body= $request->input('body');

          
    if($request->hasFile('image')){
      $post->image = $request->file('image')->store('', 'public');
    }
    $post->save();
    return redirect()->route('home');

  }

  public function allData(){
    return view('/home', ['data' =>  Post::all()]);
  }

  public function aboutPost(Request $request, $id){
    $post = new Post;
    $comment = new Comment;
    return view('aboutpost', ['data' =>  $post->where('id','=', $id)->get(), 'com' => $comment->where('post_id', '=', $id)->get()]);
  }
  
  public function comment(Request $request, $post_id){
    return view('comment', ['id' =>  $post_id]);

  }

  public function commented(Request $request, $id){
    $comment= new Comment;
    $comment->post_id= $id;
    $comment->body= $request->input('body');
    $comment->author= $request->input('author');

    $comment->save();
    return redirect()->route('home');

  }
  public function deletepost(Request $request, $id){
    $post = Post::find($id);
    $post->delete();

    return redirect()->route('home');  
  }
  public function editpost(Request $request, $id){
    $post = new Post;
    return view('editpost', ['data' =>  $post->find($id)]);

  }
  public function updatepost($id, Request $request){
    $post = Post::find($id);
    $post->title = $request->input('title');
    $post->body= $request->input('body');

          
    if($request->hasFile('image')){
      $post->image = $request->file('image')->store('', 'public');
    }
    $post->save();
    return redirect()->route('home');

  }


  public function editcomment(Request $request, $id){
    $comment = new Comment;
    return view('editcomment', ['data' =>  $comment->find($id)]);

  }
  public function updatecomment($id, Request $request){
    $comment = Comment::find($id);
    $comment->body = $request->input('body');
    $comment->author= $request->input('author');

    $comment->save();
    return redirect('aboutpost/' . $comment->post_id);

  }
  public function deletecomment($id, Request $request){
    $comment = Comment::find($id);
    $post_id = $comment->post_id;
    $comment->delete();
    return redirect('aboutpost/' . $post_id);



    
  }

}
