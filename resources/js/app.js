
window._ = require('lodash');
window.Proper = require('popper.js').default;
try{
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('@fortawesome/fontawesome-free/js/all.js');
    window.swall = require('sweetalert2');
}catch(e){}
