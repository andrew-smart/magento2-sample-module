define([
    'jquery',
    'jquery/ui'
], function($) {
    $.widget('smartie.example', {
        _create: function() {
            if (console) {
                console.log(this.element);
            }
        }
    });

    return $.smartie.example;
});
