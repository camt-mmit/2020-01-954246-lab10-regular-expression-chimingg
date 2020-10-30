<?php
/*ID: 612110270
Name: zhiming zheng
 */
  $filename = $_SERVER['argv'][1];
  $handle = fopen($filename, "r");
  $contents = [];
  while(!feof($handle)) {
    $contents[] = trim(fgets($handle));
  }
  $data = implode(" ", $contents);
  $pattern = "/\(([A-Z]+)\)/";
  preg_match_all($pattern,"$data", $matched);

  for($i = 0; $i < count($matched[1]); $i++) {
      echo "{$matched[1][$i]}\n";
}