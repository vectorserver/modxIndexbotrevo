<?php
$options    = explode(",", $options);
$USER_AGENT = mb_strtolower($_SERVER['HTTP_USER_AGENT']);

$return = false;

foreach ($options as $bot) {
    $bot = mb_strtolower($bot);
    $pos = strpos($USER_AGENT, $bot);
    if ($pos !== false) {
        $return = true;
    }
}
//Отладка    
if ($debug == 1) {
    echo "<pre>";
    print_r(array(
        'find' => $options,
        'agent' => $USER_AGENT,
        'return' => $return
    ));
    echo "</pre>";
}


return ($return) ? $input : '&nbsp;';
