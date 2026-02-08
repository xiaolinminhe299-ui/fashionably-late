<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <h1>FashionablyLate</h1>
    </header>
    <div class="container">
        <h2>Contact</h2>
    <form action="{{ route('confirm') }}" method="post">
        @csrf
            <div class="form-item">
                <label class="form-label">お名前 <span class="required">※</span></label>
                    <div class="form-input-group">
                        <input type="text" name="last_name" class="form-input" placeholder="例: 山田" required>
                        <input type="text" name="first_name" class="form-input" placeholder="例: 太郎" required>
                    </div>
                @error('last_name')
                <div class="error">{{ $message }}</div>
                @enderror
                @error('first_name')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-item">
                <label class="form-label">性別 <span class="required">※</span></label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="男性" class="form-radio" required> 男性</label>
                        <label><input type="radio" name="gender" value="女性" class="form-radio"> 女性</label>
                        <label><input type="radio" name="gender" value="その他" class="form-radio"> その他</label>
                    </div>
                @error('gender')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-item">
                <label class="form-label">メールアドレス <span class="required">※</span></label>
                <input type="email" name="email" class="form-input" placeholder="例: test@example.com" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-item">
                <label class="form-label">電話番号 <span class="required">※</span></label>
                <div class="form-input-group">
                    <input type="text" name="phone_1" class="form-input" placeholder="080" required>
                    <span>-</span>
                    <input type="text" name="phone_2" class="form-input" placeholder="1234" required>
                    <span>-</span>
                    <input type="text" name="phone_3" class="form-input" placeholder="5678" required>
                </div>
                @error('phone_1')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-item">
                <label class="form-label">住所 <span class="required">※</span></label>
                <input type="text" name="address" class="form-input" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required>
                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-item">
                <label class="form-label">建物名</label>
                <input type="text" name="building" class="form-input" placeholder="例: 千駄ヶ谷マンション101">
                @error('building')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-item">
                <label class="form-label">お問い合わせの種類 <span class="required">※</span></label>
                <select name="type" class="form-select" required>
                    <option value="" selected>選択してください</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->content }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-item">
                <label class="form-label">お問い合わせ内容 <span class="required">※</span></label>
                <textarea name="message" class="form-textarea" placeholder="お問い合わせ内容をご記載ください" required></textarea>
                @error('detail')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-buttons">
                <button type="submit" class="button">確認画面</button>
            </div>
        </form>
    </div>
</body>
</html>