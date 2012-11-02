// 把图片插入到对象，在 ajax 中会经常使用
Do.ready(function() {
    var imgArray = ['loc_portrait01.jpg', 'loc_portrait02.jpg', 'loc_portrait03.jpg', 'loc_portrait04.jpg', 'loc_portrait05.jpg', 'loc_portrait06.jpg', 'loc_portrait07.jpg', 'loc_portrait08.jpg', 'loc_portrait09.jpg', 'loc_portrait10.jpg', 'loc_portrait11.jpg', 'loc_portrait12.jpg'];

    for (var i = 0; i < imgArray.length; i++) {
        $("<img />").attr({
            'src': 'upload/images/' + imgArray[i],
            'id': 'img' + i
        }).load(function() {
            $(this).appendTo('.gallery');
        })
    };
})
