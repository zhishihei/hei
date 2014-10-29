<?php

/* index.html */
class __TwigTemplate_157e25951e0b9eee09c27968b4b8fb7b5a3e8e096b449d197498e535e53d9e2e extends Twig_Template
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

.topic h2 {
\tmargin-bottom: 0px;
}

.topic .meta {
    color: #aaa;
    font-weight: 600;
    padding: 5px 0;
    text-shadow: 0 -1px 0 #000;
\tdisplay: inline-block;
    font-size: 0.8em;
    vertical-align: middle;
}

</style>

";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "
<div class=\"topic markdown content\"> 

";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            echo " 
<h2> <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->urlFor("topic", array("name" => $this->getAttribute($context["topic"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "title", array()), "html", null, true);
            echo "</a> </h2>
<div class=\"meta\">
\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "weibo", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "author", array()), "html", null, true);
            echo "</a>
\t<span><em>";
            // line 33
            echo twig_escape_filter($this->env, timeAgo($this->getAttribute($context["topic"], "date", array())), "html", null, true);
            echo "</em></span>发布
</div>
<p>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "overview", array()), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 37,  87 => 35,  82 => 33,  76 => 32,  69 => 30,  63 => 29,  58 => 26,  55 => 25,  29 => 3,);
    }
}
