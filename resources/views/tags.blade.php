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
         
        @foreach ($tags as $tag)
            <li>{{ $tag->name }}</li>
            <br>
            @foreach ($tag->posts as $post)
            <ul>
                <li>{{ $post->title }}</li >
                
            </ul>
            <br>
            @endforeach
            
        @endforeach
    
    </ul>

</body>
</html>