(function(){
    

var     menu_category_h1 = $('#menu_section_container h1'),
        menu_category_body = $('.menu-category-body'),
        menu_category_text = $('.menu-category-text'),
        menu_category_content = $('.menu-category-content');

    
    menu_category_content.append('<div class="menu-pop-btn"><i class="menu-fas fa fa-eye"></i></div>');
    menu_category_viewed = $('.menu-fas');
    menu_pop_btn = $('.menu-pop-btn');

    menu_category_body.prepend('<i class="toggle-categories fa fa-close"></i>');
    toggle_categories = $('.toggle-categories')

    menu_category_body.hide();
    menu_category_text.hide();
    toggle_categories.hide();
    
    menu_category_h1.click(function() {
        $(this).next().slideToggle();
    })

    toggle_categories.click(function() {

        $(this).parent().fadeToggle();

    })


    menu_pop_btn.click(function() {

        /* looking for the content of the items of the menu */
        $(this).parent().find(menu_category_text).slideToggle();

        /* toggles the eye icons */
        $(this).find('i').toggleClass('fa-eye-slash')
    })
    
    
})();  