<?php

/* DigixBundle:Wall:wall.html.twig */
class __TwigTemplate_23ae60c767bf21f5a4e0fc649ffef5768245cd3efd19f8f40474eb53ab8c443a extends Twig_Template
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
            <li class=\"active\"><a href=\"newsfeed.html\">Newsfeed</a></li>
              <li><a href=\"me.html\">My Wall</a></li>
              <li><a href=\"about.html\">About</a></li>
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


      <div id=\"openModal\" class=\"modalDialog\">
        <div>
          <a href=\"#close\" title=\"Close\" class=\"close\">X</a>
          <h3>Import photos from Facebook</h3>
          <p>Your photos</p>
          ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["picturesArray"]) ? $context["picturesArray"] : $this->getContext($context, "picturesArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 83
            echo "            <div class=\"containercls\">
              <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" width='240' height='auto'/>
              <input type=\"checkbox\" class=\"checkbox\"/> 
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </div>
      </div>
      

      <div class=\"container\">

        <div class=\"row row-offcanvas row-offcanvas-right\">

          <div class=\"col-xs-12 col-sm-9\">
            <p class=\"pull-right visible-xs\">
              <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\">Sidebar</button>
            </p>

           

           <!--";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["picturesArray"]) ? $context["picturesArray"] : $this->getContext($context, "picturesArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 104
            echo "              <div class=\"jumbotron\">
                <p class=\"p-news\">Paragraf1
                  <img src=\"";
            // line 106
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" width=\"300\" height=\"auto\"/>
                </p>
              </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "-->
           <div class=\"jumbotron\">
            <p class=\"p-news\">Welcome to DiGix! Use the upper buttons to import your photos! Have a tagging experience.
            </p>
          </div>
    </p>

           
     
   </div><!--/.col-xs-12.col-sm-9-->



   <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\">
    <h4 class=\"top10\">";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h4>
    <div class=\"profile\">

   </div>

   <div class=\"info-profile\">
     <ul class=\"fa-ul\">
      <!--<li><i class=\"fa-li fa fa-home\"></i>Calarasi</li>-->
      <li><i class=\"fa-li fa fa-birthday-cake\"></i>";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo "</li>
      <li><i class=\"fa-li fa fa-male\"></i>Male</li>
      <li><i class=\"fa-li fa fa-rss\"></i>";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["website"]) ? $context["website"] : $this->getContext($context, "website")), "html", null, true);
        echo "</li>
      <li><i class=\"fa-li fa fa-edit\"></i>Edit profile</li>
    </ul>
  </div>

</div>
<div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\">
  <div class=\"list-group\">
    <h4 class=\"top10\">Top</h4>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
    <a href=\"#\" class=\"list-group-item\">Link</a>
  </div>
</div><!--/.sidebar-offcanvas-->

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
        // line 170
        $this->displayBlock('javascripts2', $context, $blocks);
        // line 178
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

    // line 170
    public function block_javascripts2($context, array $blocks = array())
    {
        // line 171
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "68c0127_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_bootstrap.min_1.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie-emulation-modes-warning_2.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie10-viewport-bug-workaround_3.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-animate-css-rotate-scale_4.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-css-transform_5.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery.min_6.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_offcanvas_7.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_tab_8.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "68c0127"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127.js");
            // line 172
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 177
        echo "  ";
    }

    public function getTemplateName()
    {
        return "DigixBundle:Wall:wall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 177,  782 => 175,  778 => 174,  772 => 172,  765 => 175,  761 => 174,  755 => 172,  749 => 175,  745 => 174,  739 => 172,  733 => 175,  729 => 174,  723 => 172,  717 => 175,  713 => 174,  707 => 172,  701 => 175,  697 => 174,  691 => 172,  685 => 175,  681 => 174,  675 => 172,  669 => 175,  665 => 174,  659 => 172,  653 => 175,  649 => 174,  643 => 172,  638 => 171,  635 => 170,  631 => 31,  575 => 29,  570 => 28,  567 => 27,  563 => 23,  557 => 21,  553 => 20,  549 => 19,  545 => 18,  540 => 17,  533 => 21,  529 => 20,  525 => 19,  521 => 18,  516 => 17,  510 => 21,  506 => 20,  502 => 19,  498 => 18,  493 => 17,  487 => 21,  483 => 20,  479 => 19,  475 => 18,  470 => 17,  464 => 21,  460 => 20,  456 => 19,  452 => 18,  447 => 17,  441 => 21,  437 => 20,  433 => 19,  429 => 18,  424 => 17,  418 => 21,  414 => 20,  410 => 19,  406 => 18,  401 => 17,  395 => 21,  391 => 20,  387 => 19,  383 => 18,  378 => 17,  372 => 21,  368 => 20,  364 => 19,  360 => 18,  355 => 17,  349 => 21,  345 => 20,  341 => 19,  337 => 18,  332 => 17,  326 => 21,  322 => 20,  318 => 19,  314 => 18,  309 => 17,  303 => 21,  299 => 20,  295 => 19,  291 => 18,  286 => 17,  280 => 21,  276 => 20,  272 => 19,  268 => 18,  263 => 17,  257 => 21,  253 => 20,  249 => 19,  245 => 18,  240 => 17,  235 => 16,  232 => 15,  225 => 178,  223 => 170,  183 => 133,  178 => 131,  167 => 123,  151 => 109,  141 => 106,  137 => 104,  133 => 103,  116 => 88,  106 => 84,  103 => 83,  99 => 82,  47 => 32,  45 => 27,  40 => 24,  38 => 15,  22 => 1,);
    }
}
