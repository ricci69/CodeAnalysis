<?php
namespace ricci69\CodeAnalysis;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CodeAnalysisTest extends TestCase
{

    /**
     *
     */
    function testFirstTestCase()
    {
        $codeanalysis = new CodeAnalysis();
        $this->assertEquals("index", $codeanalysis->index());
    }

}
