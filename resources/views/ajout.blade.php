<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
        <center>
            <div style="background:#AED6F1; border-radius:10px;padding:5px">
                <h1 style="font-size:50px; color:white">Formulaire Etudiant</h1>
            </div>
            <br>
            <a style="border:1px solid; background:#AED6F1; border-radius:10px; padding:10px;
            font-size:20px;marging-bottom:10px; color:white" href="{{route('liste.etudiant')}}">
            liste etudiant</a>
            <form style="border: 5px solid #AED6F1;width:50%; background-color:#AED6F1" method="POST" action="{{route('store.etudiant')}>
                <div style="background-color: white; width:50%">
                    @csrf
                    <label for="">prenom</label><br>
                    <input type="text" required name="prenom" placeholder="prenom"><br><br>
                    

                <label for="">nom</label><br>
                <input type="text" required name="nom" placeholder="nom"><br><br>

                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Semestre</option>
                    <option value="1">semectre1</option>
                    <option value="2">semestre2</option>
                    
                    </select><br><br>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>matiere</option>
                        <option value="1">math</option>
                        <option value="2">langage c</option>
                        
                        </select>
                        <br>
                        <br>
                        <label for="">note</label><br>
                     <input type="number" required name="note" placeholder="note"><br><br>
                  <br>
                  <br>
            
                <label for="">examen</label>
                <input type="text" required name="examen" placeholder="examen"><br><br>
                <input type="submit" name="" value="entregistrer"><br>
                
            </div>
       
            </form>
        </center>
        
       
    </body>
</html>