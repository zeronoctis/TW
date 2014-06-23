<?php

/* TWneloBundle:Rooms:bookRooms.html.twig */
class __TwigTemplate_426122e083130b32402dc63715cd238c extends Twig_Template
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
        echo " Rooms available ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <section id=\"error\" class=\"container main\">
  
   <div class=\"row-fluid\">

  
    <div class=\"span5\" align=\"right\">
        <fieldset class=\"registration-form\">
      
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

          <div class=\"control-group\" align=\"center\">
           ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
            <div class=\"controls\">
              ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "arrivalDate"), 'label');
        echo "
              ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "arrivalDate"), 'errors');
        echo "
              ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "arrivalDate"), 'widget', array("attr" => array("class" => "input-xlarge", "value" => twig_date_format_filter($this->env, "now", "Y/m/d"))));
        echo "
            </div>
          </div>
          <div class=\"control-group\" align=\"center\">
            <div class=\"controls\">
              ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leavingDate"), 'label');
        echo "
              ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leavingDate"), 'errors');
        echo "
              ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leavingDate"), 'widget', array("attr" => array("class" => "input-xlarge", "value" => twig_date_format_filter($this->env, "now", "Y/m/d"))));
        echo "
            </div>
          </div>
          <div class=\"control-group\" align=\"center\">
            <div class=\"controls\">
              ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Book"), 'label');
        echo "
              ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Book"), 'widget', array("attr" => array("class" => "btn btn-success btn-large btn-block", "id" => "submit", "name" => "submit")));
        echo "
            </div>
          </div>
          <div class=\"control-group\" align=\"center\">
            <div class=\"controls\">
              ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Back"), 'label');
        echo "
              ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Back"), 'widget', array("attr" => array("class" => "btn btn-success btn-large btn-block", "id" => "submit", "name" => "submit")));
        echo "
            </div>
          </div>
          <div class=\"control-group\" align=\"center\">
            <div class=\"controls\">
               ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
          </div>
        </fieldset>
      </div>

     <div class=\"span4\" align=\"right\">

        <fieldset class=\"registration-form\">
          <div class=\"control-group\" align=\"center\" style=\"width: 400px; height: 400px; overflow-y: scroll;\">
            <h3>All available rooms:</h3>
            <div class=\"controls\" align=\"left\">
              <ul> 
                ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 60
            echo "                  <li ";
            if (($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getOverbooked") == 1)) {
                echo " style=\"background-color: #ffffcc;\"  ";
            }
            // line 61
            echo "                      ";
            if (($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getOverbooked") == 0)) {
                echo " style=\"background-color: #ccffcc;\"  ";
            }
            echo " 
                  >
                    <b><font size=\"2\"> Room Number:</font></b> ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "number"), "html", null, true);
            echo " 
                    <ul>
                      <li>
                        <i><b>Price:</b></i> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "price"), "html", null, true);
            echo " LEI
                      </li>
                      <li>
                        <i><b>Facilities:</b></i>
                        ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getFacilities"));
            foreach ($context['_seq'] as $context["_key"] => $context["facility"]) {
                // line 71
                echo "                          ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facility"]) ? $context["facility"] : $this->getContext($context, "facility")), "facility"), "html", null, true);
                echo ",
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facility'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                      </li>
                      <li>
                        <i><b>Type:</b></i>
                        ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getType"), "name"), "html", null, true);
            echo "
                      </li>
                    </ul>
                  </li> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "              <ul/>
            </div>
          </div>
        </fieldset>
      </div>

  
 </div>
   

  </section>

";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Rooms:bookRooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 81,  180 => 76,  175 => 73,  166 => 71,  162 => 70,  155 => 66,  149 => 63,  141 => 61,  136 => 60,  132 => 59,  116 => 46,  108 => 41,  104 => 40,  96 => 35,  92 => 34,  84 => 29,  80 => 28,  76 => 27,  68 => 22,  64 => 21,  60 => 20,  55 => 18,  49 => 15,  38 => 6,  35 => 5,  29 => 3,);
    }
}
