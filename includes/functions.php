<?php

    /**
     * PHP helper functions. Adopted from Harvard's CS50 problem set source code.
     *
     * @author    Maded Batara III
     * @author    CS50/David J. Malan
     */

    /**
     * Renders template, passing in values.
     *
     * @param template    Path to template to be rendered.
     * @param values      Hash map of variables to be rendered.
     */
    function render($template, $values = [])
    {
        // if template exists, render it
        if (file_exists("templates/$template"))
        {
            // extract variables into local scope
            extract($values);

            // render header
            require("templates/header.php");

            // render template
            require("templates/$template");

        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }

    }

    /**
     * Redirects user to destination, which can be a URL or a relative path
     * on the local host.
     *
     * Because this function outputs an HTTP header, it must be called before
     * caller outputs any HTML.
     *
     * @param destination    Destinatio URL.
     */
    function redirect($destination)
    {
        // handle URL
        if (preg_match("/^https?:\/\//", $destination))
        {
            header("Location: " . $destination);
        }

        // handle absolute path
        else if (preg_match("/^\//", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$destination");
        }

        // handle relative path
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$destination");
        }

        // exit immediately since we're redirecting anyway
        exit;
    }

?>