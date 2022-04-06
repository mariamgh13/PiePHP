<?php
//define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
define('BASE_URI', str_replace('\\', '/', dirname($_SERVER['PHP_SELF']))); 
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new Core\Core();
$app->run();
?>





<pre>
    <?php
    // print_r($_POST);
    // print_r($_GET);
    //print_r($_SERVER);
    //print_r(BASE_URI . PHP_EOL);

    // print_r($_SERVER['REQUEST_URI']. PHP_EOL);
    // echo($_SERVER['DOCUMENT_ROOT']) . PHP_EOL;
    // // var_dump($_SERVER);
    //echo (__DIR__) . PHP_EOL;
    // echo dirname($_SERVER['PHP_SELF']);
    // print_r(substr($_SERVER['REQUEST_URI'], strlen(BASE_URI)));
    ?>
</pre>
