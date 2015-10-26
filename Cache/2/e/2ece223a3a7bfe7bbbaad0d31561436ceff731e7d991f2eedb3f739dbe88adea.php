<?php

/* Static/index.html */
class __TwigTemplate_66a4538738261139710a0e51e54b81a44cf02a488fcff78af1ec39b44ede94ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Partials/base.html", "Static/index.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Partials/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    HomePage
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>Bonjour ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
\t
\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("contactpage", array("name" => "Anthony"))), "html", null, true);
        echo "\">loooool</a>

\t";
        // line 13
        echo "\t
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore tempora beatae praesentium nobis autem necessitatibus eaque nisi odit voluptates eius alias ipsum suscipit esse dolor explicabo officia, cupiditate fugit doloribus.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore tempora beatae praesentium nobis autem necessitatibus eaque nisi odit voluptates eius alias ipsum suscipit esse dolor explicabo officia, cupiditate fugit doloribus.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore tempora beatae praesentium nobis autem necessitatibus eaque nisi odit voluptates eius alias ipsum suscipit esse dolor explicabo officia, cupiditate fugit doloribus.</p>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore tempora beatae praesentium nobis autem necessitatibus eaque nisi odit voluptates eius alias ipsum suscipit esse dolor explicabo officia, cupiditate fugit doloribus.</p>

\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "\t\t<a href='#'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a><br/>

\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "body", array()), "html", null, true);
            echo "<br/>
\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category", array()), "html", null, true);
            echo "<br/><br/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "Static/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  76 => 26,  72 => 25,  66 => 23,  62 => 22,  51 => 13,  46 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "Partials/base.html" %}*/
/* */
/* {% block title %}*/
/*     HomePage*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<h1>Bonjour {{name}}</h1>*/
/* 	*/
/* 	<a href="{{ url('contactpage', {'name' : 'Anthony'}) }}">loooool</a>*/
/* */
/* 	{# {{ renderController('StaticController', 'contactAction', {'name': 'françois'}) }} #}*/
/* 	*/
/*     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore tempora beatae praesentium nobis autem necessitatibus eaque nisi odit voluptates eius alias ipsum suscipit esse dolor explicabo officia, cupiditate fugit doloribus.</p>*/
/* */
/*     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore tempora beatae praesentium nobis autem necessitatibus eaque nisi odit voluptates eius alias ipsum suscipit esse dolor explicabo officia, cupiditate fugit doloribus.</p>*/
/* */
/*     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore tempora beatae praesentium nobis autem necessitatibus eaque nisi odit voluptates eius alias ipsum suscipit esse dolor explicabo officia, cupiditate fugit doloribus.</p>*/
/*     */
/*     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore tempora beatae praesentium nobis autem necessitatibus eaque nisi odit voluptates eius alias ipsum suscipit esse dolor explicabo officia, cupiditate fugit doloribus.</p>*/
/* */
/* 	{% for article in articles %}*/
/* 		<a href='#'>{{ article.title }}</a><br/>*/
/* */
/* 		{{ article.body }}<br/>*/
/* 		{{article.category}}<br/><br/>*/
/* 	{% endfor %}*/
/* */
/* {% endblock %}*/
