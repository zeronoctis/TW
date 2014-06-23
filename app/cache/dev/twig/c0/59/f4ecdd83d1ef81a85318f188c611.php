<?php

/* TWneloBundle:Default:home.html.twig */
class __TwigTemplate_c059f4ecdd83d1ef81a85318f188c611 extends Twig_Template
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
        echo " Home ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <img class=\"pull-right\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/sample/slider/img1.jpg"), "html", null, true);
        echo "\" /> 

<section class=\"main-info\">
</br>
    <div class=\"container\">
        <div class=\"row-fluid\">
            <div class=\"span9\">
            <br/>
                <h4><b>neLO</b> offers its guests 60 of accommodation. Every detail related to comfort has been designed specifically to meet the most demanding needs and expectations. Rooms overlooking the city of Iasi, combines classic and modern with wood furniture and the latest technology.</h4>
            </div>
            <div class=\"span3\">
            <br/>
                <a class=\"btn btn-success btn-large pull-right\"  href=\" ";
        // line 18
        echo $this->env->getExtension('routing')->getPath("rooms");
        echo " \">Check Availability</a>
            </div>
        </div>
    </div>
</section>

<!--Services-->
<section id=\"services\">
    <div class=\"container\">
        <div class=\"center gap\">
            <h3>What We Offer</h3>
            <p class=\"lead\">Have a peek of what we offer for our valuble clients!</p>
        </div>

        <div class=\"row-fluid\">
            <div class=\"span4\">
                <div class=\"media\">
                    <div class=\"pull-left\">
                        <i class=\"icon-briefcase icon-medium\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Conference room</h4>
                        <p>Due to its location and beauty space for conference rooms, <b>neLO</b> can accommodate any type of event: corporate or private event, conference, trainings, teambuildings. The conference hall can accommodate about 200 participants, but can be used by a much smaller number of people.</p>
                    </div>
                </div>
            </div>            

            <div class=\"span4\">
                <div class=\"media\">
                    <div class=\"pull-left\">
                        <i class=\"icon-tint icon-medium\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Pool</h4>
                        <p>For relaxation, heated indoor pool awaits you daily from 09:00-24:00. Tuesdays and Thursdays, Your children can take swimming lessons after a program established, under the supervision of swimming instructor.</p>
                    </div>
                </div>
            </div>            

            <div class=\"span4\">
                <div class=\"media\">
                    <div class=\"pull-left\">
                        <i class=\"icon-star-empty icon-medium icon-rounded\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Artisan Design</h4>
                        <p>Hall decorations: seating arrangement, welcoming arrangement, guests table arrangement, floral arrangement.</p>
                        <p>Accessories: baskets for badges, cushions for rings, cottages but, fireworks, candles, entrance pillars, candle holder, red carpet entrance.</p> 
                    </div>
                </div>
            </div>
        </div>

        <div class=\"gap\"></div>

        <div class=\"row-fluid\">
            <div class=\"span4\">
                <div class=\"media\">
                    <div class=\"pull-left\">
                        <i class=\"icon-heart icon-medium\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Artisan Bakery</h4>
                        <p><b>neLO</b> offers a variety of pastries and confectionery, that will satisfy the most demanding tastes.

                        Create and organize any important event in your life is like directing a play, once the curtain is pulled there is not a second chance... everything has to be at its best, therefore Artisan Design and Artisan Bakery offers great moments.</p>
                    </div>
                </div>
            </div>            

            <div class=\"span4\">
                <div class=\"media\">
                    <div class=\"pull-left\">
                        <i class=\"icon-glass icon-medium\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Restaurant</h4>
                        <p>At <b>neLO</b>, preparation is more than a simple food, savour is a foray into the world of kitchens. The elegant restaurant offers a stylish ambience and sophistication of traditional Romanian and international cuisine.
                        From savory appetizers to refined desserts, our restaurant menu offers everything you want for a delicious meal in town.</p>
                    </div>
                </div>
            </div>            

            <div class=\"span4\">
                <div class=\"media\">
                    <div class=\"pull-left\">
                        <i class=\"icon-plus-sign icon-medium\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Other services</h4>
                        <p>We provide for our customers the following services: keeping valuable objects in the safety deposit box at the reception, waking up service, parking, travel information, weather information, public transport or train information, taxi orders, sending mail for our guests, message distribution, and many others</p>    
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/Services-->

<section id=\"recent-works\">
    <div class=\"container\">
        <div class=\"center\">
            <h3>Our Rooms</h3>
            <p class=\"lead\">Look at some of our rooms that we've prepared for our valuble clients!</p>
        </div>  
        <div class=\"gap\"></div>
        <ul class=\"gallery col-4\">
            <!--Item 1-->
            <li>
                <div class=\"preview\">
                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/portfolio/thumb/item1.jpg"), "html", null, true);
        echo "\" />
                    <div class=\"overlay\">
                    </div>
                  \t<div class=\"links\" align=\"center\">
                     </a><a href=\" ";
        // line 133
        echo $this->env->getExtension('routing')->getPath("rooms");
        echo " \"><i class=\"icon-link\"></i></a>                                
                    </div>
                </div>
                <div class=\"desc\">
                    <h5>Single apartment</h5>
                </div>               
            </li>
            <!--/Item 1--> 

            <!--Item 2-->
            <li>
                <div class=\"preview\">
                    <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/portfolio/thumb/item2.jpg"), "html", null, true);
        echo "\" />
                    <div class=\"overlay\">
                    </div>
                    <div class=\"links\" align=\"center\">
                     </a><a href=\" ";
        // line 149
        echo $this->env->getExtension('routing')->getPath("rooms");
        echo " \"><i class=\"icon-link\"></i></a>                                
                    </div>
                </div>
                <div class=\"desc\">
                    <h5>Double room</h5>                
            </li>
            <!--/Item 2-->

            <!--Item 3-->
            <li>
                <div class=\"preview\">
                    <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/portfolio/thumb/item3.jpg"), "html", null, true);
        echo "\" />
                    <div class=\"overlay\">
                    </div>
                    <div class=\"links\" align=\"center\">
                     </a><a href=\" ";
        // line 164
        echo $this->env->getExtension('routing')->getPath("rooms");
        echo " \"><i class=\"icon-link\"></i></a>                                
                    </div>
                </div>
                <div class=\"desc\">
                    <h5>Single room</h5>
                </div>                 
            </li>
            <!--/Item 3--> 

            <!--Item 4-->
            <li>
                <div class=\"preview\">
                    <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/portfolio/thumb/item4.jpg"), "html", null, true);
        echo "\" />
                    <div class=\"overlay\">
                    </div>
                    <div class=\"links\" align=\"center\">
                     </a><a href=\" ";
        // line 180
        echo $this->env->getExtension('routing')->getPath("rooms");
        echo " \"><i class=\"icon-link\"></i></a>                                
                    </div>
                </div>
                <div class=\"desc\">
                    <h5>Double apartment</h5>
                </div>                 
            </li>
            <!--/Item 4-->               

        </ul>
    </div>

</section>

";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 180,  235 => 176,  220 => 164,  213 => 160,  199 => 149,  192 => 145,  177 => 133,  170 => 129,  56 => 18,  41 => 6,  38 => 5,  35 => 4,  29 => 3,);
    }
}
