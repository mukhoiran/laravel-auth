<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// load database
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){

      //common insert
      // $blog = new Blog;
      // $blog->title = 'hot article';
      // $blog->description = 'hot article hot article hot article hot article hot article';
      // $blog->save();

      // insert mass assigment
      // Blog::create([
      //   'title' => 'best article',
      //   'description' => 'best article best article best article best article best article',
      //   'created_at' => '2019-04-20 19:18:43',
      //   'updated_at' => '2019-04-20 19:18:43'
      // ]);

      //common update
      // $blog = Blog::where('title','hot article')->first();
      // $blog->title = 'really hot article';
      // $blog->save();

      //update mass assignment
      // Blog::find(6)->update([
      //   'title' => 'hot article',
      //   'description' => 'hot article edited with mass assignment'
      // ]);

      //common delete
      // $blog = Blog::find(5);
      // $blog->delete();

      //delete destroy
      // Blog::destroy([1,2]);
      // Blog::destroy(7);

      //soft delete
      // $blog = Blog::find(2);
      // $blog->delete();

      //show all with deleted_at row
      // $blogs = Blog::withTrashed()->get();

      //return soft delete
      // Blog::withTrashed()->restore();

      //whithout pagination
      // $blogs = Blog::all();

      // with pagination
      $blogs = Blog::paginate(5);
      return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id){
      $value = 'This is your id '. $id;
      $user = 'Muhammad Khoirul Anam';
      // $users = ['Anam','Khoirul','Muhammad'];

      //insert data
      // DB::table('users')->insert([
      //   ['username'=>'testing','password'=>'123']
      // ]);

      //update record
      // DB::table('users')->where('username','testing')->update(['username' => 'messi']);

      // delete record
      // DB::table('users')->where('username','khoirul')->delete();

      //get users data from database (select)
      $users = DB::table('users')->get();
      // $users = DB::table('users')->where('username','anam')->get();
      // $users = DB::table('users')->where('username','like','%a%')->get();

      //debugging
      // dd($users);

      $unescaped = '<script>alert("x!")</script>';

      return view('blog/single', ['blog' => $value, 'user' => $user, 'users' => $users, 'unescaped' => $unescaped]);
    }

    public function view($id){
      $blog = Blog::find($id);

      if(!$blog)
        abort(404);
      return view('blog/detail', ['blog' => $blog]);
    }

    public function create(){
      return view('blog/create');
    }

    public function store(Request $request){
      //validation
      $this->validate($request,[
        'title' => 'required|min:5',
        'description' => 'required|min:5|max:30'
      ]);

      //common insert
      $blog = new Blog;
      $blog->title = $request->title;
      $blog->description = $request->description;
      $blog->save();

      return redirect('blog');
    }

    public function edit($id){
      $blog = Blog::find($id);

      if(!$blog)
        abort(404);
      return view('blog/edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id){
      // common update
      $blog = Blog::find($id);
      $blog->title = $request->title;
      $blog->description = $request->description;
      $blog->save();

      return redirect('blog/'.$id);
    }

    public function destroy($id){
      //soft delete
      $blog = Blog::find($id);
      $blog->delete();

      return redirect('blog');
    }
}
