<?php

/* task/index.html.twig */
class __TwigTemplate_10c1eec378f0967d958d161eed72cc86ad8fd1e28fe27060e79b59a57fca447e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_835d86d77026ad18ee42ad9093d5ea26b5f096bf32cc55ba51fe8eb56e8d7a55 = $this->env->getExtension("native_profiler");
        $__internal_835d86d77026ad18ee42ad9093d5ea26b5f096bf32cc55ba51fe8eb56e8d7a55->enter($__internal_835d86d77026ad18ee42ad9093d5ea26b5f096bf32cc55ba51fe8eb56e8d7a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_835d86d77026ad18ee42ad9093d5ea26b5f096bf32cc55ba51fe8eb56e8d7a55->leave($__internal_835d86d77026ad18ee42ad9093d5ea26b5f096bf32cc55ba51fe8eb56e8d7a55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a408d10a5a790e14884a7a05d2edc3dc23d26b6ca0e88075485f733f59bf834 = $this->env->getExtension("native_profiler");
        $__internal_3a408d10a5a790e14884a7a05d2edc3dc23d26b6ca0e88075485f733f59bf834->enter($__internal_3a408d10a5a790e14884a7a05d2edc3dc23d26b6ca0e88075485f733f59bf834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tasks";
        
        $__internal_3a408d10a5a790e14884a7a05d2edc3dc23d26b6ca0e88075485f733f59bf834->leave($__internal_3a408d10a5a790e14884a7a05d2edc3dc23d26b6ca0e88075485f733f59bf834_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97fed1e84109e88f2ded4913054900569e6809060647c3129b1d3c5083768298 = $this->env->getExtension("native_profiler");
        $__internal_97fed1e84109e88f2ded4913054900569e6809060647c3129b1d3c5083768298->enter($__internal_97fed1e84109e88f2ded4913054900569e6809060647c3129b1d3c5083768298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("main.css"), "html", null, true);
        echo "\">
";
        
        $__internal_97fed1e84109e88f2ded4913054900569e6809060647c3129b1d3c5083768298->leave($__internal_97fed1e84109e88f2ded4913054900569e6809060647c3129b1d3c5083768298_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fae993c83e5a582f369af7d1d1721686774ba3b5150ce0ef093989b8b2815f02 = $this->env->getExtension("native_profiler");
        $__internal_fae993c83e5a582f369af7d1d1721686774ba3b5150ce0ef093989b8b2815f02->enter($__internal_fae993c83e5a582f369af7d1d1721686774ba3b5150ce0ef093989b8b2815f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "'s tasks</h1>

    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo " ( ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dueDate", array()), "Y-m-d"), "html", null, true);
            echo "  )</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
";
        
        $__internal_fae993c83e5a582f369af7d1d1721686774ba3b5150ce0ef093989b8b2815f02->leave($__internal_fae993c83e5a582f369af7d1d1721686774ba3b5150ce0ef093989b8b2815f02_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 17,  85 => 15,  81 => 14,  74 => 11,  68 => 10,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Tasks{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('main.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>{{ name }}'s tasks</h1>*/
/* */
/*     <ul>*/
/*         {% for task in tasks %}*/
/*             <li><a href="{{ path('task_show', {'id': task.id}) }}"> {{ task.name }} ( {{ task.dueDate | date('Y-m-d') }}  )</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* */
