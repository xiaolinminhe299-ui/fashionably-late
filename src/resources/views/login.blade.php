<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
  <header>
    <h1>FashionablyLate</h1>
    <a href="/register" class="register-btn">register</a>
  </header>

  <main class="login-page">
    <h2>Login</h2>
    <div class="login-form-container">
      <form class="login-form">
        <div class="form-group">
          <label for="email">メールアドレス</label>
          <input type="email" id="email" placeholder="例: test@example.com">
        </div>

        <div class="form-group">
          <label for="password">パスワード</label>
          <input type="password" id="password" placeholder="例: coachtech1106">
        </div>

        <button type="submit">ログイン</button>
      </form>
    </div>
  </main>
</body>
</html>