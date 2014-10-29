<?php

/* layout.html */
class __TwigTemplate_f3ae433b204e0b74123c665ae18db3315fc04fff92f30e61029f9cd5a1f057f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">

<head>

<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"keywords\" content=\"商业评论\">
<meta name=\"description\" content=\"没情怀不客观非理性只是黑的商业评论\">
<link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["SITE_URL"]) ? $context["SITE_URL"] : null), "html", null, true);
        echo "/img/hei.png\" type=\"image/png\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["SITE_URL"]) ? $context["SITE_URL"] : null), "html", null, true);
        echo "/css/hei.css\">
<title>只是黑 - 没情怀不客观非理性商业评论</title>

";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "
</head>

<body>
    <div class=\"container\">
\t
\t";
        // line 21
        $this->env->loadTemplate("_header.html")->display($context);
        // line 22
        echo "
\t";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "
\t";
        // line 25
        $this->env->loadTemplate("_footer.html")->display($context);
        // line 26
        echo "
\t</div>
</body>

</html>
";
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        echo " ";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 14,  64 => 26,  62 => 25,  59 => 24,  57 => 23,  54 => 22,  52 => 21,  44 => 15,  42 => 14,  36 => 11,  32 => 10,  21 => 1,);
    }
}
