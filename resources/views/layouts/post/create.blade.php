<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création de Posts</title>
</head>
<body>
        <h1>Ajouter un Post</h1>
    
    <form action="{{route('post.store')}}" method="POST">
       
        @csrf
        <label for="title">Titre</label>
        <input required type="text" id="title" name="title" placeholder="Entrez le titre">
        
        
        <label for="message">Post</label>
        <textarea required id="texterea" name="message" placeholder=""></textarea> 
        <button type="submit">Ajouter</button>
    </form>
    
    <a href="">Retour à la liste</a>
    
</body>
</html>