<?php

/* TWneloBundle:Services:services.html.twig */
class __TwigTemplate_78807359c564a6e1101f31b5dbb3a09d extends Twig_Template
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
        echo " Services ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t
    
    <section class=\"services\">
    </br>
        <div class=\"container\">
            <div class=\"row-fluid\">
                <div class=\"span4\">
                    <div class=\"center\">
                        <i style=\"font-size: 48px\" class=\"icon-briefcase icon-large\"></i>
                        <p> </p>
                        <h4>Conference room</h4>
                        <p>Due to its location and beauty space for conference rooms, neLO can accommodate any type of event: corporate or private event, conference, trainings, teambuildings. The conference hall can accommodate about 200 participants, but can be used by a much smaller number of people.</p>
                    </div>
                </div>

                <div class=\"span4\">
                    <div class=\"center\">
                        <i style=\"font-size: 48px\" class=\"icon-tint icon-large\"></i>
                        <p> </p>
                        <h4>Pool</h4>
                        <p>For relaxation, heated indoor pool awaits you daily from 09:00-24:00. Tuesdays and Thursdays, Your children can take swimming lessons after a program established, under the supervision of swimming instructor.</p>
                    </div>
                </div>

                <div class=\"span4\">
                    <div class=\"center\">
                        <i style=\"font-size: 48px\" class=\"icon-star-empty icon-large\"></i>
                        <p> </p>
                        <h4>Artisan Design</h4>
                        <p>Hall decorations: seating arrangement, welcoming arrangement, guests table arrangement, floral arrangement.
                        Accessories: baskets for badges, cushions for rings, cottages but, fireworks, candles, entrance pillars, candle holder, red carpet entrance.</p>
                    </div>
                </div>

            </div>

            <hr>

            <div class=\"row-fluid\">
                <div class=\"span4\">
                    <div class=\"center\">
                        <i style=\"font-size: 48px\" class=\"icon-heart icon-large\"></i>
                        <p> </p>
                        <h4>Artisan Bakery</h4>
                        <p>neLO offers a variety of pastries and confectionery, that will satisfy the most demanding tastes. Create and organize any important event in your life is like directing a play, once the curtain is pulled there is not a second chance... everything has to be at its best, therefore Artisan Design and Artisan Bakery offers great moments.</p>
                    </div>
                </div>

                <div class=\"span4\">
                    <div class=\"center\">
                        <i style=\"font-size: 48px\" class=\"icon-glass icon-large\"></i>
                        <p> </p>
                        <h4>Restaurant</h4>
                        <p>At neLO, preparation is more than a simple food, savour is a foray into the world of kitchens. The elegant restaurant offers a stylish ambience and sophistication of traditional Romanian and international cuisine. From savory appetizers to refined desserts, our restaurant menu offers everything you want for a delicious meal in town.</p>
                    </div>
                </div>

                <div class=\"span4\">
                    <div class=\"center\">
                        <i style=\"font-size: 48px\" class=\"icon-plus-sign icon-large\"></i>
                        <p> </p>
                        <h4>Other services</h4>
                        <p>We provide for our customers the following services: keeping valuable objects in the safety deposit box at the reception, waking up service, parking, travel information, weather information, public transport or train information, taxi orders, sending mail for our guests, message distribution, and many others</p>
                    </div>
                </div>

            </div>

            <hr>

            <div class=\"center\">
                <a class=\"btn btn-primary btn-large\" href=\" ";
        // line 78
        echo $this->env->getExtension('routing')->getPath("rooms");
        echo "\">Book a room !</a>
            </div>
            <p>&nbsp;</p>

        </div>
    </section>


";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:Services:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 78,  38 => 6,  35 => 5,  29 => 3,);
    }
}
