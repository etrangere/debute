<?php

/* admin/index.html.twig */
class __TwigTemplate_811f2a1ba1a458f4cc309dde3eba8143027c8d96070b02c7e579dfd0591c693b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4933ae0c5b217be01d2a7a250408016de17561e3c5954a64021467f7bb775382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4933ae0c5b217be01d2a7a250408016de17561e3c5954a64021467f7bb775382->enter($__internal_4933ae0c5b217be01d2a7a250408016de17561e3c5954a64021467f7bb775382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_99611786c3b8782c1f8b3203038971606424e2ba8f000e12a4476988b402e89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99611786c3b8782c1f8b3203038971606424e2ba8f000e12a4476988b402e89d->enter($__internal_99611786c3b8782c1f8b3203038971606424e2ba8f000e12a4476988b402e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4933ae0c5b217be01d2a7a250408016de17561e3c5954a64021467f7bb775382->leave($__internal_4933ae0c5b217be01d2a7a250408016de17561e3c5954a64021467f7bb775382_prof);

        
        $__internal_99611786c3b8782c1f8b3203038971606424e2ba8f000e12a4476988b402e89d->leave($__internal_99611786c3b8782c1f8b3203038971606424e2ba8f000e12a4476988b402e89d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3564bc4f5bcc80f0f1550ddea7efb38b698a05aec119e1e171bace56143e721d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3564bc4f5bcc80f0f1550ddea7efb38b698a05aec119e1e171bace56143e721d->enter($__internal_3564bc4f5bcc80f0f1550ddea7efb38b698a05aec119e1e171bace56143e721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a34b337e6bf36ad07e0d9228653077e8105691727874a0ed1ddeee98bc9a8b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34b337e6bf36ad07e0d9228653077e8105691727874a0ed1ddeee98bc9a8b6e->enter($__internal_a34b337e6bf36ad07e0d9228653077e8105691727874a0ed1ddeee98bc9a8b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_a34b337e6bf36ad07e0d9228653077e8105691727874a0ed1ddeee98bc9a8b6e->leave($__internal_a34b337e6bf36ad07e0d9228653077e8105691727874a0ed1ddeee98bc9a8b6e_prof);

        
        $__internal_3564bc4f5bcc80f0f1550ddea7efb38b698a05aec119e1e171bace56143e721d->leave($__internal_3564bc4f5bcc80f0f1550ddea7efb38b698a05aec119e1e171bace56143e721d_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/app/Resources/views/admin/index.html.twig");
    }
}
