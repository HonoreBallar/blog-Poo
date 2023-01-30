<h1 class="mt-3">Nos articles</h1>

<div class="row">
    <?php foreach ($articles as $article) : ?>
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card border-info card-home">
                <div class="card-body">
                    <h4 class="card-title"><?= $article['title'] ?></h4>
                    <small>Ecrit le <?= $article['created_at'] ?></small>
                    <p><?= substr($article['introduction'], 0, 100) . '...'  ?></p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-secondary btn-sm" href="index.php?controller=article&task=show&id=<?= $article['id'] ?>">Lire la suite</a>
                    <a class="btn btn-danger btn-sm delete-article" href="index.php?controller=article&task=delete&id=<?= $article['id'] ?>">Supprimer</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>