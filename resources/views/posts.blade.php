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
         
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
            <br>
            <ul>
                <li>{{ $post->user->name }}</li>
                
            </ul>
            <br>
            
            <ul>

                @foreach ($post->tags as $tag)
                    <li>{{ $tag->name }} | {{ $tag->pivot->created_at }}</li>
                        
                @endforeach
                
            </ul>

        @endforeach
    
    </ul>

</body>
</html>