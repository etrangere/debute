<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4ab0f48e35d788846c09bea88b0a9bbc4773e662c28c735c4f7216f52d4696b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03e070f6e2384103e86b57fa1caef498e1a49af6f7d787d0d989bd8b85860e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e070f6e2384103e86b57fa1caef498e1a49af6f7d787d0d989bd8b85860e6b->enter($__internal_03e070f6e2384103e86b57fa1caef498e1a49af6f7d787d0d989bd8b85860e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a656e617b40f1f11876438f954529822344477e625d63025acfe6031104856a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a656e617b40f1f11876438f954529822344477e625d63025acfe6031104856a6->enter($__internal_a656e617b40f1f11876438f954529822344477e625d63025acfe6031104856a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e070f6e2384103e86b57fa1caef498e1a49af6f7d787d0d989bd8b85860e6b->leave($__internal_03e070f6e2384103e86b57fa1caef498e1a49af6f7d787d0d989bd8b85860e6b_prof);

        
        $__internal_a656e617b40f1f11876438f954529822344477e625d63025acfe6031104856a6->leave($__internal_a656e617b40f1f11876438f954529822344477e625d63025acfe6031104856a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_837f0a2188f121d64067f99135f70585f2a9fce6b218d129811e0ec800106112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837f0a2188f121d64067f99135f70585f2a9fce6b218d129811e0ec800106112->enter($__internal_837f0a2188f121d64067f99135f70585f2a9fce6b218d129811e0ec800106112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4aa79e52a8b33eeaf26bac446f74b29e598f4c29a73ca44b4673538905f9bc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa79e52a8b33eeaf26bac446f74b29e598f4c29a73ca44b4673538905f9bc21->enter($__internal_4aa79e52a8b33eeaf26bac446f74b29e598f4c29a73ca44b4673538905f9bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4aa79e52a8b33eeaf26bac446f74b29e598f4c29a73ca44b4673538905f9bc21->leave($__internal_4aa79e52a8b33eeaf26bac446f74b29e598f4c29a73ca44b4673538905f9bc21_prof);

        
        $__internal_837f0a2188f121d64067f99135f70585f2a9fce6b218d129811e0ec800106112->leave($__internal_837f0a2188f121d64067f99135f70585f2a9fce6b218d129811e0ec800106112_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e32bd6f8c6c32b7c92db6270b8cee2120e80b83d7516f1546420fadde945630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e32bd6f8c6c32b7c92db6270b8cee2120e80b83d7516f1546420fadde945630->enter($__internal_1e32bd6f8c6c32b7c92db6270b8cee2120e80b83d7516f1546420fadde945630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac7c7de418b9d1054a1dadbd52959131fa8f4dc9ca69bdadafa775744eb8310c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7c7de418b9d1054a1dadbd52959131fa8f4dc9ca69bdadafa775744eb8310c->enter($__internal_ac7c7de418b9d1054a1dadbd52959131fa8f4dc9ca69bdadafa775744eb8310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ac7c7de418b9d1054a1dadbd52959131fa8f4dc9ca69bdadafa775744eb8310c->leave($__internal_ac7c7de418b9d1054a1dadbd52959131fa8f4dc9ca69bdadafa775744eb8310c_prof);

        
        $__internal_1e32bd6f8c6c32b7c92db6270b8cee2120e80b83d7516f1546420fadde945630->leave($__internal_1e32bd6f8c6c32b7c92db6270b8cee2120e80b83d7516f1546420fadde945630_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb9e519b542d34e7219fd936fe1c1bf446fa15d3703bdc6e1db39b7fe1987906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9e519b542d34e7219fd936fe1c1bf446fa15d3703bdc6e1db39b7fe1987906->enter($__internal_eb9e519b542d34e7219fd936fe1c1bf446fa15d3703bdc6e1db39b7fe1987906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a23c338bcb93585a87bb0e715023e07fe91fc248262941c650393033d73e1f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23c338bcb93585a87bb0e715023e07fe91fc248262941c650393033d73e1f79->enter($__internal_a23c338bcb93585a87bb0e715023e07fe91fc248262941c650393033d73e1f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a23c338bcb93585a87bb0e715023e07fe91fc248262941c650393033d73e1f79->leave($__internal_a23c338bcb93585a87bb0e715023e07fe91fc248262941c650393033d73e1f79_prof);

        
        $__internal_eb9e519b542d34e7219fd936fe1c1bf446fa15d3703bdc6e1db39b7fe1987906->leave($__internal_eb9e519b542d34e7219fd936fe1c1bf446fa15d3703bdc6e1db39b7fe1987906_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
