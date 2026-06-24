<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* registration/register.html.twig */
class __TwigTemplate_d977d2114c98a5858168f903ea38f0e0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1 class=\"mb-3 font-weight-normal\">Inscription</h1>

    ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 8, $this->source); })()), 'errors');
        yield "

    ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), 'row');
        yield "
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "plainPassword", [], "any", false, false, false, 12), 'row', ["label" => "Password"]);
        // line 14
        yield "
        <ul id=\"password-rules\">
            <li id=\"rule-length\">❌ Au moins 8 caractères</li>
            <li id=\"rule-uppercase\">❌ Une majuscule</li>
            <li id=\"rule-number\">❌ Un chiffre</li>
            <li id=\"rule-special\">❌ Un caractère spécial</li>
        </ul>
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "agreeTerms", [], "any", false, false, false, 21), 'row');
        yield "

        <button type=\"submit\" class=\"btn\">S\x27inscrire</button>
    ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'form_end');
        yield "

    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, () => {

            const registration_form_plainPassword = document.querySelector(
                \x27#registration_form_plainPassword\x27
            );

            const rules = {
                length: document.getElementById(\x27rule-length\x27),
                uppercase: document.getElementById(\x27rule-uppercase\x27),
                number: document.getElementById(\x27rule-number\x27),
                special: document.getElementById(\x27rule-special\x27)
            };

            registration_form_plainPassword.addEventListener(\x27input\x27, () => {

                const value = registration_form_plainPassword.value;

                updateRule(
                    rules.length,
                    value.length >= 8,
                    \x27Au moins 8 caractères\x27
                );

                updateRule(
                    rules.uppercase,
                    /[A-Z]/.test(value),
                    \x27Une majuscule\x27
                );

                updateRule(
                    rules.number,
                    /\\d/.test(value),
                    \x27Un chiffre\x27
                );

                updateRule(
                    rules.special,
                    /[^A-Za-z0-9]/.test(value),
                    \x27Un caractère spécial\x27
                );
            });

            function updateRule(element, valid, text) {
                element.textContent =
                    (valid ? \x27✅ \x27 : \x27❌ \x27) + text;
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  134 => 24,  128 => 21,  119 => 14,  117 => 12,  113 => 11,  109 => 10,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <h1 class=\"mb-3 font-weight-normal\">Inscription</h1>

    {{ form_errors(registrationForm) }}

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.email) }}
        {{ form_row(registrationForm.plainPassword, {
            label: \x27Password\x27
        }) }}
        <ul id=\"password-rules\">
            <li id=\"rule-length\">❌ Au moins 8 caractères</li>
            <li id=\"rule-uppercase\">❌ Une majuscule</li>
            <li id=\"rule-number\">❌ Un chiffre</li>
            <li id=\"rule-special\">❌ Un caractère spécial</li>
        </ul>
        {{ form_row(registrationForm.agreeTerms) }}

        <button type=\"submit\" class=\"btn\">S\x27inscrire</button>
    {{ form_end(registrationForm) }}

    <script>
        document.addEventListener(\x27DOMContentLoaded\x27, () => {

            const registration_form_plainPassword = document.querySelector(
                \x27#registration_form_plainPassword\x27
            );

            const rules = {
                length: document.getElementById(\x27rule-length\x27),
                uppercase: document.getElementById(\x27rule-uppercase\x27),
                number: document.getElementById(\x27rule-number\x27),
                special: document.getElementById(\x27rule-special\x27)
            };

            registration_form_plainPassword.addEventListener(\x27input\x27, () => {

                const value = registration_form_plainPassword.value;

                updateRule(
                    rules.length,
                    value.length >= 8,
                    \x27Au moins 8 caractères\x27
                );

                updateRule(
                    rules.uppercase,
                    /[A-Z]/.test(value),
                    \x27Une majuscule\x27
                );

                updateRule(
                    rules.number,
                    /\\d/.test(value),
                    \x27Un chiffre\x27
                );

                updateRule(
                    rules.special,
                    /[^A-Za-z0-9]/.test(value),
                    \x27Un caractère spécial\x27
                );
            });

            function updateRule(element, valid, text) {
                element.textContent =
                    (valid ? \x27✅ \x27 : \x27❌ \x27) + text;
            }
        });
    </script>
{% endblock %}
", "registration/register.html.twig", "/app/templates/registration/register.html.twig");
    }
}
