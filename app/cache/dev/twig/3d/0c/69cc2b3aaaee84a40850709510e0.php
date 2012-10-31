<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_3d0c69cc2b3aaaee84a40850709510e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Formulario de acceso";
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        if ($this->getContext($context, "error")) {
            // line 7
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login_check"), "html", null, true);
        echo "\" method=\"post\">
<label for=\"username\">Usuario:</label>
<input type=\"text\" id=\"username\" name=\"_username\"
value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
<label for=\"password\">Contraseña:</label>
<input type=\"password\" id=\"password\" name=\"_password\" />
<input type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" checked />
<label for=\"no_cerrar\">Recordarme</label>
<input type=\"submit\" name=\"login\" value=\"Acceder\" />
</form>
";
    }

    // line 20
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 113,  509 => 452,  506 => 451,  289 => 70,  280 => 134,  274 => 131,  266 => 128,  259 => 126,  252 => 124,  243 => 120,  236 => 118,  229 => 116,  220 => 112,  213 => 110,  206 => 108,  180 => 94,  155 => 71,  144 => 64,  105 => 43,  101 => 42,  61 => 22,  56 => 9,  45 => 11,  85 => 13,  66 => 16,  36 => 4,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 44,  93 => 33,  90 => 34,  54 => 13,  133 => 59,  124 => 41,  111 => 37,  80 => 12,  60 => 16,  52 => 9,  97 => 34,  95 => 21,  88 => 29,  78 => 31,  71 => 20,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 7,  92 => 20,  86 => 33,  79 => 26,  19 => 2,  42 => 10,  40 => 7,  29 => 3,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 100,  193 => 79,  190 => 98,  188 => 77,  185 => 96,  179 => 72,  177 => 71,  171 => 114,  162 => 63,  158 => 61,  156 => 60,  153 => 70,  146 => 55,  142 => 54,  137 => 60,  126 => 46,  120 => 39,  117 => 49,  103 => 36,  74 => 11,  47 => 19,  32 => 3,  24 => 3,  22 => 2,  23 => 3,  17 => 1,  69 => 6,  63 => 12,  58 => 10,  49 => 8,  43 => 7,  37 => 4,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 32,  77 => 25,  75 => 24,  57 => 14,  50 => 8,  46 => 7,  44 => 6,  39 => 8,  33 => 3,  30 => 5,  27 => 4,  135 => 50,  129 => 58,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 26,  73 => 21,  70 => 29,  67 => 19,  62 => 12,  59 => 12,  55 => 9,  51 => 13,  48 => 11,  41 => 5,  38 => 8,  35 => 4,  31 => 4,  28 => 5,);
    }
}
