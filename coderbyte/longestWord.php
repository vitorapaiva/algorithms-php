<?php

function longestWord(string $sentence): string {
    $wordArray = str_word_count($sentence, 1);
    $largestWord = '';
    foreach($wordArray as $word) {
        $currentWordSize = strlen($word);
        $largestWordSize = strlen($largestWord);
        if($currentWordSize > $largestWordSize) {
            $largestWord = $word;
        }
    }

    return $largestWord;
}

echo longestWord("fun&!! time")."\n";
echo longestWord("I love dogs")."\n";
echo longestWord("Hello world123 567")."\n";