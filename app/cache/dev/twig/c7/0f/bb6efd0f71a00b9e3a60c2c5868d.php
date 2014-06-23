<?php

/* TWneloBundle:Security:login.html.twig */
class __TwigTemplate_c70fbb6efd0f71a00b9e3a60c2c5868d extends Twig_Template
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
\t 
<div id=\"error\">          
\t<section id=\"login-page\" class=\"container\" >
\t
\t\t<form action = \"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method = \"POST\">
\t\t\t<fieldset class=\"registration-form\">
\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<label for = \"username\">Username:</label>
\t\t\t\t\t\t<input type = \"text\" id = \"username\" name = \"_username\" value = \"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class = \"input-xlarge\" placeholder = \"Username\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<label for = \"password\">Password:</label>
\t\t\t\t\t\t\t<input type = \"password\" id = \"password\" name = \"_password\" value = \"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class = \"input-xlarge\" placeholder = \"Password\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t
\t\t\t\t<div class=\"control-group\" align=\"center\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<button type = \"submit\" class = \"btn btn-success btn-large btn-block\">Login</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</form>

\t</section>
</div>

";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  45 => 13,  37 => 8,  28 => 3,);
    }
}
