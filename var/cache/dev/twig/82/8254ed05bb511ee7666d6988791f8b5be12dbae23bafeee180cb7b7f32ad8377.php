<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact/new.html.twig */
class __TwigTemplate_f59c7f02f752893aea11353ce2af496abe80e949d68643177e3a8be9ce864e5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "- Contact
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Contact</h1>
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 col-md-6 col-xs-12\">
        ";
        // line 12
        echo "\t\t\t<label for=\"firstname\">Nom</label>
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        // line 15
        echo "
\t\t</div>
        <div class=\"col-lg-12 col-md-6 col-xs-12\">
\t\t\t<label for=\"lasttname\">Prénom</label>
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "lastname", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        // line 21
        echo "
\t\t</div>
        <div class=\"col-lg-12 col-md-6 col-xs-12\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        // line 27
        echo "
\t\t</div>
        <div class=\"col-lg-12 col-md-6 col-xs-12\">
\t\t\t<label for=\"subject\">Subject</label>
\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "subject", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        // line 33
        echo "
\t\t</div>
        <div class=\"col-lg-12 col-md-6 col-xs-12\">
\t\t\t<label for=\"subject\">Message</label>
\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "message", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        // line 39
        echo "
\t\t</div>
\t</div>

\t<div class=\"text-center my-3\">
\t\t<button class=\"btn btn-primary\">Envoyer</button>
\t</div>

\t";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 47,  135 => 39,  133 => 37,  127 => 33,  125 => 31,  119 => 27,  117 => 25,  111 => 21,  109 => 19,  103 => 15,  101 => 13,  98 => 12,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}- Contact
{% endblock %}

{% block body %}
\t<h1>Contact</h1>
\t{{ form_start(form) }}
\t<div class=\"row\">
\t\t<div class=\"col-lg-12 col-md-6 col-xs-12\">
        {# Le form de bootstrap 'form_widget' pour setter une table de l'entité ; on y met des attributs de form \"attr\": #}
\t\t\t<label for=\"firstname\">Nom</label>
\t\t\t{{ form_widget(form.firstname, { 
                \"attr\": {\"class\": \"form-control my-2\"}
            }) }}
\t\t</div>
        <div class=\"col-lg-12 col-md-6 col-xs-12\">
\t\t\t<label for=\"lasttname\">Prénom</label>
\t\t\t{{ form_widget(form.lastname, { 
                \"attr\": {\"class\": \"form-control my-2\"}
            }) }}
\t\t</div>
        <div class=\"col-lg-12 col-md-6 col-xs-12\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t{{ form_widget(form.email, { 
                \"attr\": {\"class\": \"form-control my-2\"}
            }) }}
\t\t</div>
        <div class=\"col-lg-12 col-md-6 col-xs-12\">
\t\t\t<label for=\"subject\">Subject</label>
\t\t\t{{ form_widget(form.subject, { 
                \"attr\": {\"class\": \"form-control my-2\"}
            }) }}
\t\t</div>
        <div class=\"col-lg-12 col-md-6 col-xs-12\">
\t\t\t<label for=\"subject\">Message</label>
\t\t\t{{ form_widget(form.message, { 
                \"attr\": {\"class\": \"form-control my-2\"}
            }) }}
\t\t</div>
\t</div>

\t<div class=\"text-center my-3\">
\t\t<button class=\"btn btn-primary\">Envoyer</button>
\t</div>

\t{{ form_end(form) }}
{% endblock %}
", "contact/new.html.twig", "/home/mp/Documents/PROJETS/Job/portfolio/templates/contact/new.html.twig");
    }
}
