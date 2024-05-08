<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;
use App\Models\Contact;


class AllController extends Controller
{
    public function index()
    {
        return view('index');
    } //

    public function confirm(Request $request)
    {
        // フォームからの入力を取得
        $contact = $request->all();

        // 性別の値を適切な形式に変換
        $gender = $contact['gender'];
        if ($gender === '1') {
            $contact['gender'] = '男性';
        } elseif ($gender === '2') {
            $contact['gender'] = '女性';
        } elseif ($gender === '3') {
            $contact['gender'] = 'その他';
        }
        

        // ビューにフォームデータを渡す
        return view('confirm')->with('contact', $contact);
    }


    public function thanks(Request $request)
    {
        // フォームからの入力を取得
        $data = $request->all();

        // データベースに保存
        Contacts::create($data);

        // thanksビューを表示
        return view('thanks');
    }

    public function admin()
    {
        return view('admin');
    } //

    public function register()
    {
        return view('register');
    }//

    public function login()
    {
        return view('login');
    } //


}
