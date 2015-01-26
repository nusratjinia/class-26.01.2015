<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Button - Toolbar</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        #toolbar {
            padding: 4px;
            display: inline-block;
        }
        /* support: IE7 */
        *+html #toolbar {
            display: inline;
        }
    </style>
    <script>
        $(function() {
            $( "#beginning" ).button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-start"
                }
            });
            $( "#rewind" ).button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-prev"
                }
            });
            $( "#play" ).button({
                text: false,
                icons: {
                    primary: "ui-icon-play"
                }
            })
                .click(function() {
                    var options;
                    if ( $( this ).text() === "play" ) {
                        options = {
                            label: "pause",
                            icons: {
                                primary: "ui-icon-pause"
                            }
                        };
                    } else {
                        options = {
                            label: "play",
                            icons: {
                                primary: "ui-icon-play"
                            }
                        };
                    }
                    $( this ).button( "option", options );
                });
            $( "#stop" ).button({
                text: false,
                icons: {
                    primary: "ui-icon-stop"
                }
            })
                .click(function() {
                    $( "#play" ).button( "option", {
                        label: "play",
                        icons: {
                            primary: "ui-icon-play"
                        }
                    });
                });
            $( "#forward" ).button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-next"
                }
            });
            $( "#end" ).button({
                text: false,
                icons: {
                    primary: "ui-icon-seek-end"
                }
            });
            $( "#shuffle" ).button();
            $( "#repeat" ).buttonset();
        });
    </script>
</head>
<body>
<div id="toolbar" class="ui-widget-header ui-corner-all">
    <button id="beginning">go to beginning</button>
    <button id="rewind">rewind</button>
    <button id="play">play</button>
    <button id="stop">stop</button>
    <button id="forward">fast forward</button>
    <button id="end">go to end</button>
    <input type="checkbox" id="shuffle"><label for="shuffle">Shuffle</label>
<span id="repeat">
<input type="radio" id="repeat0" name="repeat" checked="checked"><label for="repeat0">No Repeat</label>
<input type="radio" id="repeat1" name="repeat"><label for="repeat1">Once</label>
<input type="radio" id="repeatall" name="repeat"><label for="repeatall">All</label>
</span>
</div>
</body>
