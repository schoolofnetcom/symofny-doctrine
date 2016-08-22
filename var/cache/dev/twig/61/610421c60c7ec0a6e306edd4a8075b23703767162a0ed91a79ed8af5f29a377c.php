<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e6734b6b4821c0faa7d13d5198fed90f927996f05dfcc5224472d2f678f9faf extends Twig_Template
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
        $__internal_d66c37d419a7ab1e82ce74a0907767cd267b12d9b4b856e269383f7ec66d3d0f = $this->env->getExtension("native_profiler");
        $__internal_d66c37d419a7ab1e82ce74a0907767cd267b12d9b4b856e269383f7ec66d3d0f->enter($__internal_d66c37d419a7ab1e82ce74a0907767cd267b12d9b4b856e269383f7ec66d3d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66c37d419a7ab1e82ce74a0907767cd267b12d9b4b856e269383f7ec66d3d0f->leave($__internal_d66c37d419a7ab1e82ce74a0907767cd267b12d9b4b856e269383f7ec66d3d0f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d67d29a94cb75e927817013e141820e93a0b88d358a82efff02399f35ef20894 = $this->env->getExtension("native_profiler");
        $__internal_d67d29a94cb75e927817013e141820e93a0b88d358a82efff02399f35ef20894->enter($__internal_d67d29a94cb75e927817013e141820e93a0b88d358a82efff02399f35ef20894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d67d29a94cb75e927817013e141820e93a0b88d358a82efff02399f35ef20894->leave($__internal_d67d29a94cb75e927817013e141820e93a0b88d358a82efff02399f35ef20894_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cbfa82f18de6c81d56ce5497805a10bc91bf648bf171e42359ac899c34355a5b = $this->env->getExtension("native_profiler");
        $__internal_cbfa82f18de6c81d56ce5497805a10bc91bf648bf171e42359ac899c34355a5b->enter($__internal_cbfa82f18de6c81d56ce5497805a10bc91bf648bf171e42359ac899c34355a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cbfa82f18de6c81d56ce5497805a10bc91bf648bf171e42359ac899c34355a5b->leave($__internal_cbfa82f18de6c81d56ce5497805a10bc91bf648bf171e42359ac899c34355a5b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ae247a9bfaa620daa1e5819279317e4c5e6d5c8872040f0a8ce441104b01d3c = $this->env->getExtension("native_profiler");
        $__internal_3ae247a9bfaa620daa1e5819279317e4c5e6d5c8872040f0a8ce441104b01d3c->enter($__internal_3ae247a9bfaa620daa1e5819279317e4c5e6d5c8872040f0a8ce441104b01d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ae247a9bfaa620daa1e5819279317e4c5e6d5c8872040f0a8ce441104b01d3c->leave($__internal_3ae247a9bfaa620daa1e5819279317e4c5e6d5c8872040f0a8ce441104b01d3c_prof);

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
