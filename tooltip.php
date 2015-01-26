<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Tooltip - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( document ).tooltip();
        });
    </script>
    <style>
        label {
            display: inline-block;
            width: 5em;
        }
    </style>
</head>
<body>
<p><a href="#" title="That&apos;s what this widget is">Tooltips</a> can be attached to any element. When you hover
    the element with your mouse, the title attribute is displayed in a little box next to the element, just like a native tooltip.</p>
<p>But as it's not a native tooltip, it can be styled. Any themes built with
    <a href="http://jqueryui.com/themeroller/" title="ThemeRoller: jQuery UI&apos;s theme builder application">ThemeRoller</a>
    will also style tooltips accordingly.</p>
<p>Tooltips are also useful for form elements, to show some additional information in the context of each field.</p>
<p><label for="age">Your age:</label><input id="age" title="We ask for your age only for statistical purposes."></p>
<p>Hover the field to see the tooltip.</p>
</body>
</html>

<br>
<br>
<br>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Tooltip - Custom animation demo</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            $( "#show-option" ).tooltip({
                show: {
                    effect: "slideDown",
                    delay: 250
                }
            });
            $( "#hide-option" ).tooltip({
                hide: {
                    effect: "explode",
                    delay: 250
                }
            });
            $( "#open-event" ).tooltip({
                show: null,
                position: {
                    my: "left top",
                    at: "left bottom"
                },
                open: function( event, ui ) {
                    ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
                }
            });
        });
    </script>
</head>
<body>
<p>There are various ways to customize the animation of a tooltip.</p>
<p>You can use the <a id="show-option" href="http://jqueryui.com/demos/tooltip/#option-show" title="slide down on show">show</a> and
    <a id="hide-option" href="http://jqueryui.com/demos/tooltip/#option-hide" title="explode on hide">hide</a> options.</p>
<p>You can also use the <a id="open-event" href="http://jqueryui.com/demos/tooltip/#event-open" title="move down on show">open event</a>.</p>
</body>
</html>