<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listing des Posts</title>
</head>
<body>
    <h1>Listing des Posts</h1>
    
    @foreach ($posts as $post)
        {{$post->id}}<br>
        {{$post->title}} <br>
        {{$post->message}}<br>
       
    @endforeach
    
</body>
</html>