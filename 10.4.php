<?php
/*ID: 612110270
Name: zhiming zheng
 */
$password = file_get_contents($argv[1]);
preg_match_all("/[A-Z]{1}[a-z]+(\s[A-Z]{1}[a-z]+)*/",$password,$res);
for($i=0;$i<count($res[0]);$i++)
{
	if( $res[0][$i]!='My')
	{
		echo $res[0][$i]."\n";
	}
}