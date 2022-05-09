<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
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
            <li>Binario</li>
        </ul>

        @foreach ($listaTreni as $train)
        <div>
            <h3>{{ $train->Azienda }}</h3>
        </div>
        <div>
            <b>Da</b>   {{ $train->Stazione_Di_Partenza }} --- <b>Verso</b>  {{ $train->Stazione_Di_Arrivo }}
        </div>
        <div>
            <b>Partenza</b>  {{ $train->Orario_Di_Partenza }} --- <b>Arrivo</b>  {{ $train->Orario_Di_Arrivo }}
        </div>

        <div>
            <b>Numero: </b> {{ $train->Codice_Treno }}
        </div>
        <div>
            <b>Carrozza: </b> {{ $train->Numero_Carrozza }}
        </div>

        <div>
            <b>Binario: </b> {{ $train->Binario}}
        </div>

        @endforeach

{{-- {{ $train->links() }} --}}

        {{-- @dd($listaTreni) --}}
    </div>
</body>
</html>
