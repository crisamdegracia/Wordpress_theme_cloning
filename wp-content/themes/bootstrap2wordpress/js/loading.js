/* shows the menu section after the pages is full loaded */

(function(){

    var menuMainBody     = document.getElementById('menu-page-x'),
        loader           = document.getElementsByClassName('overlay'),
        topImageBg       = document.getElementsByClassName('top-img-bg'),
        awesometxt       = document.getElementsByClassName('awesometext'),
        layout_body      = document.getElementsByClassName('layout-body'),
        footer           = document.getElementsByTagName('footer'),
        gTranslate       = document.getElementById('gtranslator'),
        toBlock      = document.getElementsByClassName('forTheLoading');


        /* function for element thas has classes for display:none or block */
        classEl         =    function ( el , val ){
            for ( i = 0 ; i < el.length ; i++ ){
                el[i].style.display = val;
            }
        },

        /* function for element with ID for display:none or block */
        IDEl             =  function (el,val ){
            el.style.display = val;
        }


    window.addEventListener('load', function(e){
        classEl( loader,'none' );
        classEl( awesometxt ,'none' );
        classEl( topImageBg ,'block' );
        classEl( layout_body ,'block' );
        classEl( footer ,'block' );
        classEl( toBlock ,'block' );
       
    })



    /* hide and show the translator*/
    window.addEventListener('scroll' , function(e){
        if( this.scrollY > 200 ){
            gTranslate.setAttribute("style", "top:95vh");
        } else {
            gTranslate.setAttribute("style","top:12vh");
        }
    })


})();
