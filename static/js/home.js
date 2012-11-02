Do.ready('home-css',

function() {
    // add styleSheets
    $('document').attr('title', 'jQuery test'); // $('title').html('jQuery html'); // 此代码 ie 下会报错！
    //用 document 修改 title 没问题
    $('.first-li:even').css({
        'color': 'red'
    });
    $('.first-li:odd').css({
        'color': 'cyan'
    });
    $('.first-li:eq(1)').css({
        'font-size': '18px'
    });
    $('.first-li.bottom').css('color', 'yellow');
    $('.last-li').css('color', 'magenta');

    $('a[href*="mtv.com"]').before('<span class="icon-music"></span>');
    $('.last-li').prepend('<span class="icon-glass"></span>');
    // $('a[href*="google.com"]').addClass('icon-glass');
    // $('.last-li').addClass('icon-glass');
    // test clone
    $('.last-li').clone().appendTo('.product')


    // test on click
    $('.my-link').on('click', alertMe)

    function alertMe() {
        alert("Hello!");
    }

    // test event
    // test error event
    $('#portrait').error(function() {
        $(this).attr('src', 'upload/images/default.jpg');
    })

    // click box or box-live clone this to .container
    $('.click-test .box').on('click', function() {
        $(this).clone().appendTo('.container');
    })
    $('.click-test .box-live').live('click', function() {
        $(this).clone().appendTo('.container');
    })

    // test first()
    $('.click-test .container').first().on('click', function() {
        $(this).clone().addClass('square').appendTo('.container:first');
    })

    // 测试mouseover and mouseenter 的区别
    x = 0;
    y = 0;
    $("div.over").mouseover(function() {
        $(".over span").text(x += 1);
    });
    $("div.enter").mouseenter(function() {
        $(".enter span").text(y += 1);
    });

    // test toggle
    $('.content-link').on('click', function() {
        $('.content').toggle();
    })


    // FIXME: 显示效果不完善，预期为指向每个链接时，链接尺寸放大，离开时恢复。现在不能正确完成，生成的图层挡住了本来需要触发的图层，计划用鼠标位置完成触发，以后再改。
    // gallery > photos
    // use mouseover mouseout mouseenter mouseleave event.
    // $(function(){
    //  $('a.photo').bind({
    //      mouseover: function(){
    //          $(this).clone().addClass('prepose').css({'width':'240px', 'height':'180px'}).appendTo('.slide-gallery')
    //      },
    //      mouseout: function(){
    //          $('.prepose').remove();
    //      }
    //  });
    // })
    $('a.photo').hover(

    function() {
        $(this).clone().addClass('prepose').css({
            'width': '240px',
            'height': '180px'
        }).appendTo('.slide-gallery')
    }, function() {
        $('.prepose').remove();
    });


    // test hover event
    // test textarea change event
    // FIXME: 字符显示不正常，不能显示实际剩余数字，阻止输入上屏事件无效，原因不明
    var maxNum = 140;

    $('.status').on({
        keypress: function() {
            var inputText = $(this).val();
            var numChar = inputText.length;
            var charRemain = numChar - maxNum;
            if(numChar <= maxNum) {
                $('.counter').text(charRemain);
            } else if(numChar > maxNum) {
                event.preventDefault();
            }
        }
    })



});