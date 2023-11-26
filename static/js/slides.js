$("#range-control").rangeslider({
    polyfill: false,
    onSlideEnd: function(position, value){
        audio.currentTime = audio.duration * value / 100;
    }
});

$(audio).bind('timeupdate', function(){
    var percent = audio.currentTime/ audio.duration * 100;
    $("#range-control").val(percent).change();
    $("#status").text(Math.round(percent*100)/100+"%");
});

$("#btn-play").click(function(){
    audio.play();
});

$("#btn-stop").click(function(){
    audio.pause();
});