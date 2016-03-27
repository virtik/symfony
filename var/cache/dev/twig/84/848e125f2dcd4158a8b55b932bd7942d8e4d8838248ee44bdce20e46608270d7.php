<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fed7d3974bdbd29d668f9a3ba52d1b43b6dede735e94480880004bb3f0c7c46a extends Twig_Template
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
        $__internal_e8ef402607dbdd2d22a751f5b6a973b3574d2ad31f0918479377af70c097ee3e = $this->env->getExtension("native_profiler");
        $__internal_e8ef402607dbdd2d22a751f5b6a973b3574d2ad31f0918479377af70c097ee3e->enter($__internal_e8ef402607dbdd2d22a751f5b6a973b3574d2ad31f0918479377af70c097ee3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8ef402607dbdd2d22a751f5b6a973b3574d2ad31f0918479377af70c097ee3e->leave($__internal_e8ef402607dbdd2d22a751f5b6a973b3574d2ad31f0918479377af70c097ee3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ce0144b51633e948fc8da081dcf9a2a9c56cc7b35381c1bff2468b3a23953ad = $this->env->getExtension("native_profiler");
        $__internal_7ce0144b51633e948fc8da081dcf9a2a9c56cc7b35381c1bff2468b3a23953ad->enter($__internal_7ce0144b51633e948fc8da081dcf9a2a9c56cc7b35381c1bff2468b3a23953ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ce0144b51633e948fc8da081dcf9a2a9c56cc7b35381c1bff2468b3a23953ad->leave($__internal_7ce0144b51633e948fc8da081dcf9a2a9c56cc7b35381c1bff2468b3a23953ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef10b6b6ad3b24e4f4df19e088bed18abc4148e408d5e2239fad116b1694b866 = $this->env->getExtension("native_profiler");
        $__internal_ef10b6b6ad3b24e4f4df19e088bed18abc4148e408d5e2239fad116b1694b866->enter($__internal_ef10b6b6ad3b24e4f4df19e088bed18abc4148e408d5e2239fad116b1694b866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef10b6b6ad3b24e4f4df19e088bed18abc4148e408d5e2239fad116b1694b866->leave($__internal_ef10b6b6ad3b24e4f4df19e088bed18abc4148e408d5e2239fad116b1694b866_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_846f621451dd399ccd428fc0e1aeff3c8d4c991d0e31e7f7b6d1332e4567a263 = $this->env->getExtension("native_profiler");
        $__internal_846f621451dd399ccd428fc0e1aeff3c8d4c991d0e31e7f7b6d1332e4567a263->enter($__internal_846f621451dd399ccd428fc0e1aeff3c8d4c991d0e31e7f7b6d1332e4567a263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_846f621451dd399ccd428fc0e1aeff3c8d4c991d0e31e7f7b6d1332e4567a263->leave($__internal_846f621451dd399ccd428fc0e1aeff3c8d4c991d0e31e7f7b6d1332e4567a263_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
