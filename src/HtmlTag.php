<?php

namespace HtmlCreator;

use HtmlCreator\Head\HeadTag;
use HtmlCreator\Body\BodyTag;

class HtmlTag extends BaseTag
{

    public function __construct(private readonly HeadTag $head, private readonly BodyTag $body)
    {
    }

    public function getTag(): string
    {
        return 'html';
    }

    public function getHead(): HeadTag
    {
        return $this->head;
    }

    public function getBody(): BodyTag
    {
        return $this->body;
    }

    public function render(): string
    {
        return '<!DOCTYPE html><html>' . $this->head->render() . $this->body->render() . '</html>';
    }
}
