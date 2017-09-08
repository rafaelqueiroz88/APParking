<?php
    include "./Model/AdminModel.php";
    $database = new Database();
    $db = $database->getConnection();
    if($_POST)
    {
        $admin = new Adminmodel($db);
        $admin->login = $_POST["login"];
        $admin->senha = $_POST["senha"];
        if($admin->AutenticarUsuario())
        {
            header("location:./?pagina=Home");
        }
        else
        {
            echo "Usuário ou senha não encontrados!";
        }
    }
?>

        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h2>login</h2>
                </div>
            </div>
            <form action="./?pagina=Index" method="post" class="col s12 m12">
                <div class="row">
                    <div class="input-field col s12 offset-m3 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" name="login" class="validate">
                        <label for="icon_prefix">Login</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 offset-m3 m6">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_prefix" type="password" name="senha" class="validate">
                        <label for="icon_prefix">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 center">
                        <button class="waves-effect waves-light btn black">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>