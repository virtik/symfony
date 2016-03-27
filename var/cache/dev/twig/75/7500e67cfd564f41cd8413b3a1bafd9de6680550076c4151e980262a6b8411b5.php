<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c3b43b86dcd26a19a30b745a82717290cce8e2c93806f2a53a382ec15d86af09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6186c3fd47aa56564e882f82f59521abc7c58339503c696624f1deb281503035 = $this->env->getExtension("native_profiler");
        $__internal_6186c3fd47aa56564e882f82f59521abc7c58339503c696624f1deb281503035->enter($__internal_6186c3fd47aa56564e882f82f59521abc7c58339503c696624f1deb281503035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6186c3fd47aa56564e882f82f59521abc7c58339503c696624f1deb281503035->leave($__internal_6186c3fd47aa56564e882f82f59521abc7c58339503c696624f1deb281503035_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_89392997bd75b4881d27621daa0695629a4fd985e70a112131edca5a058fc477 = $this->env->getExtension("native_profiler");
        $__internal_89392997bd75b4881d27621daa0695629a4fd985e70a112131edca5a058fc477->enter($__internal_89392997bd75b4881d27621daa0695629a4fd985e70a112131edca5a058fc477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_89392997bd75b4881d27621daa0695629a4fd985e70a112131edca5a058fc477->leave($__internal_89392997bd75b4881d27621daa0695629a4fd985e70a112131edca5a058fc477_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f30ed41d52cf8592736f40f75e9713e0a19ff00f94eabeaa55ee1c6c484d0dc = $this->env->getExtension("native_profiler");
        $__internal_2f30ed41d52cf8592736f40f75e9713e0a19ff00f94eabeaa55ee1c6c484d0dc->enter($__internal_2f30ed41d52cf8592736f40f75e9713e0a19ff00f94eabeaa55ee1c6c484d0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f30ed41d52cf8592736f40f75e9713e0a19ff00f94eabeaa55ee1c6c484d0dc->leave($__internal_2f30ed41d52cf8592736f40f75e9713e0a19ff00f94eabeaa55ee1c6c484d0dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7229a01585e0cd701323161249e6bdfebd33fbdbf7b8c86c918b28afbd855ff5 = $this->env->getExtension("native_profiler");
        $__internal_7229a01585e0cd701323161249e6bdfebd33fbdbf7b8c86c918b28afbd855ff5->enter($__internal_7229a01585e0cd701323161249e6bdfebd33fbdbf7b8c86c918b28afbd855ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7229a01585e0cd701323161249e6bdfebd33fbdbf7b8c86c918b28afbd855ff5->leave($__internal_7229a01585e0cd701323161249e6bdfebd33fbdbf7b8c86c918b28afbd855ff5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
