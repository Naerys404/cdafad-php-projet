<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title><?= $title ?? "" ?></title>
</head>

<body>
    <main class="container-fluid">
        <h1>Connexion</h1>
        <form action="" method="post">
            <fieldset>
                <input type="email" name="email" placeholder="Saisir votre email" required>
                <input type="password" name="password" placeholder="Saisir votre mot de passe" required>
            </fieldset>
         <input type="submit" value="Connexion" name="submit">
        </form>
        <p><?= $data["msg"] ?? ""  ?></p>
    </main>
</body>

</html>