[![Build Status](https://api.travis-ci.org/sspssp/phpHeader.svg?branch=master)](https://travis-ci.org/sspssp/phpHeader)

Installation:
=====

Add git to your composer.json:
```
"repositories": [
    { "type": "vcs", "url": "git@github.com:sspssp/phpHeader.git" }
]
 ```
Than add the Project to the git require:
```
"require": {
    "ssp/phpheader":"dev-master"
}
 ```

Usage
==
It works with Static Varieables. So if you add a file to one instance, it will appears at every instance.


Add Javascript File:
```
$a = new \SSP\PHPHeader\Header();
$a->addJS("test.js");
```

Add CSS File:
```
$a = new \SSP\PHPHeader\Header();
$a->addCSS("test.js");
```

Get HTML Code 
```
$a = new \SSP\PHPHeader\Header();
$html = $a->getJSHtml()."\r\n".$a->getCSSHtml();
//echo $html;
```