<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_a6129c623cfb291ea06ac0d1883c1645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'field_rows' => array($this, 'block_field_rows'),
            'field_row' => array($this, 'block_field_row'),
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_field_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_field_label($context, array $blocks = array())
    {
        // line 25
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 27
        if ($this->getContext($context, "required")) {
            // line 28
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 30
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  76 => 24,  21 => 3,  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  310 => 132,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  231 => 95,  222 => 90,  217 => 87,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  175 => 66,  118 => 36,  114 => 34,  150 => 43,  170 => 63,  157 => 55,  130 => 48,  271 => 114,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  154 => 45,  151 => 53,  143 => 49,  140 => 52,  119 => 34,  106 => 35,  100 => 27,  83 => 26,  68 => 22,  65 => 16,  168 => 113,  509 => 452,  506 => 451,  289 => 70,  280 => 134,  274 => 131,  266 => 128,  259 => 126,  252 => 124,  243 => 120,  236 => 98,  229 => 94,  220 => 112,  213 => 85,  206 => 108,  180 => 68,  155 => 71,  144 => 64,  105 => 37,  101 => 42,  61 => 16,  56 => 14,  45 => 9,  85 => 28,  66 => 21,  36 => 5,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 57,  145 => 49,  141 => 55,  134 => 50,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 28,  90 => 31,  54 => 12,  133 => 49,  124 => 41,  111 => 33,  80 => 26,  60 => 14,  52 => 17,  97 => 30,  95 => 30,  88 => 32,  78 => 31,  71 => 37,  25 => 5,  72 => 21,  64 => 35,  53 => 13,  34 => 5,  92 => 23,  86 => 30,  79 => 24,  19 => 1,  42 => 10,  40 => 8,  29 => 6,  26 => 3,  224 => 91,  215 => 90,  211 => 88,  204 => 84,  200 => 87,  195 => 100,  193 => 79,  190 => 98,  188 => 77,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 70,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 49,  103 => 28,  74 => 38,  47 => 15,  32 => 5,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 21,  63 => 17,  58 => 26,  49 => 11,  43 => 8,  37 => 4,  20 => 2,  139 => 47,  131 => 48,  128 => 43,  125 => 36,  121 => 40,  115 => 39,  107 => 36,  99 => 33,  96 => 34,  91 => 27,  82 => 25,  77 => 23,  75 => 18,  57 => 13,  50 => 12,  46 => 13,  44 => 14,  39 => 7,  33 => 4,  30 => 7,  27 => 3,  135 => 41,  129 => 38,  122 => 46,  116 => 42,  113 => 40,  108 => 38,  104 => 40,  102 => 37,  94 => 32,  89 => 22,  87 => 26,  84 => 29,  81 => 28,  73 => 23,  70 => 18,  67 => 18,  62 => 22,  59 => 21,  55 => 14,  51 => 23,  48 => 10,  41 => 7,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
