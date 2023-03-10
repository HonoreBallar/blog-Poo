<?php
namespace Controllers;

class Comment extends Controller
{
    protected $modelName = \Models\Comment::class;

    public function add()
    {

        $articleModel = new \Models\Article();

        $author = null;
        if (!empty($_POST['author'])) {
            $author = $_POST['author'];
        }
        // Ensuite le contenu
        $content = null;
        if (!empty($_POST['content'])) {
            // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
            $content = htmlspecialchars($_POST['content']);
        }

        // Enfin l'id de l'article
        $article_id = null;
        if (!empty($_POST['article_id']) && ctype_digit($_POST['article_id'])) {
            $article_id = $_POST['article_id'];
        }

        if (!$author || !$article_id || !$content) {
            die("Votre formulaire a été mal rempli !");
        }

        $article = $articleModel->find($article_id);
        if (!$article) {
            die("Ho ! L'article $article_id n'existe pas boloss !");
        }

        $this->model->add(compact('author', 'content', 'article_id'));

        // 4. Redirection vers l'article en question :
        \Http::redirect("index.php?ccontroller=article&task=show&id=$article_id");

    }

    public function delete()
    {

        if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
            die("Ho ! Fallait préciser le paramètre id en GET !");
        }

        $id = $_GET['id'];

        $commentaire = $this->model->find($id);
        if (!$commentaire) {
            die("Aucun commentaire n'a l'identifiant $id !");
        }

        $article_id = $commentaire['article_id'];

        $this->model->delete($id);

        \Http::redirect("index.php?controller=article&task=show&id=$article_id");

    }
}