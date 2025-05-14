<?php

/*************************
 *
 *     SYSTEME VARIABLE
 *
 ************************/

//prod OR dev
$APP_ENV = "prod";

// Link Variable
$SYSTEM_FRAMEWORK = "@tyrositeframework/";
$SYSTEM_COMPOSANT = "composant/";
$SYSTEM_EXTENSION = "file_extension/";
$SYSTEM_ASSETS = "file_assets/";
$SYSTEM_JAVASCRIPT = "file_javascript/";
$SYSTEM_CSS = "file_css/";

// Data
$DATABASE = "app/database." . $APP_ENV . ".php";
$SALT = "app/salt." . $APP_ENV . ".php";


/*************************
 *
 *     INIT VARIABLE
 *
 ************************/

//Variable GLOBAL
$env_name = "N00ka Studio";
$env_logo = $SYSTEM_ASSETS . "nooka logo.png";
$env_url = "https://n00ka-studio.fr"; /* for <meta> */
$env_desc = "Site Officiel de N00ka"; /* for <meta> */
$env_lang = "fr"; /* for <html lang=""> */

// PAGE MANAGEMENT
$env_page = array(
    //404
    0 => "404 | " . $env_name,
    //Page
    1 => array(
        "title" => $env_name,
        "name" => "Accueil",
        "url" => "./",
        "css" => "index.css",
    ),
    2 => array(
        "title" => "Contact | " . $env_name,
        "name" => "contact",
        "url" => "./contact.php",
        "css" => "contact.css",
    ),
    3 => array(
        "title" => "Terms | " . $env_name,
        "name" => "Terms",
        "url" => "./terms.php",
        "css" => "terms.css",
    ),
    /*...*/
);

// FILE CSS GLOBAL
$env_css_global = array(
    "all.css",
);

// FILE JS GLOBAL
$env_js_global = array(
    "start.js"
);

/*************************
 *
 *     YOUR VARIABLE
 *
 ************************/

$env_titre = "HelloWorld";