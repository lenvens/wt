<?php
/*
 * ��ȡurlͨ��php
 */
Header("Content-type:text/html;charset=utf-8");
   $url="www.baidu.com";
   echo $url;
   echo "<br>";
   $fp=fsockopen($url,80,$errno,$errstr,30);
   if(!$fp)
    {  echo "$errstr($errno)<br/>\n"; }
   else
    {
     $out ="GET / HTTP/1.1\r\n";
     $out .="Host: $url\r\n";
     $out .="Connection: Close\r\n\r\n";
     fwrite($fp,$out);
      
     $content='';
     while(!feof($fp))
     {
       ob_flush();
       flush();
       $content.=fgets($fp,128);  //取出文件中的一行赋给变量$content
       ob_end_clean();
     }
     fclose($fp);
     $reg="/<title>(.*)<\/title>/";
     preg_match($reg,$content,$arr);
     echo $arr[1];
    }
  
   ?>
