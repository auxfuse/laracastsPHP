<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<?php require(base_path('views/partials/_head.php')); ?>

<body class="h-full">
    <div class="min-h-full">
        <?php require(base_path('views/partials/_nav.php')); ?>
        
        <?php require(base_path('views/partials/_header.php')); ?>

        <a href="/notes" class="text-blue-500 hover:underline ml-8">See all Notes</a>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                    <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
                        <li><?= htmlspecialchars($note['body']) ?></li>
                    </div>
                </div>
                <form method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>">
                    <button type="submit" class="text-small text-red-500">Delete</button>
                </form>
                <!-- /End replace -->
            </div>
        </main>
    </div>

</body>

</html>