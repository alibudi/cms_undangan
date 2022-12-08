function findElementsByText(text,isContain=true) {
    var jSpot = $("*:contains(" + text + "):not(script):not(style)")
                .filter(function() {
                    if(isContain) return $(this).children().length === 0;
                    else this.innerTex == text;
                });

    return jSpot;
}