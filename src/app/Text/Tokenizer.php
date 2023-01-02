<?php

namespace Texthero\Text;

class Tokenizer
{
    private string $textbody;

    public function __construct(string $textbody)
    {
        $this->textbody = trim($textbody);
    }

    public function splitSentences():array
    {
        $tmpSentence = "";
        $sentences = [];
        if (empty($this->textbody))
        {
            return [];
        }
        
        $words = $this->tokenizeWords();
        $countWords = count($words);
        $lastWord = $words[$countWords-1];
        foreach($words as $word) 
        {
            $tmpSentence.=$word . " ";
            if ($this->isEndOfSentence($word)) {
                $sentences[] = trim($tmpSentence);
                $tmpSentence="";
            }
            
        }
        return $sentences;
    }

    public function tokenizeWords():array
    {
        return explode(" ", $this->textbody);
    }
    
    private function isEndOfSentence(string $word): bool
    {
        $chars = array_reverse(mb_str_split($word));
        
        return $chars[0] === ".";
        
    }


}
