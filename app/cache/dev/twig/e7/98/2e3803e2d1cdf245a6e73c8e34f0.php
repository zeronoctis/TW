<?php

/* ::base.html.twig */
class __TwigTemplate_e7982e3803e2d1cdf245a6e73c8e34f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "       <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
      
    </head>

    <body>
     
        <!--Header-->
        <header class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a id=\"logo\" class=\"pull-left\" href=\"index.html\"></a>
                    <div class=\"nav-collapse collapse pull-right\">
                        <ul class=\"nav\">
                            <li><a href=\" ";
        // line 36
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo " \">Home</a></li>
                            <li><a href=\" ";
        // line 37
        echo $this->env->getExtension('routing')->getPath("rooms");
        echo " \">Rooms</a></li>
                            <li><a href=\" ";
        // line 38
        echo $this->env->getExtension('routing')->getPath("services");
        echo " \">Services</a></li>
                            <li><a href=\" ";
        // line 39
        echo $this->env->getExtension('routing')->getPath("about_us");
        echo " \">About Us</a></li>
                            <li><a href=\" ";
        // line 40
        echo $this->env->getExtension('routing')->getPath("location");
        echo " \">Our Location</a></li>
                            <li class=\"login\"><a data-toggle=\"modal\" href=\" ";
        // line 41
        echo $this->env->getExtension('routing')->getPath("login");
        echo " \"><i class=\"icon-lock\"></i></a>
                            </li>
                        </ul>        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>
        <!-- /header -->


        <div id=\"content\">
            ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "        </div>

        <!--Bottom-->
        <section id=\"bottom\" class=\"main\">
            <!--Container-->
            <div class=\"container\">

                <!--row-fluids-->
                <div class=\"row-fluid\">

                    <!--Contact Form-->
                    <div class=\"span3\">
                        <h4>ADDRESS</h4>
                        <ul class=\"unstyled address\">
                            <li>
                                <i class=\"icon-home\"></i><strong>Address:</strong> Strada Gen. Berthelot 16, Iași<br>
                            </li>
                            <li>
                                <i class=\"icon-envelope\"></i>
                                <strong>Email: </strong> support@neLO.com
                            </li>
                            <li>
                                <i class=\"icon-globe\"></i>
                                <strong>Website:</strong> www.neLO.com
                            </li>
                            <li>
                                <i class=\"icon-phone\"></i>
                                <strong>Toll Free:</strong> 631-409-3105
                            </li>
                        </ul>
                    </div>
                    <!--End Contact Form-->

                    <!--Important Links-->
                    <div id=\"tweets\" class=\"span3\">
                        <h4>OUR COMPANY</h4>
                        <div>
                            <ul class=\"arrow\">
                                <li><a href=\" ";
        // line 97
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo " \">Home</a></li>
                                <li><a href=\" ";
        // line 98
        echo $this->env->getExtension('routing')->getPath("rooms");
        echo " \">Rooms</a></li>
                                <li><a href=\" ";
        // line 99
        echo $this->env->getExtension('routing')->getPath("services");
        echo " \">Services</a></li>
                                <li><a href=\" ";
        // line 100
        echo $this->env->getExtension('routing')->getPath("about_us");
        echo " \">About Us</a></li>
                                <li><a href=\" ";
        // line 101
        echo $this->env->getExtension('routing')->getPath("location");
        echo " \">Our Location</a></li>
                            </ul>
                        </div>  
                    </div>
                    <!--Important Links-->
                  
                    <!--Important Links-->
                    <div id=\"tweets\" class=\"span3\">
                        <h4>USEFULL</h4>
                        <div>
                            <ul class=\"arrow\">
                                <li><a href=\" ";
        // line 112
        echo $this->env->getExtension('routing')->getPath("register");
        echo " \">Register</a></li>
                                <li><a href=\" ";
        // line 113
        echo $this->env->getExtension('routing')->getPath("FAQ");
        echo " \">FAQ</a></li>
                                <li><a href=\" ";
        // line 114
        echo $this->env->getExtension('routing')->getPath("termsofuse");
        echo " \">Terms Of Use</a></li>
                                <li><a href=\" ";
        // line 115
        echo $this->env->getExtension('routing')->getPath("policy");
        echo " \">Privacy Policy</a></li>
                                <li><a href=\" ";
        // line 116
        echo $this->env->getExtension('routing')->getPath("generalinfo");
        echo " \" target =\"_blank\" >General Information</a></li>
                                <li><a href=\" ";
        // line 117
        echo $this->env->getExtension('routing')->getPath("logout");
        echo " \">Log Out</li>
                            </ul>
                        </div>  
                    </div>
                    <!--Important Links-->

                </div>

            </div>
            <!--/row-fluid-->
        </div>
        <!--/container-->

        <!--/bottom-->

    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " Welcome to neLo ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c28bae6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_bootstrap-responsive.min_1.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_bootstrap.min_2.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_docs_3.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_font-awesome.min_4.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_main_5.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_main_6.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_mixins_7.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_mixins_8.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_prettify_9.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_sl-slide_10.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_variables_11.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
            // asset "c28bae6_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6_part_1_variables_12.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
        } else {
            // asset "c28bae6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c28bae6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c28bae6.css");
            // line 11
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/bootstrap-responsive.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/font-awesome.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/sl-slide.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
                <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        ";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        echo " 
            ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/js/vendor/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/twnelo/js/main.js"), "html", null, true);
        echo "\"></script>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 57,  543 => 56,  538 => 55,  535 => 54,  528 => 52,  524 => 17,  518 => 15,  514 => 14,  510 => 13,  506 => 12,  501 => 11,  494 => 15,  490 => 14,  486 => 13,  482 => 12,  477 => 11,  471 => 15,  467 => 14,  463 => 13,  459 => 12,  454 => 11,  448 => 15,  444 => 14,  440 => 13,  436 => 12,  431 => 11,  425 => 15,  421 => 14,  417 => 13,  413 => 12,  408 => 11,  402 => 15,  398 => 14,  394 => 13,  390 => 12,  385 => 11,  379 => 15,  375 => 14,  371 => 13,  367 => 12,  362 => 11,  356 => 15,  352 => 14,  348 => 13,  344 => 12,  339 => 11,  333 => 15,  329 => 14,  325 => 13,  321 => 12,  316 => 11,  310 => 15,  306 => 14,  302 => 13,  298 => 12,  293 => 11,  287 => 15,  283 => 14,  279 => 13,  275 => 12,  270 => 11,  264 => 15,  260 => 14,  256 => 13,  252 => 12,  247 => 11,  241 => 15,  237 => 14,  233 => 13,  229 => 12,  224 => 11,  219 => 10,  216 => 9,  210 => 7,  189 => 117,  185 => 116,  181 => 115,  173 => 113,  169 => 112,  155 => 101,  151 => 100,  147 => 99,  143 => 98,  139 => 97,  99 => 59,  96 => 54,  94 => 52,  80 => 41,  76 => 40,  72 => 39,  68 => 38,  64 => 37,  60 => 36,  36 => 9,  31 => 7,  23 => 1,  242 => 181,  235 => 177,  220 => 165,  213 => 161,  199 => 150,  192 => 146,  177 => 114,  170 => 130,  56 => 19,  41 => 7,  38 => 18,  35 => 5,  29 => 3,);
    }
}
