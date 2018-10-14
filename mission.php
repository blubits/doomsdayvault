<?php

    include("includes/functions.php");
    include("includes/constants.php");

    /**
     * Enigma 2016 mission description page.
     *
     * @author    Maded Batara III (blubits)
     */

    if (isset($_COOKIE[COOKIE_NAME]) && $_COOKIE[COOKIE_NAME] == COOKIE_RIDDLE_CORRECT) {
        render("mission.php", [
            "title" => "MISSION DESCRIPTION [[DOOMSDAY VAULT]]",
            "css" => ["nav", "mission"]
        ]);
    } else {
        redirect("index.php");
    }

?>