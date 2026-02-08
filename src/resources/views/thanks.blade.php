<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #70513F;
            text-align: center;
        }

        .main-container {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: 24px;
        }

        .thank-you-text {
            font-size: 36px;
            font-weight: bold;
            color: #D2BFB0;
            margin-bottom: 20px;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 200px;
            color: rgba(112, 81, 63, 0.1); /* Light watermark opacity */
            z-index: -1; /* Send it behind other elements */
            white-space: nowrap;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #70513F;
            color: #ffffff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .button:hover {
            opacity: 0.85;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="watermark">Thank You</div> <!-- Watermark -->
        <p class="thank-you-text">お問い合わせありがとうございました</p>
        <a href="/" class="button">HOME</a>
    </div>
</body>

</html>