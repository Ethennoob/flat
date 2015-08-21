/* jQuery Cookie Min */
jQuery.cookie = function(key, value, options) {
    if (arguments.length > 1 && String(value) !== "[object Object]") {
        options = jQuery.extend({}, options);
        if (value === null || value === undefined) {
            options.expires = -1
        }
        if (typeof options.expires === 'number') {
            var days = options.expires, t = options.expires = new Date();
            t.setDate(t.getDate() + days)
        }
        value = String(value);
        return(document.cookie = [encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value), options.expires ? '; expires=' + options.expires.toUTCString() : '', options.path ? '; path=' + options.path : '', options.domain ? '; domain=' + options.domain : '', options.secure ? '; secure' : ''].join(''))
    }
    options = value || {};
    var result, decode = options.raw ? function(s) {
        return s
    } : decodeURIComponent;
    return(result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null
}

jQuery(document).ready(function($) {
    /* Banner Settings */
    var DesignModo = {};

    DesignModo.headerBanner = function(cookieName, expireDays) {
        var $section = $('.top-banner-qards'),
                $banner = $('.qards-banner'),
                $cookie = $.cookie(cookieName),
                $colors = ['blue', 'green', 'orange'],
                $effects = ['fade-in', 'fade-in', 'slide-in-left', 'slide-in-right', 'zoom-in', 'zoom-in', 'drop-in'],
                $closeButtonTimeout;
					 
        if ($cookie !== 'banner-hidden') {
            $('#upper-menu-container').css('margin-top', '85px');
            $('#header-wrapper').css('margin-top','85px');

            // add color and effects
            $section.removeClass('banner-hidden').addClass(DesignModo.getRandom($colors));
            $banner.addClass(DesignModo.getRandom($effects));

            // close button
            $('.qards-banner .close-icon').mousedown(function() {
                $('.qards-banner').addClass('fade');
                $closeButtonTimeout = setTimeout(function() {
                    $section.slideUp('slow');
                    $.cookie(cookieName, 'banner-hidden', {path: '/', expires: expireDays});
                    $('#header-wrapper').animate({marginTop:0},'fast');
                    $('#upper-menu-container').animate({marginTop: 0}, 'fast');
                }, 2000);
            }).bind('mouseup mouseleave', function() {
                clearTimeout($closeButtonTimeout);
                $('.qards-banner').removeClass('fade');
            });
        }
    }

    DesignModo.getRandom = function(array, name) {
        var length = array.length;
        var randomVar = Math.floor((Math.random() * length));
        var element = array[randomVar];

        $('#' + name + ' option:selected').removeAttr('selected');
        $('#' + name + ' option[value="' + element + '"]').attr('selected', 'selected');

        if (!element) {
            return "";
        } else if (name) {
            if ((name == 'icon') || (name == 'text')) {
                return element;
            }
            else
                return name + "-" + element + " ";
        } else {
            return element;
        }
    }

    DesignModo.headerBanner('qards-bnr', 14); // cookieName, Days to cookie expire
});