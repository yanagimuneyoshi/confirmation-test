<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use App\Models\contacts;
use App\Http\Controllers\AllController;
use App\Models\User;

class AuthorController extends Controller
{



  public function index()
  {

    // $user = $request->only(['name', 'email', 'password']);

    // User::create($user);

    return view('auth.register');
  }

  public function login(Request $request)
  {

    $user = $request->only(['name', 'email', 'password']);

    User::create($user);

    return view('auth.login');
  }
























//   public function index()
//   {
//     $contacts = Contacts::all();
//     return view('index', ['Contacts' => $contacts]);
  
//   }

//   // データ追加用ページの表示
//   public function add()
//   {
//     return view('add');
//   }


//   // 追加機能
//   public function create(AuthorRequest $request)
//   {
//     $form = $request->all();
//     Author::create($form);
//     return redirect('/');
//   }


// // データ編集ページの表示
//   public function edit(Request $request)
//   {
//       $author = Author::find($request->id);
//       return view('edit', ['form' => $author]);
//   }


//   // 更新機能
//   public function update(Request $request)
//   {
//     $form = $request->all();
//     unset($form['_token']);
//     Author::find($request->id)->update($form);
//     return redirect('/');
//   }


//   // データ削除用ページの表示
//   public function delete(Request $request)
//   {
//     $author = Author::find($request->id);
//     return view('/', ['author' => $author]);
//   }

//   // 削除機能
//   public function remove(Request $request)
//   {
//     Author::find($request->id)->delete();
//     return redirect('/');
//   }

}