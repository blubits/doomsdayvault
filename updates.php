<?php

    include("includes/functions.php");
    include("includes/constants.php");

    /**
     * Enigma 2016 updates page.
     *
     * @author    Maded Batara III (blubits)
     */

    if (isset($_COOKIE[COOKIE_NAME]) && $_COOKIE[COOKIE_NAME] == COOKIE_RIDDLE_CORRECT) {
        render("updates.php", [
            "title" => "MISSION UPDATES [[DOOMSDAY VAULT]]",
            "css" => ["nav", "updates"]
        ]);
    } else {
        redirect("index.php");
    }

?>