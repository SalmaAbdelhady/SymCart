<?php

/* WebProfilerBundle:Collector:time.html.twig */
class __TwigTemplate_65f9d055dcf986e066ee356c4e9380fb4900c91bf2ece8760f8454cc24514714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_eaf480a5b2e17152f96d859bb4013bb014cafdd5aa3275f579ecfb67a6cc290d"] = $this;
        // line 5
        if ((!array_key_exists("colors", $context))) {
            // line 6
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"))) ? (sprintf("%.0f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration"))) : ("n/a"));
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        <img width=\"16\" height=\"28\" alt=\"Time\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=\" />
        <span>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAACz0lEQVR42t2XXWhSYRjHc+pyWrC10e66qKggiGoF0Qh1SBPFDxCcX00yrG6EImFsRhAuvUjwQgZB1EUICYEkgRJGB0QmKMNGEYx1URYEg2w6amWY/YUXXH7Ms9M5RAk/PByf8/58P573ec+2Wq32V/g3xFKpdB3UQBV8JVTJvXUuxbXN+P96TODNzMzsNJvNo3UCgYCYszmmKKrPYrE4NBrNU7lcvtY8xGNjYyWtVvvEZrPZES9kQyy02+3nx8fH3xFJV5RK5RuHw2GqP8tInEgk+g0GwyN6wlZMJtPdfD6/Y0viVCo1iKHLMpM20Ov1FNqT0BWLsWhiXdImDyiQ7ybHVN1HnKibWHgNHxr5egXI6t90ej49PX0BsYKO4qWlpT1qtXqFhlhGnpHREWPaPiB2dydxL/7ZTRLMnpjg8/lcpNct4mGr1fqSK7HT6UwhfleLuFwuH1EoFBWuxDqd7jPiDzSLe+Lx+AQJYl9MKBQKZ+pb7kaxKBKJXGUgPgqCgGrQOc3S6fQEfuNvFEtisdgUA3E/kcsadE6zhYUFG9lKG2LcvMxA3EKnKUBx+bm6uqptFvcCtUql+kECWcdoNH6BQw56fltcYNTtdr/nSuzxeJbhONkujw9Fo9EYV+JkMvkAjv3txEOVSuUSytk3tqWoz2to/xwYaCcWgtPI5+dsSrGo6mn0GG2PtG6ZDYbBRb/f/5EtcSgUeos2J8HgpmURHMaQz6JglP5U6vV6P6G962Sr5HcUE/rAKXB7bm5uhenwhsPheim8BUa6HwQaSMjSv5HNZl+gstDOb5fL9X1xcTGLZ6fAMSDe6ilTBA4CO7iXyWReB4PBMo5F1WYZymkVc1nK5XKvEHsHWMA+sJ3p8VYAhkjvJ4EPRMCzYrE4XyqV5nGdBA/BLLCC46Tu8tl4kxCAAdKLE0AGzhKkZB73kqIh4PI1lQf4BB6TNn4B8KR3FN9bp4MAAAAASUVORK5CYII=\" alt=\"Timeline\"></span>
    <strong>Timeline</strong>
</span>
";
    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        // line 41
        echo "    <h2>Timeline</h2>
    ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"))) {
            // line 43
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 51
    public function block_panelContent($context, array $blocks = array())
    {
        // line 52
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inittime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"1\" min=\"0\"> ms</td>
            </tr>
        </table>
    </form>

    <h3>
        ";
        // line 71
        echo (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) ? ("Request") : ("Main Request"));
        echo "
        <small>
            - ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "duration"), "html", null, true);
        echo " ms
            ";
        // line 74
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) {
            // line 75
            echo "                - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"), "panel" => "time")), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 77
        echo "        </small>
    </h3>

    ";
        // line 80
        echo $context["__internal_eaf480a5b2e17152f96d859bb4013bb014cafdd5aa3275f579ecfb67a6cc290d"]->getdisplay_timeline(("timeline_" . (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo "

    ";
        // line 82
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 83
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 84
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "time"), "method"), "events");
                // line 85
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "request"), "method"), "requestattributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__"), "duration"), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 90
                echo $context["__internal_eaf480a5b2e17152f96d859bb4013bb014cafdd5aa3275f579ecfb67a6cc290d"]->getdisplay_timeline(("timeline_" . $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token")), (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    ";
        }
        // line 93
        echo "
    <script>";
        // line 94
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                }

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            }
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param  string selector a CSS-selector-compatible query string.
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors  = ";
        // line 136
        echo twig_jsonencode_filter((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo ",
                _storagePrefix  = 'timeline/',
                _threshold      = 1,
                _requests       = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is.
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is.
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds).
             * @param width     the width of the canvas.
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId    = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent  = 38,
                    colors = _drawingColors,
                    space  = 10.5,
                    ratio  = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx    = canvas.getContext(\"2d\"),
                    backingStoreRatio,
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio  = window.devicePixelRatio          == \"undefined\" ? 1 : window.devicePixelRatio;
                backingStoreRatio = ctx.webkitBackingStorePixelRatio == \"undefined\" ? 1 : ctx.webkitBackingStorePixelRatio;
                scaleRatio        = devicePixelRatio / 1;

                canvasHeight += gapPerEvent * drawableEvents.length;

                canvas.width  = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#dfdfdf\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            ctx.fillStyle = colors.child_sections;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle   = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle   = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle   = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#dfdfdf\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \" ~ \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / ~ \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"12px sans-serif\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"10px sans-serif\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width     = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (threshold === null) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        };

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 404
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "endtime")), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 406
        echo $context["__internal_eaf480a5b2e17152f96d859bb4013bb014cafdd5aa3275f579ecfb67a6cc290d"]->getdump_request_data((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), (isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "origin"));
        echo "

";
        // line 408
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 409
            echo "                ,
";
            // line 410
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 411
                echo $context["__internal_eaf480a5b2e17152f96d859bb4013bb014cafdd5aa3275f579ecfb67a6cc290d"]->getdump_request_data($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "time"), "method"), "events"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "origin"));
                echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 414
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl  = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize                 = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick  = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup  = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 446
        echo "</script>
";
    }

    // line 449
    public function getdump_request_data($_token = null, $_profile = null, $_events = null, $_origin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $_token,
            "profile" => $_profile,
            "events" => $_events,
            "origin" => $_origin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 451
            $context["__internal_193c09a9b0bfaeec778641897164de2eaa6754b53d9d98ec757d92c7eecbcc5c"] = $this;
            // line 452
            echo "                {
                    \"id\": \"";
            // line 453
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 454
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__"), "origin") - (isset($context["origin"]) ? $context["origin"] : $this->getContext($context, "origin")))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 456
            echo $context["__internal_193c09a9b0bfaeec778641897164de2eaa6754b53d9d98ec757d92c7eecbcc5c"]->getdump_events((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            echo "
                    ]
                }
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 462
    public function getdump_events($_events = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $_events,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 464
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 465
                if (("__section__" != (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) {
                    // line 466
                    echo "                        {
                            \"name\": \"";
                    // line 467
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 468
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category"), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 469
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "origin")), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 470
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "starttime")), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 471
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endtime")), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 472
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "duration")), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 473
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "memory") / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 475
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "periods"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 476
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "starttime")), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "endtime")), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 478
                    echo "]
                        }";
                    // line 479
                    echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 485
    public function getdisplay_timeline($_id = null, $_events = null, $_colors = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "events" => $_events,
            "colors" => $_colors,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 486
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 488
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 489
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 491
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 492
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 485,  727 => 476,  702 => 472,  698 => 471,  690 => 469,  686 => 468,  677 => 465,  634 => 456,  517 => 404,  386 => 159,  357 => 123,  672 => 345,  664 => 342,  651 => 337,  622 => 452,  609 => 319,  606 => 449,  602 => 317,  591 => 309,  552 => 293,  541 => 290,  533 => 284,  519 => 278,  505 => 270,  489 => 262,  483 => 258,  465 => 249,  397 => 213,  383 => 207,  367 => 155,  297 => 104,  205 => 108,  462 => 202,  446 => 197,  431 => 189,  394 => 168,  549 => 411,  508 => 165,  491 => 157,  487 => 156,  449 => 198,  436 => 235,  267 => 101,  692 => 399,  652 => 376,  645 => 369,  631 => 327,  625 => 453,  615 => 354,  583 => 334,  575 => 328,  569 => 300,  565 => 324,  500 => 291,  495 => 158,  452 => 268,  282 => 161,  763 => 244,  748 => 242,  745 => 241,  736 => 238,  734 => 237,  714 => 232,  703 => 226,  661 => 380,  656 => 378,  653 => 218,  595 => 205,  581 => 305,  578 => 200,  573 => 198,  560 => 187,  534 => 162,  528 => 173,  499 => 268,  475 => 169,  473 => 254,  429 => 188,  420 => 123,  417 => 243,  399 => 139,  396 => 138,  380 => 158,  345 => 147,  272 => 134,  242 => 113,  232 => 88,  153 => 77,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  810 => 492,  807 => 491,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 486,  778 => 251,  771 => 232,  768 => 231,  765 => 230,  760 => 243,  757 => 221,  743 => 217,  738 => 214,  720 => 211,  717 => 233,  713 => 209,  700 => 225,  688 => 202,  682 => 467,  679 => 466,  673 => 198,  665 => 196,  660 => 464,  647 => 336,  641 => 368,  632 => 187,  626 => 325,  616 => 207,  610 => 181,  603 => 179,  600 => 178,  597 => 342,  588 => 308,  561 => 161,  554 => 224,  548 => 292,  546 => 166,  543 => 179,  540 => 308,  537 => 176,  531 => 283,  525 => 280,  522 => 406,  482 => 285,  479 => 256,  471 => 253,  468 => 160,  460 => 143,  454 => 244,  451 => 120,  448 => 240,  434 => 256,  373 => 156,  370 => 101,  304 => 181,  296 => 121,  291 => 102,  274 => 110,  216 => 79,  624 => 224,  620 => 451,  612 => 220,  601 => 446,  594 => 176,  585 => 307,  580 => 207,  577 => 303,  574 => 205,  572 => 204,  566 => 203,  563 => 298,  559 => 296,  551 => 221,  545 => 291,  536 => 306,  526 => 190,  523 => 171,  514 => 168,  511 => 167,  497 => 267,  485 => 124,  463 => 248,  455 => 141,  410 => 221,  404 => 90,  391 => 163,  369 => 148,  354 => 101,  340 => 145,  320 => 127,  318 => 111,  261 => 50,  321 => 135,  306 => 107,  303 => 106,  300 => 105,  287 => 77,  275 => 105,  12 => 36,  118 => 49,  327 => 114,  323 => 128,  319 => 124,  265 => 105,  262 => 98,  228 => 83,  213 => 78,  110 => 22,  23 => 18,  20 => 1,  270 => 102,  180 => 66,  175 => 58,  172 => 57,  160 => 76,  113 => 48,  100 => 39,  65 => 39,  58 => 25,  34 => 5,  1402 => 417,  1400 => 416,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1297 => 381,  1287 => 379,  1279 => 377,  1273 => 376,  1256 => 369,  1251 => 368,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1036 => 284,  1032 => 283,  1029 => 282,  1016 => 276,  1014 => 272,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  894 => 226,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  798 => 184,  796 => 489,  785 => 232,  783 => 177,  780 => 303,  772 => 248,  769 => 247,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  746 => 478,  729 => 235,  715 => 151,  712 => 150,  710 => 475,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 470,  689 => 137,  678 => 390,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 462,  643 => 120,  635 => 365,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  576 => 199,  564 => 193,  557 => 295,  555 => 185,  547 => 93,  515 => 276,  512 => 84,  509 => 272,  503 => 81,  490 => 287,  478 => 74,  459 => 246,  456 => 68,  450 => 114,  442 => 134,  433 => 130,  426 => 126,  414 => 144,  408 => 176,  403 => 117,  377 => 129,  366 => 106,  350 => 26,  342 => 137,  335 => 134,  332 => 116,  311 => 87,  288 => 118,  281 => 114,  253 => 100,  248 => 97,  245 => 83,  210 => 77,  202 => 94,  186 => 82,  124 => 47,  81 => 23,  76 => 34,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 421,  1410 => 474,  1408 => 419,  1398 => 415,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 396,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 382,  1295 => 432,  1291 => 380,  1286 => 430,  1283 => 378,  1277 => 425,  1271 => 375,  1268 => 374,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 367,  1246 => 366,  1240 => 412,  1234 => 410,  1231 => 358,  1225 => 407,  1223 => 356,  1217 => 405,  1214 => 404,  1211 => 349,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 342,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 327,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 299,  1058 => 347,  1055 => 346,  1048 => 290,  1045 => 342,  1042 => 341,  1040 => 285,  1033 => 339,  1027 => 281,  1024 => 280,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 271,  1004 => 266,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 256,  963 => 309,  959 => 308,  955 => 252,  950 => 269,  947 => 249,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 289,  903 => 286,  900 => 228,  897 => 227,  895 => 293,  892 => 282,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 273,  863 => 269,  860 => 268,  857 => 267,  850 => 276,  844 => 204,  838 => 272,  826 => 271,  819 => 270,  816 => 241,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  797 => 259,  795 => 258,  794 => 257,  793 => 182,  792 => 488,  789 => 254,  786 => 253,  779 => 250,  773 => 264,  767 => 246,  749 => 479,  742 => 240,  739 => 239,  737 => 242,  735 => 241,  732 => 213,  724 => 154,  721 => 153,  719 => 233,  711 => 231,  708 => 228,  706 => 473,  693 => 226,  685 => 224,  683 => 393,  680 => 134,  676 => 385,  674 => 219,  670 => 217,  668 => 344,  666 => 382,  663 => 195,  657 => 193,  655 => 209,  650 => 217,  644 => 335,  640 => 334,  638 => 210,  633 => 209,  629 => 454,  613 => 320,  607 => 349,  604 => 197,  599 => 206,  596 => 106,  593 => 310,  590 => 338,  587 => 203,  584 => 202,  582 => 190,  579 => 332,  570 => 164,  567 => 414,  558 => 186,  553 => 184,  550 => 187,  535 => 177,  532 => 410,  529 => 409,  527 => 408,  524 => 297,  521 => 182,  518 => 170,  516 => 294,  513 => 179,  510 => 293,  507 => 156,  504 => 292,  501 => 161,  498 => 160,  496 => 172,  493 => 171,  486 => 286,  470 => 278,  467 => 72,  464 => 275,  458 => 147,  447 => 113,  443 => 142,  439 => 195,  432 => 140,  428 => 230,  421 => 244,  411 => 120,  400 => 214,  388 => 42,  364 => 112,  359 => 144,  356 => 126,  346 => 107,  343 => 146,  338 => 135,  329 => 188,  326 => 138,  316 => 16,  301 => 144,  286 => 112,  271 => 108,  266 => 366,  255 => 101,  237 => 86,  225 => 67,  195 => 54,  174 => 65,  129 => 45,  70 => 15,  233 => 87,  211 => 81,  207 => 75,  198 => 55,  190 => 76,  126 => 42,  104 => 32,  418 => 224,  405 => 118,  395 => 125,  389 => 160,  378 => 157,  361 => 152,  358 => 151,  351 => 120,  348 => 140,  339 => 191,  333 => 132,  330 => 112,  325 => 129,  315 => 131,  308 => 86,  302 => 125,  299 => 112,  293 => 120,  290 => 119,  284 => 106,  280 => 87,  277 => 136,  260 => 98,  257 => 103,  250 => 93,  222 => 83,  206 => 74,  200 => 72,  191 => 67,  188 => 90,  185 => 74,  170 => 84,  167 => 63,  155 => 47,  150 => 55,  134 => 39,  97 => 41,  53 => 12,  445 => 152,  441 => 196,  438 => 236,  424 => 114,  422 => 226,  419 => 109,  415 => 180,  412 => 222,  406 => 111,  401 => 172,  390 => 136,  385 => 225,  382 => 92,  376 => 205,  371 => 156,  363 => 153,  353 => 149,  349 => 80,  347 => 191,  344 => 119,  336 => 135,  334 => 141,  331 => 140,  328 => 139,  324 => 113,  317 => 185,  313 => 183,  310 => 171,  307 => 128,  295 => 178,  292 => 91,  289 => 113,  279 => 104,  276 => 111,  263 => 95,  259 => 103,  256 => 96,  251 => 101,  249 => 74,  244 => 140,  239 => 64,  236 => 109,  234 => 64,  231 => 83,  226 => 84,  223 => 60,  218 => 59,  215 => 78,  212 => 78,  197 => 69,  194 => 68,  192 => 88,  184 => 63,  181 => 65,  178 => 59,  165 => 83,  161 => 63,  152 => 46,  148 => 59,  146 => 60,  137 => 22,  127 => 35,  114 => 45,  90 => 42,  84 => 40,  77 => 20,  480 => 75,  474 => 150,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 61,  435 => 146,  430 => 255,  427 => 116,  423 => 250,  413 => 241,  409 => 131,  407 => 238,  402 => 215,  398 => 115,  393 => 211,  387 => 164,  384 => 109,  381 => 105,  379 => 104,  374 => 217,  368 => 126,  365 => 197,  362 => 148,  360 => 104,  355 => 150,  341 => 118,  337 => 97,  322 => 93,  314 => 88,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 98,  268 => 107,  264 => 74,  258 => 94,  252 => 85,  247 => 84,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 65,  169 => 74,  140 => 58,  132 => 59,  128 => 54,  107 => 41,  61 => 12,  273 => 174,  269 => 107,  254 => 147,  243 => 92,  240 => 72,  238 => 84,  235 => 89,  230 => 106,  227 => 86,  224 => 81,  221 => 38,  219 => 101,  217 => 79,  208 => 76,  204 => 73,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 24,  71 => 20,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 29,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  87 => 41,  21 => 12,  26 => 9,  93 => 27,  88 => 25,  78 => 26,  46 => 13,  27 => 3,  44 => 20,  31 => 4,  28 => 3,  201 => 106,  196 => 92,  183 => 50,  171 => 75,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 58,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 14,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 5,  22 => 12,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 50,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 18,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 63,  147 => 75,  144 => 42,  141 => 73,  133 => 51,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 56,  99 => 23,  95 => 51,  92 => 43,  86 => 29,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 14,  57 => 12,  54 => 12,  51 => 13,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
