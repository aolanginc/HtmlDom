<?php
namespace KynkaiHtmlDom\Dom;
use PHPHtmlParser\Dom\HtmlNode;
use PHPHtmlParser\Dom\Tag;
use PHPHtmlParser\Dom\LeafNode;
use PHPHtmlParser\Dom\TextNode;

class StyleNode extends HtmlNode{

    public $nonce;

    protected $text;

    public function __construct($text = "",$id = "",$nonce = "",$options = [])
    {
        $tag = new Tag("style");

        $tag->setAttributes([
            'nonce' => [
                'value'       => $nonce,
                'doubleQuote' => true,
            ],
            'id' => [
                'value'       => $id,
                'doubleQuote' => true,
            ],
        ]);

        $this->nonce = $nonce;
        $this->text = new TextNode($text);
        $this->addChild($this->text);
        parent::__construct($tag);

    }

}