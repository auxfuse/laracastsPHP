<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<?php require(base_path('views/partials/_head.php')); ?>

<body class="h-full">
    <div class="min-h-full">
        <?php require(base_path('views/partials/_nav.php')); ?>
        
        <?php require(base_path('views/partials/_header.php')); ?>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                    <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
                        <ul class="ms-6 mt-4">
                            <?php foreach ($notes as $note) : ?>
                                <li>
                                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($note['body']) ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="ms-6 mt-6">
                        <a href="/notes/create" class="text-blue-500 hover:underline">Create Note -></a>
                    </div>
                </div>
                <!-- /End replace -->
            </div>
        </main>
    </div>

</body>

</html>