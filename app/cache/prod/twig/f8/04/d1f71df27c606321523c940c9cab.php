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
        echo "Atención al cliente";
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
<h2>Contáctenos</h2>
<p><h3>Teléfonos:</h3><span>(537) 2085835, (537) 2085236 EXT 222</span></p>
<p><h3>Fax:</h3><span>(537) 2085835, (537) 2085236 EXT 222</span</p>
<p><h3>Mail:</h3><span>dalmer@enet.cu</span</p>
</hgroup>
</div>
<div id=\"encuentranos\">

<h2>Encuentrénos</h2>
<p>Ave. 25 No.  15819  e/ 158 y 190, Reparto Cubanacán CP. 6990, Municipio Playa, Habana, Cuba.</p>

<img alt=\"Mapa localizacion dalmer\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/estaticas/images/mapa.png"), "html", null, true);
        echo "\">
</address>
</div>
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
        return array (  75 => 25,  58 => 10,  55 => 9,  49 => 8,  43 => 7,  36 => 4,  32 => 3,  29 => 2,);
    }
}
