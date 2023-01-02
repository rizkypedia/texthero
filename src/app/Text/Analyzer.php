<?php

namespace Texthero\text;

class Analyzer
{
    private string $textbody;

    public function __construct(string $textbody)
    {
        $this->textbody = $textbody;
    }

    public function splitSentences():array
    {
        return explode(".", $this->textbody);
    }

    public function tokenizeWords():array
    {
        return explode(" ", $this->textbody);
    }


}
