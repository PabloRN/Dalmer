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
<p>“Comercializar productos farmacéuticos y/o complementos nutricionales,  vacunas, diagnosticadores, cosméticos,  equipos para diagnósticos y tratamientos, con fines médicos, sociales e industriales, y sus partes, así como los software relacionados, dispositivos y productos naturales o sintéticos para  implantes, que cumplan una función social determinada en función de su uso y que a la par puedan constituir fuentes de ingreso en moneda nacional y/o extranjera, con la obtención de utilidades para la firma.”
<h3>Misión</h3></p>
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
        return array (  62 => 12,  58 => 10,  55 => 9,  49 => 8,  43 => 7,  36 => 4,  32 => 3,  29 => 2,);
    }
}
