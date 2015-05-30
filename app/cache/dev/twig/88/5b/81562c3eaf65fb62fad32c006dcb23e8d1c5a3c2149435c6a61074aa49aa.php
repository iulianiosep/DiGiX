<?php

/* DigixBundle:Contact:contact.html.twig */
class __TwigTemplate_885b81562c3eaf65fb62fad32c006dcb23e8d1c5a3c2149435c6a61074aa49aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DigixBundle:Contact:contact.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " 
   Support
   ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
  ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
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
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("digix_wall");
        echo "\">Tag them</a></li>
              <li class=\"\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("search_controller");
        echo "\">Search them</a></li>
              <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("box_page");
        echo "\">My Box</a></li>
              <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("about_page");
        echo "\">About</a></li>
              <li><a href=\"";
        // line 26
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
  

  <div class=\"container\">

    <div class=\"row row-offcanvas row-offcanvas-right\">


      <p class=\"pull-right visible-xs\">
        <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\">Sidebar</button>
      </p>


      <div id=\"frontpage\">

       <div id=\"edit-profile\">         
         ";
        // line 58
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "325c243_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_325c243_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/325c243_images_1");
            // line 59
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/images/profile.png"), "html", null, true);
            echo "\" alt=\"not found\"/>
          ";
        } else {
            // asset "325c243"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_325c243") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/325c243");
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/images/profile.png"), "html", null, true);
            echo "\" alt=\"not found\"/>
          ";
        }
        unset($context["asset_url"]);
        // line 61
        echo "       </div>


       <div id=\"edit-content\">
        <form class=\"form-inline\" role=\"form\">
          <div class=\"form-group\">
           <label for=\"subject\">Subject</label>
             <br>
            <input type=\"text\" class=\"form-control\" id=\"contact-subject\">
             
          </div>
          <br>

           <div class=\"form-group\">
           <label for=\"message\">Message</label>
             <br></br>
           <textarea  name=\"comments\" maxlength=\"1000\" cols=\"50\" rows=\"6\"></textarea>
             
          </div>
          <br></br>
         


         





          <br></br>
          <button type=\"submit\" class=\"btn btn-default\" id=\"edit-button\">Send</button>
        </form>
      </div>


     </div><!--/row-->

     <hr>

     <footer>
      <p>&copy; Company 2014</p>
    </footer>

  </div><!--/.container-->
";
    }

    public function getTemplateName()
    {
        return "DigixBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 61,  115 => 59,  111 => 58,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  44 => 8,  41 => 7,  35 => 4,  29 => 2,  11 => 1,);
    }
}
