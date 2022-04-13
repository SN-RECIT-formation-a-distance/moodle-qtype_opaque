// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Javascript change opaque question focus.
 *
 * @package   mod_quiz
 * @copyright 2017 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since     3.2
 */
define("qtype_opaque/init_mathjax", ["jquery"], function(a) {
    var b = {
        init: function init() {
            a(document).ready(function() {
                
                var check = $('script[type*="math/tex"]');
                if (check){
                    if(M.filter_mathjaxloader){
                        M.filter_mathjaxloader.typeset(); 
                    }
                    setTimeout(function(){if (MathJax) MathJax.Hub.Queue(["Typeset",MathJax.Hub]); }, 500);
                }
            })
        },
    };
    return b
});
