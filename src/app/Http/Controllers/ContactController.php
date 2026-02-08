<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    // 確認画面表示
    /*
    public function confirm(Request $request)
    {
        $validatedData = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'nullable|string|max:255',
            'building' => 'nullable|string|max:255',
            'type' => 'required|string',
            'message' => 'required|string|max:500',
        ]);

        // バリデーション成功時に確認画面を表示
        return view('confirm', ['data' => $validatedData]);
    }*/

    public function confirm()
    {
        return view('confirm');
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
