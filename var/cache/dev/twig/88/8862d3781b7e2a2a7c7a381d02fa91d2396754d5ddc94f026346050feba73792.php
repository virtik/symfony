<?php

/* base.html.twig */
class __TwigTemplate_c8a4f01d3d4f5f3c2524fac1d4cea41f70488e2c39315cf7fcbf29cf43842842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4f649e4b18833a017e4a7b893b015ec64c413371c2246f72a335bbcbe5490cb = $this->env->getExtension("native_profiler");
        $__internal_b4f649e4b18833a017e4a7b893b015ec64c413371c2246f72a335bbcbe5490cb->enter($__internal_b4f649e4b18833a017e4a7b893b015ec64c413371c2246f72a335bbcbe5490cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b4f649e4b18833a017e4a7b893b015ec64c413371c2246f72a335bbcbe5490cb->leave($__internal_b4f649e4b18833a017e4a7b893b015ec64c413371c2246f72a335bbcbe5490cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4290320ac30227a35ac72e55ba1cc9ac0dd9f3a156cf2aca93e437bfac043765 = $this->env->getExtension("native_profiler");
        $__internal_4290320ac30227a35ac72e55ba1cc9ac0dd9f3a156cf2aca93e437bfac043765->enter($__internal_4290320ac30227a35ac72e55ba1cc9ac0dd9f3a156cf2aca93e437bfac043765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4290320ac30227a35ac72e55ba1cc9ac0dd9f3a156cf2aca93e437bfac043765->leave($__internal_4290320ac30227a35ac72e55ba1cc9ac0dd9f3a156cf2aca93e437bfac043765_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df79142df622134db24e0ed387a7c77dd7b3daf7be30178e8197cf997e061168 = $this->env->getExtension("native_profiler");
        $__internal_df79142df622134db24e0ed387a7c77dd7b3daf7be30178e8197cf997e061168->enter($__internal_df79142df622134db24e0ed387a7c77dd7b3daf7be30178e8197cf997e061168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df79142df622134db24e0ed387a7c77dd7b3daf7be30178e8197cf997e061168->leave($__internal_df79142df622134db24e0ed387a7c77dd7b3daf7be30178e8197cf997e061168_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b7aab4d65fcf00382eee9300b8b5ce3034d841da2976e27820f1901c9a19132 = $this->env->getExtension("native_profiler");
        $__internal_2b7aab4d65fcf00382eee9300b8b5ce3034d841da2976e27820f1901c9a19132->enter($__internal_2b7aab4d65fcf00382eee9300b8b5ce3034d841da2976e27820f1901c9a19132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b7aab4d65fcf00382eee9300b8b5ce3034d841da2976e27820f1901c9a19132->leave($__internal_2b7aab4d65fcf00382eee9300b8b5ce3034d841da2976e27820f1901c9a19132_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9cad2f74bd559b73c1f352933a7931b2962c1f3f6cdac436553fc97dff42698 = $this->env->getExtension("native_profiler");
        $__internal_e9cad2f74bd559b73c1f352933a7931b2962c1f3f6cdac436553fc97dff42698->enter($__internal_e9cad2f74bd559b73c1f352933a7931b2962c1f3f6cdac436553fc97dff42698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9cad2f74bd559b73c1f352933a7931b2962c1f3f6cdac436553fc97dff42698->leave($__internal_e9cad2f74bd559b73c1f352933a7931b2962c1f3f6cdac436553fc97dff42698_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
