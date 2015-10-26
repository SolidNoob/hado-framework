<?php

/* Partials/base.html */
class __TwigTemplate_d1abfbc91044f5eb413dfbaa82b47fd3e49509a35923b12788200958248ab776 extends Twig_Template
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
            'js' => array($this, 'block_js'),
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
    <script src=\"public/js/app.min.js\"></script>
    ";
        // line 31
        $this->displayBlock('js', $context, $blocks);
        // line 33
        echo "    </body>
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

    // line 31
    public function block_js($context, array $blocks = array())
    {
        // line 32
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Partials/base.html";
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  96 => 31,  91 => 24,  88 => 23,  83 => 16,  73 => 9,  70 => 8,  67 => 7,  62 => 33,  60 => 31,  53 => 26,  51 => 23,  41 => 16,  34 => 11,  32 => 7,  24 => 1,);
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
/*     <script src="public/js/app.min.js"></script>*/
/*     {% block js %}*/
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/
