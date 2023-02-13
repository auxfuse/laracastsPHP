<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Demo</title>
    </head>
    <body>

        <!-- Variables -->

        <?php require 'components/variables.php'; ?>

        <h2>Yo! <?php echo $greeting ?></h2>

        <!-- Conditionals/Booleans -->
        <?php require 'components/conditionsBools.php'; ?>

        <div class="conditions">
            <h1>Conditions</h1>
            <!-- <p><?php echo $string; ?></p> -->

            <!-- shorthand php tag syntax -->
            <p><?= $string; ?></p>
        </div>

        <!-- Arrays -->

        <?php require 'components/arrays.php'; ?>

        <div class="arrays">
            <ul><h2>Arrays</h2>
                <?php
                    forEach($books as $book) {
                        echo "<li class='list'>{$book}</li>";
                    }
                ?>
            </ul>

            <ol><h2>Array - alt syntax</h2>
                <!-- alternative syntax for loops -->
                <?php forEach($books as $book) : ?>
                    <li class="list"><?= $book ?></li>
                <?php endforeach; ?>
            </ol>

        </div>

        <!-- Associative Arrays -->

        <?php require 'components/assocArrays.php'; ?>

        <div class="assoc-arrays">
            <ul><h2>Associative Arrays / Funcs / Filters</h2>
                <?php foreach ($wl as $movement) : ?>
                    <li>
                        <?= $movement['short'] ?> @ <?= $movement['weight'] ?>
                    </li>
                <?php endforeach ?>
            </ul>
            <ol><h3>filter by class</h3>
            <!-- operator equality === needed -->
                <?php foreach ($wl as $movement) :?>
                    <?php if ($movement['class'] === 'power') : ?>
                        <li>
                            <?= $movement['short'] ?> @ <?= $movement['weight'] ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
            <ol><h3>filter by function</h3>
            <!-- operator equality === needed -->
                <?php foreach (filterByClass($wl, 'compound') as $movement) :?>
                    <li>
                        <?= $movement['long'] ?> / <?= $movement['class'] ?>
                    </li>
                <?php endforeach; ?>
            </ol>

        </div>

        <!-- Lambda -->

        <?php require 'components/lambda.php'; ?>

        <div class="lambda-funcs">
                <ul><h2>Lambda</h2>
                    <?php foreach ($filteredBooks as $book) : ?>
                        <li>
                            <?= $book['name'] ?> @ <?= $book['author'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
                <ul><h2>Lambda refactor</h2>
                    <?php foreach ($filterSet as $book) : ?>
                        <li>
                            <?= $book['name'] ?> @ <?= $book['author'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
                <ul><h2>Lambda non-rigid refactor</h2>
                    <?php foreach ($fBooks as $book) : ?>
                        <li>
                            <?= $book['name'] ?> @ <?= $book['author'] ?> / <?= $book['releaseYear'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
                <ul><h2>built-in array filter from php</h2>
                    <?php foreach ($phpArrayFilter as $book) : ?>
                        <li>
                            <?= $book['name'] ?> @ <?= $book['author'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
        </div>

    </body>
</html>