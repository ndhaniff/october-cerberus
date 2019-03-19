<?php

/* C:\xampp\htdocs\october/themes/cerberus/pages/index.htm */
class __TwigTemplate_19f4597dfda4c466ac03d0deaa46c3bf434c0a90745e73cf10228070fe94b7de extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div>
\t\t";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('jumbotron'        );
        // line 3
        echo "\t\t";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/cerberus/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  30 => 2,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
\t\t{% put jumbotron %}
\t\t{% endput %}
</div>", "C:\\xampp\\htdocs\\october/themes/cerberus/pages/index.htm", "");
    }
}
