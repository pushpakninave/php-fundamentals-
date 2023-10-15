<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <?php
    // declaring array in php.
    $books = [
        [
            'name' => "Kafka On the shore",
            'author' => "Haruki Murakami",
            'releaseYear' => "2002",
            'url' => "https://example.com"
        ],
        [
            'name' => "The Serpent Power",
            'author' => "Sir John Wadroff",
            'url' => "https://example.com"
        ],
        [
            'name' => "Lillyput Island",
            'author' => "William Shakesphere",
            'url' => "https://example.com"
        ]

    ];
    ?>
    <!-- defining a template login with help of php tag. -->
    <h1>
        <!-- foreach and endforeach loop. -->
        <?php foreach ($books as $book) : ?>
            <!-- if endif conditional statement. -->
            <?php if ($book['author'] == 'Haruki Murakami') : ?>
                <li>
                    <a href="<?= $book['url'] ?>">
                        <?= $book['name']; ?>(<?= $book['releaseYear'] ?>)<?= $book['author'] ?>
                    </a>
                </li>
            <?php endif ?>
        <?php endforeach; ?>
    </h1>
</body>

</html>