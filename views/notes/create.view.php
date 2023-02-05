<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->

        <form class="w-full max-w-sm" method="POST" action="/notes">
            <div class="flex items-center border-b border-teal-500 py-2">
            <p><a href="/notes" class="text-blue-500 hover:underline">Go back</a></p>
                <input 
                    name="body" 
                    class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" 
                    type="text" 
                    placeholder="Add your ideas" 
                    aria-label="Full name" 
                    required  
                    value= "<?= isset($errors['body'])? $_POST['body']: '' ?>">

                <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                    Add Note
                </button>
                <a href="/notes" class="text-blue-500 hover:underline">
                    <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                        Cancel
                    </button>
                </a>
            </div>
            <?php if (isset($errors['body'])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
            <?php endif ?>
        </form>
        <!-- /End replace -->
    </div>
</main>

<?php require base_path("views/partials/footer.php") ?>