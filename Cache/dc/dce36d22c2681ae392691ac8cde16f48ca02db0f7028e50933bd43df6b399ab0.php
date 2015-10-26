<?php

/* Partials/articles.html */
class __TwigTemplate_bb4a549eae6bc5597a99e04e78483147729927263cfa0532e40381edc1d71083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 2
            echo "\t<a href='#'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a><br/>
\t";
            // line 3
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "published_at", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "
\t";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "body", array()), "html", null, true);
            echo "<br/>
\t";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category", array()), "html", null, true);
            echo "<br/><br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Partials/articles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  30 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for article in articles %}*/
/* 	<a href='#'>{{article.id}} : {{ article.title }}</a><br/>*/
/* 	{{ article.published_at|date("d/m/Y H:i:s") }}*/
/* 	{{ article.body }}<br/>*/
/* 	{{article.category}}<br/><br/>*/
/* {% endfor %}*/
