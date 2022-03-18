<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train['Azienda'] }}</li>
            <li>{{ $train['Stazione_di_partenza'] }}</li>
            <li>{{ $train['Stazione_di_arrivo'] }}</li>
            <li>{{ $train['Orario_di_partenza'] }}</li>
            <li>{{ $train['Orario_di_arrivo'] }}</li>
            <li>{{ $train['Codice_treno'] }}</li>
            <li>{{ $train['Carrozze'] }}</li>
            <li>{{ $train['In_orario'] }}</li>
            <li>{{ $train['Cancellato'] }}</li>
        @endforeach
    </ul>
</body>

</html>


{{-- 'Azienda' => 'aks transport',
'Stazione_di_partenza' => 'Milano rogorego',
'Stazione_di_arrivo' => 'Torino',
'Orario_di_partenza' => '2022-02-12 14:35:21',
'Orario_di_arrivo' => '2022-02-10 14:41:25',
'Codice_treno' => 556,
'Carrozze' => 21,
'In_orario' => false,
'Cancellato' => false, --}}
