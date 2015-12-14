<?php

/* index.twig */
class __TwigTemplate_e83b5a2587a9a66e6ea9f5b8ea935db657552ce64ab74ed46d970b04488d75de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
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
        echo "    <div class=\"portfolio-title\">
        <h2>Мои работы</h2>
    </div>
    <div class=\"portfolio-categories\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Albums"]) ? $context["Albums"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Album"]) {
            // line 8
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("album", array("album" => $this->getAttribute($context["Album"], "id", array()))), "html", null, true);
            echo "\" class=\"portfolio-category\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Album"], "Thumbnail", array()), "srcBig", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Album"], "title", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Album"], "title", array()), "html", null, true);
            echo "\">
                <span class=\"portfolio-category-info\">
                    <span class=\"portfolio-category-title\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["Album"], "title", array()), "html", null, true);
            echo "
                    </span>
                    <span class=\"portfolio-category-description\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["Album"], "description", array()), "html", null, true);
            echo "
                    </span>
                </span>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    <div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  62 => 15,  56 => 12,  46 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
