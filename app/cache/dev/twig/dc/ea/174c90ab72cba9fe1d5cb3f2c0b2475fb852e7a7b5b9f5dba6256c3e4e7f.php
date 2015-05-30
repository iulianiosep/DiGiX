<?php

/* DigixBundle:MyBox:MyBox.html.twig */
class __TwigTemplate_dcea174c90ab72cba9fe1d5cb3f2c0b2475fb852e7a7b5b9f5dba6256c3e4e7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts2' => array($this, 'block_javascripts2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">
  <link rel=\"icon\" href=\"../../favicon.ico\">

  <title>My Legacy Box</title>

  <!-- Bootstrap core CSS -->
  ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
  ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>

 
      <![endif]-->
    </head>

    <body>
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
              <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("digix_wall");
        echo "\">Tag them</a></li>
              <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("search_controller");
        echo "\">Search them</a></li>
              <li class=\"active\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("box_page");
        echo "\">My Box</a></li>
              <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("about_page");
        echo "\">About</a></li>
              <li><a href=\"contact.html\">Support</a></li>
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


      

      <div class=\"container\">

        <div class=\"row row-offcanvas row-offcanvas-right\">

          <div class=\"col-xs-12 col-sm-9\">
            <p class=\"pull-right visible-xs\">
              <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\">Sidebar</button>
            </p>

           

           <!--";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["picturesArray"]) ? $context["picturesArray"] : $this->getContext($context, "picturesArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 92
            echo "              <div class=\"jumbotron\">
                <p class=\"p-news\">Paragraf1
                  <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" width=\"300\" height=\"auto\"/>
                </p>
              </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "-->
          <div class=\"jumbotron\">
            ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["picturesArray"]) ? $context["picturesArray"] : $this->getContext($context, "picturesArray")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 100
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" width='500' height='auto'/>
              <p>";
            // line 101
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</p>
              <br><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "          </div>

          <div class=\"jumbotron\">
            ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videosArray"]) ? $context["videosArray"] : $this->getContext($context, "videosArray")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 108
            echo "              <video width='240' height='auto' controls>
                  <source src=\"";
            // line 109
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
              </video>
              <p>";
            // line 111
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</p>
              <br><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "          </div>
    </p>

           
     
   </div><!--/.col-xs-12.col-sm-9-->



   <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\">
    <div class=\"profile\">

   </div>

</div>

</div><!--/row-->

<hr>

<footer>
  <p>&copy; DiGiX Team 2015</p>
</footer>

</div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    ";
        // line 145
        $this->displayBlock('javascripts2', $context, $blocks);
        // line 153
        echo "
  </body>
  </html>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae50462_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme_1.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme.css_2.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme.min_3.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap_4.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap.css_5.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap.min_6.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_font-awesome_7.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_font-awesome.min_8.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_iconFont_9.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_jumbotron_10.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_mainCSS_11.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_modal_12.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_styles_13.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "ae50462"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462.css");
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "  ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "68c0127_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_bootstrap.min_1.js");
            // line 29
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie-emulation-modes-warning_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie10-viewport-bug-workaround_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-animate-css-rotate-scale_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-css-transform_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery.min_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_offcanvas_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_tab_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "68c0127"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "  ";
    }

    // line 145
    public function block_javascripts2($context, array $blocks = array())
    {
        // line 146
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "68c0127_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_bootstrap.min_1.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie-emulation-modes-warning_2.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie10-viewport-bug-workaround_3.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-animate-css-rotate-scale_4.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-css-transform_5.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery.min_6.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_offcanvas_7.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_tab_8.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "68c0127"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127.js");
            // line 147
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 152
        echo "  ";
    }

    public function getTemplateName()
    {
        return "DigixBundle:MyBox:MyBox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 152,  778 => 150,  774 => 149,  768 => 147,  761 => 150,  757 => 149,  751 => 147,  745 => 150,  741 => 149,  735 => 147,  729 => 150,  725 => 149,  719 => 147,  713 => 150,  709 => 149,  703 => 147,  697 => 150,  693 => 149,  687 => 147,  681 => 150,  677 => 149,  671 => 147,  665 => 150,  661 => 149,  655 => 147,  649 => 150,  645 => 149,  639 => 147,  634 => 146,  631 => 145,  627 => 31,  571 => 29,  566 => 28,  563 => 27,  559 => 23,  553 => 21,  549 => 20,  545 => 19,  541 => 18,  536 => 17,  529 => 21,  525 => 20,  521 => 19,  517 => 18,  512 => 17,  506 => 21,  502 => 20,  498 => 19,  494 => 18,  489 => 17,  483 => 21,  479 => 20,  475 => 19,  471 => 18,  466 => 17,  460 => 21,  456 => 20,  452 => 19,  448 => 18,  443 => 17,  437 => 21,  433 => 20,  429 => 19,  425 => 18,  420 => 17,  414 => 21,  410 => 20,  406 => 19,  402 => 18,  397 => 17,  391 => 21,  387 => 20,  383 => 19,  379 => 18,  374 => 17,  368 => 21,  364 => 20,  360 => 19,  356 => 18,  351 => 17,  345 => 21,  341 => 20,  337 => 19,  333 => 18,  328 => 17,  322 => 21,  318 => 20,  314 => 19,  310 => 18,  305 => 17,  299 => 21,  295 => 20,  291 => 19,  287 => 18,  282 => 17,  276 => 21,  272 => 20,  268 => 19,  264 => 18,  259 => 17,  253 => 21,  249 => 20,  245 => 19,  241 => 18,  236 => 17,  231 => 16,  228 => 15,  221 => 153,  219 => 145,  186 => 114,  177 => 111,  172 => 109,  169 => 108,  165 => 107,  160 => 104,  151 => 101,  146 => 100,  142 => 99,  138 => 97,  128 => 94,  124 => 92,  120 => 91,  84 => 58,  80 => 57,  76 => 56,  72 => 55,  47 => 32,  45 => 27,  40 => 24,  38 => 15,  22 => 1,);
    }
}
