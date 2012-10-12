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
";
        // line 16
        echo "
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
<div id=\"subfooterp\">
<nav id=\"footer\">
<ul>

<li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "inicio")), "html", null, true);
        echo "\">Inicio</a></li>
<li>|</li>
<li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "mapa")), "html", null, true);
        echo "\">Mapa del sitio</a></li>
<li>|</li>
<li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "seguridad")), "html", null, true);
        echo "\">Política de Seguridad</a></li>
<li>|</li>
<li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "legal")), "html", null, true);
        echo "\">Declaración Legal</a></li>

</ul>
</nav>

</div>
<div id=\"subfooterm\">
<ul>
<li> <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "historia")), "html", null, true);
        echo "\">HISTORIA <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/reloj-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "vision")), "html", null, true);
        echo "\">VISION Y MISION <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/ojo-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "calidad")), "html", null, true);
        echo "\">POLITICA DE CALIDAD <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/checked-foot.png"), "html", null, true);
        echo "\"></a>
</li>
</ul>
<ul>
<li> <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "premios")), "html", null, true);
        echo "\">PREMIOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/medalla-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "certificados")), "html", null, true);
        echo "\">CERTIFICADOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/pluma-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "servicios")), "html", null, true);
        echo "\">SERVICIOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/maleta-foot.png"), "html", null, true);
        echo "\"></a>
</li>
</ul>
<ul>
<li> <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "productos")), "html", null, true);
        echo "\">PRODUCTOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/carrito-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "atencion-al-cliente")), "html", null, true);
        echo "\">CONTACTENOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/carta-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "atencion-al-cliente")), "html", null, true);
        echo "\">ENCUENTRENOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/alfiler-foot.png"), "html", null, true);
        echo "\"></a>
</li>
</ul>
<img id=\"logobottom\"alt=\"Logo\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/logobottomy.png"), "html", null, true);
        echo "\">
</div>
<div id=\"subfooterb\">
<span><small>&copy; ";
        // line 106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " -DALMER S.A.</small></span>
</div>
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
        return array (  241 => 42,  232 => 106,  226 => 103,  218 => 100,  211 => 98,  204 => 96,  195 => 92,  188 => 90,  181 => 88,  172 => 84,  165 => 82,  158 => 80,  147 => 72,  142 => 70,  137 => 68,  132 => 66,  107 => 43,  105 => 42,  96 => 36,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  65 => 23,  56 => 16,  48 => 12,  45 => 11,  37 => 6,  31 => 4,  28 => 3,  69 => 24,  59 => 12,  52 => 14,  46 => 7,  44 => 6,  41 => 5,  35 => 4,  29 => 3,);
    }
}
