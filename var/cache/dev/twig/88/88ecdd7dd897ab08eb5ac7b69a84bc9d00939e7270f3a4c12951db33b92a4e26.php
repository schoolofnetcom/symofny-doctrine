<?php

/* base.html.twig */
class __TwigTemplate_a90423e87f30522d5e3770794d6cd8b17d2065c04b023e428a342992b710e046 extends Twig_Template
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
        $__internal_109500c6fc40ee11d2ac4477e714b5ef5e14fa3678aa83c326676c38a1438459 = $this->env->getExtension("native_profiler");
        $__internal_109500c6fc40ee11d2ac4477e714b5ef5e14fa3678aa83c326676c38a1438459->enter($__internal_109500c6fc40ee11d2ac4477e714b5ef5e14fa3678aa83c326676c38a1438459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_109500c6fc40ee11d2ac4477e714b5ef5e14fa3678aa83c326676c38a1438459->leave($__internal_109500c6fc40ee11d2ac4477e714b5ef5e14fa3678aa83c326676c38a1438459_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be57507e3f575fd387daf7380b3aa475c012bc979956d0ef82d36fcbf159566d = $this->env->getExtension("native_profiler");
        $__internal_be57507e3f575fd387daf7380b3aa475c012bc979956d0ef82d36fcbf159566d->enter($__internal_be57507e3f575fd387daf7380b3aa475c012bc979956d0ef82d36fcbf159566d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_be57507e3f575fd387daf7380b3aa475c012bc979956d0ef82d36fcbf159566d->leave($__internal_be57507e3f575fd387daf7380b3aa475c012bc979956d0ef82d36fcbf159566d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c35be29e959bcf5bc03b43d1e3c24b23a5f1b1354aa5556aa4bc6a074b88759 = $this->env->getExtension("native_profiler");
        $__internal_8c35be29e959bcf5bc03b43d1e3c24b23a5f1b1354aa5556aa4bc6a074b88759->enter($__internal_8c35be29e959bcf5bc03b43d1e3c24b23a5f1b1354aa5556aa4bc6a074b88759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        ";
        
        $__internal_8c35be29e959bcf5bc03b43d1e3c24b23a5f1b1354aa5556aa4bc6a074b88759->leave($__internal_8c35be29e959bcf5bc03b43d1e3c24b23a5f1b1354aa5556aa4bc6a074b88759_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_99261d0753d1a3c8500567e463cecc7b50401210bf144b47933f4aafa2f0fdcc = $this->env->getExtension("native_profiler");
        $__internal_99261d0753d1a3c8500567e463cecc7b50401210bf144b47933f4aafa2f0fdcc->enter($__internal_99261d0753d1a3c8500567e463cecc7b50401210bf144b47933f4aafa2f0fdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99261d0753d1a3c8500567e463cecc7b50401210bf144b47933f4aafa2f0fdcc->leave($__internal_99261d0753d1a3c8500567e463cecc7b50401210bf144b47933f4aafa2f0fdcc_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de00e376bad38b379c6c895af1e3fe1f3536f9912048e5930c5b707cd917351f = $this->env->getExtension("native_profiler");
        $__internal_de00e376bad38b379c6c895af1e3fe1f3536f9912048e5930c5b707cd917351f->enter($__internal_de00e376bad38b379c6c895af1e3fe1f3536f9912048e5930c5b707cd917351f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de00e376bad38b379c6c895af1e3fe1f3536f9912048e5930c5b707cd917351f->leave($__internal_de00e376bad38b379c6c895af1e3fe1f3536f9912048e5930c5b707cd917351f_prof);

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
        return array (  97 => 14,  86 => 13,  77 => 7,  71 => 6,  59 => 5,  50 => 15,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
