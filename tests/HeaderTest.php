<?php
class HeaderTest extends PHPUnit_Framework_TestCase
{
    // ...
    public function __construct()
    {
        include_once(__DIR__."/../SSP/PHPHeader/Header.php");
    }
    public function testFunctionExists()
    {
        // Arrange
        $a = new \SSP\PHPHeader\Header();
        $this->assertEquals(true, method_exists($a, "addCSS"));
        $this->assertEquals(true, method_exists($a, "addJS"));
        $this->assertEquals(true, method_exists($a, "getJSHtml"));
        $this->assertEquals(true, method_exists($a, "getCSSHtml"));
    }

    public function testCSS()
    {
        $a = new \SSP\PHPHeader\Header();
        $a->addCSS("test.css");
        $html = $a->getCSSHtml();
        $this->assertEquals('<link rel="stylesheet" href="test.css">'."\r\n", $html);
        $a->addCSS("test2.css");
        $html = $a->getCSSHtml();
        $this->assertEquals('<link rel="stylesheet" href="test.css">'."\r\n".'<link rel="stylesheet" href="test2.css">'."\r\n", $html);
    }
    public function testJS()
    {
        $a = new \SSP\PHPHeader\Header();
        $a->addJS("test.js");
        $html = $a->getJSHtml();
        $this->assertEquals('<script type="text/javascript" src="test.js"></script>'."\r\n", $html);
        $a->addJS("test2.js");
        $html = $a->getJSHtml();
        $this->assertEquals('<script type="text/javascript" src="test.js"></script>'."\r\n".'<script type="text/javascript" src="test2.js"></script>'."\r\n", $html);
    }

    // ...
}
