<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7f303448768c05a73a602305bcc1ceb6cb7edcc8e010b8685d04ff411737f69f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b6348c4f233f4a4332c2fa10e4ec87e705c86406bba97704e993df804dd89d8f = $this->env->getExtension("native_profiler");
        $__internal_b6348c4f233f4a4332c2fa10e4ec87e705c86406bba97704e993df804dd89d8f->enter($__internal_b6348c4f233f4a4332c2fa10e4ec87e705c86406bba97704e993df804dd89d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6348c4f233f4a4332c2fa10e4ec87e705c86406bba97704e993df804dd89d8f->leave($__internal_b6348c4f233f4a4332c2fa10e4ec87e705c86406bba97704e993df804dd89d8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de9cdac844f69da6dbe01fd67ea8d1cd64659e6b0369a124aaa92d47d6351b68 = $this->env->getExtension("native_profiler");
        $__internal_de9cdac844f69da6dbe01fd67ea8d1cd64659e6b0369a124aaa92d47d6351b68->enter($__internal_de9cdac844f69da6dbe01fd67ea8d1cd64659e6b0369a124aaa92d47d6351b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_de9cdac844f69da6dbe01fd67ea8d1cd64659e6b0369a124aaa92d47d6351b68->leave($__internal_de9cdac844f69da6dbe01fd67ea8d1cd64659e6b0369a124aaa92d47d6351b68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8472bee98c76bb251b62cd68bb95d5bd0b0e721ce0109f0f237b6ddfb21c420d = $this->env->getExtension("native_profiler");
        $__internal_8472bee98c76bb251b62cd68bb95d5bd0b0e721ce0109f0f237b6ddfb21c420d->enter($__internal_8472bee98c76bb251b62cd68bb95d5bd0b0e721ce0109f0f237b6ddfb21c420d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8472bee98c76bb251b62cd68bb95d5bd0b0e721ce0109f0f237b6ddfb21c420d->leave($__internal_8472bee98c76bb251b62cd68bb95d5bd0b0e721ce0109f0f237b6ddfb21c420d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
