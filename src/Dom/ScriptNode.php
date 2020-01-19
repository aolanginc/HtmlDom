<?php
namespace KynkaiHtmlDom\Dom;
use PHPHtmlParser\Dom\HtmlNode;
use PHPHtmlParser\Dom\Tag;
use PHPHtmlParser\Dom\LeafNode;
use PHPHtmlParser\Dom\TextNode;

class ScriptNode extends HtmlNode{

    public $nonce;

    protected $text;

    public function __construct($text = "",$nonce = "",$options = [])
    {
        $tag = new Tag("script");

        $tag->setAttributes([
            'nonce' => [
                'value'       => $nonce,
                'doubleQuote' => true,
            ],
        ]);

        $this->nonce = $nonce;
        $this->text = new TextNode($text);
        $this->addChild($this->text);
        parent::__construct($tag);

    }

}