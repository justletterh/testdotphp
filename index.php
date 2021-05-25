<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="./assets/icon.jpg"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/extjs/6.0.0/classic/theme-crisp/resources/theme-crisp-all.css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/extjs/6.0.0/ext-all.js"></script>
        <meta charset="utf-8" />
        <title>Test.</title>
        <script src="https://just-aytch.buzz/jsvers.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/coffeescript@2.5.1/lib/coffeescript-browser-compiler-legacy/coffeescript.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fengari-web@0.1.4/dist/fengari-web.js"></script>
        <link rel="stylesheet/less" type="text/css" href="./misc/style.less" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./lib/u.min.js"></script>
        <script src="./lib/moo.min.js"></script>

        <!--TESTS-->
        <link rel="stylesheet" href="./scripts/style/css.css" />
        <link rel="stylesheet/less" type="text/css" href="./scripts/style/less.less" />
        <link rel="stylesheet" href="./bin/sass.css" />
        <link rel="stylesheet" href="./bin/scss.css" />
        <link rel="stylesheet" href="./bin/styl.css" />
        <!--END-->

        <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>
    </head>
    <body>
        <span id="html">HTML</span>
        <br />
        <span id="jq"></span>
        <br />
        <span id="js"></span>
        <br />
        <span id="ujs"></span>
        <br />
        <span id="extjs"></span>
        <span id="moojs"></span>
        <br />
        <span id="cashjs"></span>
        <br />
        <span id="zjs"></span>
        <br />
        <span id="animejs"></span>
        <br />
        <?php include "./scripts/other/php.php"?>
        <br />
        <span id="css"></span>
        <br />
        <span id="less"></span>
        <br />
        <span id="cfs"></span>
        <br />
        <span id="lua"></span>
        <br />
        <span id="sass"></span>
        <br />
        <span id="scss"></span>
        <br />
        <span id="styl"></span>
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
        <script type="text/coffeescript" src="./scripts/other/cfs.coffee"></script>
        <script type="application/lua" src="./scripts/other/lua.lua"></script>
        <script src="./scripts/js/jq.js"></script>
        <script src="./scripts/js/js.js"></script>
        <script src="./scripts/js/ujs.js"></script>
        <script src="./scripts/js/extjs.js"></script>
        <script src="./scripts/js/moojs.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cash/8.1.0/cash.min.js"></script>
        <script src="./scripts/js/cashjs.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js" integrity="sha512-J67nm7fNdd/paUQlLxKoReUffdsPRGHCOYkVwRGUSDv/NE5DJtL6Siinn+s8rZMYJDQJRiPdWjs/PHvjMLnKiw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./scripts/js/zjs.js"></script>
        <script src="./scripts/js/animejs.js"></script>

        <!-- TAIL -->
        <script src="./misc/tail.js"></script>
        <!-- END -->
    </body>
</html>
