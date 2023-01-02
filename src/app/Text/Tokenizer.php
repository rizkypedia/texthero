<?php

namespace Texthero\Text;

class Tokenizer
{
    private string $textbody;
    private array $punctuationMarks = [".","?","!"];

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
        
        return in_array($chars[0], $this->punctuationMarks);
        
    }


}
