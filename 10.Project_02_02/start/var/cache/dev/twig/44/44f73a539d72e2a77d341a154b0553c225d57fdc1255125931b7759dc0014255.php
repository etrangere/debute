<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_803e6b93a43353ebf5b4337111eb311404ed0a7ff058d44294aa81d91230fd3c extends Twig_Template
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
        $__internal_2cd4e5f4977bafe5900ad6ec53dc8b51d3c68da2e8d838faa72b5287e6fea57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd4e5f4977bafe5900ad6ec53dc8b51d3c68da2e8d838faa72b5287e6fea57f->enter($__internal_2cd4e5f4977bafe5900ad6ec53dc8b51d3c68da2e8d838faa72b5287e6fea57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d29ab5426ad9c14756957ab5eb4bf9e277c180965c3607e485fd3b8cc8fb0095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29ab5426ad9c14756957ab5eb4bf9e277c180965c3607e485fd3b8cc8fb0095->enter($__internal_d29ab5426ad9c14756957ab5eb4bf9e277c180965c3607e485fd3b8cc8fb0095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2cd4e5f4977bafe5900ad6ec53dc8b51d3c68da2e8d838faa72b5287e6fea57f->leave($__internal_2cd4e5f4977bafe5900ad6ec53dc8b51d3c68da2e8d838faa72b5287e6fea57f_prof);

        
        $__internal_d29ab5426ad9c14756957ab5eb4bf9e277c180965c3607e485fd3b8cc8fb0095->leave($__internal_d29ab5426ad9c14756957ab5eb4bf9e277c180965c3607e485fd3b8cc8fb0095_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
