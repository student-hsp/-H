<?php 
  $history=$_GET["info"];
  $ip=$_GET["ip"];
  $history=$_GET["info"];
  $ip=$_GET["ip"];
  $txt = "时间：【".date('Y-m-d H:i:s')."】\n";
  $data=$txt."内容：".$history."\n"."ip：". $ip."\n";
  $myfile = file_put_contents("text.txt",$data,FILE_APPEND);
  // $myfile = fopen("./text.txt", "a") or die("Unable to open file!");
  // $txt = "时间：【".date('Y-m-d H:i:s')."】\n";
  // fwrite($myfile, $txt);
  // fwrite($myfile, "内容：");
  // fwrite($myfile,$history);
  // fwrite($myfile, "\n");
  // fwrite($myfile, "ip：");
  // fwrite($myfile,$ip);
  // fwrite($myfile, "\n");
  // //记得关闭流
  // fclose($myfile);
?>
