<?php

/* C:\xampp\htdocs\october/themes/cerberus/partials/navbar.htm */
class __TwigTemplate_7479ff93ab3d33175d1d287f9ebcb5f7fdbf32a3913f8c46ea87a2ce7afb593e extends Twig_Template
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
        echo "<section id=\"navbar\" class=\"m-b-3\"></section>
\t<nav class=\"navbar navbar-expand-md border\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("features");
        echo "\">
\t\t\t<img src=\"http://localhost/october/storage/app/media/TinnoLab.png\" width=\"80px\" alt=\"\">
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t
\t\t<div class=\"collapse navbar-collapse\" id=\"cerberus-navbar\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []) == "index")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 15
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []) == "login")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Login</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdown01\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october/themes/cerberus/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  48 => 15,  43 => 13,  39 => 12,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"m-b-3\"></section>
\t<nav class=\"navbar navbar-expand-md border\">
\t\t<a class=\"navbar-brand\" href=\"{{ 'features'|page }}\">
\t\t\t<img src=\"http://localhost/october/storage/app/media/TinnoLab.png\" width=\"80px\" alt=\"\">
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t
\t\t<div class=\"collapse navbar-collapse\" id=\"cerberus-navbar\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'index' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'index'|page }}\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'login' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'login'|page }}\">Login</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdown01\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "C:\\xampp\\htdocs\\october/themes/cerberus/partials/navbar.htm", "");
    }
}
