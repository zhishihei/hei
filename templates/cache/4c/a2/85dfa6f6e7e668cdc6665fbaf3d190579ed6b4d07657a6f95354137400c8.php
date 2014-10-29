<?php

/* topic.html */
class __TwigTemplate_4ca285dfa6f6e7e668cdc6665fbaf3d190579ed6b4d07657a6f95354137400c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        echo " 

<style>

</style>

";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"markdown content\">
\t";
        // line 14
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "topic.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  44 => 12,  41 => 11,  29 => 3,);
    }
}
