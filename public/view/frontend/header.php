<?php session_start();?>
<header>
    <div class="row header-navbar">
        <h1><i class="fas fa-cookie-bite"></i>COGIP</h1>
            <p class="welcome">Bonjour <b><?php echo $_SESSION['nom'];?></b> !</p>
        <a href="">Deconnexion</a>
    </div>
</header>
<section class="menu">
        <a href="index.php">Accueil</a>
        <a href="fournisseurs.php">Founisseurs</a>
        <a href="clients.php">Clients</a>   
</section>