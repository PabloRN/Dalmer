<?php

/* EstaticasBundle:Default:servicios.html.twig */
class __TwigTemplate_0144b74d7af59365950f5013a742143e extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
";
        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/css/jquery-ui.css"), "html", null, true);
        echo "\"
rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Servicios";
    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        echo "sevicios";
    }

    // line 11
    public function block_article($context, array $blocks = array())
    {
        // line 12
        echo "<div id=\"title\">
<h2>Servicios</h2>
<img class=\"title\" alt=\"icono carta\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/images/maleta.png"), "html", null, true);
        echo "\">
</div>
<p class=\"primero\">Los Laboratorios Dalmer S.A. ofertan diversos servicios científicos técnicos, destacándose los relacionados con el impacto medio ambiental que tienen como objetivo incidir positivamente hacia un desarrollo sostenible y sustentable.</p>
<div id=\"accordion\">
<h3><a href=\"#\">Servicios Especializados </a></h3>
<div>
<p>
<ul class=\"check\">
<li>Asesoría técnica especializada y soluciones a proyectos de tecnologías de tratamiento de aguas para diferentes usos.</li> 
<li>Asesoría técnica especializada y soluciones a proyectos de tecnologías de tratamiento de residuos líquidos.</li>
<li>Asesoría técnica especializada y soluciones a proyectos de tecnologías de tratamiento de residuos sólidos.</li>
<li>Asesoría técnica especializada y soluciones a proyectos y servicios especializados en protección contra la corrosión.</li>
<li>Evaluación del medio ambiente con vista a la obtención de la licencia ambiental.</li>
<li>Evaluación de ozonizadores.</li>
<li>Ozonización de sustratos sólidos y acuosos.</li> 
<li>Asesoría en la medición de ozono en fase gaseosa y líquida.</li>
</ul>
</p></div>
<h3><a href=\"#\">Tratamiento de aguas con ozono </a></h3>
<div><p>
Entre los Servicios Científico-Técnicos especializados que se ofertan,  se encuentra  el  tratamiento de aguas  con ozono para: 
<ul class=\"check\"><li>Embotelladoras de agua, jugos y refrescos.</li>  
<li>Centros de producción de animales de laboratorios libres de gérmenes patógenos.</li>
<li>Unidades de cría de animales.</li>
<li>Industria Farmacéutica y Biotecnológica.</li>
<li>Industria Alimentaria y Agroindustria.</li>
<li>Agua para quirófanos y sistemas especiales de hospitales.</li>
<li>Garantizar la calidad microbiológica del agua en hogares, escuelas, círculos infantiles, hospitales, consultorios médicos, hoteles, restaurantes, centros laborales, lugares apartados y otros. 
<li>Tratamiento de aguas para Piscinas.</li>
<li>Tratamiento de aguas residuales domésticas y municipales para su reuso o vertimiento seguro.</li>
<li>Tratamiento de aguas residuales de alto riesgo para un vertimiento seguro.</li>
<li>Lavandería industrial: en los procesos de lavado y en el tratamiento del agua residual para su reuso.</li>
Estos servicios se ofertan en forma de paquete tecnológico que incluye equipamiento y montaje.
</ul></p>
</div>
<h3><a href=\"#\">Servicios analíticos </a></h3>
<div>
<p>Servicios analíticos que incluyen diversos aspectos relacionados con el muestreo y en especial lo relacionado con el cumplimiento de las Normas de Vertimiento y la solicitud de Licencias Ambientales.
<ul class=\"check\">
<li>Aguas y aguas residuales</li>
<li>Demanda Química de Oxigeno.</li>
<li>Demanda Bioquímica de Oxigeno.</li>
<li>Sólidos Totales: Suspendidos y Disueltos (Fijos y Volátiles).</li>
<li>Sólidos Sedimentables.</li>
<li>pH.</li>
<li>Acidez.</li>
<li>Alcalinidad.</li>
<li>Oxígeno Disuelto.</li>
<li>Grasas y Aceites.</li>
<li>Fósforo Total y Ortofosfato.</li>
<li>Nitrógeno Total y Amoniacal.</li>
<li>Nitrito y Nitrato.</li>
<li>Ácidos Grasos Volátiles Totales.</li>
<li>Densidad Óptica.</li>
<li>Clorofila.</li>
<li>Carbonatos.</li>
<li>Bicarbonatos.</li>
<li>Cloruros y Sulfatos.</li>
<li>Sodio y Potasio.</li>
<li>Dureza Total: (cálcica y magnésica).</li>
<li>Sustancias Activas al Azul de Metileno (SAAM)</li>
<li>Residuos sólidos</li>
<li>Materia Orgánica.</li>
<li>Fósforo Total.</li>
<li>Grasas y Aceites.</li>
<li>Cenizas.</li>
<li>Materia Volátil.</li>
<li>Humedad.</li>
</p></ul>
</div>
<h3><a href=\"#\">Servicios analíticos(Ensayos Microbiológicos) </a></h3>
<div>
<p>Servicios analíticos que incluyen diversos aspectos relacionados con el muestreo y en especial lo relacionado con el cumplimiento de las Normas de Vertimiento y la solicitud de Licencias Ambientales. 
<ul class=\"check\">
<li>Coliformes totales (presuntivo y confirmativo).</li>
<li>Coliformes Fecales (confirmativos).</li>
<li>Pseudomonas (presuntivo y confirmativo).</li> 
<li>Salmonella y Shiguella.</li> 
<li>Estreptococos fecales (presuntivo y confirmativo).</li> 
<li>Aislamiento de estafilococos G+.</li> 
<li>Aislamiento y conteo de hongos filamentosos.</li> 
<li>Aislamiento y recuento de levaduras.</li> 
<li>Coliformes totales y fecales en agua potable.</li> 
<li>Microorganismos totales viales.</li> 
</ul>
</p>
</div>
<h3><a href=\"#\">Agresividad corrosiva </a></h3>
<div>
<p>Entre los Servicios Científico-Técnicos que se ofertan se encuentran aquellos relacionados con la protección de instalaciones contra la agresividad corrosiva, así como la determinación de la agresividad corrosiva de los diferentes tipos  de atmósferas.
<ul class=\"check\">
<li>Evaluación y caracterización de la agresividad corrosiva de la atmósfera de las zonas de interés del cliente: urbana, industrial, industrial-costera y agua de mar.</li>
<li>Pronosticar el comportamiento corrosivo de materiales, instalaciones, piezas, artículos constructivos y otros.</li> 
<li>Ensayos acelerados (de calor humedad, niebla salina) con regímenes similares al clima de Cuba. 
Selección de materiales óptimos resistentes a la corrosión en el ambiente de Cuba (intemperie, almacenes, agua de mar, entre otros).</li> 
<li>Asesoría técnica y consultoría especializada en corrosión y deterioro de materiales metálicos y no metálicos (pinturas, plásticos, barnices, inhibidores, recubrimientos, entre otros). 
<li>Asistencia a proyectos.</li> 
<li>Ensayos mediante técnicas electroquímicas de avanzadas seguras y rápidas: Curvas de Polarización, Resistencia de Polarización, Espectroscopia de Impedancia, Análisis del Ruido Electroquímico, entre otras.</li> 
En la realización de los servicios se utilizan normas y metodologías cubanas e internacionales, así como procedimientos especiales desarrollados por esta área.
</div>
</div>
";
    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        // line 117
        echo "  <script>
  \$(document).ready(function() {
    \$(\"#accordion\").accordion({
\tactive: false,
\tcollapsible: true,
\tautoHeight: false
\t
\t
\t});
  });
  </script>
";
    }

    public function getTemplateName()
    {
        return "EstaticasBundle:Default:servicios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 117,  170 => 116,  45 => 9,  509 => 452,  506 => 451,  56 => 9,  340 => 94,  331 => 158,  325 => 155,  317 => 152,  310 => 150,  303 => 148,  294 => 144,  287 => 142,  280 => 140,  271 => 136,  264 => 134,  257 => 132,  246 => 124,  241 => 122,  236 => 120,  231 => 118,  206 => 95,  184 => 83,  180 => 82,  168 => 73,  160 => 68,  144 => 61,  136 => 56,  119 => 48,  83 => 33,  61 => 18,  85 => 8,  66 => 24,  36 => 4,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 62,  145 => 56,  141 => 55,  134 => 50,  132 => 55,  127 => 46,  123 => 49,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 46,  80 => 26,  60 => 12,  52 => 12,  97 => 34,  95 => 36,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  72 => 16,  64 => 14,  53 => 12,  34 => 5,  92 => 20,  86 => 28,  79 => 7,  19 => 2,  42 => 8,  40 => 7,  29 => 2,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 94,  200 => 83,  195 => 88,  193 => 79,  190 => 78,  188 => 84,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 67,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 3,  24 => 1,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 12,  58 => 10,  49 => 8,  43 => 7,  37 => 6,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 16,  99 => 34,  96 => 14,  91 => 9,  82 => 27,  77 => 25,  75 => 31,  57 => 11,  50 => 8,  46 => 10,  44 => 7,  39 => 8,  33 => 3,  30 => 2,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 15,  94 => 33,  89 => 20,  87 => 34,  84 => 28,  81 => 26,  73 => 6,  70 => 26,  67 => 17,  62 => 12,  59 => 10,  55 => 9,  51 => 10,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
