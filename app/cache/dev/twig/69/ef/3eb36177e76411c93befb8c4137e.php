<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_69ef3eb36177e76411c93befb8c4137e extends Twig_Template
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
        echo "<div id=\"header\" class=\"clear_fix\">
    <h1>
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/logo_symfony_profiler.gif"), "html", null, true);
        echo "\" alt=\"Symfony profiler\"/>
    </h1>

    <div class=\"search\">
        <form method=\"get\" action=\"http://symfony.com/search\">
            <div class=\"form_row\">
                <label for=\"search_id\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/grey_magnifier.png"), "html", null, true);
        echo "\" alt=\"Search on Symfony website\"/>
                </label>

                <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\"/>

                <button type=\"submit\">
                    <span class=\"border_l\">
                        <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                        </span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  332 => 137,  329 => 136,  323 => 135,  321 => 134,  314 => 133,  306 => 130,  304 => 129,  301 => 128,  298 => 127,  296 => 126,  288 => 124,  286 => 123,  282 => 121,  276 => 117,  238 => 99,  229 => 94,  217 => 87,  213 => 85,  203 => 81,  201 => 80,  194 => 76,  183 => 69,  175 => 66,  118 => 36,  114 => 34,  150 => 43,  157 => 55,  130 => 48,  262 => 111,  258 => 110,  255 => 109,  250 => 108,  248 => 107,  235 => 107,  228 => 103,  221 => 99,  214 => 95,  207 => 83,  164 => 59,  154 => 45,  151 => 53,  143 => 49,  140 => 52,  106 => 35,  100 => 27,  65 => 18,  155 => 94,  225 => 162,  222 => 90,  167 => 106,  68 => 20,  173 => 117,  170 => 63,  45 => 9,  509 => 452,  506 => 451,  56 => 14,  340 => 94,  331 => 158,  325 => 155,  317 => 152,  310 => 132,  303 => 148,  294 => 144,  287 => 142,  280 => 140,  271 => 114,  264 => 134,  257 => 132,  246 => 124,  241 => 122,  236 => 98,  231 => 95,  206 => 95,  184 => 83,  180 => 68,  168 => 73,  160 => 68,  144 => 61,  136 => 56,  119 => 34,  83 => 26,  61 => 17,  85 => 28,  66 => 15,  36 => 8,  209 => 84,  205 => 82,  196 => 77,  192 => 78,  189 => 73,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 62,  145 => 49,  141 => 55,  134 => 50,  132 => 43,  127 => 46,  123 => 38,  109 => 36,  93 => 33,  90 => 36,  54 => 13,  133 => 49,  124 => 41,  111 => 33,  80 => 25,  60 => 16,  52 => 13,  97 => 26,  95 => 30,  88 => 29,  78 => 25,  71 => 21,  25 => 4,  72 => 17,  64 => 12,  53 => 12,  34 => 11,  92 => 23,  86 => 27,  79 => 28,  19 => 2,  42 => 10,  40 => 7,  29 => 4,  26 => 3,  224 => 91,  215 => 90,  211 => 88,  204 => 94,  200 => 87,  195 => 88,  193 => 79,  190 => 78,  188 => 84,  185 => 75,  179 => 72,  177 => 67,  171 => 67,  162 => 63,  158 => 57,  156 => 56,  153 => 59,  146 => 55,  142 => 48,  137 => 46,  126 => 39,  120 => 37,  117 => 44,  103 => 28,  74 => 21,  47 => 15,  32 => 6,  24 => 3,  22 => 2,  23 => 3,  17 => 1,  69 => 21,  63 => 12,  58 => 16,  49 => 12,  43 => 12,  37 => 4,  20 => 2,  139 => 47,  131 => 48,  128 => 43,  125 => 36,  121 => 40,  115 => 47,  107 => 16,  99 => 34,  96 => 14,  91 => 31,  82 => 20,  77 => 24,  75 => 18,  57 => 11,  50 => 12,  46 => 13,  44 => 10,  39 => 12,  33 => 9,  30 => 5,  27 => 9,  135 => 41,  129 => 38,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 40,  102 => 15,  94 => 32,  89 => 22,  87 => 34,  84 => 29,  81 => 28,  73 => 23,  70 => 26,  67 => 14,  62 => 22,  59 => 21,  55 => 15,  51 => 10,  48 => 10,  41 => 9,  38 => 12,  35 => 7,  31 => 10,  28 => 7,);
    }
}
