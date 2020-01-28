
window._ = require('lodash');
window.Proper = require('popper.js').default;
try{
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
}catch(e){}
