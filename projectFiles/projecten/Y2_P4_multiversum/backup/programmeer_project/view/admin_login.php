<!DOCTYPE html>
<html lang="nl">
<?php include "partials/meta.php"?>
<body>
    <main>
        <form action="index.php?view=admin" method="post">

            <div class="float-l col-xs-2"><br></div>
            <div class="float-l col-xs-8 login--center">
                <?php
                    if (isset($message)) {
                        echo "<div style='border: 1px black solid; height: 50px; width: 300px;'>
                            " . $message . "
                        </div><br>";
                    }
                ?>

                <label for="username">Gebruikersnaam</label><br>
                <input type="text" name="username" id="username" value="<?php echo $admin_input?>"><br><br>

                <label for="password">Wachtwoord</label><br>
                <input type="text" name="password" id="password"><br><br>

                <input class="inlog-knop" type="submit" name="submit" value="login">
            </div>
            <div class="float-l col-xs-2"><br></div>
        </form>
    </main>
</body>
</html>

<?php
// echo $check1_1;
// echo $check1_2;
// echo $check2_1;
// echo $check2_2;
?>
