<?php
class HeaderTest extends PHPUnit_Framework_TestCase
{
    // ...
    public function __construct()
    {
        include(__DIR__."/../SSP/PHPHeader/Header.php");
    }
    public function testCanBeNegated()
    {
        // Arrange
        $a = new \SSP\PHPHeader\Header();
        $this->assertEquals(true, method_exists($a, "addCSS"));
        $this->assertEquals(true, method_exists($a, "addJS"));
        $this->assertEquals(true, method_exists($a, "getJSHtml"));
        $this->assertEquals(true, method_exists($a, "getCSSHtml"));
    }

    // ...
}
