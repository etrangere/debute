<?php

/* :genus:show.html.twig */
class __TwigTemplate_6de15991e71244275464b187b018b3d746ebaeef8fc86110d827b9b354d5fb58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":genus:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":genus:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["genus"] ?? $this->getContext($context, "genus")), "name", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        if ($this->env->isDebug()) {
            $__internal_d539ffbe55174c03a1572b6a294d81d0f6e79721a42a3b9ee560bafe3c00af9cvars = array();
            foreach ($context as $__internal_d539ffbe55174c03a1572b6a294d81d0f6e79721a42a3b9ee560bafe3c00af9ckey => $__internal_d539ffbe55174c03a1572b6a294d81d0f6e79721a42a3b9ee560bafe3c00af9cval) {
                if (!$__internal_d539ffbe55174c03a1572b6a294d81d0f6e79721a42a3b9ee560bafe3c00af9cval instanceof \Twig_Template) {
                    $__internal_d539ffbe55174c03a1572b6a294d81d0f6e79721a42a3b9ee560bafe3c00af9cvars[$__internal_d539ffbe55174c03a1572b6a294d81d0f6e79721a42a3b9ee560bafe3c00af9ckey] = $__internal_d539ffbe55174c03a1572b6a294d81d0f6e79721a42a3b9ee560bafe3c00af9cval;
                }
            }
            \Symfony\Component\VarDumper\VarDumper::dump($__internal_d539ffbe55174c03a1572b6a294d81d0f6e79721a42a3b9ee560bafe3c00af9cvars);
        }
        // line 9
        echo "
    <h2 class=\"genus-name\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["genus"] ?? $this->getContext($context, "genus")), "name", array()), "html", null, true);
        echo "</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["genus"] ?? $this->getContext($context, "genus")), "subFamily", array()), "html", null, true);
        echo "</dd>
                <dt>Known Species:</dt>
                <dd>";
        // line 19
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["genus"] ?? $this->getContext($context, "genus")), "speciesCount", array())), "html", null, true);
        echo "</dd>
                <dt>Fun Fact:</dt>
                <dd>";
        // line 21
        echo twig_escape_filter($this->env, ($context["funFact"] ?? $this->getContext($context, "funFact")), "html", null, true);
        echo "</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var notesUrl = '";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genus_show_notes", array("name" => $this->getAttribute(($context["genus"] ?? $this->getContext($context, "genus")), "name", array()))), "html", null, true);
        echo "';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":genus:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  117 => 34,  108 => 29,  102 => 28,  89 => 21,  84 => 19,  79 => 17,  69 => 10,  66 => 9,  55 => 8,  49 => 7,  36 => 5,  11 => 1,);
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



{% block title %}Genus {{ genus.name }}{% endblock %}

{% block body %}
    {% dump %}

    <h2 class=\"genus-name\">{{ genus.name }}</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>{{ genus.subFamily }}</dd>
                <dt>Known Species:</dt>
                <dd>{{ genus.speciesCount|number_format }}</dd>
                <dt>Fun Fact:</dt>
                <dd>{{ funFact }}</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"{{ asset('js/notes.react.js') }}\"></script>
    <script type=\"text/babel\">
        var notesUrl = '{{ path('genus_show_notes', {'name': genus.name}) }}';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
{% endblock %}
", ":genus:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/11.Edu_Symfony3_blog/app/Resources/views/genus/show.html.twig");
    }
}
