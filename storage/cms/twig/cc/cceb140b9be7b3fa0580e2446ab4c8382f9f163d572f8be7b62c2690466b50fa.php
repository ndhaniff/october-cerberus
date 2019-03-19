<?php

/* C:\xampp\htdocs\october/themes/cerberus/layouts/fallback.htm */
class __TwigTemplate_8a83fe79d87788445eec4237375e3a6b26268ccb79cdea46d3e5ca792b7cf6c3 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/cerberus/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp\\htdocs\\october/themes/cerberus/layouts/fallback.htm", "");
    }
}
