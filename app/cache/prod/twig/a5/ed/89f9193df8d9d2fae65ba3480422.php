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
        echo "<h2>Historia</h2>

<p class=\"primero\">Es la empresa representante exclusiva para la comercialización de  los productos investigados, desarrollados y producidos por el <strong>Centro Nacional De Investigaciones Científicas (CNIC)</strong>, por lo cual este último es el principal proveedor de DALMER. Estos productos incluyen medicamentos, suplementos nutricionales, todos obtenidos de fuentes naturales, y que en su mayoría tienen patentes internacionales. Además, la empresa comercializa productos de la biotecnología, como cepas vacunales. También la empresa se encarga de la comercialización de equipos,  materiales de implantes y servicios de estudios y  diagnostico de contaminación ambiental, con soluciones incluidas.</p>
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
        return array (  58 => 10,  55 => 9,  49 => 8,  43 => 7,  36 => 4,  32 => 3,  29 => 2,);
    }
}
