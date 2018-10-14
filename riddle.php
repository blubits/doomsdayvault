<?php

    include("includes/functions.php");
    include("includes/constants.php");

    /**
     * Enigma 2016 riddle page.
     *
     * @author    Maded Batara III (blubits)
     */

    $args = [
        "title" => "agent@commandbox: /bin/telnet",
        "css" => ["terminal"]
    ];

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!isset($_COOKIE[COOKIE_NAME])) {
            setcookie(COOKIE_NAME, COOKIE_INDEX, time() + (86400 * 365), "/");
            redirect("index.php");
        } else {
            switch ($_COOKIE[COOKIE_NAME]) {
                case COOKIE_INDEX:
                    setcookie(COOKIE_NAME, COOKIE_RIDDLE_INIT, time() + (86400 * 365), "/");
                case COOKIE_RIDDLE_INIT:
                    render("riddle_initial.php", $args);
                    break;
                case COOKIE_RIDDLE_INCORRECT:
                    render("riddle_incorrect.php", $args);
                    break;
                case COOKIE_RIDDLE_CORRECT:
                default:
                    redirect("index.php");
                    break;
            }
        }
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $passcode = strtoupper($_POST["passcode"]);
        $correct = "THURSDAY";
        if ($passcode == $correct) {
            setcookie(COOKIE_NAME, COOKIE_RIDDLE_CORRECT, time() + (86400 * 365), "/");
            render("riddle_correct.php", $args);
        } else {
            setcookie(COOKIE_NAME, COOKIE_RIDDLE_INCORRECT, time() + (86400 * 365), "/");
            render("riddle_incorrect.php", $args);
        }
    }

?>