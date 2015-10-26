<?php

/* Static/index.html */
class __TwigTemplate_08135a105dc58450ae536257a9b6aed776878fe52e92bc0e96ca87779c9bf083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Partials/base.html", "Static/index.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a><br/>
\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "published_at", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "
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
\t<div id=\"ajax-response\"></div>
\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("loadArticlesAjax")), "html", null, true);
        echo "\" class='load-more-ajax'>Load more</a>

";
    }

    // line 34
    public function block_js($context, array $blocks = array())
    {
        // line 35
        echo "    <script>
\t    \$('.load-more-ajax').click(function(event) {

   \t\t\tevent.preventDefault();
\t    \t\$.ajax(this.href, {
\t    \t\tdataType: 'json',
\t    \t\tsuccess: function(data) {
\t\t\t         \$('#ajax-response').html(data);
\t\t      \t}
\t    \t});
\t    });
    </script>
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
        return array (  104 => 35,  101 => 34,  94 => 30,  90 => 28,  82 => 26,  78 => 25,  74 => 24,  67 => 23,  63 => 22,  52 => 13,  47 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/* 		<a href='#'>{{article.id}} : {{ article.title }}</a><br/>*/
/* 		{{ article.published_at|date("d/m/Y H:i:s") }}*/
/* 		{{ article.body }}<br/>*/
/* 		{{article.category}}<br/><br/>*/
/* 	{% endfor %}*/
/* */
/* 	<div id="ajax-response"></div>*/
/* 	<a href="{{ url('loadArticlesAjax') }}" class='load-more-ajax'>Load more</a>*/
/* */
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     <script>*/
/* 	    $('.load-more-ajax').click(function(event) {*/
/* */
/*    			event.preventDefault();*/
/* 	    	$.ajax(this.href, {*/
/* 	    		dataType: 'json',*/
/* 	    		success: function(data) {*/
/* 			         $('#ajax-response').html(data);*/
/* 		      	}*/
/* 	    	});*/
/* 	    });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
