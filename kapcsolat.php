<?php

    if(isset($_POST['gomb'])) {
        $evek = $_POST['evek'];
        $honap = $_POST['honapok'];
        $nap = $_POST['napok'];

        $testsuly = $_POST['range'];
        $nev = $_POST['nev'];
        $email = $_POST['email'];
        $uzenet = $_POST['uzenet'];

        echo "<h3>Név: $nev </h3>";
        echo "<h3>Email: $email</h3>";
        echo "<h3>Születési dátum: $evek - $honap - $nap</h3>";
        echo "<h3>Testsúly: $testsuly</h3>";
        echo "<h3>Üzenet: $uzenet</h3>";
        echo "<br>";
        echo "<a href='index.php'>Új üzenet</a>";
    }