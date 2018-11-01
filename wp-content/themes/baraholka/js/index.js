$(document).ready(function () {

    // $("a.path-slider__item").click(function (e) {
    //     e.preventDefault();
    // });
    setNoneActive($('#battle-nav'));
    setNoneActive($('#energy-nav'));
    setNoneActive($('#stavni-nav'));

    if (!window.location.pathname.includes('form')) {
        var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
        // initSlider();
        if (!isMobile) {
            $(function () {
                $.scrollify({
                    section: ".section",
                    interstitialSection: ".inter",
                    after: function (index, sections) {
                        var battle = getCoordinates($('#battle-yakor'));
                        var energy = getCoordinates($('#energi-yakor'));
                        var stavni = getCoordinates($('#stavni-yakor'));
                        var currPosition = $(document).scrollTop();
                        console.log(currPosition == 0);

                        if (currPosition >= battle.top && currPosition < battle.bottom && currPosition != 0) {
                            setActive($('#battle-nav'));
                            setNoneActive($('#energy-nav'));
                            setNoneActive($('#stavni-nav'));
                        } else if (currPosition >= energy.top && currPosition < energy.bottom && currPosition != 0) {
                            setNoneActive($('#battle-nav'));
                            setActive($('#energy-nav'));
                            setNoneActive($('#stavni-nav'));
                        } else if (currPosition >= stavni.top && currPosition < stavni.bottom && currPosition != 0) {
                            setNoneActive($('#battle-nav'));
                            setNoneActive($('#energy-nav'));
                            setActive($('#stavni-nav'));
                        } else if (currPosition == 0 || currPosition >= stavni.bottom ) {
                            setNoneActive($('#battle-nav'));
                            setNoneActive($('#energy-nav'));
                            setNoneActive($('#stavni-nav'));
                        }
                    }
                });
            });
        }
    }

    function getCoordinates(elem) {
        var top = elem.position().top;
        return {
            top: 0,
            bottom: top
        }
    }

    function setActive(elem) {
        elem.css('opacity', '1');
    }

    function setNoneActive(elem) {
        elem.css('opacity', '0.3');
    }

    $(".menu_mobile").on('click',function(){
        $(this).find(".hamburgerIcon").toggleClass("open");
        $('#menu-mobile').toggleClass("nav_mobile");
    });

    $(function() {
        $('nav a').click(function(event) {
            event.preventDefault();
            var href=$(this).attr('href');
            var target=$(href);
            var top=target.offset().top;
            $('html,body').animate({
                scrollTop: top
            }, 1200);
        });
    });
    // модальное окно
    $(".modal").each( function(){
        $(this).wrap('<div class="overlay"></div>')
    });

    $(".open-modal").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
            modal = $($this).data("modal");

        showModal(modal);
        $(document).on('click', function(e){
            var target = $(e.target);

            if ($(target).hasClass("overlay")){
                $(target).find(".modal").each( function(){
                    $(this).removeClass("open");
                });
                setTimeout( function(){
                    $(target).removeClass("open");
                }, 350);
            }

        });

    });

    $(".close-modal").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
            modal = $($this).data("modal");

        $(modal).removeClass("open");
        setTimeout( function(){
            $(modal).parents(".overlay").removeClass("open");
        }, 350);

    });

    $('.next-button').click(function () {
        if($('#first-tab').hasClass('active'))
        {
            $('#second-tab').first().trigger('click');
        } else if ($('#second-tab').hasClass('active'))
        {
            $('#third-tab').first().trigger('click');
        } else if ($('#third-tab').hasClass('active'))
        {
            $('#fourth-tab').first().trigger('click');
        }
    });

    var $slides = undefined,
        interval = undefined,
        $selectors = undefined,
        $btns = undefined,
        currentIndex = undefined,
        nextIndex = undefined;

    var cycle = function cycle(index) {
        var $currentSlide = undefined,
            $nextSlide = undefined,
            $currentSelector = undefined,
            $nextSelector = undefined;

        nextIndex = index !== undefined ? index : nextIndex;

        $currentSlide = $($slides.get(currentIndex));
        $currentSelector = $($selectors.get(currentIndex));

        $nextSlide = $($slides.get(nextIndex));
        $nextSelector = $($selectors.get(nextIndex));

        $currentSlide.removeClass("active").css("z-index", "0");

        $nextSlide.addClass("active").css("z-index", "1");

        $currentSelector.removeClass("current");
        $nextSelector.addClass("current");

        currentIndex = index !== undefined ? nextIndex : currentIndex < $slides.length - 1 ? currentIndex + 1 : 0;

        nextIndex = currentIndex + 1 < $slides.length ? currentIndex + 1 : 0;
    };

    $(function () {
        currentIndex = 0;
        nextIndex = 1;

        $slides = $(".slide");
        $selectors = $(".selector");
        $btns = $(".btn");

        $slides.first().addClass("active");
        $selectors.first().addClass("current");

        interval = window.setInterval(cycle, 6000);

        $selectors.on("click", function (e) {
            var target = $selectors.index(e.target);
            if (target !== currentIndex) {
                window.clearInterval(interval);
                cycle(target);
                interval = window.setInterval(cycle, 6000);
            }
        });

        $btns.on("click", function (e) {
            window.clearInterval(interval);
            if ($(e.target).hasClass("prev")) {
                var target = currentIndex > 0 ? currentIndex - 1 : $slides.length - 1;
                cycle(target);
            } else if ($(e.target).hasClass("next")) {
                cycle();
            }
            interval = window.setInterval(cycle, 6000);
        });
    });
});

function showModal(modal) {
    $(modal).parents(".overlay").addClass("open");
    setTimeout( function(){
        $(modal).addClass("open");
    }, 350);
}




function initSlider() {

    // Creating SVG and path elements and insert to DOM

    var svgNS = 'http://www.w3.org/2000/svg';
    var svgEl = document.createElementNS(svgNS, 'svg');

    var pathEl = document.createElementNS(svgNS, 'path');
    // The `getSinPath` function return the `path` in String format
    pathEl.setAttribute('d', getSinPath());
    pathEl.setAttribute('class', 'path-slider__path');

    svgEl.appendChild(pathEl);
    document.body.appendChild(svgEl);


    // Changing `background-image`
    // Firstly, saving the computed `background` of each item, as these are defined in CSS
    // When item is selected, the `background` is set accordingly

    var items = document.querySelectorAll('.path-slider__item');
    var images = [];
    for (var j = 0; j < items.length; j++) {
        images.push(getComputedStyle(items[j].querySelector('.item__circle')).getPropertyValue('background-image'));
    }

    var imgAnimation;
    var lastIndex;
    var setImage = function (index) {
        if (imgAnimation) {
            imgAnimation.pause();
            sliderContainer.style['background-image'] = images[lastIndex];
            sliderContainerBackground.style['opacity'] = 0;
        }
        lastIndex = index;
        sliderContainerBackground.style['background-image'] = images[index];
        imgAnimation = anime({
            targets: sliderContainerBackground,
            opacity: 1,
            easing: 'linear'
        });
    };


    // Adding the extra element needed to fade the images smoothly
    // Also set the image for the initial current item (the first one)

    var sliderContainer = document.querySelector('.path-slider');
    var sliderContainerBackground = document.createElement('div');
    sliderContainerBackground.setAttribute('class', 'path-slider__background');
    setImage(0);
    sliderContainer.appendChild(sliderContainerBackground);


    // Initializing the slider

    var options = {
        startLength: 'center',
        paddingSeparation: 100,
        easing: 'easeOutCubic',
        begin: function (params) {
            // Item get selected, then set the `background` accordingly
            if (params.selected) {
                setImage(params.index);
            }
        }
    };

    var slider = new PathSlider(pathEl, '.path-slider__item', options);


    // Regenerate the SVG `path` and update items position on `resize` event (responsive behavior)

    window.addEventListener('resize', function() {
        pathEl.setAttribute('d', getSinPath());
        slider.updatePositions();
    });

}

function getSinPath(options) {
    var _options = options || {};
    var _width = _options.width || window.innerWidth;
    var _height = _options.height || window.innerHeight;
    var _addWidth = _options.addWidth || 100;
    var _controlSep = _options.controlSep || 50;
    var _curves = _options.curves || 2;

    var x = - _addWidth;
    var y = _height / 2;
    var amplitudeX = (_width + _addWidth * 2) / _curves;     // X distance among curve points
    var amplitudeY = _height / 3;                            // Y distance between points and control points

    var path = [];
    path.push('M', x, y);
    var alternateY = true;
    var controlY;
    for (var i = 0; i < _curves; i++) {
        controlY = alternateY ? y - amplitudeY : y + amplitudeY;
        if (i === 0) {
            path.push('C', x + (amplitudeX / 2 - _controlSep), controlY);
        } else {
            path.push('S');
        }
        path.push(x + (amplitudeX / 2 + _controlSep), controlY);
        path.push(x + amplitudeX, y);
        x += amplitudeX;
        alternateY = !alternateY;
    }

    return path.join(' ');
}

(function() {
    var floatingLabel;

    floatingLabel = (function() {
        function floatingLabel(form, options) {
            var event, i, input, j, label, len, len1, ref, ref1;
            if (options == null) {
                options = {};
            }
            if (!form) {
                return;
            }
            options.focusClass || (options.focusClass = "focus");
            options.activeClass || (options.activeClass = "active");
            options.errorClass || (options.errorClass = "error");
            form.classList.add('has-floated-label');
            ref = form.querySelectorAll('label');
            for (i = 0, len = ref.length; i < len; i++) {
                label = ref[i];
                if (!(input = document.querySelector("#" + (label.getAttribute('for'))))) {
                    return;
                }
                ref1 = ['keyup', 'input', 'change'];
                for (j = 0, len1 = ref1.length; j < len1; j++) {
                    event = ref1[j];
                    input.addEventListener(event, function() {
                        this.parentNode.classList.remove(options.errorClass);
                        return this.parentNode.classList.toggle(options.activeClass, !!this.value);
                    });
                }
                input.addEventListener('focus', function() {
                    return this.parentNode.classList.add(options.focusClass);
                });
                input.addEventListener('blur', function() {
                    return this.parentNode.classList.remove(options.focusClass);
                });
                input.parentNode.classList.toggle(options.activeClass, !!input.value);
            }
        }

        return floatingLabel;

    })();

    window.floatingLabel = new floatingLabel(document.querySelector('.form'));

}).call(this);


// табы
(function($) {
    $(function() {
        $('#energy-tabs').each(function() {
            $(this).find('li').each(function(i) {
                $(this).click(function(){
                    if ($('#third-tab').hasClass('active')) {
                        if (Boolean(
                            $("#energy_nom").val() &&
                            $("#energy_kat").val() &&
                            $("#energy_time").val()
                        )) {
                            $(this).addClass('active').siblings().removeClass('active')
                                .closest('div.tabs').find('div.tabs__content').removeClass('active').eq(i).addClass('active');
                        } else {
                            $('#submit-button').first().trigger('click');
                        }
                    } else {
                        if (Boolean(
                            $("#energy_nazv").val() &&
                            $("#energy_tel").val()
                        )) {
                            $(this).addClass('active').siblings().removeClass('active')
                                .closest('div.tabs').find('div.tabs__content').removeClass('active').eq(i).addClass('active');
                        } else {
                            $('#submit-button').first().trigger('click');
                        }
                    }
                });
            });
        });

    })

    $(function() {
        $('#stavni-tabs').each(function() {
            $(this).find('li').each(function(i) {
                $(this).click(function(){
                    if ($('#third-tab').hasClass('active')) {
                        if (Boolean(
                            $("#stavni_time").val()
                        )) {
                            $(this).addClass('active').siblings().removeClass('active')
                                .closest('div.tabs').find('div.tabs__content').removeClass('active').eq(i).addClass('active');
                        } else {
                            $('#submit-button').first().trigger('click');
                        }
                    } else {
                        if (Boolean(
                            $("#stavni_nazv").val() &&
                            $("#stavni_tel").val()
                        )) {
                            $(this).addClass('active').siblings().removeClass('active')
                                .closest('div.tabs').find('div.tabs__content').removeClass('active').eq(i).addClass('active');
                        } else {
                            $('#submit-button').first().trigger('click');
                        }
                    }
                });
            });
        });

    })
})(jQuery)

