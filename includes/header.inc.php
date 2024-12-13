<?php
/**
 * header de las paginas
 *
 * @author Eloy
 *
 * @version 1.0
 *
 */  

    
?>
<header>
    <h1><a href="/">MerchaShop</a></h1>
    <a href="/">Principal</a>
    <?php
        if(empty($_SESSION['userName'])){
    ?>

    <div id="zonausuario">
    <!-- Si el usuario no está logueado (no existe su variable de sesión): -->
        <span>¿Ya tienes cuenta? <a href="/login">Loguéate aquí</a>.</span>
    <!-- Fin usuario no logueado -->

    <?php
        }else{
    //<!-- Si el usuario está logueado (existe su variable de sesión): -->
        echo '<span id="usuario">'.$_SESSION['userName'].'</span>';
            if($_SESSION['rol']=='admin'){
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