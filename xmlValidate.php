<?php
$xml = new DOMdocument();
$xml -> load("SESSION.XML");
if($xml -> validate()){
echo "valid";
}
else {
    echo "not valid";
}
 ?>