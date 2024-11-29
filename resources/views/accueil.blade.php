@extends('layout')

@section('content')
<center><button><h3><a href="taches.php">Voir ma liste des tâches</a></h3></button></center><br><br>
<form action="list.php" method="post" style="border: 2px solid black;">
    <div style="margin: 10px;">
        <h1 style="border-bottom: solid 1px black;width:37%">Ajouter Une Tâche</h1>
        <label for="description">Description :   </label>
        <input type="text" name="descriptif"> <br><br>

        <label for="priorite">Priorité :   </label>
        <select name="priorite" id="pet-select">
            <option value="">Choisir un degré d'importance</option>
            <option value="haute">Haute</option>
            <option value="moyenne">Moyenne</option>
            <option value="basse">Basse</option>
        </select><br><br>

        <label for="date_echeance">Date d'échéance :   </label>
        <input type="date" name="date_echeance"><br><br>

        <input type="submit" value="Enregistrer">
    </div>
</form> 
@endsection
