<?php
/**
 * La fonction hackify doit prend n'importe quel chaine de caractère et :
 *  - Remplacer les 'l' ou 'L' par des '!'
 *  - Remplacer les 's' ou 'S' par des 5
 *  - Remplacer toutes les voyelles par leur code ASCII
 */

function hackify(string $passPhrase) : string
{
    $passPhrase = str_replace(['l', 'L'], '!', $passPhrase);
    $passPhrase = str_replace(['s', 'S'], '5', $passPhrase);

    $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];

    $troubledPhrase = '';
    for ($i=0; $i < strlen($passPhrase); $i++) { 
        if(in_array($passPhrase[$i], $vowels)) {
            $troubledPhrase .= ord($passPhrase[$i]);
            continue;
        }

        $troubledPhrase .= $passPhrase[$i];
    }

    return $troubledPhrase;
}

echo hackify('LeSuperMotdePasse') . PHP_EOL;