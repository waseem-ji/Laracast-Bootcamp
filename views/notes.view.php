
    <?php require ("partials/head.php") ?>
    <?php require ("partials/nav.php") ?>
    
    <?php require ("partials/banner.php") ?>

    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <h1>Hey there</h1>
      <div class="px-4 py-6 sm:px-0">
        <div class="h-96 rounded-lg border-4 border-dashed border-gray-200 p-5">
            <?php foreach ($notes as $note):?>
            <li>
              <a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
                <?= $note['note'] ?>
              </a>
            </li>
            <?php endforeach; ?>
        </div>
      </div>
      <!-- /End replace -->
      </div>
  </main>

    <?php require ("partials/footer.php") ?>
    
