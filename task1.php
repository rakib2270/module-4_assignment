<?php
// Task 1
$text = "The quick brown fox jumps over the lazy dog.";

// Convert String to Lowercase.
$strlower= strtolower($text);

// Replace Specific Word in a String
function replaceBrownWithRed($text) {
    $replacedText = str_replace("brown", "red", $text);
    return $replacedText;
}
$replacedText = replaceBrownWithRed($text);

// Print The Modified Text
echo $strlower."<br>";
echo $replacedText."<br>";