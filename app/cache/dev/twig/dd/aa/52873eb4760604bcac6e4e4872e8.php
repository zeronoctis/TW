<?php

/* TWneloBundle:Contact:contact.html.twig */
class __TwigTemplate_ddaa52873eb4760604bcac6e4e4872e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " Contact Us ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t
    <section class=\"no-margin\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2712.176948355459!2d27.574910999999997!3d47.173972000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb6227e846bd%3A0x193e4b6864504e2c!2sFacultatea+de+Informatic%C4%83!5e0!3m2!1sro!2s!4v1402331408186\" width=\"100%\" height=\"700\" frameborder=\"0\" style=\"border:0\"></iframe>   
    </section>
\t</br>


";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
