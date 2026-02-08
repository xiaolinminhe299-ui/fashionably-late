@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<h2>Admin</h2>
<div class="filter-container">
    <form method="get" action="{{ route('admin.search') }}">
        <input type="text" name="search_query" class="filter-input" placeholder="名前やメールアドレスを入力してください">
        <select name="gender" class="filter-select">
            <option value="">性別</option>
            <option value="男性">男性</option>
            <option value="女性">女性</option>
        </select>
        <select name="inquiry_type" class="filter-select">
            <option value="">お問い合わせの種類</option>
            <option value="商品の交換について">商品の交換について</option>
            <option value="商品の返品について">商品の返品について</option>
        </select>
        <input type="text" name="date" id="datepicker" class="filter-input" placeholder="年/月/日">
        <button type="submit" class="button">検索</button>
        <button type="reset" class="button-light">リセット</button>
    </form>
</div>
<table class="admin-table">
    <thead>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせ内容</th>
            <th>アクション</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->name }}</td>
            <td>{{ $record->gender }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->inquiry_type }}</td>
            <td><a href="{{ route('admin.details', $record->id) }}" class="button-small">詳細</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination">
    {{ $records->links() }}
</div>
@endsection