<?php

/* TWneloBundle:Security:admin.html.twig */
class __TwigTemplate_b59599ddb9d084b5faada2bed8550314 extends Twig_Template
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
        echo " Admin Page ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t
\t\t<section id=\"admin actions\" class=\"container\">
\t\t\t</br>
\t        <ul class=\"faq\">
\t         <li>
\t            <span class=\"number\">01</span>
\t            <div>
\t                <a href=\" ";
        // line 13
        echo $this->env->getExtension('routing')->getPath("manage_facilities");
        echo "\" ><h4>Manage Room Facilities</h4></a>
\t                <p>You can add or delete facilites as overall.</p>
\t            </div>
\t        </li>

\t        <li>
\t            <span class=\"number\">02</span>
\t            <div>
\t                <a href=\" ";
        // line 21
        echo $this->env->getExtension('routing')->getPath("manage_types");
        echo "\" ><h4>Manage Room Types</h4></a>
\t                <p>You can delete existing types or add new ones.</p>
\t            </div>
\t        </li>

\t        <li>
\t            <span class=\"number\">03</span>
\t            <div>
\t                <a href=\" ";
        // line 29
        echo $this->env->getExtension('routing')->getPath("manage_rooms_add");
        echo "\" > <h4>Add a new Room</h4></a>
\t                <p>Here you can add new rooms.</p>
\t            </div>
\t        </li>
\t\t\t
\t\t\t<li>
\t            <span class=\"number\">04</span>
\t            <div>
\t                <a href=\" ";
        // line 37
        echo $this->env->getExtension('routing')->getPath("manage_rooms_delete");
        echo "\" ><h4>Delete a Room</h4></a>
\t                <p>You can delete existing rooms.</p>
\t            </div>
\t        </li>

\t        <li>
\t            <span class=\"number\">05</span>
\t            <div>
\t                <a href=\" ";
        // line 45
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" > <h4>Logout</h4></a>
\t                <p>Not too much to do here...</p>
\t            </div>
\t        </li>
\t    </ul>
\t    <p>&nbsp;</p>
\t    
\t</section>

";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Security:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 45,  80 => 37,  69 => 29,  58 => 21,  47 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
