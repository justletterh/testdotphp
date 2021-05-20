<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Test.</title>
        <link rel="icon" href="https://avatars.githubusercontent.com/u/63440442"/>
        <script src="https://just-aytch.buzz/jsvers.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/coffeescript@2.5.1/lib/coffeescript-browser-compiler-legacy/coffeescript.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fengari-web@0.1.4/dist/fengari-web.js"></script>
        <style type="text/less">
            @align: center;
            @bg: black;
            @fg: white;
            @fg2: #969696;
            @lbs: 900;
            body {
            text-align: @align;
            background-color: @bg;
            color: @fg;
            }
            h1#tst {
            text-decoration: underline overline;
            font-weight: @lbs;
            }
            h1#tst:before, h1#tst:after {
            content: "|";
            }
            a, a:visited, hr {
            color: @fg2;
            }
            a:hover {
            color: @fg2;
            }
            span {
            font-weight: @lbs;
            }
        </style>
    </head>
    <body>
        <span id="html">HTML</span>
        <br />
        <span id="jq"></span>
        <br />
        <span id="js"></span>
        <br />
        <?php
            echo '<span id="php">PHP</span>';
        ?>
        <br />
        <span id="css"></span>
        <br />
        <span id="less"></span>
        <br />
        <span id="cfs"></span>
        <br />
        <span id="lua"></span>
        <script type='text/coffeescript'>
            $("span#cfs").html "CoffeeScript";
        </script>
        <script type="application/lua">
            w=js.global
            w.lua.innerHTML="Lua"
        </script>
        <style type="text/less">
            @s: "LESS";
            span#less:before {
            content: @s;
            }
        </style>
        <style>
            span#css:before {
            content: "CSS";
            }
        </style>
        <script>
            $( document ).ready(() => {
              $("span#jq").html("JavaScript (JQuery)");
            });
        </script>
        <script>
            window.addEventListener("load",() => {
                let s="js";
                document.getElementById(s).innerHTML="JavaScript (Vanilla)";
            });
        </script>
        <script>
            const silent=true;
            async function main(){
              let head='<h1 id="tst">Test</h1>',hr="<hr />",credit=`<h6 style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Made by <a href="https://github.com/justletterh" target="_blank">justletterh</a>.</h6>`;
              $("body").prepend(hr+head+hr);
              $("body").append(hr+credit+hr);
              return null;
            }
            
            function vers() {
              let o={}, fen=fengari;
              o.Fangari={
                version: fen.FENGARI_VERSION,
                release: fen.FENGARI_VERSION_RELEASE,
                major: fen.FENGARI_VERSION_MAJOR,
                minor: fen.FENGARI_VERSION_MINOR,
                number: fen.FENGARI_VERSION_NUM,
                copyright: fen.FENGARI_COPYRIGHT,
                authors: fen.FENGARI_AUTHORS
              };
              o.PHP={
                version: "<?php echo phpversion() ?>",
                versions: <?php echo "{";
                foreach (get_loaded_extensions() as $i => $ext)
                  {
                    echo "'" . strtolower($ext) . "':'" . phpversion($ext) . "',";
                  };
                echo "}" ?>
              };
              o.JS=new Is();
              if (silent===false){
                console.log(JSON.stringify(o,null,2));
              }
            }
            
            $( document ).ready(() => {
              main().then(() => {
                vers();
                console.log("Page Loaded!!!");
              });
            });
        </script>
        <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>
    </body>
</html>