<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="text-align: center;margin-bottom:20px">
        <a href="{{ env('APP_URL') }}"><img src="https://i.ibb.co/m54DdZF/logo-1.webp" alt="LOGO ECWAT" border="0"
                width="250"></a>
    </div>
    <h1 style="text-align: center;color: #00aeef;">Message de la page de contact</h1>
    <div style="padding: 30px">
        <h3>Sujet : {{ $subject }}</h3>
        <p>Nom: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
        <p>Téléphone: {{ $phone }}</p>
        <hr>
        <p style="color: rgb(70, 68, 68)">{{ $msg }}</p>
    </div>
    <hr>
    <div>
        <p style="text-align: center;color:gray">Copyright &copy; {{ date('y') }} <a
                href="{{ env('APP_URL') }}">WATEC</a></p>
    </div>
</body>

</html>
