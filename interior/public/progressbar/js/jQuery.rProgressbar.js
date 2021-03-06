/**
 * jQuery Line Progressbar
 * Author: Sharifur Rahman
 * Author URI : https:devrobin.com
 * Version: 1.0.0
 */

;
(function($) {
    'use strict';


    $.fn.rProgressbar = function(options) {

        options = $.extend({
            percentage: null,
            ShowProgressCount: true,
            duration: 1000,
            // Styling Options
            fillBackgroundColor: '#f2e9e9',
            backgroundColor: 'transparent',
            borderRadius: '0px',
            height: '5px',
            width: '100%'
        }, options);

        $.options = options;
        return this.each(function(index, el) {
            // Markup
            $(el).html('<div class="progressbar"><div class="proggress"></div><div class="percentCount"></div></div>');

            var lineProgressBarInit = function() {
                var progressFill = $(el).find('.proggress');
                var progressBar = $(el).find('.progressbar');
                var progressCount = $(el).find('.percentCount');

                progressFill.css({
                    backgroundColor: options.fillBackgroundColor,
                    height: options.height,
                    borderRadius: options.borderRadius,
                });
                progressBar.css({
                    width: options.width,
                    backgroundColor: options.backgroundColor,
                    borderRadius: options.borderRadius
                });

                // Progressing
                progressFill.animate({
                    width: options.percentage > 100 ? 100 + "%" : options.percentage  + "%"
                }, {
                    step: function(x) {
                        if (options.ShowProgressCount) {
                            $(el).find(".percentCount").html(Math.round(x) + "<span class='percentage'>%</span>");
                        }
                    },
                    duration: options.duration
                });

                var animatePropery = {left: options.percentage > 100 ? 93 + "%" : options.percentage + "%"};

                if($('html').attr('dir') == 'rtl'){
                    animatePropery = {right: options.percentage > 100 ? 93 + "%" : options.percentage + "%"};
                }

                progressCount.animate(animatePropery, {
                    duration: options.duration
                });
            }

            $(this).waypoint(lineProgressBarInit, { offset: '100%', triggerOnce: true });
        });
    }

})(jQuery);
