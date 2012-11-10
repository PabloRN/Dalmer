<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_0b8fab73b24ac67d45187b1fb7d312d9 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  25 => 5,  22 => 2,  17 => 1,  102 => 15,  96 => 14,  85 => 8,  73 => 6,  67 => 17,  62 => 15,  58 => 14,  44 => 10,  41 => 9,  39 => 8,  35 => 8,  24 => 3,  340 => 94,  331 => 158,  325 => 155,  317 => 152,  310 => 150,  303 => 148,  294 => 144,  287 => 142,  280 => 140,  271 => 136,  264 => 134,  257 => 132,  246 => 124,  241 => 122,  236 => 120,  231 => 118,  206 => 95,  204 => 94,  195 => 88,  188 => 84,  184 => 83,  180 => 82,  168 => 73,  160 => 68,  156 => 67,  148 => 62,  144 => 61,  136 => 56,  132 => 55,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  107 => 16,  95 => 36,  91 => 9,  87 => 34,  83 => 33,  79 => 7,  75 => 31,  66 => 24,  57 => 16,  53 => 12,  50 => 13,  31 => 6,  28 => 3,  225 => 162,  222 => 161,  81 => 24,  68 => 14,  64 => 16,  61 => 18,  55 => 10,  49 => 11,  42 => 8,  37 => 6,  33 => 3,  30 => 5,);
    }
}
