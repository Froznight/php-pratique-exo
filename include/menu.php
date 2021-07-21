<!DOCTYPE html>
<html lang="fr">
<?php include("./header.php")?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./donnee.php">Donnée</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./pagInput.php">Entrée</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./modifier.php">Modifier</a>
                    </li>
                    <form class="d-flex" action="research.php" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="research">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>