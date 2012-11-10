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
        return array (  155 => 94,  225 => 162,  222 => 161,  167 => 106,  68 => 14,  173 => 117,  170 => 107,  45 => 9,  509 => 452,  506 => 451,  56 => 9,  340 => 94,  331 => 158,  325 => 155,  317 => 152,  310 => 150,  303 => 148,  294 => 144,  287 => 142,  280 => 140,  271 => 136,  264 => 134,  257 => 132,  246 => 124,  241 => 122,  236 => 120,  231 => 118,  206 => 95,  184 => 83,  180 => 82,  168 => 73,  160 => 68,  144 => 61,  136 => 56,  119 => 48,  83 => 33,  61 => 11,  85 => 8,  66 => 24,  36 => 4,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 62,  145 => 56,  141 => 55,  134 => 50,  132 => 55,  127 => 46,  123 => 49,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 46,  80 => 26,  60 => 12,  52 => 9,  97 => 34,  95 => 36,  88 => 29,  78 => 25,  71 => 20,  25 => 4,  72 => 16,  64 => 12,  53 => 12,  34 => 5,  92 => 20,  86 => 28,  79 => 7,  19 => 2,  42 => 6,  40 => 7,  29 => 3,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 94,  200 => 83,  195 => 88,  193 => 79,  190 => 78,  188 => 84,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 95,  156 => 67,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 27,  47 => 19,  32 => 3,  24 => 3,  22 => 2,  23 => 3,  17 => 1,  69 => 20,  63 => 12,  58 => 10,  49 => 9,  43 => 7,  37 => 4,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 16,  99 => 34,  96 => 14,  91 => 9,  82 => 27,  77 => 25,  75 => 31,  57 => 11,  50 => 8,  46 => 7,  44 => 6,  39 => 8,  33 => 3,  30 => 5,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 15,  94 => 33,  89 => 20,  87 => 34,  84 => 28,  81 => 24,  73 => 6,  70 => 26,  67 => 14,  62 => 12,  59 => 12,  55 => 10,  51 => 10,  48 => 10,  41 => 5,  38 => 8,  35 => 4,  31 => 6,  28 => 3,);
    }
}
