<?php
/**
 * Created by PhpStorm.
 * User: kalidou
 * Date: 02/10/2018
 * Time: 16:06
 */

         function list_dir($name, $level=0) {
             if ($dir = opendir($name)) {
                 while($file = readdir($dir)) {
                     for($i=1; $i<=(4*$level); $i++) {
                         echo "&nbsp;";
                     }
                     echo "$file<br>\n";
                     if(is_dir($file) && !in_array($file, array(".",".."))) {
                         list_dir($file,$level+1);
                     }
                 }
                 closedir($dir);
             }
         }
         list_dir(".");
