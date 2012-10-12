<?php

/* ::frontend.html.twig */
class __TwigTemplate_0442e1aedb7a1c925a9ffb3703efb6d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/css/normalizar.css"), "html", null, true);
        echo "\"
rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/css/frontend.css"), "html", null, true);
        echo "\"
rel=\"stylesheet\" type=\"text/css\" />

";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<header>
<div id=\"topheader\">
<img class=\"logo\" alt=\"Logo\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/logotop.png"), "html", null, true);
        echo "\">
<img class=\"slogan\" alt=\"Logo\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/vida sana.png"), "html", null, true);
        echo "\">

</div>
<div id=\"bottomheader\">
<nav id=\"principal\">
<ul>
  <li><a href=\"#\">Nosotros ></a>
     <ul>
      <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "historia")), "html", null, true);
        echo "\">Historia</a></li>
      <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "vision")), "html", null, true);
        echo "\">Mision y Vision</a></li>
      <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "calidad")), "html", null, true);
        echo "\">Politica de Calidad</a></li>
      <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "premios")), "html", null, true);
        echo "\">Premios Otorgados</a></li>
      <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "certificados")), "html", null, true);
        echo "\">Certificados</a></li>
      <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "servicios")), "html", null, true);
        echo "\">Servicios</a></li>
   </ul>
  </li>
  <li>|</li>
  <li> Productos > </li>
  <li>|</li>
  <li> Publicaciones </li>
  <li>|</li>
  <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "atencion-al-cliente")), "html", null, true);
        echo "\">Atención al Cliente</a></li>
</ul>
</nav>
</div> 
</header>
<article>
";
        // line 42
        $this->displayBlock('article', $context, $blocks);
        // line 43
        echo "</article>
<aside>
<section id=\"noticias\">
 <h4>Noticias</h4> 
</section>
<section id=\"eventos\">
 <h4>Eventos</h4> 
</section>
<section id=\"distribuidores\">
 <h4>Distribuidores</h4>
</section>
<section id=\"proveedores\">
 <h4>Proveedores</h4> 
</section>
</aside>
<footer>
<div id=\"topfooter\">
</div>
<div id=\"bottomfooter\">
<nav id=\"footer\">
<ul>

<li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "inicio")), "html", null, true);
        echo "\">Inicio</a></li>
<li>|</li>
<li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "mapa")), "html", null, true);
        echo "\">Mapa del sitio</a></li>
<li>|</li>
<li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "seguridad")), "html", null, true);
        echo "\">Política de Seguridad</a></li>
<li>|</li>
<li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "legal")), "html", null, true);
        echo "\">Declaración Legal</a></li>

</ul>
</nav>
<span><small>&copy; ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " -Dalmer.s.a.</small></span>
<img alt=\"Logo\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/logobottom.png"), "html", null, true);
        echo "\">
</div>
</footer>
";
    }

    // line 42
    public function block_article($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 42,  159 => 76,  155 => 75,  148 => 71,  143 => 69,  138 => 67,  133 => 65,  109 => 43,  107 => 42,  98 => 36,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  56 => 15,  52 => 14,  48 => 12,  45 => 11,  37 => 6,  31 => 4,  28 => 3,  58 => 10,  55 => 9,  49 => 8,  43 => 7,  36 => 4,  32 => 3,  29 => 2,);
    }
}
