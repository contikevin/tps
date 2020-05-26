<?php
​
// Array con i nomi dei paesi
$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra",...);
​
// ottiene il parametro dalla pagina precedente
$q = $_REQUEST["q"];
​
$hint = "";
​
// Loop controllando tutti i suggerimenti dall'array se $q è diverso da ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($countries as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
​
// Output "nessun suggerimento" se non ci sono suggerimenti disponibili
echo $hint === "" ? "nessun suggerimento" : $hint;
​
?>