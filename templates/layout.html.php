<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/bootstrap.min.js" defer></script>
    <script src="assets/js/jquery.min.js" defer></script>
    <script src="assets/js/js.js" defer></script>
    <title>Mon superbe blog - <?= $pageTitle ?></title>
</head>

<body>
    <div class="container-fluid">
        <button class="btn btn-info text-white" id="top-btn">Top</button>
        <div class="container-fluid bg-dark">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="/">YourBlog</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                            <a class="nav-link" href="#">Videos</a>
                            <a class="nav-link" href="#">Tutoriel</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container content">
            <?= $pageContent ?>
        </div>
        <div class="bg-dark p-2">
            <p class="text-center text-white">&target; Created by Amounan Honoré - amounahonore@gmail.com &target; </p>
        </div>
    </div>
</body>

</html>