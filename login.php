<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Simplify Softwares</title>
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <form name="form_login" method="post" action="login.php">
            <div class="jumbotron">
                <div class="login">
                    <div class="data_grid">
                        <div>
                            <p>Usuário:</p>
                            <input type="text" name="user">
                        </div>
                        <div>
                            <p>Senha:</p>
                            <input type="password" name="password">
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="submit" name="send" value="Entrar" class="button">
                        <input type="reset" name="clear" value="Limpar dados" class="button">
                    </div>
                </div>
            </div>

            <?php 
                if (isset($_POST["send"])) {
                    $user = $_POST["user"];
                    $password = $_POST["password"];
                    $error = "Usuário ou senha inválidos!";

                    if ($user == "kevin_ghisi" and $password == "qwerty") {
                        header("location: default.php");
                    }else {
                        echo "<script type='text/javascript'>alert('$error');</script>";
                    }
                }
             ?>
        </form>
    </body>
</html>