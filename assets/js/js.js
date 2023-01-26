$(document).ready(function () {
    //ombre au survol
    $('.card-home').hover(function () {
        $(this).addClass('shadow-lg');
    }, function () {
            $(this).removeClass('shadow-lg');
        }
    );


    // aller en haut de la page
    let topBtn = $('#top-btn');

    topBtn.click(function () { 
        topFunction();
    });

    window.onscroll = () => scrollFunction();

    const scrollFunction = () => {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            topBtn.show();
        } else {
            topBtn.hide();
        }
    }

    const topFunction = () => {
        document.body.scrollTop = 0;// pour safari

        document.documentElement.scrollTop = 0;//pour chrome, opera mini and other
    }

});