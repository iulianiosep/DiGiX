<?php

/* ::base.html.twig */
class __TwigTemplate_193f6348d2c1316ce3a98197c5f39d6674d4a5f3b605f87759731d0bdd60ced5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
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
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"../../favicon.ico\">



        <!-- Bootstrap core CSS -->
        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

        


    </head>
    <body>
        <div id=\"header\">
            ";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 76
        echo "        </div>
        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "
        ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "|My Legacy Box";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae50462_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme_1.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme.css_2.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme.min_3.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap_4.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap.css_5.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap.min_6.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_font-awesome_7.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_font-awesome.min_8.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_iconFont_9.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_jumbotron_10.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_mainCSS_11.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_modal_12.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
            // asset "ae50462_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_styles_13.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "ae50462"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "        ";
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        echo "      
            <nav class=\"navbar navbar-fixed-top navbar-inverse\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">DiGix</a>
                    </div>
                    <div id=\"navbar\" class=\"collapse navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("digix_wall");
        echo "\">Tag them</a></li>
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("search_controller");
        echo "\">Search them</a></li>
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("box_page");
        echo "\">My Box</a></li>
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("about_page");
        echo "\">About</a></li>
                            <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("contact_page");
        echo "\">Support</a></li>
                        </ul>

                        <div class=\"social\">
                            <a class=\"facebook-hover social-slide\" href=\"#openModal\"></a>
                            <a class=\"twitter-hover social-slide\"  href=\"#\"></a>
                            <a class=\"google-hover social-slide\"  href=\"#\"></a>
                            <a class=\"instagram-hover social-slide\"  href=\"#\"></a>
                            <a class=\"tumblr-hover social-slide\"  href=\"#\"></a>
                        </div>



                    </div><!-- /.nav-collapse -->
                </div><!-- /.container -->

            </nav><!-- /.navbar -->
            ";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        echo "   ";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "68c0127_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_bootstrap.min_1.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
            // asset "68c0127_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie-emulation-modes-warning_2.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
            // asset "68c0127_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie10-viewport-bug-workaround_3.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
            // asset "68c0127_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-animate-css-rotate-scale_4.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
            // asset "68c0127_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-css-transform_5.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
            // asset "68c0127_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery.min_6.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
            // asset "68c0127_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_offcanvas_7.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
            // asset "68c0127_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_tab_8.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
        } else {
            // asset "68c0127"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127.js");
            // line 81
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
                <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
                <script src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>-->
            ";
        }
        unset($context["asset_url"]);
        // line 91
        echo "        ";
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
        return array (  713 => 91,  703 => 85,  699 => 84,  694 => 82,  689 => 81,  678 => 85,  674 => 84,  669 => 82,  664 => 81,  654 => 85,  650 => 84,  645 => 82,  640 => 81,  630 => 85,  626 => 84,  621 => 82,  616 => 81,  606 => 85,  602 => 84,  597 => 82,  592 => 81,  582 => 85,  578 => 84,  573 => 82,  568 => 81,  558 => 85,  554 => 84,  549 => 82,  544 => 81,  534 => 85,  530 => 84,  525 => 82,  520 => 81,  510 => 85,  506 => 84,  501 => 82,  496 => 81,  491 => 80,  488 => 79,  482 => 77,  460 => 58,  456 => 57,  452 => 56,  448 => 55,  444 => 54,  426 => 40,  422 => 29,  416 => 27,  412 => 26,  408 => 25,  404 => 24,  399 => 23,  392 => 27,  388 => 26,  384 => 25,  380 => 24,  375 => 23,  369 => 27,  365 => 26,  361 => 25,  357 => 24,  352 => 23,  346 => 27,  342 => 26,  338 => 25,  334 => 24,  329 => 23,  323 => 27,  319 => 26,  315 => 25,  311 => 24,  306 => 23,  300 => 27,  296 => 26,  292 => 25,  288 => 24,  283 => 23,  277 => 27,  273 => 26,  269 => 25,  265 => 24,  260 => 23,  254 => 27,  250 => 26,  246 => 25,  242 => 24,  237 => 23,  231 => 27,  227 => 26,  223 => 25,  219 => 24,  214 => 23,  208 => 27,  204 => 26,  200 => 25,  196 => 24,  191 => 23,  185 => 27,  181 => 26,  177 => 25,  173 => 24,  168 => 23,  162 => 27,  158 => 26,  154 => 25,  150 => 24,  145 => 23,  139 => 27,  135 => 26,  131 => 25,  127 => 24,  122 => 23,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  99 => 23,  94 => 22,  91 => 21,  85 => 5,  78 => 92,  76 => 79,  73 => 78,  71 => 77,  68 => 76,  66 => 40,  54 => 30,  52 => 21,  35 => 7,  30 => 5,  24 => 1,);
    }
}
