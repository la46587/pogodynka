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

/* weather_api/index.csv.twig */
class __TwigTemplate_282eddb6100db0a3f4d3f468e299c1b4 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather_api/index.csv.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather_api/index.csv.twig"));

        // line 1
        yield "city,country,date,temperature,humidity,pressure,description
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["forecasts"]) || array_key_exists("forecasts", $context) ? $context["forecasts"] : (function () { throw new RuntimeError('Variable "forecasts" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forecast"]) {
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 3, $this->source); })()), "html", null, true);
            yield ",";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 4, $this->source); })()), "html", null, true);
            yield ",";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forecast"], "getDate", [], "method", false, false, false, 5), "format", ["Y-m-d"], "method", false, false, false, 5), "html", null, true);
            yield ",";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forecast"], "getTemperature", [], "method", false, false, false, 6), "html", null, true);
            yield ",
";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forecast"], "getHumidity", [], "method", false, false, false, 8), "html", null, true);
            yield ",";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forecast"], "getPressure", [], "method", false, false, false, 9), "html", null, true);
            yield ",";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["forecast"], "getDescription", [], "method", false, false, false, 10), "html", null, true);
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['forecast'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "weather_api/index.csv.twig";
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
        return array (  74 => 10,  71 => 9,  68 => 8,  64 => 6,  61 => 5,  58 => 4,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("city,country,date,temperature,humidity,pressure,description
{% for forecast in forecasts %}
{{ city }},
{{- country }},
{{- forecast.getDate().format('Y-m-d') }},
{{- forecast.getTemperature() }},
{#{{- forecast.getFahrenheit() }},#}
{{- forecast.getHumidity() }},
{{- forecast.getPressure() }},
{{- forecast.getDescription() }}
{% endfor %}
", "weather_api/index.csv.twig", "C:\\Users\\insomnia\\Desktop\\pogodynka\\templates\\weather_api\\index.csv.twig");
    }
}
