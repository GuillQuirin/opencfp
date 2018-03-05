<?php

//Passage de 10 à 12 hello
$debut = microtime();
echo "Ce script va afficher 12 fois hello.";

for($i=0;$i<12;$i++)
{
    echo "Hello";
}
$fin = microtime();

$total = $fin - $debut;

echo "Le script a mis " .$total . " secondes à s'éxécuter.";
echo "Wow ! C'était rapide...";

echo "Et voilà ! Mon super script a fini de s'éxécuter";