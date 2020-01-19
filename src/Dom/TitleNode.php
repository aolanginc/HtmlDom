<?php
namespace KynkaiHtmlDom\Dom;
use PHPHtmlParser\Dom\HtmlNode;
use PHPHtmlParser\Dom\Tag;
use PHPHtmlParser\Dom\LeafNode;
use PHPHtmlParser\Dom\TextNode;

class TitleNode extends HtmlNode{

    public function __construct($text = "")
    {
        $tag = new Tag("title");

        $text = new TextNode($text);
        $this->addChild($text);
        parent::__construct($tag);

    }

}