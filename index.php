<!--<?php if(isset($_GET["logout"]) && $_GET["logout"]==true){?>
	<p class="alert-success">Deslogado com sucesso</p>
    <?php }?>
<?php if(isset($_SESSION["success"])){?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
<?php 
	unset($_SESSION["success"]);
}?>

<?php if(isset($_SESSION["danger"])){?>
	<p class="alert-danger"><?=$_SESSION["danger"]?></p>
<?php 
	unset($_SESSION["danger"]);
}?>-->
<?php include("cabecalho.php")?>
    <div class="geral">
        <section class="formulario-login">
            <h1>Sistema <!--Imaginera--></h1>
            <form action="login.php" method="post">
                <div class="form-input">
                    <label>Email:</label>
                    <input type="email" name="email" />
                </div>
                <div class="form-input">
                    <label>Senha:</label>
                    <input type="password" name="senha" />
                </div>
                <div class="button-submit">
                    <input type="submit" value="Entrar" />
                </div>
            </form>
        </section>
    </div>
<?php include("footer.php")?>