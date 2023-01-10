function alertLogout(){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'error',
        title: 'Vous êtes déconnecté'
    })

    localStorage.removeItem('logout');
}

function set_current_page_localstorage(element){
    $("#accueil, #liste-road-trip, #creer-road-trip").each(function(){
       if(element.attr('id') === $(this).attr('id')){
           localStorage.setItem('currentPage', $(this).attr('id'));
       }
    });
}

function highlight_navigation(){
    $("#accueil, #liste-road-trip, #creer-road-trip").each(function(){
        if(localStorage.getItem('currentPage') === $(this).attr('id')){
            $(this).removeClass("text-gray-400 hover:text-gray-500");
            $(this).addClass("text-blue-600 font-bold");
        }else{
            $(this).addClass("text-gray-400 hover:text-gray-500");
            $(this).removeClass("text-blue-600 font-bold");
        }
    });
}



$(document).ready(function (){

    $(".alert").on('click', function(){
        $(this).remove();
    });

    highlight_navigation();

    $("#accueil, #liste-road-trip, #creer-road-trip").on('click', function(){
        set_current_page_localstorage($(this));
    })

    $('.btn-error').on('click', function(){
        event.preventDefault();
        let redirect = $(this).attr('href');
        Swal.fire({
            title: 'Voulez-vous vraiment le supprimer ?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Supprimer',
            denyButtonText: `Annuler`,
            confirmButtonColor: '#2563eb',
            denyButtonColor: '#4b5768',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.href = redirect;
            }
        })
    });


    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }


});