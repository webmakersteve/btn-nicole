/*!
 * ScrollMagic v2.0.5 (2015-04-29)
 * The javascript library for magical scroll interactions.
 * (c) 2015 Jan Paepke (@janpaepke)
 * Project Website: http://scrollmagic.io
 * 
 * @version 2.0.5
 * @license Dual licensed under MIT license and GPL.
 * @author Jan Paepke - e-mail@janpaepke.de
 *
 * @file ScrollMagic jQuery plugin.
 *
 * requires: jQuery ~1.11 or ~2.1
 */
!function(e,o){"function"==typeof define&&define.amd?define(["ScrollMagic","jquery"],o):"object"==typeof exports?o(require("scrollmagic"),require("jquery")):o(e.ScrollMagic,e.jQuery)}(this,function(e,o){"use strict";var r="jquery.ScrollMagic",l=window.console||{},i=Function.prototype.bind.call(l.error||l.log||function(){},l);e||i("("+r+") -> ERROR: The ScrollMagic main module could not be found. Please make sure it's loaded before this plugin or use an asynchronous loader like requirejs."),o||i("("+r+") -> ERROR: jQuery could not be found. Please make sure it's loaded before ScrollMagic or use an asynchronous loader like requirejs."),e._util.get.elements=function(e){return o(e).toArray()},e._util.addClass=function(e,r){o(e).addClass(r)},e._util.removeClass=function(e,r){o(e).removeClass(r)},o.ScrollMagic=e});