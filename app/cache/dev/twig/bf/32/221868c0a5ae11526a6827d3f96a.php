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
        return array (  22 => 2,  17 => 1,  102 => 15,  96 => 14,  85 => 8,  73 => 6,  67 => 17,  62 => 15,  58 => 14,  44 => 10,  41 => 9,  39 => 8,  35 => 8,  24 => 3,  340 => 94,  331 => 158,  325 => 155,  317 => 152,  310 => 150,  303 => 148,  294 => 144,  287 => 142,  280 => 140,  271 => 136,  264 => 134,  257 => 132,  246 => 124,  241 => 122,  236 => 120,  231 => 118,  206 => 95,  204 => 94,  195 => 88,  188 => 84,  184 => 83,  180 => 82,  168 => 73,  160 => 68,  156 => 67,  148 => 62,  144 => 61,  136 => 56,  132 => 55,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  107 => 16,  95 => 36,  91 => 9,  87 => 34,  83 => 33,  79 => 7,  75 => 31,  66 => 24,  57 => 16,  53 => 12,  50 => 13,  31 => 6,  28 => 3,  225 => 162,  222 => 161,  81 => 24,  68 => 14,  64 => 16,  61 => 18,  55 => 10,  49 => 11,  42 => 8,  37 => 6,  33 => 3,  30 => 5,);
    }
}
