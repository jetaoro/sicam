<?php

/* UnisimonPrincipalBundle::layout.html.twig */
class __TwigTemplate_d1472f3135b4ee5488060a8b85edc093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('title', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "      
        <meta charset=\"utf-8\">
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/fullcalendar.css"), "html", null, true);
        echo "\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/chosen.css"), "html", null, true);
        echo "\" media=\"screen\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/glisse.css?1.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/jquery.jgrowl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/demo_table.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/jquery.fancybox.css?v=2.1.4"), "html", null, true);
        echo "\" media=\"screen\" />
    
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/font-awesome.css"), "html", null, true);
        echo "\">    
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/bootstrap-responsive.css"), "html", null, true);
        echo "\">
    
    <link rel=\"alternate stylesheet\" type=\"text/css\" media=\"screen\" title=\"green-theme\" href=\"css/color/green.css\" />
\t<link rel=\"alternate stylesheet\" type=\"text/css\" media=\"screen\" title=\"red-theme\" href=\"css/color/red.css\" />
\t<link rel=\"alternate stylesheet\" type=\"text/css\" media=\"screen\" title=\"blue-theme\" href=\"css/color/blue.css\" />
        <link rel=\"alternate stylesheet\" type=\"text/css\" media=\"screen\" title=\"orange-theme\" href=\"css/color/orange.css\" />
        <link rel=\"alternate stylesheet\" type=\"text/css\" media=\"screen\" title=\"purple-theme\" href=\"css/color/purple.css\" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
     <script language=\"JavaScript\">
\tFirefox = navigator.userAgent.indexOf(\"Firefox\") >= 0;
\tif(Firefox) document.write(\"<link rel='stylesheet' href='css/moz.css' type='text/css'>\"); 
\t</script>
    
    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

      <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
      <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/demo.css"), "html", null, true);
        echo "\" />
      <title>Sistema creación de Encuestas</title>
";
    }

    // line 49
    public function block_title($context, array $blocks = array())
    {
        echo "SICREN-Sistema de creación de Encuestas";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "     
      
    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('content_header', $context, $blocks);
        // line 71
        echo "
    <div class=\"block\">
        ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "    </div>

    ";
        // line 76
        if (array_key_exists("code", $context)) {
            // line 77
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 79
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 60
    public function block_content_header($context, array $blocks = array())
    {
        // line 61
        echo "        
     
      <ul id=\"menu\">
            ";
        // line 64
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 67
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 64
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 65
        echo "               
            ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UnisimonPrincipalBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 73,  211 => 64,  204 => 67,  202 => 64,  197 => 61,  194 => 60,  186 => 79,  180 => 76,  174 => 73,  170 => 71,  153 => 55,  129 => 45,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 65,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  38 => 6,  71 => 22,  177 => 65,  165 => 59,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 29,  70 => 16,  67 => 15,  61 => 13,  87 => 20,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 56,  151 => 57,  142 => 51,  138 => 57,  136 => 49,  121 => 43,  117 => 44,  105 => 40,  91 => 22,  62 => 14,  49 => 10,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 11,  21 => 2,  24 => 3,  31 => 5,  93 => 28,  88 => 6,  78 => 18,  44 => 12,  27 => 48,  46 => 7,  26 => 6,  25 => 1,  19 => 1,  79 => 27,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 17,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 9,  41 => 9,  35 => 51,  32 => 50,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 77,  176 => 74,  173 => 74,  168 => 60,  164 => 59,  162 => 62,  154 => 54,  149 => 54,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 23,  92 => 33,  86 => 20,  82 => 19,  80 => 19,  73 => 19,  64 => 14,  60 => 14,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 2,  39 => 1,  36 => 6,  33 => 4,  30 => 49,);
    }
}
