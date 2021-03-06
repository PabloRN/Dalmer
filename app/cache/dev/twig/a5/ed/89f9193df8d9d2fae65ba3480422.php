<?php

/* EstaticasBundle:Default:historia.html.twig */
class __TwigTemplate_a5ed89f9193df8d9d2fae65ba3480422 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/css/historia.css"), "html", null, true);
        echo "\"
rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Historia";
    }

    // line 8
    public function block_id($context, array $blocks = array())
    {
        echo "historia";
    }

    // line 9
    public function block_article($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"title\">
<h2>Historia</h2>
<img class=\"title\" alt=\"icono carta\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/images/reloj.png"), "html", null, true);
        echo "\">
</div>
<p class=\"primero\">Dalmer S.A. es empresa representante exclusiva para la comercialización de  los productos investigados, desarrollados y producidos por el <strong>Centro Nacional De Investigaciones Científicas (CNIC)</strong>, por lo cual este último es el principal proveedor de DALMER. Estos productos incluyen medicamentos, suplementos nutricionales, todos obtenidos de fuentes naturales, y que en su mayoría tienen patentes internacionales. Además, la empresa comercializa productos de la biotecnología, como cepas vacunales. También la empresa se encarga de la comercialización de equipos,  materiales de implantes y servicios de estudios y  diagnostico de contaminación ambiental, con soluciones incluidas.</p>
<p>El CNIC es una de las instituciones jurídicamente pertenecientes al Ministerio de Ciencia, Tecnología y Medio Ambiente que conforman el Polo Científico del Oeste de Ciudad de la Habana, donde se desarrollan actividades de investigación y producción, y que es independiente de DALMER contable y financieramente. El CNIC es el primer centro de investigación multidisciplinaria fundado en 1965, y que ha servido como base para la formación de mucho de los especialistas de los centros, que en la actualidad  junto al CNIC, forman parte del Polo Científico del Oeste, la principal organización de este tipo en el país. </p>
<p>La Dirección de Producción del CNIC incluye las plantas que producen los ingredientes activos de los productos que Dalmer comercializa, las cuales trabajan conforme a un sistema de Buenas Prácticas de Manufactura (BPM) que incluye un Sistema de Control y Aseguramiento de la Calidad, con el objetivo de cumplir con los procedimientos y especificaciones de los ingredientes activos descritos en sus correspondientes registros sanitarios, aspecto esencial en la distribución nacional y en las exportaciones. </p>
<p>Esta Dirección incluye una Unidad de Aseguramiento de la Calidad que controla a la Dirección de Producción y a su vez supervisa los análisis del producto terminado que se reciben.</p>
<p>El CNIC subcontrata la producción de las formas terminadas que DALMER comercializa. Los productores de las formas terminadas que mantienen contratos de servicios con el CNIC son los Laboratorios MedSol y Laboratorios Novatec.</p>
<p>El Centro de Productos Naturales (CPN) es una dirección del CNIC constituida con el grupo de investigadores de diferentes especialidades que encabezó el proceso de I + D del producto líder de DALMER (policosanol) y el desarrollo de las actividades técnicas requeridas para obtener el registro en los diferentes países. Desde su creación en 1991 ha trabajado estrechamente vinculado a los objetivos de DALMER, de modo tal que, aunque estructural y jurídicamente son independientes, existe una vinculación alta entre los proyectos de investigación del CPN y los productos que DALMER  comercializa. A su vez, por su prestigio y resultados profesionales el CPN tiene un liderazgo reconocido internacionalmente dentro de la temática de productos naturales, lo cual le confiere visibilidad a los productos de DALMER. Entre los productos desarrollados por esta Dirección que han sido registrados a nombre de DALMER se encuentran:</p>
<p><ul><li>Los medicamentos Ateromixol® y PPG® (policosanol) 5, 10 y 20 mg, y Dalpremix®</li>
<li>Los suplementos Vasoactol® 6 mg, Abexol 50 mg® y Prevenox 5 mg®.</li>
</ul>
<p>Hasta el presente, el Policosanol continúa como el producto líder de DALMER. 
Actualmente los productos que comercializa se exportan a más de 15 territorios, en Am. Latina, Australasia, Africa y Europa oriental. </p>
";
    }

    public function getTemplateName()
    {
        return "EstaticasBundle:Default:historia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 94,  331 => 158,  325 => 155,  317 => 152,  310 => 150,  303 => 148,  294 => 144,  287 => 142,  280 => 140,  271 => 136,  264 => 134,  257 => 132,  246 => 124,  241 => 122,  236 => 120,  231 => 118,  206 => 95,  184 => 83,  180 => 82,  168 => 73,  160 => 68,  144 => 61,  136 => 56,  119 => 48,  83 => 33,  61 => 18,  85 => 8,  66 => 24,  36 => 4,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 62,  145 => 56,  141 => 55,  134 => 50,  132 => 55,  127 => 46,  123 => 49,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 46,  80 => 26,  60 => 16,  52 => 12,  97 => 34,  95 => 36,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 16,  53 => 12,  34 => 5,  92 => 20,  86 => 28,  79 => 7,  19 => 2,  42 => 8,  40 => 7,  29 => 2,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 94,  200 => 83,  195 => 88,  193 => 79,  190 => 78,  188 => 84,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 67,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 3,  24 => 1,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 10,  49 => 8,  43 => 7,  37 => 6,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 16,  99 => 34,  96 => 14,  91 => 9,  82 => 27,  77 => 25,  75 => 31,  57 => 16,  50 => 13,  46 => 10,  44 => 10,  39 => 8,  33 => 7,  30 => 4,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 15,  94 => 33,  89 => 20,  87 => 34,  84 => 28,  81 => 26,  73 => 6,  70 => 26,  67 => 17,  62 => 12,  59 => 23,  55 => 9,  51 => 13,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
