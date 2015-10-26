<?php

/* Partials/base.html */
class __TwigTemplate_300467580c7d648280a050c5cd7e42660ef56ff02e7b16f8ada558a58a787292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div id=\"content\">";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
            </div>
        </div>

        <div class=\"row\">
            <div id=\"footer\">
                <div class=\"col-xs-12\">
                    ";
        // line 23
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "                </div>
            </div>
        </div>
    </div>
    </body>
</html>";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"public/css/app.min.css\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " - HadoFramework</title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        // line 24
        echo "                        &copy; Copyright 2015
                    ";
    }

    public function getTemplateName()
    {
        return "Partials/base.html";
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  82 => 23,  77 => 16,  67 => 9,  64 => 8,  61 => 7,  52 => 26,  50 => 23,  40 => 16,  33 => 11,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     {% block head %}*/
/*         <link rel="stylesheet" href="public/css/app.min.css" />*/
/*         <title>{% block title %}{% endblock %} - HadoFramework</title>*/
/*     {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <div id="content">{% block content %}{% endblock %}</div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div id="footer">*/
/*                 <div class="col-xs-12">*/
/*                     {% block footer %}*/
/*                         &copy; Copyright 2015*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     </body>*/
/* </html>*/
