<?php

/* UnisimonPrincipalBundle:Encuesta:index.html.twig */
class __TwigTemplate_56c55cb9c5809f642fda629b84b00354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UnisimonPrincipalBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"header\" role=\"banner\">
       <a id=\"menu-link\" class=\"head-button-link menu-hide\" href=\"#menu\"><span>Menu</span></a>
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("PrincipalBundle_homepage"), "html", null, true);
        echo "\" class=\"logo\"><h1>SICREN</h1></a>
      </div>  
    <h1>Encuesta list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Fecha de Modificación</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuesta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modificado")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modificado"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuesta_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">ver</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuesta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">editar</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("encuesta_new"), "html", null, true);
        echo "\">
               Crear nueva encuesta
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "UnisimonPrincipalBundle:Encuesta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 34,  77 => 29,  113 => 46,  100 => 39,  58 => 19,  59 => 6,  23 => 1,  63 => 25,  219 => 73,  211 => 64,  204 => 67,  202 => 64,  197 => 61,  194 => 60,  186 => 79,  180 => 76,  174 => 73,  170 => 71,  153 => 55,  129 => 45,  53 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 65,  208 => 68,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  38 => 8,  71 => 30,  177 => 65,  165 => 59,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 37,  70 => 16,  67 => 27,  61 => 13,  87 => 33,  28 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 56,  151 => 57,  142 => 51,  138 => 57,  136 => 49,  121 => 43,  117 => 44,  105 => 40,  91 => 22,  62 => 20,  49 => 7,  94 => 38,  89 => 20,  85 => 25,  75 => 24,  68 => 14,  56 => 11,  21 => 2,  24 => 3,  31 => 4,  93 => 28,  88 => 6,  78 => 18,  44 => 51,  27 => 48,  46 => 14,  26 => 6,  25 => 1,  19 => 1,  79 => 35,  72 => 16,  69 => 24,  47 => 12,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 48,  111 => 37,  108 => 43,  101 => 32,  98 => 31,  96 => 37,  83 => 30,  74 => 22,  66 => 15,  55 => 15,  52 => 8,  50 => 10,  43 => 9,  41 => 7,  35 => 7,  32 => 50,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 77,  176 => 74,  173 => 74,  168 => 60,  164 => 59,  162 => 62,  154 => 54,  149 => 54,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 23,  92 => 34,  86 => 20,  82 => 27,  80 => 26,  73 => 28,  64 => 26,  60 => 25,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 7,  42 => 10,  39 => 6,  36 => 5,  33 => 6,  30 => 3,);
    }
}
