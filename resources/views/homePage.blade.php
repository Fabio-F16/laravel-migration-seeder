<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Laravel Model Control</title>
</head>

<body>
    @foreach ($trains as $item)
        <div class="card">
            <div>
                <h5>Compagnia</h5> {{ $item->azienda }}
                <h5>Partenza da:</h5> {{ $item->stazione_di_partenza }}
                <h5>Orario Partenza:</h5> {{ $item->orario_di_partenza }}
                <h5>Stazione di arrivo:</h5> {{ $item->stazione_di_arrivo }}
                <h5>Orario arrivo:</h5> {{ $item->orario_di_arrivo }}
                <h5>Codice treno</h5> {{ $item->codice_treno }}
            </div>


        </div>
    @endforeach
</body>

</html>
