<?php

/* layout.twig */
class __TwigTemplate_551c8e8fbd16e33cc1651bb48fa8c063c57de5629ca4443079647f6044391318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
    <link rel=\"stylesheet\" href=\"/libs/fontello/css/fontello.css\">
    <link rel=\"stylesheet\" href=\"/css/reset.css\">
    <link rel=\"stylesheet\" href=\"/css/main.css\">
</head>
<body>
<nav>
    <div class=\"container\">
        <div class=\"logo\">
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("index"), "html", null, true);
        echo "\">darina erde</a>
        </div>
        <ul class=\"navigation\">
            <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("index"), "html", null, true);
        echo "#\" class=\"nav-about\">Обо мне</a></li>
            <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("index"), "html", null, true);
        echo "#portfolio\">Работы</a></li>
            <li><a href=\"#footer\">Связь</a></li>
        </ul>
        <div class=\"clear\"></div>
    </div>
</nav>
";
        // line 27
        if (array_key_exists("indexPage", $context)) {
            // line 28
            echo "    <header>
        <div class=\"container\">
            <div class=\"hero-header text-center\">
                <div class=\"hero-header-title\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Group"]) ? $context["Group"] : null), "name", array()), "html", null, true);
            echo "</div>
                <div class=\"hero-header-subtitle\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Group"]) ? $context["Group"] : null), "status", array()), "html", null, true);
            echo "</div>
                <div class=\"hero-header-description\">";
            // line 33
            echo $this->getAttribute((isset($context["Group"]) ? $context["Group"] : null), "description", array());
            echo "</div>
            </div>
        </div>
    </header>
";
        }
        // line 38
        echo "<div id=\"portfolio\"></div>
<main class=\"portfolio ";
        // line 39
        if (array_key_exists("indexPage", $context)) {
            echo "portfolio-index";
        }
        echo "\">
    <div class=\"container\">
        ";
        // line 41
        $this->displayBlock('main', $context, $blocks);
        // line 43
        echo "    </div>
    <footer id=\"footer\">
        <div class=\"container\">
            <ul class=\"footer-links\">
                <li class=\"footer-title\">Контакты</li>
                <li><i class=\"icon-location\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Group"]) ? $context["Group"] : null), "place", array()), "html", null, true);
        echo "</li>
                ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Group"]) ? $context["Group"] : null), "Contacts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 50
            echo "                    <li><i class=\"icon-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "type", array()), "html", null, true);
            echo "\"></i>
                        ";
            // line 51
            if ($this->getAttribute($context["contact"], "link", array(), "any", true, true)) {
                // line 52
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "link", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "value", array()), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 54
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "value", array()), "html", null, true);
                echo "
                        ";
            }
            // line 56
            echo "                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </ul>
            <div class=\"vk-group\">
                <div class=\"footer-title\">Сообщество</div>
                <div id=\"vk_groups\"></div>
            </div>
            <div class=\"clear\"></div>
            <div class=\"footer-copyright\">&copy; ";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Darina Erde</div>
        </div>
    </footer>
</main>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
<script src=\"/scripts/jquery.swipe.js\"></script>
<script type=\"text/javascript\" src=\"//vk.com/js/api/openapi.js?121\"></script>
<script type=\"text/javascript\">
    VK.Widgets.Group(\"vk_groups\", {
        mode: 0,
        width: \"350\",
        height: \"150\",
        color1: '333333',
        color2: 'cccccc',
        color3: '262626'
    }, ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Group"]) ? $context["Group"] : null), "id", array()), "html", null, true);
        echo ");
</script>
<script src=\"/scripts/gallery.js\"></script>
";
        // line 82
        $this->displayBlock('scripts', $context, $blocks);
        // line 84
        echo "</body>
</html>";
    }

    // line 41
    public function block_main($context, array $blocks = array())
    {
        // line 42
        echo "        ";
    }

    // line 82
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 82,  178 => 42,  175 => 41,  170 => 84,  168 => 82,  162 => 79,  144 => 64,  136 => 58,  129 => 56,  123 => 54,  115 => 52,  113 => 51,  108 => 50,  104 => 49,  100 => 48,  93 => 43,  91 => 41,  84 => 39,  81 => 38,  73 => 33,  69 => 32,  65 => 31,  60 => 28,  58 => 27,  49 => 21,  45 => 20,  39 => 17,  21 => 1,);
    }
}
