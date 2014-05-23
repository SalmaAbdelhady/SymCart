<?php

/* SalmaSymCartBundle:Section:sections_dropdown.html.twig */
class __TwigTemplate_88be2e7fdda4bb6ea6e0269b2cfe5e80081a05608ccd9f3872a8495bdc9b4bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"glyphicon glyphicon-th-list\"></span>   Sections <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 7
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("section_show", array("id" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "name"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Section:sections_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
