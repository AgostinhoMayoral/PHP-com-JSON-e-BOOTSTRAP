<html>
    <?php
    require "config.php";

    $json = new Usuario();
    $json->Consulta();


    $usuarioSamantha = $json->Verificar("Samantha");
    $quant = $json->VerificarHemisferioSul();

    echo "Todos WebSites são: <br/>";
    $json->VerificarWebSites();
    echo "<br/><br/>";
    echo "O Email da Usuaria Samantha é: $usuarioSamantha<br/><br/>";

    echo "Quantidade de usuarios do hemisfério sul é: $quant <br/><br/>";


    if (isset($_POST['user'])) {

        $usuario = addslashes($_POST['user']);


        $r = $json->Verificar($usuario);
    }
    ?>
    <head>
        <title>Usando Json - Sistema Básico</title>
    </head>
    <body>
        <form method="post">
            <label>Consultar e-mail pelo username:</label>
            <input type="text" value="Samantha" name="user" placeholder="Digite o Usuário" />
            <input type="submit" value="consultar" /> 
            <?php
            if (!empty($r)) {

                echo "</br><br/>";
                echo "</br><br/>Usuário digitado é: " . $usuario . "<br/>";
                echo "O email do usuário é: $r <br/>";
                echo "<br/><br/>";
            }
            ?>
        </form>

    </body>
</html>