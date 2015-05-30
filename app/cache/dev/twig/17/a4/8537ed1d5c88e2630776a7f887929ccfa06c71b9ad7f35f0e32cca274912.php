<?php

/* DigixBundle:HomePage:index.html.twig */
class __TwigTemplate_17a48537ed1d5c88e2630776a7f887929ccfa06c71b9ad7f35f0e32cca274912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "            <div class=\"containercls\">
              <img src=\"http://www.autocraze.com.au/wp-content/uploads/2014/11/Chevrolet-Camaro-4.jpg\" width='100' height='auto'/>
              <input type=\"checkbox\" class=\"checkbox\"/> 
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        // line 99
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
        // line 115
        echo $this->env->getExtension('routing')->getPath("facebook_login_controller");
        echo "\">
              ";
        // line 116
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5db3db5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5db3db5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/5db3db5_facebook-login_1.png");
            // line 117
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
        // line 119
        echo "            </a>
            <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("google_login_controller");
        echo "\">
              ";
        // line 121
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e1de3aa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e1de3aa_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e1de3aa_twitter-login_1.png");
            // line 122
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
        // line 124
        echo "            </a>
          </p>
        </form>​​
      </section>
</div>

<div id=\"sc2\" class=\"tabcontent\">
<section class=\"main\">
        <form action=\"";
        // line 132
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
    
    <!--<script src=\"js/\"></script>-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src=\"js/\"></script>-->

    <!--<script src=\"js/\"></script>-->

    ";
        // line 209
        $this->displayBlock('javascriptsend', $context, $blocks);
        // line 219
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

    // line 209
    public function block_javascriptsend($context, array $blocks = array())
    {
        // line 210
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "68c0127_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_bootstrap.min_1.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie-emulation-modes-warning_2.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_ie10-viewport-bug-workaround_3.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-animate-css-rotate-scale_4.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery-css-transform_5.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_jquery.min_6.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_offcanvas_7.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
            // asset "68c0127_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127_part_1_tab_8.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "68c0127"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_68c0127") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/68c0127.js");
            // line 211
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/tab.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie-emulation-modes-warning.js"), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/jquery.min.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 218
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
        return array (  877 => 218,  871 => 216,  867 => 215,  863 => 214,  859 => 213,  855 => 212,  850 => 211,  843 => 216,  839 => 215,  835 => 214,  831 => 213,  827 => 212,  822 => 211,  816 => 216,  812 => 215,  808 => 214,  804 => 213,  800 => 212,  795 => 211,  789 => 216,  785 => 215,  781 => 214,  777 => 213,  773 => 212,  768 => 211,  762 => 216,  758 => 215,  754 => 214,  750 => 213,  746 => 212,  741 => 211,  735 => 216,  731 => 215,  727 => 214,  723 => 213,  719 => 212,  714 => 211,  708 => 216,  704 => 215,  700 => 214,  696 => 213,  692 => 212,  687 => 211,  681 => 216,  677 => 215,  673 => 214,  669 => 213,  665 => 212,  660 => 211,  654 => 216,  650 => 215,  646 => 214,  642 => 213,  638 => 212,  633 => 211,  628 => 210,  625 => 209,  621 => 22,  615 => 20,  611 => 19,  607 => 18,  603 => 17,  598 => 16,  591 => 20,  587 => 19,  583 => 18,  579 => 17,  574 => 16,  568 => 20,  564 => 19,  560 => 18,  556 => 17,  551 => 16,  545 => 20,  541 => 19,  537 => 18,  533 => 17,  528 => 16,  522 => 20,  518 => 19,  514 => 18,  510 => 17,  505 => 16,  499 => 20,  495 => 19,  491 => 18,  487 => 17,  482 => 16,  476 => 20,  472 => 19,  468 => 18,  464 => 17,  459 => 16,  453 => 20,  449 => 19,  445 => 18,  441 => 17,  436 => 16,  430 => 20,  426 => 19,  422 => 18,  418 => 17,  413 => 16,  407 => 20,  403 => 19,  399 => 18,  395 => 17,  390 => 16,  384 => 20,  380 => 19,  376 => 18,  372 => 17,  367 => 16,  361 => 20,  357 => 19,  353 => 18,  349 => 17,  344 => 16,  338 => 20,  334 => 19,  330 => 18,  326 => 17,  321 => 16,  315 => 20,  311 => 19,  307 => 18,  303 => 17,  298 => 16,  293 => 15,  290 => 14,  284 => 219,  282 => 209,  202 => 132,  192 => 124,  178 => 122,  174 => 121,  170 => 120,  167 => 119,  153 => 117,  149 => 116,  145 => 115,  126 => 99,  97 => 72,  87 => 67,  83 => 66,  38 => 23,  36 => 14,  21 => 1,);
    }
}
