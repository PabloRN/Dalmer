<?php

/* UsuarioBundle:Default:cajaLogin.html.twig */
class __TwigTemplate_bf32221868c0a5ae11526a6827d3f96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login_check"), "html", null, true);
        echo "\" method=\"post\">
";
        // line 2
        if ($this->getContext($context, "error")) {
            // line 3
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 5
        echo "
<label for=\"login_user\">Email</label>
<input id=\"login_user\" type=\"text\" name=\"_username\"
value=\"";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter($this->getContext($context, "last_username"), "")) : ("")), "html", null, true);
        echo "\" />
<label for=\"login_pass\">Contraseña</label>
<input id=\"login_pass\" type=\"password\" name=\"_password\" />
<input class=\"submit\" type=\"submit\" value=\"Entrar\" />
<input type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" checked />
<label class = \"remember\"for=\"no_cerrar\">Recordarme</label>
</form>";
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:cajaLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  30 => 5,  24 => 3,  17 => 1,  85 => 13,  80 => 12,  69 => 6,  63 => 5,  57 => 14,  54 => 13,  39 => 8,  34 => 7,  22 => 2,  289 => 70,  280 => 134,  274 => 131,  266 => 128,  259 => 126,  252 => 124,  243 => 120,  236 => 118,  229 => 116,  220 => 112,  213 => 110,  206 => 108,  195 => 100,  190 => 98,  185 => 96,  180 => 94,  155 => 71,  153 => 70,  144 => 64,  137 => 60,  133 => 59,  129 => 58,  117 => 49,  109 => 44,  105 => 43,  101 => 42,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 11,  70 => 29,  61 => 22,  59 => 20,  56 => 16,  52 => 12,  48 => 11,  45 => 11,  37 => 6,  31 => 4,  28 => 5,  62 => 12,  58 => 10,  55 => 9,  49 => 8,  43 => 9,  36 => 4,  32 => 6,  29 => 2,);
    }
}
