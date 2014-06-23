<?php

/* TWneloBundle:Rooms:rooms.html.twig */
class __TwigTemplate_98f442f6b7a85440319e6b57ed41afd1 extends Twig_Template
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
        echo " Rooms ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<br/>
     <form method=\"POST\" id=\"form-book\">
        <section id=\"portfolio\" class=\"container main\">    
            <ul class=\"gallery col-4\">          

                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesandrooms"]) ? $context["typesandrooms"] : $this->getContext($context, "typesandrooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["rooms"]) {
            echo "                  

                    ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 14
                echo "                        ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                    // line 15
                    echo "                            <li>    
                                <div class=\"preview\">
                                    ";
                    // line 17
                    $context["var_id"] = "bundles/twnelo/images/portfolio/thumb/item";
                    // line 18
                    echo "                                    ";
                    $context["var_id"] = ((isset($context["var_id"]) ? $context["var_id"] : $this->getContext($context, "var_id")) . $this->getAttribute($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getType"), "id"));
                    // line 19
                    echo "                                    ";
                    $context["var_id"] = ((isset($context["var_id"]) ? $context["var_id"] : $this->getContext($context, "var_id")) . ".jpg");
                    // line 20
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["var_id"]) ? $context["var_id"] : $this->getContext($context, "var_id"))), "html", null, true);
                    echo "\">
                                        <div class=\"overlay\">
                                        </div>
                                </div>

                                <div class=\"desc\">
                                    <h5> ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getType"), "name"), "html", null, true);
                    echo " </h5>
                                    <strong>Facilities: </strong>";
                    // line 27
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getFacilities"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["facility"]) {
                        echo " ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < 4)) {
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facility"]) ? $context["facility"] : $this->getContext($context, "facility")), "getFacility"), "html", null, true);
                            echo "; ";
                        }
                        echo " ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facility'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<br/>
                                    <strong>Available rooms: </strong> ";
                    // line 28
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms"))), "html", null, true);
                    echo " <br/>
                                    <strong>Prices: </strong> ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getPrice"), "html", null, true);
                    echo " Lei <br/>
                                    <button type = \"submit\" name=\"singleapartment\" value = \"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "getType"), "id"), "html", null, true);
                    echo "\" class=\"btn btn-success btn-small\">Book a room !</button>
                                </div>
                            </li>       
                        ";
                }
                // line 34
                echo "
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rooms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            
            </ul>
        </section>
    </form>

    ";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Rooms:rooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 38,  166 => 36,  151 => 34,  144 => 30,  140 => 29,  136 => 28,  98 => 27,  94 => 26,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  72 => 15,  69 => 14,  52 => 13,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
