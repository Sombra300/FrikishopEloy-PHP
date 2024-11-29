<?php
    



    
?>
<header>
    <h1><a href="/">MerchaShop</a></h1>

    <a href="/">Principal</a>

    <div id="zonausuario">
    <!-- Si el usuario no está logueado (no existe su variable de sesión): -->
        <span>¿Ya tienes cuenta? <a href="/login">Loguéate aquí</a>.</span>
    <!-- Fin usuario no logueado -->


        <!-- quitar estos br --><br><br>


    <!-- Si el usuario está logueado (existe su variable de sesión): -->
        <span id="usuario">NOMBRE_USUARIO</span>
        <!-- Solo si el usuario es administrador -->
        <a href="/users">Ver usuarios</a>
        <br>
        <span id="logout"><a href="/logout">Desconectar</a></span>
    <!-- Fin usuario logueado -->
    </div>
</header>