<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;

            line-height: 1.6;
        }

        .mail-content {
            background-color: #F0F0F0;
            padding: 50px 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 200px;
        }

        h1 {
            color: #f8be19;
            margin-top: 0;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        h3 {
            margin-top: 0;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
            color: #666;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
            font-size: 14px;
        }

        .footer a {
            color: #f8be19;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="mail-content">
        <div class="container">
            <div class="header">
                <a href="{{ env('APP_URL') }}"><img src="https://i.ibb.co/NYrzSbz/logo-1.webp" alt="LOGO ECWAT"></a>
            </div>
            <h1>Message de la page de contact</h1>
            <div>
                <h3>Sujet : {{ $subject }}</h3>
                <p>Nom: {{ $name }}</p>
                <p>Email: {{ $email }}</p>
                <p>Téléphone: {{ $phone }}</p>
                <hr>
                <p>{{ $msg }}</p>
            </div>
            <hr>
            <div class="footer">
                <p>&copy; {{ date('Y') }} <a href="{{ env('APP_URL') }}">ECWAT</a></p>
            </div>
        </div>
    </div>
</body>

</html>
