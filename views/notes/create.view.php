<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<?php require(Core\base_path('views/partials/_head.php')); ?>

<body class="h-full">
    <div class="min-h-full">
        <?php require(Core\base_path('views/partials/_nav.php')); ?>
        
        <?php require(Core\base_path('views/partials/_header.php')); ?>

        <main>

            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <form method="POST" action="/notes">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">New Note</h2>

                            <div class="col-span-full">
                                <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                                <div class="mt-2">
                                    <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"><?= $_POST['body'] ?? '' ?></textarea>
                                    <?php if (isset($errors['body'])) : ?>
                                        <p class="mt-4 text-md leading-6 text-red-600"><?= $errors['body'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Type your note.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit" class="rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>

            </div>

            <a href="/notes" class="text-blue-500 hover:underline ml-8">See all Notes</a>
        </main>
    </div>

</body>

</html>