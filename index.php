<?php

    include("includes/functions.php");
    include("includes/constants.php");

    /**
     * Enigma 2016 website index.
     *
     * @author     Maded Batara III (blubits)
     */

    if (!isset($_COOKIE[COOKIE_NAME])) {
        setcookie(COOKIE_NAME, COOKIE_INDEX, time() + (86400 * 365), "/");
        render("index_terminal.php", [
            "title" => "agent@commandbox: /bin/telnet",
            "css" => ["terminal"]
        ]);
    } else {
        switch ($_COOKIE[COOKIE_NAME]) {
            case COOKIE_RIDDLE_INIT:
            case COOKIE_RIDDLE_INCORRECT:
                redirect("riddle.php");
                break;
            case COOKIE_RIDDLE_CORRECT:
                render("index_return.php", [
                    "css" => ["nav", "terminal", "index"]
                ]);
                break;
            case COOKIE_INDEX:
            default:
                render("index_terminal.php", [
                    "title" => "agent@commandbox: /bin/telnet",
                    "css" => ["terminal"]
                ]);
                break;
        }
    }

?>