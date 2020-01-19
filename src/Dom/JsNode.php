<?php
namespace KynkaiHtmlDom\Dom;
use PHPHtmlParser\Dom\HtmlNode;
use PHPHtmlParser\Dom\Tag;
use PHPHtmlParser\Dom\LeafNode;
use PHPHtmlParser\Dom\TextNode;

class JsNode extends HtmlNode{

    public $controller;

    public $data;

    public $action;

    public $name;

    public function __construct($name="",$controller="",$action = "",$data = "",Tag $tag = null)
    {
        !$tag && $tag = new Tag("div");

        $tag->setAttributes([
            'jsname' => [
                'value'       => $name,
                'doubleQuote' => true,
            ],
            'jscontroller' => [
                'value'       => $controller,
                'doubleQuote' => true,

            ],
            'jsaction' => [
                'value'       => $action,
                'doubleQuote' => true,

            ],
            'jsdata' => [
                'value'       => $data,
                'doubleQuote' => true,

            ],
        ]);

        parent::__construct($tag);

    }

}