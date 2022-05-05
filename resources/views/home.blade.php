<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <div class="container">
        <ul>
            <li>Azienda</li>
            <li>Stazione di partenza</li>
            <li>Stazione di arrivo</li>
            <li>Orario di partenza</li>
            <li>Orario di arrivo</li>
            <li>Codice treno</li>
            <li>Numero carrozza</li>
        </ul>

        @foreach ($listaTreni as $train)
        <div>
            {{ $train->Azienda }}
            {{ $train->Stazione_di_partenza }}
            {{ $train->Stazione_di_arrivo }}
            {{ $train->Orario_di_partenza }}
            {{ $train->Orario_di_arrivo }}
            {{ $train->Codice_treno }}
            {{ $train->Numero_carrozza }}
        </div>
        @endforeach
    </div>
</body>
</html>
