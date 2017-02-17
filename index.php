<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta http-equiv="Cache-Control" content="public">
    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Cache-Control" content="max-age=34700">

    <meta name="format-detection" content="telephone=no">

    <style type="text/css">
        #page-preloader {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background: #ed77b4;
            z-index: 100500;
        }
        #page-preloader .spinner {
            width: 270px;
            height: 175px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -87px 0 0 -135px;
            color: #FFF;
            text-align: center;
        }
    </style>

    <title></title>

</head>
<body ontouchstart="">

<div id="page-preloader">
    <span class="spinner">
        <svg width="270" height="175">
            <use xlink:href="#logo"></use>
        </svg>
    </span>
</div>

<!-- load combined svg file (with symbols) into body-->
<script>
    (function (doc) {
        var scripts = doc.getElementsByTagName('script');
        var script = scripts[scripts.length - 1];
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            var div = doc.createElement('div');
            div.innerHTML = this.responseText;
            div.style.display = 'none';
            script.parentNode.insertBefore(div, script)
        };
        xhr.open('get', 'assets/img/sprites.svg', true);
        xhr.send()
    })(document)
</script>

<div class="wrapper">

    <div id="modal" class="m-popup mfp-hide">
        <div class="m-popup__header">
            
        </div>
        <div class="m-popup__body">

        </div>
    </div>

    <div class="cd-panel cd-panel--menu from-left">
        <div class="cd-panel-container--black">
            <header class="cd-panel-header">
                <a href="#0" class="cd-panel-close">Закрыть</a>
            </header>
            <div class="cd-panel-content">

            </div> 
        </div>
    </div>

    <div class="cd-panel cd-panel--form from-right">
        <div class="cd-panel-container--white">
            <header class="cd-panel-header">
                <a href="#0" class="cd-panel-close">Закрыть</a>
            </header>
            <div class="cd-panel-content">

            </div>
        </div>
    </div>

</div><!-- End Wrapper -->

<!-- Load CSS -->
<script>
    function loadCSS(hf) {
        var ms = document.createElement("link");
        ms.rel = "stylesheet";
        ms.href = hf;
        document.getElementsByTagName("body")[0].appendChild(ms);
    }
    loadCSS("bower_components/slick-carousel/slick/slick.css");
    loadCSS("bower_components/magnific-popup/dist/magnific-popup.css");
    loadCSS("bower_components/aos/dist/aos.css");
    loadCSS("assets/css/style.css");
</script>

<!-- Load Scripts -->
<script>
    var scr = {
        "scripts": [
            {"src": "bower_components/jquery/dist/jquery.min.js", "async": false},
            {"src": "bower_components/jquery-migrate/jquery-migrate.min.js", "async": false},
            {"src": "bower_components/slick-carousel/slick/slick.min.js", "async": false},
            {"src": "bower_components/magnific-popup/dist/jquery.magnific-popup.min.js", "async": false},
            {"src": "bower_components/aos/dist/aos.js", "async": false},
            {"src": "assets/js/scripts.js", "async": false}
        ]
    };
    !function (t, n, r) {
        "use strict";
        var c = function (t) {
            if ("[object Array]" !== Object.prototype.toString.call(t))return !1;
            for (var r = 0; r < t.length; r++) {
                var c = n.createElement("script"), e = t[r];
                c.src = e.src, c.async = e.async, n.body.appendChild(c)
            }
            return !0
        };
        t.addEventListener ? t.addEventListener("load", function () {
            c(r.scripts);
        }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
            c(r.scripts)
        }) : t.onload = function () {
            c(r.scripts)
        }
    }(window, document, scr);
</script>

</body>
</html>