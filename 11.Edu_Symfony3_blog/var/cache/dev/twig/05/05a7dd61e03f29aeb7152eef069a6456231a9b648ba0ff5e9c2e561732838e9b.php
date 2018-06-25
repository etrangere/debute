<?php

/* genus/show.html.twig */
class __TwigTemplate_030f1c38d9d2c3973987457a55b53db107102e3cabbac684270a8bd7493d89fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/show.html.twig", 1);
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
        $__internal_39c1e87c8f2b5aec2f90fe06dc37cf3d5896e4fb399b4ca62232a5ec680bf3ee = $this->env->getExtension("native_profiler");
        $__internal_39c1e87c8f2b5aec2f90fe06dc37cf3d5896e4fb399b4ca62232a5ec680bf3ee->enter($__internal_39c1e87c8f2b5aec2f90fe06dc37cf3d5896e4fb399b4ca62232a5ec680bf3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c1e87c8f2b5aec2f90fe06dc37cf3d5896e4fb399b4ca62232a5ec680bf3ee->leave($__internal_39c1e87c8f2b5aec2f90fe06dc37cf3d5896e4fb399b4ca62232a5ec680bf3ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa5c0b1dbca6da6ab31423de0f0a6329560f6e6ddb09481e2326bf42c259bd39 = $this->env->getExtension("native_profiler");
        $__internal_fa5c0b1dbca6da6ab31423de0f0a6329560f6e6ddb09481e2326bf42c259bd39->enter($__internal_fa5c0b1dbca6da6ab31423de0f0a6329560f6e6ddb09481e2326bf42c259bd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_fa5c0b1dbca6da6ab31423de0f0a6329560f6e6ddb09481e2326bf42c259bd39->leave($__internal_fa5c0b1dbca6da6ab31423de0f0a6329560f6e6ddb09481e2326bf42c259bd39_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d42aa232e1abae92a4c5b6f6b25ff4daff9fc8194b7b11ae40e70b5de91d65e = $this->env->getExtension("native_profiler");
        $__internal_0d42aa232e1abae92a4c5b6f6b25ff4daff9fc8194b7b11ae40e70b5de91d65e->enter($__internal_0d42aa232e1abae92a4c5b6f6b25ff4daff9fc8194b7b11ae40e70b5de91d65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>Octopodinae</dd>
                <dt>Known Species:</dt>
                <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, "99999"), "html", null, true);
        echo "</dd>
                <dt>Fun Fact:</dt>
                <dd>";
        // line 17
        echo (isset($context["funFact"]) ? $context["funFact"] : $this->getContext($context, "funFact"));
        echo "</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
";
        
        $__internal_0d42aa232e1abae92a4c5b6f6b25ff4daff9fc8194b7b11ae40e70b5de91d65e->leave($__internal_0d42aa232e1abae92a4c5b6f6b25ff4daff9fc8194b7b11ae40e70b5de91d65e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6281606d5ae838fe3bbca630d16bd707c12e35a671bf6e9d4e65984f485f6f63 = $this->env->getExtension("native_profiler");
        $__internal_6281606d5ae838fe3bbca630d16bd707c12e35a671bf6e9d4e65984f485f6f63->enter($__internal_6281606d5ae838fe3bbca630d16bd707c12e35a671bf6e9d4e65984f485f6f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var notesUrl = '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genus_show_notes", array("genusName" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
";
        
        $__internal_6281606d5ae838fe3bbca630d16bd707c12e35a671bf6e9d4e65984f485f6f63->leave($__internal_6281606d5ae838fe3bbca630d16bd707c12e35a671bf6e9d4e65984f485f6f63_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  101 => 30,  92 => 25,  86 => 24,  73 => 17,  68 => 15,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Genus {{ name }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="genus-name">{{ name }}</h2>*/
/* */
/*     <div class="sea-creature-container">*/
/*         <div class="genus-photo"></div>*/
/*         <div class="genus-details">*/
/*             <dl class="genus-details-list">*/
/*                 <dt>Subfamily:</dt>*/
/*                 <dd>Octopodinae</dd>*/
/*                 <dt>Known Species:</dt>*/
/*                 <dd>{{ '99999'|number_format }}</dd>*/
/*                 <dt>Fun Fact:</dt>*/
/*                 <dd>{{ funFact|raw }}</dd>*/
/*             </dl>*/
/*         </div>*/
/*     </div>*/
/*     <div id="js-notes-wrapper"></div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>*/
/* */
/*     <script type="text/babel" src="{{ asset('js/notes.react.js') }}"></script>*/
/*     <script type="text/babel">*/
/*         var notesUrl = '{{ path('genus_show_notes', {'genusName': name}) }}';*/
/* */
/*         ReactDOM.render(*/
/*           <NoteSection url={notesUrl} />,*/
/*           document.getElementById('js-notes-wrapper')*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
