<?php

/* EstaticasBundle:Default:atencion-al-cliente.html.twig */
class __TwigTemplate_f804d1f71df27c606321523c940c9cab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/css/atencion.css"), "html", null, true);
        echo "\"
rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Laboratorios-Dalmer:Atención al cliente";
    }

    // line 8
    public function block_id($context, array $blocks = array())
    {
        echo "atencion";
    }

    // line 9
    public function block_article($context, array $blocks = array())
    {
        // line 10
        echo "<section id=\"contactenos\">
<div id=\"contactos\">
<address>
<hgroup>
<div id=\"title\">
<h2>Contáctenos  </h2>
<img class=\"title\" alt=\"icono carta\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/images/carta.png"), "html", null, true);
        echo "\">
</div>
<p><h3>Teléfonos:</h3><span>(537) 2085835, (537) 2085236 EXT 222</span></p>
<p><h3>Fax:</h3><span>(537) 2085835, (537) 2085236 EXT 222</span</p>
<p><h3>Mail:</h3><span>dalmer@enet.cu</span</p>
</hgroup>
</div>
<div id=\"encuentranos\">
<div id=\"title\">
<h2>Encuentrenos</h2>
<img class=\"title\" alt=\"icono carta\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/images/alfiler.png"), "html", null, true);
        echo "\">
</div>
<p>Ave. 25 No.  15819  e/ 158 y 190, Reparto Cubanacán CP. 6990, Municipio Playa, Habana, Cuba.</p>
<img class=\"mapa\" alt=\"Mapa localizacion dalmer\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/images/mapa.png"), "html", null, true);
        echo "\">
</div>
</address>

</section>
";
    }

    public function getTemplateName()
    {
        return "EstaticasBundle:Default:atencion-al-cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  66 => 16,  36 => 4,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 16,  52 => 12,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  92 => 20,  86 => 28,  79 => 26,  19 => 2,  42 => 10,  40 => 7,  29 => 2,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 3,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 10,  49 => 8,  43 => 7,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 24,  57 => 15,  50 => 13,  46 => 10,  44 => 11,  39 => 9,  33 => 7,  30 => 4,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 26,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 9,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
