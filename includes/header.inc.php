<?php
    

    
?>
<header>
    <?php
        if(empty($_SESSION['name'])){
    ?>
    
    <h1><a href="/">MerchaShop</a></h1>

    <a href="/">Principal</a>

    <div id="zonausuario">
    <!-- Si el usuario no está logueado (no existe su variable de sesión): -->
        <span>¿Ya tienes cuenta? <a href="/login">Loguéate aquí</a>.</span>
    <!-- Fin usuario no logueado -->

    <?php
        }else{
    ?>
    <!-- Si el usuario está logueado (existe su variable de sesión): -->
        <span id="usuario"><?$_SESSION['name']?></span>
        <?php
            if($_SESSION['name']['role']=='admin'){
        ?>   
                <!-- Solo si el usuario es administrador -->
                <a href="/users">Ver usuarios</a>
                <br>
        <?php
            }    
        ?>
        <span id="logout"><a href="/logout">Desconectar</a></span>
    <!-- Fin usuario logueado -->
    <?php
        }
    ?>
    </div>
</header>