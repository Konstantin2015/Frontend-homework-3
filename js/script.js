/**
 * Created by Даша on 20.12.2014.
 */
$(document).ready(function(){
    $(".filter a").click(function(){
        $(".filter a").removeClass("active");
        $(this).addClass("active");
    });
});