
    <?php require base_path("views/partials/head.php") ?>
    <?php require base_path("views/partials/nav.php") ?>
    
    <?php require base_path("views/partials/banner.php") ?>

    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <h1>Hey there</h1>
      <div class="px-4 py-6 sm:px-0">
        <p><a href="/notes" class="text-blue-500 hover:underline">Go back</a></p>
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-5">
            <p><?= htmlspecialchars($note['note'])  ?></p>
        </div>
      </div>
      <!-- /End replace -->
      <form class="mt-6" method="POST" >
        <input type="hidden" name='_method' value="DELETE">
        <input type="hidden" name='id' value="<?= $note['id'] ?>">
        <button class="text-sm text-red-500" >Delete</button>
      </form>
      </div>
  </main>

    <?php require base_path("views/partials/footer.php") ?>
    
