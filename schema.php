<?php
$xml = new DOMdocument();
$xml -> load("employees.xml");
if($xml -> schemavalidate("employees.xsd")){
echo "xmlvalidate";
}
else {
    echo "not valid";
}
 ?>