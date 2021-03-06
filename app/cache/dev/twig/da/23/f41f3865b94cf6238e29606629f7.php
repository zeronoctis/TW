<?php

/* TWneloBundle:About:about.html.twig */
class __TwigTemplate_da23f41f3865b94cf6238e29606629f7 extends Twig_Template
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
        echo " About Us ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t

    <section id=\"about-us\" class=\"container main\">
    </br>
        <div class=\"row-fluid\">
            <div class=\"span6\">
                <h2>Brief history</h2>
                <p>Not many people know the history of the place where today is the stylish <b>neLO</b>. Perhaps among those born more than, will find few to remember the '70s when rising <b>neLO</b> - under the protection of ONT (National Tourist Office) - Soon became the main point of attraction of Iasi, willing to spend a wonderful Sunday Hill Repedea, fresh air, a good cold beer only a breathtaking view of Iasi. And all through they will find a few who can bear witness to good, clean water, a hundred years earlier, Professor Alexander invited him Iasi Şendrea to presume to pick this resort \"Swiss”.</p>
            </div>
            <div class=\"span6\">
              \t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/sample/hotel.jpg"), "html", null, true);
        echo "\" alt=\"Example\" width=\"300\" height=\"225\" />
            </div>
        </div>

        <hr>

        <!-- Meet the team -->
        <h1 class=\"center\">Meet the Team</h1>

        <hr>

        <div class=\"row-fluid\">
            <div class=\"span3\">
                <div class=\"box\">
                    <p>
           \t\t\t\t <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/sample/team1.jpg"), "html", null, true);
        echo "\" alt=\"Example\" width=\"300\" height=\"225\" />
                    </p>
                    <h5>Leonard M. Spurlock</h5>
                    <p>He is one of the very best hotel manager that we ever had and it's impossible to change his position.</p>
                    <a class=\"btn btn-social btn-facebook\" target=\"_blank\" href=\"http://facebook.com\"><i class=\"icon-facebook\"></i></a> <a class=\"btn btn-social btn-google-plus\" target=\"_blank\" href=\"http://googleplus.com\"><i class=\"icon-google-plus\"></i></a> <a class=\"btn btn-social btn-twitter\" target=\"_blank\" href=\"http://twitter.com\"><i class=\"icon-twitter\"></i></a> <a class=\"btn btn-social btn-linkedin\" target=\"_blank\" href=\"http://linkedin.com\"><i class=\"icon-linkedin\"></i></a>
                </div>
            </div>

            <div class=\"span3\">
                <div class=\"box\">
                    <p>
                    \t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/sample/team2.jpg"), "html", null, true);
        echo "\" alt=\"Example\" width=\"300\" height=\"225\" />
                    </p>
                    <h5>Mary J. Robbins</h5>
                    <p>She is one of the very best hotel frontdesk that we ever had and it's impossible to change her position.</p>
                    <a class=\"btn btn-social btn-facebook\" target=\"_blank\" href=\"http://facebook.com\"><i class=\"icon-facebook\"></i></a> <a class=\"btn btn-social btn-google-plus\" target=\"_blank\" href=\"http://googleplus.com\"><i class=\"icon-google-plus\"></i></a> <a class=\"btn btn-social btn-twitter\" target=\"_blank\" href=\"http://twitter.com\"><i class=\"icon-twitter\"></i></a> <a class=\"btn btn-social btn-linkedin\" target=\"_blank\" href=\"http://linkedin.com\"><i class=\"icon-linkedin\"></i></a>
                </div>
            </div>

            <div class=\"span3\">
                <div class=\"box\">
                    <p>
                    \t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/sample/team4.jpg"), "html", null, true);
        echo "\" alt=\"Example\" width=\"300\" height=\"225\" />
                    </p>
                    <h5>Thomas M. Morgan</h5>
                    <p>He is one of the very best hotel waiter that we ever had and it's impossible to change his position.</p>
                    <a class=\"btn btn-social btn-facebook\" target=\"_blank\" href=\"http://facebook.com\"><i class=\"icon-facebook\"></i></a> <a class=\"btn btn-social btn-google-plus\" target=\"_blank\" href=\"http://googleplus.com\"><i class=\"icon-google-plus\"></i></a> <a class=\"btn btn-social btn-twitter\" target=\"_blank\" href=\"http://twitter.com\"><i class=\"icon-twitter\"></i></a> <a class=\"btn btn-social btn-linkedin\" target=\"_blank\" href=\"http://linkedin.com\"><i class=\"icon-linkedin\"></i></a>
                </div>
            </div>

            <div class=\"span3\">
                <div class=\"box\">
                    <p>
                    \t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/images/sample/team3.jpg"), "html", null, true);
        echo "\" alt=\"Example\" width=\"300\" height=\"225\" />
                    </p>
                    <h5>Agusta E. Hightower</h5>
                    <p>She is one of the very best hotel housekeeper that we ever had and it's impossible to change her position.</p>
                    <a class=\"btn btn-social btn-facebook\" target=\"_blank\" href=\"http://facebook.com\"><i class=\"icon-facebook\"></i></a> <a class=\"btn btn-social btn-google-plus\" target=\"_blank\" href=\"http://googleplus.com\"><i class=\"icon-google-plus\"></i></a> <a class=\"btn btn-social btn-twitter\" target=\"_blank\" href=\"http://twitter.com\"><i class=\"icon-twitter\"></i></a> <a class=\"btn btn-social btn-linkedin\" target=\"_blank\" href=\"http://linkedin.com\"><i class=\"icon-linkedin\"></i></a>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <p></p>
        <hr>

        <div class=\"row-fluid\">
            <div class=\"span6\">
                <h3>Why Choose Us?</h3>
                <p>Set in an oasis of greenery, surrounded by a wonderful natural environment, quiet and relaxing, <b>neLO</b> rises above the city, the most beautiful Colin Iasi, offering a panoramic view of the capital of Moldova. <b>neLo</b> is the perfect choice whatever the reason you are in the capital of Moldova: traveling on business, or corporate training, a team building or a meeting with former fellow students. If you want to plan an escape away from the noise of urban city, a relaxing dinner with friends, or a memorable event in your life, <b>neLO</b> welcomes you every time with quality service. Thank you for visiting our website and welcome you to visit us!</p>
            </div>
            <div class=\"span6\">
                <h3>Our Services</h3>
                <div class=\"accordion\" id=\"accordion2\">
                    <div class=\"accordion-group\">
                      <div class=\"accordion-heading\">
                        <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseOne\">
                          Conference room
                      </a>
                  </div>
                  <div id=\"collapseOne\" class=\"accordion-body collapse\">
                    <div class=\"accordion-inner\">
                      Due to its location and beauty space for conference rooms, <b>neLO</b> can accommodate any type of event: corporate or private event, conference, trainings, teambuildings.
                  </div>
              </div>
          </div>
          <div class=\"accordion-group\">
              <div class=\"accordion-heading\">
                <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\">
                  Artisan Bakery
              </a>
          </div>
          <div id=\"collapseTwo\" class=\"accordion-body collapse\">
            <div class=\"accordion-inner\">
              <b>neLO</b> offers a variety of pastries and confectionery, that will satisfy the most demanding tastes. Create and organize any important event in your life is like directing a play, once the curtain is pulled there is not a second chance... everything has to be at its best, therefore Artisan Design and Artisan Bakery offers great moments.
          </div>
      </div>
  </div>
  <div class=\"accordion-group\">
      <div class=\"accordion-heading\">
        <a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseThree\">
          Restaurant
      </a>
  </div>
  <div id=\"collapseThree\" class=\"accordion-body collapse\">
    <div class=\"accordion-inner\">
      At <b>neLO</b>, preparation is more than a simple food, savour is a foray into the world of kitchens. The elegant restaurant offers a stylish ambience and sophistication of traditional Romanian and international cuisine. From savory appetizers to desserts and refined, our restaurant menu offers everything you want for a delicious meal in town.
  </div>
</div>
</div>
</div>
</div>
</div>
</section>


";
    }

    public function getTemplateName()
    {
        return "TWneloBundle:About:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 64,  96 => 53,  82 => 42,  68 => 31,  50 => 16,  38 => 6,  35 => 5,  29 => 3,);
    }
}
