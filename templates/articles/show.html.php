<h1 class="text-warning"><?= $article['title'] ?></h1>
<small>Ecrit le <b><?= $article['created_at'] ?></b></small>
<p><?= $article['introduction'] ?></p>
<hr>
<?= $article['content'] ?>

<?php if (count($commentaires) === 0) : ?>
    <h2 class="text-muted">Il n'y a pas encore de commentaires pour cet article ... SOYEZ LE PREMIER ! :D</h2>
<?php else : ?>
    <h2 class="text-muted mb-2">Il y a déjà (<?= count($commentaires) ?>) réactions : </h2>
    <?php foreach ($commentaires as $commentaire) : ?>
        <div class="card mb-3 comment shadow border-left-primary">
            <div class="card-body">
                <h3><?= $commentaire['author'] ?></h3>
                <blockquote>
                    <em><?= $commentaire['content'] ?></em>
                </blockquote>
                <div class="text-end">
                    <small class="text-muted fw-bold">Le <?= $commentaire['created_at'] ?></small>
                </div>
                <a class="btn btn-danger" href="index.php?controller=comment&task=delete&id=<?= $commentaire['id'] ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?!`)">Supprimer</a>
            </div>
        </div>
    <?php endforeach ?>
<?php endif ?>

<hr>
<form class="mb-3" action="index.php?controller=comment&task=add" method="POST">
    <h3>Vous voulez réagir 😀?</h3>
    <div class="mb-3">
        <input required type="text" class="form-control" name="author" id="author" aria-describedby="helpId" placeholder="Votre pseudo !">
    </div>
    <div class="mb-3">
        <textarea required cols="30" rows="10" class="form-control" name="content" id="content" aria-describedby="helpId" placeholder="Votre commentaire ..."></textarea>
    </div>
    <input type="hidden" name="article_id" value="<?= $article_id ?>">
    <button class="btn btn-success">Commenter !</button>
</form>