const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdownToggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(document).ready(function () {
    $('select').niceSelect();

    $('input[type="tel"]').each(function (index) {
        var element = $('input[type="tel"]')[index];
        $(element).mask('+7 (999) 999-99-99')
    });

    /** Header call button replacing */
    const windowWidth = $(window).width();
    const headerButton = $('.callback-btn');
    const popup = $('.popup');
    const popupOrderCall = $('.popup.popup-order-call');
    const closePopup = $('.close-popup');
    // if (windowWidth < 758) {
    //     $(headerButton).html('');
    // }
    $(closePopup).on('click', function () {
        $(popup).removeClass('opened');
        $('body').css('overflow-y', 'auto');
    });
    $(headerButton).on('click', function (e) {
        e.preventDefault();
        $(popupOrderCall).addClass('opened');
        $('body').css('overflow-y', 'hidden');
        $('.modal-select').niceSelect('destroy');
        setTimeout(function () {
            $('.modal-select').niceSelect();
        }, 200);
    });
    /** Header call button replacing end */

    /*MODAL RIGHTS START*/
    var modalRights = document.getElementById("modalRights");
    var btnRights = document.getElementsByClassName("rights-btn")[0];
    var closeRights = document.getElementsByClassName("close-rights")[0];
    if (document.getElementsByClassName("rights-btn").length){
        btnRights.onclick = function () {
            modalRights.style.display = "block";
            $('#modalRights').find('.popup-rights-full').niceScroll({
                cursorcolor: "#94DDBA",
                cursorwidth: "6px",
                cursoropacitymin: 0.8,
                autohidemode: false,
                bouncescroll: true,
            });
        }

        closeRights.onclick = function () {
            modalRights.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modalRights) {
                modalRights.style.display = "none";
            }
        }
    }
    /**  MODAL RIGHTS end */

    /*MODAL TERMS START*/
    var modalTerms = document.getElementById("modalTerms");
    var btnTerms = document.getElementsByClassName("terms-btn")[0];
    var closeTerms = document.getElementsByClassName("close-terms")[0];
    if(document.getElementsByClassName("terms-btn").length){
        btnTerms.onclick = function () {
            modalTerms.style.display = "block";
            $('#modalTerms').find('.popup-rights-full').niceScroll({
                cursorcolor: "#94DDBA",
                cursorwidth: "6px",
                cursoropacitymin: 0.8,
                autohidemode: false,
                bouncescroll: true,
            });
        };

        closeTerms.onclick = function () {
            modalTerms.style.display = "none";
        };
        window.onclick = function (event) {
            if (event.target == modalTerms) {
                modalTerms.style.display = "none";
            }
        };
    }
    /**  MODAL RIGHTS end */

        // $('.minus').click(function () {
        //     var $input = $(this).parent().find('input');
        //     var count = parseInt($input.val()) - 1;
        //     count = count < 1 ? 1 : count;
        //     $input.val(count);
        //     $input.change();
        //     return false;
        // });
        // $('.plus').click(function () {
        //     var $input = $(this).parent().find('input');
        //     $input.val(parseInt($input.val()) + 1);
        //     $input.change();
        //     return false;
        // });
    var counter = 0;

    $(".add-passenger").click(function (e) {
        counter++;
        var passengerBlock = $(this).parent().find('.passenger').first().clone();
        $(passengerBlock).find('input').each(function () {
            $(this).attr('name', $(this).attr('name') + '-' + counter);
        });
        $(passengerBlock).append(' <div class="input-block col-3">\n' +
            '                                    <span class="remove-passenger">&times;</span>\n' +
            '                                </div>')
        $(passengerBlock).insertBefore($(this));

        $(".remove-passenger").click(function (e) {
            ($(this).parent()).parent().remove();
        });
    });

    $(".remove-passenger").click(function (e) {
        console.log('test');
        $(this).parent('passenger').remove();
    });

    $('.rent-page #rentAuto #parkInfo a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).find("strong").html() // activated tab
        $('.rent-page #rentAuto #parkInfoRentAuto').val(target);
    });
    $('.datepicker-here').datepicker({
        // Можно выбрать тольо даты, идущие за сегодняшним днем, включая сегодня
        minDate: new Date()
    });

    $('button[type=submit]').on('click', function (e) {
        $(this).closest('form').find('input').each(function () {
            if ($(this).prop('required')) {
                if (!$(this).val()) {
                    $(this).addClass('warning');
                }
            }
        });
    });
    $('form').find('input').each(function () {
        if ($(this).prop('required')) {
            $(this).blur(function () {
                if (!$(this).val()) {
                    $(this).addClass('warning');
                } else {
                    $(this).removeClass('warning');
                }
            });
            $(this).keypress(function () {
                if (!$(this).val()) {
                    $(this).addClass('warning');
                } else {
                    $(this).removeClass('warning');
                }
            });
        }
    });

    $('a.question').on('click', function () {
        var content = $(this).parent();
        if ($(this).find('.fa').hasClass('rotate')) {
            $(this).find('.fa').removeClass('rotate');
        } else {
            $(this).find('.fa').addClass('rotate');
        }
    });
});

$(window).on("load resize", function () {
    if (this.matchMedia("(min-width: 768px)").matches) {
        $dropdown.hover(
            function () {
                const $this = $(this);
                $this.addClass(showClass);

                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
                $this.find($dropdownToggle).addClass('active');
            },
            function () {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
                $this.find($dropdownToggle).removeClass('active');

            }
        );
    } else {
        $dropdown.off("mouseenter mouseleave");
    }
});

function openNav() {
    document.getElementById("mobMenuNav").style.width = "95%";
    document.getElementById("mobMenuNav").style.marginLeft = "0";
}

function closeNav() {
    document.getElementById("mobMenuNav").style.width = "0";
    document.getElementById("mobMenuNav").style.marginLeft = "-200px";
}