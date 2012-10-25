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
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/css/servicios.css"), "html", null, true);
        echo "\"
rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Servicios";
    }

    // line 8
    public function block_id($context, array $blocks = array())
    {
        echo "sevicios";
    }

    // line 9
    public function block_article($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"title\">
<h2>Servicios</h2>
<img class=\"title\" alt=\"icono carta\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/images/maleta.png"), "html", null, true);
        echo "\">
</div>
<p class=\"primero\">Los Laboratorios Dalmer S.A. ofertan diversos servicios científicos técnicos, destacándose los relacionados con el impacto medio ambiental que tienen como objetivo incidir positivamente hacia un desarrollo sostenible y sustentable.</p>
<div id=\"accordion\">
<h3><a href=\"#\">Servicios Especializados </a></h3>
<div>
<p>
<ul>
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
<ul><li>Embotelladoras de agua, jugos y refrescos.</li>  
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
<p>Servicios analíticos que incluyen diversos aspectos relacionados con el muestreo y en especial lo relacionado con el cumplimiento de las Normas de Vertimiento y la solicitud de Licencias Ambientales. <ul>
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
<ul>
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
<ul>
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

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        // line 114
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
        return array (  171 => 114,  168 => 113,  63 => 12,  59 => 10,  56 => 9,  50 => 8,  44 => 7,  37 => 4,  33 => 3,  30 => 2,);
    }
}
