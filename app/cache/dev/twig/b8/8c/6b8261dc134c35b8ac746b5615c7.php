<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_b88c6b8261dc134c35b8ac746b5615c7 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  547 => 57,  543 => 56,  538 => 55,  535 => 54,  528 => 52,  524 => 17,  518 => 15,  514 => 14,  510 => 13,  506 => 12,  501 => 11,  494 => 15,  490 => 14,  486 => 13,  482 => 12,  477 => 11,  471 => 15,  467 => 14,  463 => 13,  459 => 12,  454 => 11,  448 => 15,  444 => 14,  440 => 13,  436 => 12,  431 => 11,  425 => 15,  421 => 14,  417 => 13,  413 => 12,  408 => 11,  402 => 15,  398 => 14,  394 => 13,  390 => 12,  385 => 11,  379 => 15,  375 => 14,  371 => 13,  367 => 12,  362 => 11,  356 => 15,  352 => 14,  348 => 13,  344 => 12,  339 => 11,  333 => 15,  329 => 14,  325 => 13,  321 => 12,  316 => 11,  310 => 15,  306 => 14,  302 => 13,  298 => 12,  293 => 11,  287 => 15,  283 => 14,  279 => 13,  275 => 12,  270 => 11,  264 => 15,  260 => 14,  256 => 13,  252 => 12,  247 => 11,  241 => 15,  237 => 14,  233 => 13,  229 => 12,  224 => 11,  219 => 10,  216 => 9,  210 => 7,  189 => 117,  185 => 116,  181 => 115,  173 => 113,  169 => 112,  155 => 101,  151 => 100,  147 => 99,  143 => 98,  139 => 97,  99 => 59,  96 => 54,  94 => 52,  80 => 41,  76 => 40,  72 => 39,  68 => 38,  64 => 37,  60 => 36,  36 => 9,  31 => 7,  23 => 1,  242 => 181,  235 => 177,  220 => 165,  213 => 161,  199 => 150,  192 => 146,  177 => 114,  170 => 130,  56 => 19,  41 => 7,  38 => 18,  35 => 5,  29 => 3,);
    }
}
