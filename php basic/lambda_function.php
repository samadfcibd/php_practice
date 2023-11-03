<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda/ Anonymous Function</title>
</head>

<body>

    <?php

    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ],
    ];




    // Lambda function implement by using custom code
    $filteredItems = function ($items, $fn) {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    };

    $filteredItems = $filteredItems($books, function ($book) {
        return $book['author'] == 'Andy Weir';
    });


    // Lambda function implement by php built-in function
    // $filteredBooks = array_filter($books, function ($book) {
    //     return $book['author'] === 'Andy Weir';
    // });

    ?>



    <h1>Lambda/ Anonymous Function in PHP</h1>
    <p>Anonymous function is a function without any user defined name. Such a function is also called closure or lambda function. Sometimes, you may want a function for one time use. Closure is an anonymous function which closes over the environment in which it is defined. You need to specify use keyword in it.Most common use of anonymous function to create an inline callback function.</p>


    <h3>Books - Authors List</h3>

    <ul>
        <?php foreach ($filteredItems as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>