<?php

/* DigixBundle:Wall:wall.html.twig */
class __TwigTemplate_2211b99d7fb53752443072c9640aee1bd69f0fd3467caed03cb39c45203ade7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DigixBundle:Wall:wall.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 3
        echo "    HomePage
    ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <div id=\"openModal\" class=\"modalDialog\">
        <div>
          <a href=\"#close\" title=\"Close\" class=\"close\">X</a>
          <form method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tag_controller");
        echo "\">
            <h3>Import photos from Facebook</h3>
            <p>Your photos</p>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["picturesArray"]) ? $context["picturesArray"] : $this->getContext($context, "picturesArray")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "              <div class=\"containercls\">
                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" width='240' height='auto'/>
                <input name=\"";
            // line 16
            echo twig_escape_filter($this->env, ("photo" . $context["key"]), "html", null, true);
            echo "\" type=\"text\" class=\"checkbox\"/> 
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
            <p>Your videos</p>
            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videosArray"]) ? $context["videosArray"] : $this->getContext($context, "videosArray")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 22
            echo "              <div class=\"containercls\">
                <video width='240' height='auto' controls>
                  <source src=\"";
            // line 24
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                </video>
                <input name=\"";
            // line 26
            echo twig_escape_filter($this->env, ("video" . $context["key"]), "html", null, true);
            echo "\" type=\"text\" class=\"checkbox\"/> 
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
            <input type=\"submit\" class=\"inputsubmit\" value=\"Tag them!\"/>
          </form>
        </div>
      </div>
      

         <div class=\"container\">

        <div class=\"row row-offcanvas row-offcanvas-right\">

          <div class=\"col-xs-12 col-sm-9\">
            <p class=\"pull-right visible-xs\">
              <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"offcanvas\">Sidebar</button>
            </p>

           

           <!--";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["picturesArray"]) ? $context["picturesArray"] : $this->getContext($context, "picturesArray")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "              <div class=\"jumbotron\">
                <p class=\"p-news\">Paragraf1
                  <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\" width=\"300\" height=\"auto\"/>
                </p>
              </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "-->
           <div class=\"jumbotron\">
            <p class=\"p-news\">Welcome to DiGix! Use the upper buttons to import your photos! Have a tagging experience.
            </p>
          </div>
    </p>

           
     
   </div><!--/.col-xs-12.col-sm-9-->

            ";
        // line 64
        $this->displayBlock('sidebar', $context, $blocks);
        // line 70
        echo "
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
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "
  ";
    }

    // line 64
    public function block_sidebar($context, array $blocks = array())
    {
        // line 65
        echo "                <div class=\"col-xs-6 col-sm-3 sidebar-offcanvas\" id=\"sidebar\">
                    ";
        // line 66
        $this->loadTemplate("DigixBundle:Sidebar:sidebarpage.html.twig", "DigixBundle:Wall:wall.html.twig", 66)->display($context);
        // line 67
        echo "                </div>

            ";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo "
            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
            <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/js/offcanvas.js"), "html", null, true);
        echo "\"></script>

        ";
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
        return array (  210 => 91,  206 => 90,  201 => 88,  198 => 87,  195 => 86,  189 => 67,  187 => 66,  184 => 65,  181 => 64,  176 => 94,  174 => 86,  156 => 70,  154 => 64,  141 => 53,  131 => 50,  127 => 48,  123 => 47,  103 => 29,  94 => 26,  89 => 24,  85 => 22,  81 => 21,  77 => 19,  68 => 16,  64 => 15,  61 => 14,  57 => 13,  51 => 10,  46 => 7,  43 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }
}
