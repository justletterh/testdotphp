window.ah=false;

window.addEventListener("load",()=>{
    var tst=anime({
        targets: "#animejs",
        update: () => {
            if (!window.ah){
                window.ah=true;
                document.getElementById("animejs").innerText="JavaScript (Anime.js)";
            }
        }
    });
});