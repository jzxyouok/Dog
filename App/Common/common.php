<?php 
function mystr($str,$start,$len,$charset,$suffix){  
    $tmpstr="";  
    $tmpstr .= mb_substr($str,$start,$len,$charset);  
    return $tmpstr.$suffix;  
}  