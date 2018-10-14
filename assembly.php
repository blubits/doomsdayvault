<?php

    include("includes/functions.php");
    include("includes/constants.php");

    /**
     * Enigma 2016 fair description page.
     *
     * @author    Maded Batara III (blubits)
     */

    if (isset($_COOKIE[COOKIE_NAME]) && $_COOKIE[COOKIE_NAME] == COOKIE_RIDDLE_CORRECT) {
        render("assembly.php", [
            "title" => "ASSEMBLY DETAILS [[DOOMSDAY VAULT]]",
            "css" => ["nav", "assembly"]
        ]);
    } else {
        redirect("index.php");
    }

?>