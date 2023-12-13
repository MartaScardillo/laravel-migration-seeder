<!DOCTYPE html>
<html>
<head>
    <title>Lista Treni</title>
</head>
<body>

    <h1>Lista dei Treni</h1>

    <ul>
        @foreach($trains as $train)
            <li>
                Azienda: {{ $train->company }},
                Stazione Partenza: {{ $train->departure_station }},
                Stazione Arrivo: {{ $train->arrival_station }},
                Data Partenza: {{ $train->departure_date }},
                Orario Partenza: {{ $train->departure_time }},
                Orario Arrivo: {{ $train->arrival_time }},
                Codice Treno: {{ $train->train_code }},
                Numero Carrozze: {{ $train->num_coaches }},
                In Orario: {{ $train->on_schedule ? 'Sì' : 'No' }},
                Cancellato: {{ $train->canceled ? 'Sì' : 'No' }}
            </li>
        @endforeach
    </ul>

</body>
</html>