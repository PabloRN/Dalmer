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
        return array (  25 => 5,  35 => 8,  30 => 5,  24 => 3,  17 => 1,  85 => 13,  80 => 12,  69 => 6,  63 => 5,  57 => 14,  54 => 13,  39 => 8,  34 => 11,  22 => 2,  246 => 48,  237 => 112,  231 => 109,  223 => 106,  216 => 104,  209 => 102,  200 => 98,  193 => 96,  186 => 94,  177 => 90,  170 => 88,  163 => 86,  152 => 78,  147 => 76,  142 => 74,  137 => 72,  112 => 49,  110 => 48,  101 => 42,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 11,  70 => 29,  61 => 22,  59 => 20,  56 => 16,  52 => 12,  48 => 11,  45 => 11,  37 => 6,  31 => 4,  28 => 5,  62 => 12,  58 => 10,  55 => 9,  49 => 8,  43 => 9,  36 => 4,  32 => 6,  29 => 2,);
    }
}
