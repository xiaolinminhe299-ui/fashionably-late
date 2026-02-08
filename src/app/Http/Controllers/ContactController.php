<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //
    public function index()
    {
        // 全てのカテゴリーを取得
        $categories = Category::all();
        
        // index.blade.phpに渡す
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        $category = Category::find($request->category_id);
        
        return view('confirm', compact('contact', 'category'));
    }

        public function store(Request $request)
    {
        // セッションから確認済みデータを取得する場合
        // またはリクエストデータを直接保存
        Contact::create($request->only([
            'category_id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'detail',
        ]));

        return redirect()->route('thanks');
    }
    public function thanks()
    {
        return view('thanks');
    }

    public function login()
    {
        return view('login');
    }
}
