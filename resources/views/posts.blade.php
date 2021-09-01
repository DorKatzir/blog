<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/app.css">

        
        
    </head>
    <body>
        <?php foreach($posts as $post): ?>
            <article>
                <h1>
                    <a href="/posts/<?= $post->slug; ?>">
                        <?= $post->title; ?>
                    </a>
                </h1>
                <div><?= $post->excerpt; ?></h1>
            </article>
        <?php endforeach; ?>


       
    </body>
</html>
