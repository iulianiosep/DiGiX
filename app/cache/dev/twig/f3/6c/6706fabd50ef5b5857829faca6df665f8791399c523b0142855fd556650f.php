<?php

/* DigixBundle:Search:searchpage.html.twig */
class __TwigTemplate_f36c6706fabd50ef5b5857829faca6df665f8791399c523b0142855fd556650f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DigixBundle:Search:searchpage.html.twig", 1);
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
   Search
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
        echo "      <nav class=\"navbar navbar-fixed-top navbar-inverse\">
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
        // line 21
        echo $this->env->getExtension('routing')->getPath("digix_wall");
        echo "\">Tag them</a></li>
              <li class=\"active\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("search_controller");
        echo "\">Search them</a></li>
              <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("box_page");
        echo "\">My Box</a></li>
              <li><a href=\"";
        // line 24
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

           <div class=\"jumbotron\">
            <p class=\"p-news\">Welcome to DiGix! Use this page to search for your memories!
            </p>
          </div>

          <div class=\"jumbotron\">
          ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photosArray"]) ? $context["photosArray"] : $this->getContext($context, "photosArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 60
            echo "            
              <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" width='500' height='auto'/>
              <br>
              <input type=\"submit\" value=\"Delete picture\" class=\"top10\"/>
              <br><br>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "          </div>

          ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videosArray"]) ? $context["videosArray"] : $this->getContext($context, "videosArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "          <div class=\"jumbotron\">
            <video width='240' height='auto' controls>
                  <source src=\"";
            // line 71
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\">
            </video>
            <br>
              <input type=\"submit\" value=\"Delete video\" class=\"top10\"/>
            <br><br>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </p>
   </div><!--/.col-xs-12.col-sm-9-->


<form method=\"post\" action=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("search_action");
        echo "\">
   <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\">
    <input name=\"tag_list\" type=\"text\" class=\"top10\" placeholder=\"Search here\"></input>
    <select class=\"top10\" name=\"selectBox\">
      <option value=\"photos\">Photos</option>
      <option value=\"videos\">Videos</option>
      <option value=\"all\">All</option>
    </select>
    <input type=\"submit\" class=\"top10\" value=\"Search\"></input>
  </div>
</form>
<!--/.sidebar-offcanvas-->

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
    }

    public function getTemplateName()
    {
        return "DigixBundle:Search:searchpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 82,  152 => 78,  139 => 71,  135 => 69,  131 => 68,  127 => 66,  116 => 61,  113 => 60,  109 => 59,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  44 => 8,  41 => 7,  35 => 4,  29 => 2,  11 => 1,);
    }
}
