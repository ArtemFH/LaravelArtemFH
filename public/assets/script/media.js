window.addEventListener('scroll', function (e) {
    if (window.innerWidth >= 992) {
        var nav = document.getElementById('navbar')
        var but_end = document.getElementById('but-end');
        var footer = document.getElementById('footer')

        if (window.scrollY != 0) {
            nav.classList.add('navbar-scroll')
            but_end.classList.add('but-end')
        } else {
            nav.classList.remove('navbar-scroll')
            but_end.classList.remove('but-end')
        }

        if (document.body.clientHeight <= window.innerHeight + window.scrollY) {
            footer.classList.remove('footer-scroll')
        } else {
            footer.classList.add('footer-scroll')
        }
    }
});
