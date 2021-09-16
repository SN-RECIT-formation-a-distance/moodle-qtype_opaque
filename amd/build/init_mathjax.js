define("qtype_opaque/init_mathjax", ["jquery"], function(a) {
    var b = {
        init: function init() {
            a(document).ready(function() {
                
                var check = $('script[type*="math/tex"]');
                if (check){
                    M.filter_mathjaxloader.typeset(); 
                    setTimeout(function(){ if (MathJax) MathJax.Hub.Queue(["Typeset",MathJax.Hub]); }, 500);
                }
            })
        },
    };
    return b
});