<?php

/* portfolio/image.twig */
class __TwigTemplate_e1e8b69727e3e5e4afb74b89f91a298d0937143a23c0029b93eec77803343b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "portfolio/image.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'scripts' => array($this, 'block_scripts'),
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
        echo "    <div class=\"portfolio-image\">
        <div class=\"portfolio-item-container\">
            <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("album", array("album" => $this->getAttribute((isset($context["Image"]) ? $context["Image"] : null), "albumId", array()))), "html", null, true);
        echo "\" class=\"portfolio-image-close\">✖</a>
            <a class=\"portfolio-image-controls portfolio-image-prev\"
               href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("image", array("album" => $this->getAttribute((isset($context["Prev"]) ? $context["Prev"] : null), "albumId", array()), "image" => $this->getAttribute((isset($context["Prev"]) ? $context["Prev"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"Предыдущая\"></a>
            <a class=\"portfolio-image-full\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("image", array("album" => $this->getAttribute((isset($context["Next"]) ? $context["Next"] : null), "albumId", array()), "image" => $this->getAttribute((isset($context["Next"]) ? $context["Next"] : null), "id", array()))), "html", null, true);
        echo "\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Image"]) ? $context["Image"] : null), "srcBig", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Image"]) ? $context["Image"] : null), "id", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Image"]) ? $context["Image"] : null), "text", array()), "html", null, true);
        echo "\">
            </a>
            <a class=\"portfolio-image-controls portfolio-image-next\"
               href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("image", array("album" => $this->getAttribute((isset($context["Next"]) ? $context["Next"] : null), "albumId", array()), "image" => $this->getAttribute((isset($context["Next"]) ? $context["Next"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"Следующая\"></a>
        </div>
        <div class=\"portfolio-item-info\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Image"]) ? $context["Image"] : null), "text", array()), "html", null, true);
        echo "
            <div class=\"ya-share2\" data-services=\"vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,whatsapp\"></div>
            <br>
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Image"]) ? $context["Image"] : null), "OriginalSrc", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"portfolio-item-original\">Открыть оригинал</a>
        </div>
        <div class=\"clear\"></div>
    </div>
";
    }

    // line 23
    public function block_scripts($context, array $blocks = array())
    {
        // line 24
        echo "    <script type=\"text/javascript\" src=\"//yastatic.net/es5-shims/0.0.2/es5-shims.min.js\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\" src=\"//yastatic.net/share2/share.js\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "portfolio/image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  80 => 23,  71 => 18,  65 => 15,  59 => 12,  49 => 9,  45 => 8,  41 => 7,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
