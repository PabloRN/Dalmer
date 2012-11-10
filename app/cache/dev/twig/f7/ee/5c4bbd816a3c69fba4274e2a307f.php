<?php

/* ::base.html.twig */
class __TwigTemplate_f7ee5c4bbd816a3c69fba4274e2a307f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
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
\t\t<meta language=\"es\">
\t\t<meta name=\"description\" content=\"";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        echo "\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/js/jquery-1.8.2.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body id=\"";
        // line 14
        $this->displayBlock('id', $context, $blocks);
        echo "\"><div id=\"contenedor\">
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "</div></body>
</html>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        echo "Laboratorios Dalmer s.a. distribuidora de farmacos | especializada en la distribuicion de productos naturales";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenido a los aboratorios Dalmer.s.a";
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
        echo "farmacos, productos naturales, antioxidantes, colesterol,\">";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 16
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
        return array (  102 => 15,  96 => 14,  85 => 8,  73 => 6,  67 => 17,  62 => 15,  58 => 14,  44 => 10,  41 => 9,  39 => 8,  35 => 7,  24 => 1,  340 => 94,  331 => 158,  325 => 155,  317 => 152,  310 => 150,  303 => 148,  294 => 144,  287 => 142,  280 => 140,  271 => 136,  264 => 134,  257 => 132,  246 => 124,  241 => 122,  236 => 120,  231 => 118,  206 => 95,  204 => 94,  195 => 88,  188 => 84,  184 => 83,  180 => 82,  168 => 73,  160 => 68,  156 => 67,  148 => 62,  144 => 61,  136 => 56,  132 => 55,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  107 => 16,  95 => 36,  91 => 9,  87 => 34,  83 => 33,  79 => 7,  75 => 31,  66 => 24,  57 => 16,  53 => 12,  50 => 13,  31 => 6,  28 => 3,  225 => 162,  222 => 161,  81 => 24,  68 => 14,  64 => 16,  61 => 18,  55 => 10,  49 => 11,  42 => 8,  37 => 6,  33 => 3,  30 => 2,);
    }
}
