<head>
    <meta charset="utf8" />
    <title><?php echo $titlePage ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="<?= PUBLIC_URL ?>/css/c1.css?v<?= time() ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="bg-success position-relative">
            <?php include "header.php"; ?>
        </header>
        <nav class="bg-warning">
            <?php include "menu.php"; ?>
        </nav>
        <main class="d-flex">
            <article class="col-md-9 bg-success-subtle">
                <?php include $view ?>
            </article>
            <aside class="col-md-3 bg-warning-subtle">
                <?php include "aside.php"; ?>
            </aside>
        </main>
        <footer class="bg-success">
            <?php include "footer.php"; ?>
        </footer>
    </div>
</body>