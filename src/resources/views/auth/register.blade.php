@extends('layouts.app')

@section('title', 'Register')

@section('content')
<h2>Register</h2>
<div class="form-container">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-item">
            <label class="form-label">お名前</label>
            <input type="text" name="name" class="form-input" placeholder="例: 山田 太郎" required>
        </div>
        <div class="form-item">
            <label class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-input" placeholder="例: test@example.com" required>
        </div>
        <div class="form-item">
            <label class="form-label">パスワード</label>
            <input type="password" name="password" class="form-input" placeholder="例: ********" required>
        </div>
        <div class="form-buttons">
            <button type="submit" class="button">登録</button>
        </div>
    </form>
</div>
@endsection