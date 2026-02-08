<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ詳細</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #70513F;
            text-align: center;
        }

        .details-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            position: relative;
        }

        .details-container .close-button {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            background-color: transparent;
            border: none;
            color: #70513F;
            cursor: pointer;
        }

        .details-container .close-button:hover {
            color: #D9534F;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .details-table th {
            text-align: left;
            font-weight: normal;
            color: #70513F;
            padding: 10px 0;
            width: 30%;
            font-size: 16px;
        }

        .details-table td {
            padding: 10px 0;
            font-size: 16px;
            color: #333333;
        }

        .delete-form {
            text-align: center;
            margin-top: 20px;
        }

        .delete-button {
            padding: 10px 20px;
            background-color: #D9534F;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="details-container">
        <button onclick="window.history.back()" class="close-button">&times;</button>
        <table class="details-table">
            <tr>
                <th>お名前</th>
                <td>{{ $record->name }}</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{{ $record->gender }}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $record->email }}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{ $record->phone }}</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{ $record->address }}</td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>{{ $record->building }}</td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>{{ $record->inquiry_type }}</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>{{ $record->message }}</td>
            </tr>
        </table>
        <form action="{{ route('admin.delete', $record->id) }}" method="post" class="delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button">削除</button>
        </form>
    </div>
</body>
</html>