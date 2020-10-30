<?php
/*ID: 612110270
Name: zhiming zheng
 */
    $fp = fopen($_SERVER['argv'][1], 'r');
    $text = '';
    while(!feof($fp)){
        $text.= fread($fp, 1024);
    }
fclose($fp);
$pattern = "/\b\d+(\.\d+)?\b/"; 
preg_match_all($pattern, $text, $result);
array_walk($result[0], function($result){
    printf("%s\n", $result);
});