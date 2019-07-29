document.addEventListener("DOMContentLoaded", function(){
	$('.preloader-background').delay(1700).fadeOut('slow');
	
	$('.preloader-wrapper')
		.delay(1700)
		.fadeOut();
});

$(document).ready(function(){
    var json = '';
    // json = {
    //     'data':[
    //             {title: 'We will be lovers for a life time (^_^)', caption: 'Will You be Mine? '},
    //             {title: 'In the good and bad times', caption: 'Eat Love Pray'},
    //             ]
    // }   
    json = {
        'data':[
                {title: 'A Passionate Geek (^_^)', caption: '< Eat Sleep Dream Code />'},
                {title: 'Knowlegde Quest!', caption: 'Passionate about Technology, Travelling, Nature, Sports and Cosmos'},
                {title: 'Hard Work but no Play', caption: '<i class="fa fa-plane"></i>   Travel is the Healthiest Addiction   <i class="fa fa-plane"></i>'}
                ]
    }   
    // var jsonObj = JSON.parse(json);
    var data = json.data;
    var title = $('#title-caption');
    var caption = $('#index-caption');
    //var fadeEle = $('#lead-holder');
    var delay = 8000;
    var effect = 2000;
    var pause = 12000;
    var count = 0

    var tick = setInterval(function(){
    title.fadeOut ( effect );    
    caption.fadeOut( effect, function(){
            if(count <= data.length - 1){
                title.html(data[count].title).fadeIn( effect );
                caption.html(data[count].caption).fadeIn( effect );
                // console.log(count);
                // console.log(arr[count]);
                count++
                if(count > data.length -1)
                {
                    count = 0;
                }
            // text.delay( delay ).fadeOut()
            }
        })
        
    }, pause);
});