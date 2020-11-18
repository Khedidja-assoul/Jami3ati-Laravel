let margin = ($("aside").width() - $("#aside1").width())/2;
$("[id^=aside]").css("margin-left", margin);
$("[id^=aside]").css("margin-right", margin);

var aside = ['notepad','folder','share'];
$("#more").click(function () {
    if($("aside").width()>0) {
        /*$("aside").animate({
        width : '0%',
        padding : '00%'
    },1000,function () {

    });*/


        $("aside img").fadeOut(600);
        $("aside").animate({
            width: '0vw'
        }, 600, function () {});
        $("#main").animate({
            width: '100vw'
        }, 600, function () {});

        $("#more").fadeOut(600);
        $("#more").attr("src", "public/res/icons/more.png");
        $("#more").fadeIn(600);
        $(".triangle-left").fadeOut(600);


    }else {

        $(".triangle-left").show();
        $("aside").animate({
            width: '5.5vw'
        }, 600, function () {});
        $("#main").animate({
            width: '95vw'
        }, 600, function () {});
        $("aside img").fadeIn(600);




        $("#more").fadeOut(600);
        $("#more").attr("src", "public/res/icons/menu.png");
        $("#more").fadeIn(600);

    }

});

$("[id^='aside']").click(function () {
    if($(this).attr("id").substring(5,6)==1){

        $("#aside3").animate({
            marginTop : '-21vh'
        },500,function () {
            $(this).css("margin-top","2vh");
        });

        $(this).animate({
            marginTop : "9vh"
        },500,function () {
            var photo = aside[2];
            for (let i = 2; i >= 0; i--) {
                aside[i] = aside[i-1];
            }
            aside [0] = photo;
            $(this).css("margin-top","2vh");
            for (let i = 0; i < 3; i++) {
                $("#aside"+(i+1)).attr("src","public/res/icons/"+aside[i]+".png");
            }
            majaside2();
        });


    }
    if($(this).attr("id").substring(5,6)==3){
        let margin = ($("aside").width() - $("#aside1").width())/2;
        $("[id^=aside]").css("position", 'absolute');
        $("[id^=aside]").css("margin-left", margin);
        $("[id^=aside]").css("margin-right", margin);
        $("#aside1").css("margin-top", '2vh');
        $("#aside2").css("margin-top", '9vh');
        $("#aside3").css("margin-top", '16vh');


        $("#aside2").animate({
            marginTop : '2vh'
        },500,function () {
            $(this).css("margin-top","2vh");
        });
        $("#aside3").animate({
            marginTop : '9vh'
        },500,function () {
            $(this).css("margin-top","2vh");
        });

        $("#aside1").animate({
            marginTop : '16vh'
        },500,function () {
            $(this).css("margin-top","2vh");
            var photo = aside[0];
            for (let i = 0; i < 3; i++) {
                aside[i] = aside[i+1];
            }
            aside [2] = photo;
            $(this).css("margin-top","2vh");
            for (let i = 0; i < 3; i++) {
                $("#aside"+(i+1)).attr("src","public/res/icons/"+aside[i]+".png");
            }
            $("[id^=aside]").css("position", 'relative');
            $("[id^=aside]").css("margin", '2vh auto 3vh auto');
            majaside2();
        });

    }

});

function majaside2() {
    if (aside[1] == 'clipboard') {
        $("#aside2").attr("src","public/res/icons/"+aside[1]+"full"+".png").fadeOut(0).fadeIn(500);
    }
    else if (aside[1] == 'folder') $("#aside2").attr("src","public/res/icons/"+aside[1]+"full"+".png").fadeOut(0).fadeIn(500);
    else $("#aside2").attr("src","public/res/icons/"+aside[1]+"full"+".png").fadeOut(0).fadeIn(500);
}

$("#pj").click(function () {
    $(this).attr("src","public/res/icons/broken-link.png");
});
