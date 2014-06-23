<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_0010675645170168b02bc39c99b8eafd extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  547 => 57,  543 => 56,  538 => 55,  535 => 54,  528 => 52,  524 => 17,  518 => 15,  514 => 14,  510 => 13,  506 => 12,  501 => 11,  494 => 15,  490 => 14,  486 => 13,  482 => 12,  477 => 11,  471 => 15,  467 => 14,  463 => 13,  459 => 12,  454 => 11,  448 => 15,  444 => 14,  440 => 13,  436 => 12,  431 => 11,  425 => 15,  421 => 14,  417 => 13,  413 => 12,  408 => 11,  402 => 15,  398 => 14,  394 => 13,  390 => 12,  385 => 11,  379 => 15,  375 => 14,  371 => 13,  367 => 12,  362 => 11,  356 => 15,  352 => 14,  348 => 13,  344 => 12,  339 => 11,  333 => 15,  329 => 14,  325 => 13,  321 => 12,  316 => 11,  310 => 15,  306 => 14,  302 => 13,  298 => 12,  293 => 11,  287 => 15,  283 => 14,  279 => 13,  275 => 12,  270 => 11,  264 => 15,  260 => 14,  256 => 13,  252 => 12,  247 => 11,  241 => 15,  237 => 14,  233 => 13,  229 => 12,  224 => 11,  219 => 10,  216 => 9,  210 => 7,  189 => 117,  185 => 116,  181 => 115,  173 => 113,  169 => 112,  155 => 101,  151 => 100,  147 => 99,  143 => 98,  139 => 97,  99 => 59,  96 => 54,  94 => 52,  80 => 41,  76 => 40,  72 => 39,  68 => 38,  64 => 37,  60 => 36,  36 => 9,  31 => 7,  23 => 1,  242 => 181,  235 => 177,  220 => 165,  213 => 161,  199 => 150,  192 => 146,  177 => 114,  170 => 130,  56 => 19,  41 => 7,  38 => 18,  35 => 5,  29 => 3,);
    }
}
