// При событии скролл для окна
$(window).scroll(function(){
    // Для переменной scroller задает текущую высоту, на сколько прокручен скроллбар
    scroller=$(window).scrollTop();
    // Если ниже 50 пикселей сверху, добавляем класс, с фоном меню
    if(scroller>150){
        $("nav").addClass("nav-scrolled");
    } else {
        // Если выше, чем 50 пикселей сверху, удаляем класс с подсветкой
        $("nav").removeClass("nav-scrolled");
    }
});