<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #e0e0e0;
        }
        .container {
            background-color: #1c1c1c;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 100%;
            max-width: 450px;
            border: 1px solid #333;
        }
        h2 {
            color: #ffffff;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: bold;
        }
        label {
            font-size: 14px;
            color: #b0b0b0;
            display: block;
            margin-bottom: 10px;
        }
        input {
            width: 100%;
            padding: 14px;
            margin-bottom: 18px;
            border: 1px solid #444;
            border-radius: 8px;
            font-size: 16px;
            color: #e0e0e0;
            background-color: #2c2c2c;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>QR Code Tanda Tangan Digital</h2>
        <form action="/signature/generate" method="POST">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="nip">NIM:</label>
            <input type="text" id="nip" name="nip" required>
            <br>
            <button type="submit">Generate QR Code</button>
        </form>
    </div>
</body>
</html>
