<?php
namespace Texthero\Tests\Unit;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of TokenizerTest
 *
 * @author rizkyridwan
 */
class TokenizerTest extends \PHPUnit\Framework\TestCase 
{
    public function testSplitSentences() 
    {
        $text = "Now throw your hands up in the air. Wave 'em around like you just don't care. And if you wanna party let me hear you yell. Cause we got it goin on again.";
        $tokenizer = new \Texthero\Text\Tokenizer($text);
        $this->assertCount(4, $tokenizer->splitSentences());
    }
    
    public function testSplitSentencesIsEmpty() 
    {
        $text = "";
        $tokenizer = new \Texthero\Text\Tokenizer($text);
        $this->assertEmpty($tokenizer->splitSentences());
    }
}
