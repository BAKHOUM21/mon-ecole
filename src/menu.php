<?php 
    include("header.php");
?>
<nav>
    
<div id="mySidenav" class="sidenav mt-1">
        <a id="closeBtn" href="#" class="close">&times;</a>
        <ul>
            <li><a href="acceuil.php">Acceuil</a></li>
            <li><a href="niveau.php">Niveau</a></li>
            <li><a href="mes_cours.php">Mes cours</a></li>
            <li><a href="exercices.php">Exercices</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <a href="#" id="openBtn">
        <span class="burger-icon burg">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>
</nav>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script defer>
    var sidenav = document.getElementById("mySidenav");
    var openBtn = document.getElementById("openBtn");
    var closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;

    /* Set the width of the side navigation to 250px */
    function openNav() {
    sidenav.classList.add("active");
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
    sidenav.classList.remove("active");
    }
</script>