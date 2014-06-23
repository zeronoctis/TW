<?php

/* TWneloBundle:Rooms:manageFacility.html.twig */
class __TwigTemplate_d782b84128a9f6df5c10346046fcb0c0 extends Twig_Template
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
\t        <div class=\"span6\" align=\"right\">

\t\t\t\t<fieldset class=\"registration-form\">
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facility"), 'errors');
        echo "
\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facility"), 'widget', array("attr" => array("class" => "input-xlarge", "placeholder" => "Facility", "id" => "facility", "name" => "facility")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Add"), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Add"), 'widget', array("attr" => array("class" => "btn btn-success btn-large btn-block", "id" => "submit", "name" => "submit")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Remove"), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Remove"), 'widget', array("attr" => array("class" => "btn btn-success btn-large btn-block", "id" => "submit", "name" => "submit")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Back"), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Back"), 'widget', array("attr" => array("class" => "btn btn-success btn-large btn-block", "id" => "submit", "name" => "submit")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</div>

\t        <div class=\"span3\" align=\"left\">

\t\t\t\t<fieldset class=\"registration-form\">
\t\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t\t<h3>All existent facilities:</h3>
\t\t\t\t\t\t<div class=\"controls\" align=\"left\">
\t\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facilities"]) ? $context["facilities"] : $this->getContext($context, "facilities")));
        foreach ($context['_seq'] as $context["_key"] => $context["facility"]) {
            // line 48
            echo "\t\t\t\t\t\t\t\t(*) ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facility"]) ? $context["facility"] : $this->getContext($context, "facility")), "facility"), "html", null, true);
            echo " <br/>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facility'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</section>

";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Rooms:manageFacility.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 56,  119 => 50,  110 => 48,  106 => 47,  91 => 35,  87 => 34,  79 => 29,  75 => 28,  67 => 23,  63 => 22,  55 => 17,  51 => 16,  46 => 14,  36 => 7,  28 => 3,);
    }
}
