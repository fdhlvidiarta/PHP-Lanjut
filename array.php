<?php
    // Array dengan nama dan umur
    $data = array(
        array("nama" => "Babe Rudo", "umur" => 25),
        array("nama" => "Apple Lecia", "umur" => 30),
        array("nama" => "Scotty Nora", "umur" => 35),
        array("nama" => "Stone Bernice", "umur" => 20),
        array("nama" => "Reid Kaya", "umur" => 28),
        array("nama" => "Shae Sidney", "umur" => 32),
        array("nama" => "Elfreda Amara", "umur" => 27),
        array("nama" => "Krystal Margo", "umur" => 22),
        array("nama" => "Permelia Sally", "umur" => 40),
        array("nama" => "Popye", "umur" => 26),
        array("nama" => "Thomas", "umur" => 29),
        array("nama" => "Brant Yanina", "umur" => 33),
        array("nama" => "Sapo", "umur" => 24),
        array("nama" => "Paisley Leann", "umur" => 31),
        array("nama" => "Grismen", "umur" => 37)
    );
    // Konversi array menjadi JSON
    $json_data = json_encode($data, JSON_PRETTY_PRINT);
    // Tampilkan JSON
    echo $json_data;
