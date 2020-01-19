<?php

require_once "vendor/autoload.php";

use HtmlDom\HtmlDom;
use HtmlDom\HtmlDomNode;
use PHPHtmlParser\Dom\Tag;
use PHPHtmlParser\Dom\HtmlNode;
use PHPHtmlParser\Dom\TextNode;
use KynkaiHtmlDom\Dom\ScriptNode;
use KynkaiHtmlDom\Dom\StyleNode;
use KynkaiHtmlDom\Dom\JsNode;

$div = new Tag('div');
$div->setAttributes([
    'class' => [
        'value'       => 'all',
        'doubleQuote' => true,
    ],
]);
$a = new Tag('a');
$a->setAttributes([
    'href' => [
        'value'       => 'http://google.com',
        'doubleQuote' => false,
    ],
]);
$br = new Tag('br');
$br->selfClosing();
$parent  = new HtmlNode($div);
$childa  = new HtmlNode($a);
$childbr = new HtmlNode($br);
$parent->addChild($childa);
$parent->addChild($childbr);
$childa->addChild(new TextNode('link'));

echo $parent->outerHtml();

$snode = new ScriptNode("ss","4343");

echo $snode->outerHtml();

$snode = new StyleNode("ss","4343");

echo $snode->outerHtml();


$snode = new JsNode("fEVMic","rcuQ6b:npT2md","C4mkuf;;CKVdrw");

echo $snode->outerHtml();