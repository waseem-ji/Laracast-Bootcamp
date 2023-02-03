
    <?php require base_path("views/partials/head.php") ?>
    <?php require base_path("views/partials/nav.php") ?>
    
    <?php require base_path("views/partials/banner.php") ?>

    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <h1>Hey there</h1>
      <div class="px-4 py-6 sm:px-0">
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-5">
          <ul>
          <?php foreach ($notes as $note):?>
            <li>
              <a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
                <?= htmlspecialchars($note['note'])  ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>

          <p class="mt-6 ">
            <a href="/note/create" class="text-green-500 hover:underline">Add new note</a>
          </p>
        </div>

      </div>
      <!-- /End replace -->
      </div>
  </main>

    <?php require base_path("views/partials/footer.php") ?>
    
