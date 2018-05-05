<?php
 
    require_once(realpath(dirname(__FILE__) . "/resources/config.php"));
 
    require_once(LIBRARY_PATH . "/templateFunctions.php");
 
    /*
        Now you can handle all your php logic outside of the template
        file which makes for very clean code!
    */
     // Global Variables Init
    $page = '';
    
    if(!isset($_GET["page"]))
        $page = 'home.php';
    else
        $page = $_GET["page"] . '.php';

    // Must pass in variables (as an array) to use in template
    $variables = array(
        'seo'               => $seo,
        'config'            => $config,
        'page'              => explode('.', $page)[0],
        'email_config'      => $email_config
    );

    renderLayoutWithContentFile($page, $variables);
?>
