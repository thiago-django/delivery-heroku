<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <h1>Clientes</h1>
                <ul class="list-group">
                    @foreach ($clientes as $cliente)
                    <li class="list-group-item">
                        {{ $cliente->nome }} / {{ $cliente->email }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
