<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_e1a732e4c3ca1e2dd86835b6f5c8e0d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 169,  369 => 165,  334 => 145,  327 => 141,  293 => 118,  288 => 116,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 97,  248 => 96,  243 => 93,  240 => 92,  221 => 85,  195 => 71,  191 => 69,  188 => 68,  185 => 67,  172 => 62,  150 => 55,  134 => 47,  81 => 23,  104 => 37,  65 => 22,  348 => 153,  346 => 321,  343 => 320,  299 => 278,  297 => 277,  20 => 1,  97 => 41,  127 => 60,  110 => 22,  102 => 33,  76 => 28,  90 => 27,  77 => 25,  113 => 38,  100 => 36,  58 => 18,  59 => 14,  23 => 1,  63 => 21,  219 => 84,  211 => 64,  204 => 67,  202 => 75,  197 => 61,  194 => 60,  186 => 79,  180 => 76,  174 => 73,  170 => 71,  153 => 56,  129 => 45,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 149,  337 => 103,  322 => 101,  314 => 99,  312 => 129,  309 => 97,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 89,  229 => 87,  224 => 71,  220 => 70,  214 => 65,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 40,  107 => 36,  38 => 7,  71 => 13,  177 => 64,  165 => 60,  160 => 61,  135 => 62,  126 => 45,  114 => 42,  84 => 24,  70 => 19,  67 => 18,  61 => 23,  87 => 33,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 79,  156 => 58,  151 => 57,  142 => 51,  138 => 57,  136 => 49,  121 => 43,  117 => 19,  105 => 34,  91 => 34,  62 => 21,  49 => 14,  94 => 34,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 11,  21 => 2,  24 => 2,  31 => 4,  93 => 38,  88 => 31,  78 => 18,  44 => 10,  27 => 7,  46 => 13,  26 => 3,  25 => 35,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 11,  40 => 11,  37 => 6,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 48,  111 => 37,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 30,  74 => 27,  66 => 25,  55 => 38,  52 => 14,  50 => 16,  43 => 9,  41 => 10,  35 => 6,  32 => 6,  29 => 3,  209 => 79,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 77,  176 => 74,  173 => 74,  168 => 61,  164 => 59,  162 => 59,  154 => 54,  149 => 54,  147 => 54,  144 => 53,  141 => 51,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 39,  112 => 42,  109 => 41,  106 => 45,  103 => 37,  99 => 31,  95 => 39,  92 => 28,  86 => 20,  82 => 28,  80 => 29,  73 => 20,  64 => 17,  60 => 20,  57 => 16,  54 => 19,  51 => 13,  48 => 16,  45 => 10,  42 => 12,  39 => 10,  36 => 9,  33 => 4,  30 => 3,);
    }
}
