<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_9d453e52e2d32ef11e6255933847833d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Well done!</h1>
    ";
        // line 6
        if ($this->getContext($context, "is_writable")) {
            // line 7
            echo "    <h2>Your distribution is configured!</h2>
    ";
        } else {
            // line 9
            echo "    <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
    ";
        }
        // line 11
        echo "    <h3>
        <span>
            ";
        // line 13
        if ($this->getContext($context, "is_writable")) {
            // line 14
            echo "                Your parameters.ini has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "ini_path"), "html", null, true);
            echo "</em>):
            ";
        } else {
            // line 16
            echo "                Your parameters.ini file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "ini_path"), "html", null, true);
            echo "</em>:
            ";
        }
        // line 18
        echo "        </span>
    </h3>

    <textarea class=\"symfony-configuration\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "parameters"), "html", null, true);
        echo "</textarea>

    ";
        // line 23
        if ($this->getContext($context, "welcome_url")) {
            // line 24
            echo "        <ul>
            <li><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "welcome_url"), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  105 => 37,  76 => 24,  21 => 3,  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  229 => 94,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  175 => 66,  118 => 36,  114 => 34,  150 => 43,  157 => 55,  130 => 48,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  154 => 45,  151 => 53,  143 => 49,  140 => 52,  106 => 35,  100 => 27,  65 => 18,  155 => 94,  225 => 162,  222 => 90,  167 => 106,  68 => 22,  173 => 117,  170 => 63,  45 => 9,  509 => 452,  506 => 451,  56 => 14,  340 => 94,  331 => 158,  325 => 155,  317 => 152,  310 => 132,  303 => 148,  294 => 144,  287 => 142,  280 => 140,  271 => 114,  264 => 134,  257 => 132,  246 => 124,  241 => 122,  236 => 98,  231 => 95,  206 => 95,  184 => 83,  180 => 68,  168 => 73,  160 => 68,  144 => 61,  136 => 56,  119 => 34,  83 => 26,  61 => 16,  85 => 28,  66 => 21,  36 => 5,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 62,  145 => 49,  141 => 55,  134 => 50,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 33,  90 => 31,  54 => 19,  133 => 49,  124 => 41,  111 => 33,  80 => 26,  60 => 16,  52 => 17,  97 => 26,  95 => 30,  88 => 32,  78 => 25,  71 => 37,  25 => 5,  72 => 21,  64 => 35,  53 => 13,  34 => 11,  92 => 23,  86 => 30,  79 => 24,  19 => 1,  42 => 10,  40 => 8,  29 => 6,  26 => 3,  224 => 91,  215 => 90,  211 => 88,  204 => 94,  200 => 87,  195 => 88,  193 => 79,  190 => 78,  188 => 84,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 38,  47 => 15,  32 => 5,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 21,  63 => 17,  58 => 26,  49 => 11,  43 => 11,  37 => 4,  20 => 2,  139 => 47,  131 => 48,  128 => 43,  125 => 36,  121 => 40,  115 => 47,  107 => 16,  99 => 33,  96 => 14,  91 => 31,  82 => 25,  77 => 23,  75 => 18,  57 => 27,  50 => 12,  46 => 13,  44 => 14,  39 => 6,  33 => 4,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 46,  116 => 42,  113 => 40,  108 => 38,  104 => 40,  102 => 15,  94 => 32,  89 => 22,  87 => 34,  84 => 29,  81 => 28,  73 => 23,  70 => 21,  67 => 18,  62 => 22,  59 => 21,  55 => 14,  51 => 23,  48 => 10,  41 => 7,  38 => 8,  35 => 7,  31 => 6,  28 => 7,);
    }
}
