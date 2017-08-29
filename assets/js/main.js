/**
 * Created by Administrator on 6/29/2017.
 */
$(document).ready(function () {
    $(window).scroll(function () {
        var screenTop = $(document).scrollTop();
        $('.mynavbar').css('background-color','rgba(0,0,0,'+ screenTop/100+ ')');
        if(screenTop > 300) {
            $('.navbar-form').css('display', 'inline');
            $('.joinBtn').css({
                'border':'#00B22D 2px solid',
                'background-color':'#00B22D'
            })
        }        else {
            $('.navbar-form').css('display', 'none');
            $('.joinBtn').css({
                'border':'white 2px solid',
                'background-color':'inherit'
            })
        }  console.log(screenTop);
    })
})
