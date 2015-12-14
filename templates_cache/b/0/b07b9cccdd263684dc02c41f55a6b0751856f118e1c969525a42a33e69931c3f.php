<?php

/* portfolio/album.twig */
class __TwigTemplate_b07b9cccdd263684dc02c41f55a6b0751856f118e1c969525a42a33e69931c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "portfolio/album.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"portfolio-item-container\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Images"]) ? $context["Images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Image"]) {
            // line 5
            echo "            <a class=\"portfolio-item\"
               href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("image", array("album" => $this->getAttribute($context["Image"], "albumId", array()), "image" => $this->getAttribute($context["Image"], "id", array()))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["Image"], "srcBig", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Image"], "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Image"], "text", array()), "html", null, true);
            echo "\">
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
    <div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "portfolio/album.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  45 => 7,  41 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
