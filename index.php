<?php include("cabecalho.php")?>
    <div class="geral">
        <section class="formulario-login">
            <h1>Sistema Imaginera</h1>
            <form action="login.php" method="POST">
                <div>
                    <label>Email:</label>
                    <input type="email"></input>
                </div>
                <div>
                    <label>Senha:</label>
                    <input type="password"></input>
                </div>
                <div class="button-submit">
                    <input type="submit" value="Entrar"></input>
                </div>
            </form>
        </section>
    </div>
<?php include("footer.php")?>