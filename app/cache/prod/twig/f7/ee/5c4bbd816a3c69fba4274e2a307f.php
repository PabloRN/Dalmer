<?php

/* ::base.html.twig */
class __TwigTemplate_f7ee5c4bbd816a3c69fba4274e2a307f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/js/jquery-ui-1.8.20.custom.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body id=\"";
        // line 11
        $this->displayBlock('id', $context, $blocks);
        echo "\"><div id=\"contenedor\">
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</div></body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido a Dalmer.s.a";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  80 => 12,  69 => 6,  57 => 14,  54 => 13,  43 => 9,  39 => 8,  34 => 7,  32 => 6,  22 => 1,  261 => 54,  252 => 118,  246 => 115,  238 => 112,  231 => 110,  224 => 108,  215 => 104,  208 => 102,  201 => 100,  192 => 96,  185 => 94,  178 => 92,  167 => 84,  162 => 82,  157 => 80,  152 => 78,  127 => 55,  125 => 54,  116 => 48,  109 => 44,  105 => 43,  101 => 42,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 11,  70 => 29,  61 => 22,  52 => 12,  48 => 11,  45 => 11,  31 => 4,  28 => 5,  336 => 279,  333 => 278,  63 => 5,  59 => 20,  56 => 16,  50 => 8,  44 => 7,  37 => 6,  33 => 3,  30 => 2,);
    }
}
