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
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/css/jquery-ui.css"), "html", null, true);
        echo "\"
rel=\"stylesheet\" type=\"text/css\"/>

";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<header>
<div id=\"topheader\">
<img class=\"logo\" alt=\"Logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/logotop.png"), "html", null, true);
        echo "\">
";
        // line 18
        echo "<section id=\"login\">
";
        // line 22
        echo $this->env->getExtension('actions')->renderAction("UsuarioBundle:Default:cajaLogin", array(), array());
        // line 24
        echo "</section>
</div>
<div id=\"bottomheader\">
<nav id=\"principal\">
<ul>
  <li><a href=\"#\">Nosotros</a>
     <ul class=\"nosotros\">
      <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "historia")), "html", null, true);
        echo "\">Historia</a></li>
      <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "vision")), "html", null, true);
        echo "\">Mision y Vision</a></li>
      <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "calidad")), "html", null, true);
        echo "\">Politica de Calidad</a></li>
      <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "premios")), "html", null, true);
        echo "\">Premios Otorgados</a></li>
      <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "certificados")), "html", null, true);
        echo "\">Certificados</a></li>
      <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "servicios")), "html", null, true);
        echo "\">Servicios</a></li>
   </ul>
  </li>
      <span class=\"menu-principal ui-icon puntica-abajo\"></span>
  <li class=\"separador\"></li>
  <li><a href=\"#\">Productos</a>
     <ul class=\"productos\">
\t <li><a href=\"#\">Productos naturales ></a>
\t <ul class=\"subproductos\">
      <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_naturales", array("producto" => "Ateromixol")), "html", null, true);
        echo "\">Ateromixol</a></li>
\t   <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_naturales", array("producto" => "prevenox")), "html", null, true);
        echo "\">Prevenox</a></li>
      <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_naturales", array("producto" => "abexol")), "html", null, true);
        echo "\">Abexol</a></li>
      <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_naturales", array("producto" => "vasoactol")), "html", null, true);
        echo "\">Vasoactol</a></li>
      <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_naturales", array("producto" => "palmex")), "html", null, true);
        echo "\">Palmex</a></li>
     </ul>
\t </li>
\t <span class=\"menu-principal ui-icon puntica-derecha\"></span>
\t <li><a href=\"#\">Implantes médicos</a>
\t <ul class=\"subproductos2\">
\t <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_implantes", array("producto" => "oculares")), "html", null, true);
        echo "\">Oculares</a></li>
\t <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_implantes", array("producto" => "oseos")), "html", null, true);
        echo "\">Óseos</a></li>
\t </ul>
\t </li>
\t 
\t  <li><a href=\"#\">Aceites ozonizados ></a>
\t <ul class=\"subproductos3\">
\t <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_aceites", array("producto" => "oleozon-oral")), "html", null, true);
        echo "\">Oral</a></li>
\t <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_aceites", array("producto" => "topico")), "html", null, true);
        echo "\">Tópico</a></li>
\t </ul>
\t </li>
\t <li><a href=\"#\">Equipos médicos ></a>
\t <ul class=\"subproductos4\">
\t <li><a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_equipos", array("producto" => "ozono")), "html", null, true);
        echo "\">Ozono</a></li>
\t <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_equipos", array("producto" => "diramic")), "html", null, true);
        echo "\">Diramic</a></li>
\t </ul>
\t </li>
\t \t <li><a href=\"#\">Cosméticos ></a>
\t <ul class=\"subproductos5\">
\t <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productos_estaticas_cosmeticos", array("producto" => "jabon")), "html", null, true);
        echo "\">Jabón ozonizado</a></li>
\t
\t </ul>
\t </li>
   </ul>
  </li>
  <span class=\"menu-principal ui-icon puntica-abajo\"></span>
  <li class=\"separador\"></li>
  <li> <a href=\"#\"> Publicaciones</a>
  <ul class=\"publicaciones\">
  <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_estaticas", array("producto" => "policosanol")), "html", null, true);
        echo "\">Proyecto Policosanol</a></li>
  <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "pub_d002")), "html", null, true);
        echo "\">Proyecto D002</a></li>
  <li><a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "pub_d003")), "html", null, true);
        echo "\">Proyecto D003</a></li>
  </ul>
  </li>
  <span class=\"menu-principal ui-icon puntica-abajo\"></span>
  <li class=\"separador\"></li>
  <li><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "atencion-al-cliente")), "html", null, true);
        echo "\">Atención al Cliente</a></li>
</ul>
</nav>
</div> 
</header>
<article>
";
        // line 97
        $this->displayBlock('article', $context, $blocks);
        // line 98
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
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "inicio")), "html", null, true);
        echo "\">Inicio</a></li>
<li>|</li>
<li><a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "mapa")), "html", null, true);
        echo "\">Mapa del sitio</a></li>
<li>|</li>
<li><a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "seguridad")), "html", null, true);
        echo "\">Política de Seguridad</a></li>
<li>|</li>
<li><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "legal")), "html", null, true);
        echo "\">Declaración Legal</a></li>

</ul>
</nav>

</div>
<div id=\"subfooterm\">
<ul>
<li> <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "historia")), "html", null, true);
        echo "\">HISTORIA <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/reloj-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "vision")), "html", null, true);
        echo "\">VISION Y MISION <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/ojo-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "calidad")), "html", null, true);
        echo "\">POLITICA DE CALIDAD <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/checked-foot.png"), "html", null, true);
        echo "\"></a>
</li>
</ul>
<ul>
<li> <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "premios")), "html", null, true);
        echo "\">PREMIOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/medalla-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "certificados")), "html", null, true);
        echo "\">CERTIFICADOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/pluma-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "servicios")), "html", null, true);
        echo "\">SERVICIOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/maleta-foot.png"), "html", null, true);
        echo "\"></a>
</li>
</ul>
<ul>
<li> <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "productos")), "html", null, true);
        echo "\">PRODUCTOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/carrito-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "atencion-al-cliente")), "html", null, true);
        echo "\">CONTACTENOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/carta-foot.png"), "html", null, true);
        echo "\"></a>
</li>
<li> <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paginas_estaticas", array("pagina" => "atencion-al-cliente")), "html", null, true);
        echo "\">ENCUENTRENOS <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/alfiler-foot.png"), "html", null, true);
        echo "\"></a>
</li>
</ul>
<img id=\"logobottom\"alt=\"Logo\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/producto/images/logobottomy.png"), "html", null, true);
        echo "\">
</div>
<div id=\"subfooterb\">
<span><small>&copy; ";
        // line 161
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " -DALMER S.A.</small></span>
</div>
</div>
</footer>
";
    }

    // line 97
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
        return array (  343 => 97,  334 => 161,  328 => 158,  320 => 155,  313 => 153,  306 => 151,  297 => 147,  290 => 145,  283 => 143,  274 => 139,  267 => 137,  260 => 135,  249 => 127,  244 => 125,  239 => 123,  234 => 121,  209 => 98,  207 => 97,  198 => 91,  190 => 86,  186 => 85,  182 => 84,  169 => 74,  161 => 69,  157 => 68,  149 => 63,  145 => 62,  136 => 56,  132 => 55,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  107 => 45,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  66 => 24,  64 => 22,  61 => 18,  57 => 16,  53 => 14,  50 => 13,  42 => 8,  37 => 6,  31 => 4,  28 => 3,);
    }
}
