<?php

/* UnisimonPrincipalBundle:Default:index.html.twig */
class __TwigTemplate_ba16bfea3d11e8a507bbeb106e7b81e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UnisimonPrincipalBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UnisimonPrincipalBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "
    <!-- Le styles -->
<title>Acceso al sistema</title>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/nightsky/template/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    

";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <div align=\"center\"  >
    <object width=\"380\" height=\"85\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" id=\"FlashID2\" style=\"visibility: visible;\">
                <param value=\"http://www.unisimon.edu.co/templates/unisimon/images/logo.swf\" name=\"movie\">
                <param value=\"high\" name=\"quality\">
                <param value=\"transparent\" name=\"wmode\">
                <param value=\"6.0.65.0\" name=\"swfversion\">
                <param value=\"Scripts/expressInstall.swf\" name=\"expressinstall\">
                <object width=\"380\" height=\"85\" data=\"http://www.unisimon.edu.co/templates/unisimon/images/logo.swf\" type=\"application/x-shockwave-flash\">
                  <param value=\"high\" name=\"quality\">
                  <param value=\"transparent\" name=\"wmode\">
                  <param value=\"6.0.65.0\" name=\"swfversion\">
                  <param value=\"Scripts/expressInstall.swf\" name=\"expressinstall\">
                  <div>
                    <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                    <p><a href=\"http://www.adobe.com/go/getflashplayer\"><img width=\"112\" height=\"33\" alt=\"Get Adobe Flash player\" src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\"></a></p>
                  </div>
                </object>
              </object>

    </div>  
    <div id=\"wrapper\">
            <div id=\"login\" class=\"animate form position\">
                <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuesta"), "html", null, true);
        echo "\" class=\"form-login\"> 
                    <div class=\"content-login\">
                    <div class=\"header\">Acceso al Sistema</div>
                    
                    <div class=\"inputs\">
                        <input name=\"codigo\" type=\"text\" placeholder=\"Codigo\" required=\"\"/>
                        <input name=\"contraseña\" type=\"password\"  placeholder=\"Contraseña\" required=\"\"/>
                    </div>
                    <div class=\"clear\"></div>
                    <div class=\"button-login\"><input type=\"submit\" class=\"\" value=\"Entrar\"></div>
                    </div>
                    
                    <div class=\"footer-login\">
                                          </div>
                     <div class=\"clear\"></div>
                                      
                </form>
             </div>
          </div>
     <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"js/jquery.min.js\"></script>

    
";
    }

    public function getTemplateName()
    {
        return "UnisimonPrincipalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  77 => 29,  113 => 46,  100 => 39,  58 => 19,  59 => 6,  23 => 1,  63 => 25,  219 => 73,  211 => 64,  204 => 67,  202 => 64,  197 => 61,  194 => 60,  186 => 79,  180 => 76,  174 => 73,  170 => 71,  153 => 55,  129 => 45,  53 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 65,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  38 => 11,  71 => 30,  177 => 65,  165 => 59,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 37,  70 => 16,  67 => 27,  61 => 13,  87 => 33,  28 => 4,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 56,  151 => 57,  142 => 51,  138 => 57,  136 => 49,  121 => 43,  117 => 44,  105 => 40,  91 => 22,  62 => 20,  49 => 7,  94 => 38,  89 => 20,  85 => 25,  75 => 24,  68 => 14,  56 => 11,  21 => 2,  24 => 3,  31 => 9,  93 => 28,  88 => 6,  78 => 18,  44 => 51,  27 => 48,  46 => 13,  26 => 6,  25 => 1,  19 => 1,  79 => 35,  72 => 36,  69 => 24,  47 => 12,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 48,  111 => 37,  108 => 43,  101 => 32,  98 => 31,  96 => 37,  83 => 30,  74 => 22,  66 => 15,  55 => 16,  52 => 16,  50 => 10,  43 => 9,  41 => 8,  35 => 10,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 77,  176 => 74,  173 => 74,  168 => 60,  164 => 59,  162 => 62,  154 => 54,  149 => 54,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 23,  92 => 34,  86 => 20,  82 => 27,  80 => 26,  73 => 28,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 14,  45 => 13,  42 => 12,  39 => 6,  36 => 5,  33 => 6,  30 => 3,);
    }
}
