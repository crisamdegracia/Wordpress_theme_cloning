/* Hides the pop-in pop-out arrow button when clicking the menu categories */
/* Hides the menu categories content*/
$(function () {

    var menuSideBtnToggle = function(e){
        //btn is the pop-in pop-out arrow when clicking categories
        var btn         = $(".toggle-categories"),
        
            //position of btn
            position    = btn.offset().top,

            //header page is the headline
            headerPage      = $('#menu-page-x'),

            footer          = $('footer'),
            //the postion of header
            headerPosition  = headerPage.offset().top - 200,

            //position of footer
            footerPosition  = footer.offset().top - 200,

            scrollTop       = $(document).scrollTop(),

            menu_category_body = $('.menu-category-body');

        // 15 the location line of header
        //2500 is the location of footer
        if(   scrollTop > 200 && scrollTop < footerPosition ){  /* &&   scrollTop < 2500 */
            btn.css('display' , 'block');
        }
        else {            
            /* hides the pop-in pop-out button */
            btn.hide();
            /* hide the content of categories*/
            menu_category_body.hide();

        }

        
        //        console.log('---------------------')
        //        console.log(' Scroll Top :  ' + $(document).scrollTop())
        //        console.log(' Document Height : ' + $(document).height())
        //        console.log(' Button Position : ' + position)
        //                console.log(' Footer Position  :  ' + footerPosition)
        //        console.log('---------------------')

    }

    $(window).scroll( menuSideBtnToggle );

});
