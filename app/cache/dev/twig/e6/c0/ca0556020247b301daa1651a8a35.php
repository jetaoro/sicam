<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_e6c0ca0556020247b301daa1651a8a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  77 => 33,  113 => 46,  100 => 39,  58 => 19,  59 => 6,  23 => 1,  63 => 25,  219 => 73,  211 => 64,  204 => 67,  202 => 64,  197 => 61,  194 => 60,  186 => 79,  180 => 76,  174 => 73,  170 => 71,  153 => 55,  129 => 45,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 65,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  38 => 6,  71 => 30,  177 => 65,  165 => 59,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 37,  70 => 25,  67 => 27,  61 => 21,  87 => 33,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 56,  151 => 57,  142 => 51,  138 => 57,  136 => 49,  121 => 43,  117 => 44,  105 => 40,  91 => 22,  62 => 20,  49 => 17,  94 => 38,  89 => 36,  85 => 25,  75 => 27,  68 => 14,  56 => 21,  21 => 2,  24 => 3,  31 => 4,  93 => 28,  88 => 6,  78 => 18,  44 => 15,  27 => 48,  46 => 14,  26 => 6,  25 => 1,  19 => 1,  79 => 35,  72 => 31,  69 => 24,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 48,  111 => 37,  108 => 43,  101 => 32,  98 => 31,  96 => 37,  83 => 30,  74 => 22,  66 => 23,  55 => 16,  52 => 10,  50 => 10,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 77,  176 => 74,  173 => 74,  168 => 60,  164 => 59,  162 => 62,  154 => 54,  149 => 54,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 23,  92 => 34,  86 => 20,  82 => 31,  80 => 26,  73 => 28,  64 => 22,  60 => 25,  57 => 12,  54 => 10,  51 => 17,  48 => 9,  45 => 16,  42 => 8,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
