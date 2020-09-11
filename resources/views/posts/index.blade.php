<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codecourse</title>
</head>
<body>
    
    @if (!count($posts))
        <p>There are no posts</p>
    @else
        @foreach ($posts as $post)
            <div>
                <h3>{{ $post['title'] }}</h3>
                <p>{{ $post['id'] }}</p>
            </div>
        @endforeach
    @endif

</body>
</html>