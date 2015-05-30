<?php

/* DigixBundle:HomePage:index.html.twig */
class __TwigTemplate_88bfbfde3d9de99b4f4ec870283f66e4a02cd0289e892d7957e38bec139b324c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascriptsend' => array($this, 'block_javascriptsend'),
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

  <title>DiGix</title>

 ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
  <!-- Custom javascript file for this template -->
  ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo " 
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
              <li class=\"active\"><a href=\"index.html\">Home</a></li>
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
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 75
            echo "            <div class=\"containercls\">
              <img src=\"http://www.autocraze.com.au/wp-content/uploads/2014/11/Chevrolet-Camaro-4.jpg\" width='100' height='auto'/>
              <input type=\"checkbox\" class=\"checkbox\"/> 
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </div>
      </div>

      <div class=\"container\">

        <div class=\"row row-offcanvas row-offcanvas-right\">

    
            <p class=\"pull-right visible-xs\">
              <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\">Sidebar</button>
            </p>


            <div id=\"frontpage\">
             
                  


          <ul id=\"tablist\">
<li><a href=\"#\" class=\"current\" onClick=\"return expandcontent('sc1', this)\">Login</a></li>
<li><a href=\"#\" onClick=\"return expandcontent('sc2', this)\" theme=\"#EAEAFF\">Register</a></li>
</ul>

<DIV id=\"tabcontentcontainer\">

<div id=\"sc1\" class=\"tabcontent\">
<section class=\"main\">
        <form class=\"form-2\" action=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("digix_loginCheck");
        echo "\" method=\"post\">
      
          <p class=\"float\">
          <br>
            <label for=\"login\"><i class=\"fa fa-user\"></i> Username</label>
            <input type=\"text\" name=\"login\" placeholder=\"Username or email\">
          </p>
          <p class=\"float\">
            <label for=\"password\"><i class=\"fa fa-key\"></i> Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"showpassword\">
          </p>
          <p class=\"clearfix\">   
            <input class=\"buton-login\" type=\"submit\" name=\"submit\" value=\"Log in\">
            <br></br>
            <!--<a href=\"#\"><img src=\"img/facebook-login.png\"/></a>-->
            <!--<a href=\"#\"><img src=\"img/twitter-login.png\"/></a>-->
            <a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("default_controller");
        echo "\">
              ";
        // line 124
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5db3db5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5db3db5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/5db3db5_facebook-login_1.png");
            // line 125
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/images/facebook-login.png"), "html", null, true);
            echo "\"/>
              ";
        } else {
            // asset "5db3db5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5db3db5") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/5db3db5.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/images/facebook-login.png"), "html", null, true);
            echo "\"/>
              ";
        }
        unset($context["asset_url"]);
        // line 127
        echo "            </a>
            <a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("google_login_controller");
        echo "\">
              ";
        // line 129
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e1de3aa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1de3aa_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e1de3aa_twitter-login_1.png");
            // line 130
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/images/google-login.png"), "html", null, true);
            echo "\"/>
              ";
        } else {
            // asset "e1de3aa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1de3aa") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e1de3aa.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/images/google-login.png"), "html", null, true);
            echo "\"/>
              ";
        }
        unset($context["asset_url"]);
        // line 132
        echo "            </a>
          </p>
        </form>​​
      </section>
</div>

<div id=\"sc2\" class=\"tabcontent\">
<section class=\"main\">
        <form action=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("account_reg_check");
        echo "\" method=\"post\">
      
          <p class=\"float\">
          <br>
            <label for=\"fname\"><i class=\"fa fa-user\"></i> First Name</label>
            <input type=\"text\" name=\"fname\" placeholder=\"First Name\">
          </p>
          <p class=\"float\">
            <label for=\"lname\"><i class=\"fa fa-user\"></i> Last Name</label>
            <input type=\"text\" name=\"lname\" placeholder=\"Last Name\" class=\"showpassword\">
          </p>
          <p class=\"float\">
            <label for=\"e-mail\"><i class=\"fa fa-envelope\"></i> E-mail</label>
            <input type=\"text\" name=\"email\" placeholder=\"E-mail\" class=\"showpassword\">
          </p>
          <p class=\"float\">
            <label for=\"website\"><i class=\"fa fa-user\"></i>Website</label>
            <input type=\"url\" name=\"website\" placeholder=\"Website\" class=\"showpassword\">
          </p>
          <p class=\"float\">
            <label for=\"age\"><i class=\"fa fa-user\"></i>Age</label>
            <input type=\"number\" name=\"age\" placeholder=\"0\" class=\"showpassword\">
          </p>
          <p class=\"float\">
            <label for=\"occupation\"><i class=\"fa fa-user\"></i>Occupation</label>
            <input type=\"text\" name=\"occupation\" placeholder=\"Occupation\" class=\"showpassword\">
          </p>
          
          <p class=\"float\">
            <label for=\"password\"><i class=\"fa fa-key\"></i> Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"showpassword\">
          </p>
          <p class=\"clearfix\">   
            <input class=\"buton-login\" type=\"submit\" name=\"submit\" value=\"Register\">
            <br></br>
          </p>
        </form>​​
      </section>
</div>


</div>


</DIV>
         




     
  

  

</div><!--/row-->

<hr>

<footer>
  <p>&copy; DiGiX Team 2015</p>
</footer>

</div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
    <!--<script src=\"js/\"></script>-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src=\"js/\"></script>-->

    <!--<script src=\"js/\"></script>-->

    ";
        // line 217
        $this->displayBlock('javascriptsend', $context, $blocks);
        // line 224
        echo "  </body>
  </html>
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae50462_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme.css_2.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme.min_3.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap_4.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap.css_5.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap.min_6.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_font-awesome_7.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_font-awesome.min_8.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_iconFont_9.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_jumbotron_10.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_mainCSS_11.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_modal_12.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_styles_13.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "ae50462"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/bootstrap.min.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/styles.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/font-awesome.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
        <link rel=\"stylesheet\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/mainCSS.css"), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "  ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "68c0127_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_bootstrap.min_1.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie-emulation-modes-warning_2.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie10-viewport-bug-workaround_3.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-animate-css-rotate-scale_4.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-css-transform_5.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery.min_6.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_offcanvas_7.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_tab_8.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "68c0127"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127.js");
            // line 27
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "  ";
    }

    // line 217
    public function block_javascriptsend($context, array $blocks = array())
    {
        // line 218
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "68c0127_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_bootstrap.min_1.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie-emulation-modes-warning_2.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie10-viewport-bug-workaround_3.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-animate-css-rotate-scale_4.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-css-transform_5.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery.min_6.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_offcanvas_7.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_tab_8.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "68c0127"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127.js");
            // line 219
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 223
        echo "  ";
    }

    public function getTemplateName()
    {
        return "DigixBundle:HomePage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  888 => 223,  882 => 221,  878 => 220,  873 => 219,  866 => 221,  862 => 220,  857 => 219,  851 => 221,  847 => 220,  842 => 219,  836 => 221,  832 => 220,  827 => 219,  821 => 221,  817 => 220,  812 => 219,  806 => 221,  802 => 220,  797 => 219,  791 => 221,  787 => 220,  782 => 219,  776 => 221,  772 => 220,  767 => 219,  761 => 221,  757 => 220,  752 => 219,  747 => 218,  744 => 217,  740 => 30,  734 => 28,  729 => 27,  722 => 28,  717 => 27,  711 => 28,  706 => 27,  700 => 28,  695 => 27,  689 => 28,  684 => 27,  678 => 28,  673 => 27,  667 => 28,  662 => 27,  656 => 28,  651 => 27,  645 => 28,  640 => 27,  635 => 26,  632 => 25,  628 => 22,  622 => 20,  618 => 19,  614 => 18,  610 => 17,  605 => 16,  598 => 20,  594 => 19,  590 => 18,  586 => 17,  581 => 16,  575 => 20,  571 => 19,  567 => 18,  563 => 17,  558 => 16,  552 => 20,  548 => 19,  544 => 18,  540 => 17,  535 => 16,  529 => 20,  525 => 19,  521 => 18,  517 => 17,  512 => 16,  506 => 20,  502 => 19,  498 => 18,  494 => 17,  489 => 16,  483 => 20,  479 => 19,  475 => 18,  471 => 17,  466 => 16,  460 => 20,  456 => 19,  452 => 18,  448 => 17,  443 => 16,  437 => 20,  433 => 19,  429 => 18,  425 => 17,  420 => 16,  414 => 20,  410 => 19,  406 => 18,  402 => 17,  397 => 16,  391 => 20,  387 => 19,  383 => 18,  379 => 17,  374 => 16,  368 => 20,  364 => 19,  360 => 18,  356 => 17,  351 => 16,  345 => 20,  341 => 19,  337 => 18,  333 => 17,  328 => 16,  322 => 20,  318 => 19,  314 => 18,  310 => 17,  305 => 16,  300 => 15,  297 => 14,  291 => 224,  289 => 217,  209 => 140,  199 => 132,  185 => 130,  181 => 129,  177 => 128,  174 => 127,  160 => 125,  156 => 124,  152 => 123,  133 => 107,  104 => 80,  94 => 75,  90 => 74,  45 => 31,  43 => 25,  39 => 23,  37 => 14,  22 => 1,);
    }
}
