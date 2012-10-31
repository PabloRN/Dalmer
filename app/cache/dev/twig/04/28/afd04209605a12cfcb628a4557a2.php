<?php

/* EstaticasBundle:Default:vision.html.twig */
class __TwigTemplate_0428afd04209605a12cfcb628a4557a2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/css/vision.css"), "html", null, true);
        echo "\"
rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Visión y Misión";
    }

    // line 8
    public function block_id($context, array $blocks = array())
    {
        echo "vision";
    }

    // line 9
    public function block_article($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"title\">
<h2>Visión y Misión</h2>
<img class=\"title\" alt=\"icono carta\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/images/ojo.png"), "html", null, true);
        echo "\">
</div>
<p class=\"primero\">Laboratorios Dalmer S.A. es una sociedad mercantil de capital 100% cubano constituida el 25 de diciembre de 1991 al amparo de la legislación cubana.</p> 

<h3>Visión</h3>
<p>“Comercializar productos farmacéuticos y/o complementos nutricionales,  vacunas, diagnosticadores, cosméticos,  equipos para diagnósticos y tratamientos, con fines médicos, sociales e industriales, y sus partes, así como los software relacionados, dispositivos y productos naturales o sintéticos para  implantes, que cumplan una función social determinada en función de su uso y que a la par puedan constituir fuentes de ingreso en moneda nacional y/o extranjera, con la obtención de utilidades para la firma.”</p>
<h3>Misión</h3>
<p>\"Ser una comercializadora que se distinga por promover estilos de vida sanos en el marco de la prevención de salud e insertar sus productos en ese ámbito y por contar con la confianza de proveedores, clientes y consumidores finales; así como por su eficiencia empresarial, preparación y motivación de sus recursos humanos, trabajo coordinado y comunicación idónea y apego a los valores políticos y éticos de nuestra sociedad\".</p>
";
    }

    public function getTemplateName()
    {
        return "EstaticasBundle:Default:vision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 113,  509 => 452,  506 => 451,  289 => 70,  280 => 134,  274 => 131,  266 => 128,  259 => 126,  252 => 124,  243 => 120,  236 => 118,  229 => 116,  220 => 112,  213 => 110,  206 => 108,  180 => 94,  155 => 71,  144 => 64,  105 => 43,  101 => 42,  61 => 22,  56 => 9,  45 => 11,  85 => 13,  66 => 16,  36 => 4,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 44,  93 => 33,  90 => 34,  54 => 13,  133 => 59,  124 => 41,  111 => 37,  80 => 12,  60 => 16,  52 => 12,  97 => 34,  95 => 21,  88 => 29,  78 => 31,  71 => 14,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 7,  92 => 20,  86 => 33,  79 => 26,  19 => 2,  42 => 10,  40 => 7,  29 => 2,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 100,  193 => 79,  190 => 98,  188 => 77,  185 => 96,  179 => 72,  177 => 71,  171 => 114,  162 => 63,  158 => 61,  156 => 60,  153 => 70,  146 => 55,  142 => 54,  137 => 60,  126 => 46,  120 => 39,  117 => 49,  103 => 36,  74 => 11,  47 => 19,  32 => 3,  24 => 3,  22 => 1,  23 => 3,  17 => 1,  69 => 6,  63 => 12,  58 => 10,  49 => 8,  43 => 7,  37 => 4,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 32,  77 => 25,  75 => 24,  57 => 14,  50 => 8,  46 => 10,  44 => 7,  39 => 8,  33 => 3,  30 => 2,  27 => 4,  135 => 50,  129 => 58,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 26,  73 => 21,  70 => 29,  67 => 19,  62 => 12,  59 => 10,  55 => 9,  51 => 13,  48 => 11,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 5,);
    }
}
