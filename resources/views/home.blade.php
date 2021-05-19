<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                display:flex;
                align-items:center;
                flex-wrap: wrap;
                width: 70%;
                margin: 0 auto;
            }
            div{
                margin:20px 30px;
                width:20%;
            }
            p{
                font-weight:bold;
            }
            label{
                font-weight:normal;
            }
        </style>
    </head>
    <body>
    
        @foreach ($holiday as $holidays)
            <div>          
                <p>Location : <label>{{$holidays->location}}</label></p>
                <p>Number of people : <label>{{$holidays->people}}</label></p>
                <p>Dayf of holidays : <label>{{$holidays->days_of_holidays}}</label></p>
                <p>Vote : <label>{{$holidays->personal_vote_from_1_to_5}}</label></p>
            </div>
        @endforeach
    
    
    
    <!-- Ciao ragazzi,
    oggi iniziate a pregustare le vacanze che farete alla fine del corso 
    creando una tabella per i pacchetti di viaggio organizzati da un'agenzia turistica.
    Dopo averne definito la struttura tramite una migration, 
    inserite dei dati pseudo-reali tramite la classe Faker
    BONUS: Aggiungere controller e view -->
    </body>
</html>
