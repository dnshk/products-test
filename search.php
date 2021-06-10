<?php

echo "123";
if (isset($_POST["search"])){

$pages = array ("product1", "product2", "product3");

$search_str = strtolower(str_replace(' ', '', $_POST["search"])) ;

foreach ($pages as $key => $value){

if (strpos($_POST["search"], $pages[$key])){

echo "<a href ='".$pages[$key].".php'>Product".($key+1)."</a>";

}

}

}

?>
