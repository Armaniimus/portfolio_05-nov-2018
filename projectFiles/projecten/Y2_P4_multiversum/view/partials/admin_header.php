<header>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #bdc3c7">

        <!-- logo -->
        <a class="navbar-brand text-dark" href="index.php">
            <img src="view/assets/images/vr.png" height="50px"/>Multiversum
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="index.php?view=admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="index.php?view=admin_products">Producten</a>
                </li>
            </ul>

            <?php
                if (!isset($previousSearch)) {
                    $previousSearch = '';
                }
             ?>
            <form class="form-inline my-2 my-lg-0" action="index.php?view=admin_search" method="post">
                  <input class="form-control mr-sm-2" name="search" placeholder="Zoeken" value="<?php echo $previousSearch ?>">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoeken</button>
            </form>
            <a class="uitlog-knop" href="index.php?view=logout">Log Uit</a>
        </div>
    </nav>
</header>
