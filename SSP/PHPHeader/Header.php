<?php
namespace SSP\PHPHeader;
class Header
{
	private static $css = array();
	private static $js = array();
	public static function addCSS($path)
	{
		self::$css[] = $path;
	}
	public static function addJS($js)
	{
		self::$js[] = $js;
	}
	public static function getJSHtml()
	{
		$html = "";
		foreach(self::$js as $j)
		{
			$html .= '<script type="text/javascript" src="'.j.'"></script>';
		}
		return $html;
	}
	public static function getCSSHtml()
	{
		$html = "";
		foreach(self::$css as $c)
		{
			$html .= '<link rel="stylesheet" href="'.$c.'">';
		}
		return $html;
	}
}