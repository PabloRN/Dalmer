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
<input type=\"submit\" name=\"login\" value=\"Acceder\" />
</form>
";
    }

    // line 18
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
        return array (  69 => 18,  59 => 12,  52 => 9,  46 => 7,  44 => 6,  41 => 5,  35 => 4,  29 => 3,);
    }
}
