$(document).ready(function () {

    AOS.init();

    let header = $('.header');
    let scrollOffset = 0;

    $(window).on('scroll', function () {
        scrollOffset = $(this).scrollTop();

        if (scrollOffset >= 20) {
            header.addClass('active');
        } else {
            header.removeClass('active');
        }
    });


    $('.burger').on('click', function () {

        $(this).toggleClass('burger--active');
        $('.header__item').toggleClass('active');
        $('.header__item-box').toggleClass('active');
    });

    $('.header__item-box').on('click', function () {

        $('.burger').removeClass('burger--active');
        $('.header__item').removeClass('active');
        $('.header__item-box').removeClass('active');
    });

    $('.header__menu-link').on('click', function () {

        $('.burger').removeClass('burger--active');
        $('.header__item').removeClass('active');
        $('.header__item-box').removeClass('active');
    });


    $('.task__accordion-title').on('click', function () {
        $(this).next('.task__accordion-text').slideToggle();
        $(this).toggleClass('active');
    });


    /* modal */

    const modalCall = $('[data-modal]');
    const modalClose = $('[data-close]');

    modalCall.on('click', function (event) {
        event.preventDefault();

        let $this = $(this),
            modalId = $this.data('modal');

        $(modalId).addClass('show');
        $('body').addClass('no-scroll');
    });

    modalClose.on('click', function (event) {
        event.preventDefault();

        let $this = $(this),
            modalParent = $this.parents('.modal');

        modalParent.removeClass('show');
        $('body').removeClass('no-scroll');
    });

    $('.modal').on('click', function (event) {
        $(this).removeClass('show');
        $('body').removeClass('no-scroll');
    });

    $('.modal__content').on('click', function (event) {
        event.stopPropagation();
    });

    $('.modal__registration').on('input', '.input-words', function () {
        this.value = this.value.replace(/[^a-zа-яё\s]/gi, '');
    });
    $('.modal__contact').on('input', '.input-words', function () {
        this.value = this.value.replace(/[^a-zа-яё\s]/gi, '');
    });
});
