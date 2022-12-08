document.addEventListener("readystatechange",function(e){
    try{
        var jqElementsAnimate = $(".do-animate:not(.not-scrollanimate,.animate-start),.animate-init:not(.not-scrollanimate,.animate-start)");
        $(window).scroll(function(event){
            try{
                var wScrollTop = window.scrollY+(window.innerHeight/1.75);
                jqElementsAnimate.each(function( index ) {
                    var JqElement = $(this);
                    var elementOffsetTop = JqElement.offset().top;
                    if(wScrollTop>elementOffsetTop){
                        JqElement.addClass('animate');
                    }else if((window.scrollY+window.innerHeight) < elementOffsetTop){
                        JqElement.removeClass('animate');
                    } 
                });
            }catch(error){console.log(error)}
        });
    }catch(e){console.log(e)}
    try{
        $(document).one("click","button",function(e){
            multipleDoAnimateTyping(document.querySelectorAll(".typing.animate"));
            $(".animate-start").addClass("animate");
        });
    }catch(e){console.log(e)}
});

function singleDoAnimateTyping(element) {
    let i = 0;
    let txt = element.innerText;
    let speed = 77;
    element.innerHTML = '';
    function typeWriter(i,txt,speed) {
        if (i < txt.length) {
            element.innerHTML += txt.charAt(i);i++;
            setTimeout(function(){typeWriter(i,txt,speed);}, speed);
        }else{
            if (element.classList.contains('loop')) {
                singleDoAnimateTyping(element);
            }
        }
    }
    typeWriter(i,txt,speed);
}

function multipleDoAnimateTyping(elements) {
    let i = 0;
    let j = 0;
    let speed = 77;
    let elementsLoop = [];
    function firstOrLoop(elements,elementsLoop,i,j,speed){
        if(elements.length>0) {
            function nextElement(i,j,speed){
                if(elements[j].classList.contains('loop')) elementsLoop.push(elements[j]);
                let txt = elements[j].innerText;
                elements[j].innerHTML = '';
                function typeWriter(i,j,txt,speed) {
                    if (i < txt.length) {
                        elements[j].innerHTML += txt.charAt(i);i++;
                        setTimeout(function(){typeWriter(i,j,txt,speed);}, speed);
                    }else if(j < elements.length-1){
                        i = 0;
                        ++j;
                        nextElement(i,j,speed);
                    }else{
                        elements = elementsLoop;
                        elementsLoop = [];
                        j = i = 0;
                        firstOrLoop(elements,elementsLoop,i,j,speed);
                    }
                }
                typeWriter(i,j,txt,speed);
            }   
            nextElement(i,j,speed);
        }
    }
    firstOrLoop(elements,elementsLoop,i,j,speed);
}
try{
    var doAnimate = document.querySelectorAll(".do-animate:not(.not-scrollanimate,.animate-start),.animate-init:not(.not-scrollanimate,.animate-start)");
    var winElement = $(window);
}catch(e){console.log(e)}
