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
        return array (  85 => 13,  80 => 12,  74 => 11,  69 => 6,  63 => 5,  57 => 14,  54 => 13,  39 => 8,  34 => 7,  22 => 1,  167 => 42,  159 => 76,  155 => 75,  148 => 71,  143 => 69,  138 => 67,  133 => 65,  109 => 43,  107 => 42,  98 => 36,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  56 => 15,  52 => 12,  48 => 11,  45 => 11,  37 => 6,  31 => 4,  28 => 5,  58 => 10,  55 => 9,  49 => 8,  43 => 9,  36 => 4,  32 => 6,  29 => 2,);
    }
}
