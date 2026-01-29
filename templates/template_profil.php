<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="assets/style/main.css">
    <title><?= $title ?? "" ?></title>
</head>
<body>
    <!-- Import du menu -->
    <?php include 'components/component_navbar.php'; ?>
    <main class="container-fluid">
            <h1>Profil</h1>
            <div>
                <p>Pseudo : <?= $data['pseudo'] ?></p>
                <p>Email : <?= $data['email'] ?></p>
                <p>Prénom : <?= $data['firstname'] ?></p>
                <p>Nom : <?= $data['lastname'] ?></p>
                <p>Roles : <?= $data['roles'] ?></p>
                <img src="../assets/img/<?= $data['img'] ?>" alt="image de profil">
            </div>
    </main>
    <!-- Import du footer -->
    <?php include 'components/component_footer.php'; ?>
</body>
</body>

</html>