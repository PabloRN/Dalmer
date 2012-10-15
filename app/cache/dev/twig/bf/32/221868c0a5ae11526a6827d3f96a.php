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
        return array (  35 => 8,  30 => 5,  24 => 3,  22 => 2,  17 => 1,);
    }
}
