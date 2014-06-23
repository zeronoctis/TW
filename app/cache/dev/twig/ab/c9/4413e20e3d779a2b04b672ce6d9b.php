<?php

/* TWneloBundle:Rooms:manageRoomAdd.html.twig */
class __TwigTemplate_abc94413e20e3d779a2b04b672ce6d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 

\t<section id=\"error\" class=\"container\">
\t
\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

\t\t<div class=\"row-fluid\">
\t\t\t <div class=\"span1\" align=\"center\">

\t\t\t\t<fieldset class=\"registration-form\">
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<h3>Facilities:</h3>
\t\t\t\t\t\t<div class=\"controls\" align=\"left\">
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facilities"), 'errors');
        echo "
\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facilities"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<fieldset class=\"registration-form\">
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<h3>Types:</h3>
\t\t\t\t\t\t<div class=\"controls\" align=\"left\">
\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "types"), 'errors');
        echo "
\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "types"), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</div>
\t        <div class=\"span6\" align=\"right\">

\t\t\t\t<fieldset class=\"registration-form\">
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number"), 'errors');
        echo "
\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number"), 'widget', array("attr" => array("class" => "input-xlarge", "placeholder" => "Room number", "autocomplete" => "off", "value" => "")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'errors');
        echo "
\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'widget', array("attr" => array("class" => "input-xlarge", "placeholder" => "Room price", "autocomplete" => "off", "value" => "")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Add"), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Add"), 'widget', array("attr" => array("class" => "btn btn-success btn-large btn-block", "id" => "submit", "name" => "submit")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facilities"));
        foreach ($context['_seq'] as $context["_key"] => $context["facility"]) {
            // line 55
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["facilities"]) ? $context["facilities"] : $this->getContext($context, "facilities")), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t

\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Back"), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Back"), 'widget', array("attr" => array("class" => "btn btn-success btn-large btn-block", "id" => "submit", "name" => "submit")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</div>

\t        <div class=\"span3\" align=\"left\">

\t\t\t\t<fieldset class=\"registration-form\">
\t\t\t\t\t<div class=\"control-group\" align=\"center\" style=\"width: 400px; height: 400px; overflow-y: scroll;\">
\t\t\t\t\t\t<h3>All existent rooms:</h3>
\t\t\t\t\t\t<div class=\"controls\" align=\"left\">
\t\t\t\t\t\t\t<ul> 
\t\t\t\t\t\t\t\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<b><font size=\"2\"> Room Number:</font></b> ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "number"), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i><b>Price:</b></i> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "price"), "html", null, true);
            echo " LEI
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i><b>Facilities:</b></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getFacilities"));
            foreach ($context['_seq'] as $context["_key"] => $context["facility"]) {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facility"]) ? $context["facility"] : $this->getContext($context, "facility")), "facility"), "html", null, true);
                echo ",
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facility'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<i><b>Type:</b></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getType"), "name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t\t\t\t\t<ul/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</section>

";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Rooms:manageRoomAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 101,  207 => 94,  196 => 89,  191 => 86,  182 => 84,  178 => 83,  171 => 79,  165 => 76,  162 => 75,  158 => 74,  142 => 61,  138 => 60,  132 => 56,  123 => 55,  119 => 54,  112 => 50,  108 => 49,  100 => 44,  96 => 43,  88 => 38,  84 => 37,  79 => 35,  67 => 26,  63 => 25,  52 => 17,  48 => 16,  36 => 7,  28 => 3,);
    }
}
