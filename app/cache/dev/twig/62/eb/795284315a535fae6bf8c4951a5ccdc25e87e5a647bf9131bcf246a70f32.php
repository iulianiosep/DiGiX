<?php

/* DigixBundle:Modal:modal.html.twig */
class __TwigTemplate_62eb795284315a535fae6bf8c4951a5ccdc25e87e5a647bf9131bcf246a70f32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "</head>

<body>

\t<!--<a href=\"#openModal\">Open Modal</a>-->
\t<div id=\"#openModal\" class=\"modalDialog\">
\t\t<div>
\t\t\t<a href=\"#close\" title=\"Close\" class=\"close\">X</a>
\t\t\t<h2>Modal Box</h2>
\t\t\t<p>This is a sample modal box that can be created using the powers of CSS3.</p>
\t\t\t<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
\t\t</div>
\t</div>

</body>
</html>";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ae50462_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme_1.css");
            // line 5
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme.css_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap-theme.min_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap.css_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_bootstrap.min_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_font-awesome_7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_font-awesome.min_8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_iconFont_9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_jumbotron_10.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_mainCSS_11.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_modal_12.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
            // asset "ae50462_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462_part_1_styles_13.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "ae50462"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ae50462") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ae50462.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/digix/css/modal.css"), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "  ";
    }

    public function getTemplateName()
    {
        return "DigixBundle:Modal:modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 7,  53 => 5,  48 => 4,  45 => 3,  26 => 8,  24 => 3,  20 => 1,);
    }
}
