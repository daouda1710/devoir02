<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <center>
            <div style="background:#AED6F1; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Liste des Etudiant</h1>
            </div>
            <br>
            <br>
            <br>
            <div style="background-color: #AED6F1; width:80%">
                <div style="background-color: white; width:60%">
            <table style="width: 100%" border=1>
                <tr style="background-color:#AED6F1; color:white; font-size:20px;padding:5px">
                    <td>prenom</td>
                    <td>nom</td>
                    <td>semestre</td>
                    <td>matiere</td>
                    <td>note</td>
                    <td>examen</td>
                </tr>

                
            
                        @foreach ($etudiants as $e) 
                            <tr>
                                <td>{{ $e->prenom }}</td>
                                <td> {{ $e->nom}} </td>
                                <td> {{$e->semestre }} </td>
                                <td> {{$e->matiere}} </td>
                                <td> {{$e->note}} </td>
                                <td> {{$e->examen}} </td>
                                <td>
                                
                            </tr>
                        @endforeach
                
     
                
            </table>
            <br>
            <br>
            <a style="border:1px solid; background:#AED6F1; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{route('ajout.etudiant')}}">
            Ajouter un Etudiant</a>
                </div>
        </div>

        </center>
    </body>