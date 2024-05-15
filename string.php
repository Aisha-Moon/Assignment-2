
<?php 

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ["a", "e", "i", "o", "u"];

foreach ($strings as $string) {
    $count = 0;
    $reversedString = strrev($string);
    $chars=str_split(strtolower($string));
   

foreach ($chars as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
   

    echo "Original String: $string, Vowel Count: $count, Reversed String: $reversedString\n";
}
