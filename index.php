<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vigi APP old</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="d-flex flex-column h-100">
        <?php include 'components/navbar.php'; ?>
        <main class="flex-shrink-0">
            <div class="container py-4">
                <?php include 'components/header.php'; ?>
                <?php
                    if ($_SERVER['REQUEST_URI'] === '/home') {
                        header('Location: /');
                    }

                    $url = (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/')
                        ? explode('/', trim($_SERVER['REQUEST_URI'], '/'))
                        : ['home'];

                    $page = $url[0];

                    switch ($page) {
                        case 'products':
                            include 'page/products.php';
                            break;
                        case 'about':
                            include 'page/about.php';
                            break;
                        default:
                            include 'page/home.php';
                            break;
                    }
                ?>
            </div>
        </main>
        <?php include 'components/footer.php'; ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>