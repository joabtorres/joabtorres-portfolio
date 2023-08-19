

$(document).ready(function () {
    var nav = $('.container-menu');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            nav.addClass("menu-fixed").fadeIn();
        } else {
            nav.removeClass("menu-fixed").fadeIn();
        }
    });
    //SCROLL SUAVE
    $('nav a').click(function (e) {
        this.scrollIntoView({ behavior: "smooth" });
    });
    //MENU
    $('nav .icon-menu').click(function (e) {
        let listmenu = $('.menu-primary nav ul');
        if (listmenu.hasClass('active')) {
            listmenu.removeClass('active');
            listmenu.css('display', "node").fadeOut();
        } else {
            listmenu.addClass('active');
            listmenu.css('display', "flex").fadeIn();
        }
    });
    //Typed - efeito de digitação
    var options = {
        strings: ["Analista de Sistema &lt;/&gt;", ""],
        typeSpeed: 100,
        loop: true
    }
    var typed = new Typed("#show-office", options);
    //ANIMAÇÃO 
    function uianimated() {
        var uianimateds = document.querySelectorAll('.uianimated');

        for (var i = 0; i < uianimateds.length; i++) {
            var windowheight = window.innerHeight;
            var uianimatedtop = uianimateds[i].getBoundingClientRect().top;
            var uianimatedpoint = 40;

            if (uianimatedtop < windowheight - uianimatedpoint) {
                uianimateds[i].classList.add('active');
            }
        }
    }

    function onPageload() {
        uianimated();
        window.addEventListener('scroll', uianimated);
    }

    window.addEventListener('load', onPageload);
});

/**
 * JavaScript
 */
document.getElementById("iphone").addEventListener('input', function (e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
})