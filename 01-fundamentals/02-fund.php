<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
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
            'releaseYear' => "2003",
            'url' => "https://example.com"
        ],
        [
            'name' => "Lillyput Island",
            'author' => "William Shakesphere",
            'releaseYear' => "2003",
            'url' => "https://example.com"
        ]

    ];
    // defining and writing logic inside function inside php tag.
    function filterBooks($books)
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] == "William Shakesphere") {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
    ?>
    <!-- using defined function in foreach loop. -->
    <?php foreach (filterBooks($books) as $book) : ?>
        <a href="<?= $book['url'] ?>">
            <?= $book['name']; ?>(<?= $book['releaseYear'] ?>)<?= $book['author'] ?>
        </a>
    <?php endforeach; ?>

</body>

</html>