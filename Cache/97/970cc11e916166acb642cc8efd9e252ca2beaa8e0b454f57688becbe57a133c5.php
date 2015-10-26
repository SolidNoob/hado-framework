<?php

/* Static/contact.html */
class __TwigTemplate_5797487ce9227a021a53c8d2ae1bd37f30fafaf86634889c59f292e3fdadfde8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Partials/base.html", "Static/contact.html", 1);
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
        echo "    Contact page
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>Contact page!</h1>
\t<h2>Bonjour ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " !!!</h2>

\t
\t <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("homepage")), "html", null, true);
        echo "\">loooool</a>
    <ul>
\t    <li>lorem</li>
\t    <li>ipsum</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "Static/contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  43 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "Partials/base.html" %}*/
/* */
/* {% block title %}*/
/*     Contact page*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<h1>Contact page!</h1>*/
/* 	<h2>Bonjour {{name}} !!!</h2>*/
/* */
/* 	*/
/* 	 <a href="{{ url('homepage') }}">loooool</a>*/
/*     <ul>*/
/* 	    <li>lorem</li>*/
/* 	    <li>ipsum</li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* */
