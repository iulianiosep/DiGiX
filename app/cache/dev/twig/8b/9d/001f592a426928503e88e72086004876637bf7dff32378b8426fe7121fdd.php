<?php

/* DigixBundle:Sidebar:sidebarpage.html.twig */
class __TwigTemplate_8b9d001f592a426928503e88e72086004876637bf7dff32378b8426fe7121fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "   <h4 class=\"top10\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h4>
    <div class=\"profile\">

   </div>

   <div class=\"info-profile\">
     <ul class=\"fa-ul\">
      <!--<li><i class=\"fa-li fa fa-home\"></i>Calarasi</li>-->
      <li><i class=\"fa-li fa fa-birthday-cake\"></i>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo "</li>
      <li><i class=\"fa-li fa fa-male\"></i>Male</li>
      <li><i class=\"fa-li fa fa-rss\"></i>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["website"]) ? $context["website"] : $this->getContext($context, "website")), "html", null, true);
        echo "</li>
      <li><i class=\"fa-li fa fa-edit\"></i><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("edit_profile_page");
        echo "\">Edit profile</a></li>

    </ul>
  </div>
";
    }

    public function getTemplateName()
    {
        return "DigixBundle:Sidebar:sidebarpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  36 => 11,  31 => 9,  19 => 1,);
    }
}
