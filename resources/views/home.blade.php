<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
        <h1>{{ $title['title'] }}</h1>
        <h2>{{ $title['subtitle'] }}</h2>

        <hr> 

        <nav>
            <ul class="nav-bar">
                <li><a href="/">{{ $nav['home'] }}</a></li>
                <li><a href="/info">{{ $nav['info'] }}</a></li>
                <li><a href="/about">{{ $nav['about'] }}</a></li>
            </ul>
        </nav>

        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae temporibus assumenda voluptas velit nisi voluptatem, ut illo quas eum totam nam, dolores sint provident neque, nihil laudantium repudiandae voluptates quo!</p>

</body>
</html>