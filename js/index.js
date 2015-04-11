
$(function(){


    $("#typed").typed({
        strings: ["Share your dreams !^1500", "Or peek at others !^1500", '<span class="glyphicon glyphicon-thumbs-up"/> other dreams and <span class="glyphicon glyphicon-heart"/> !^1000',],
        typeSpeed: 25,
        backDelay: 500,
        loop: true,
        contentType: 'html', // or text
        // defaults to false for infinite loop
        loopCount: false,
        callback: function(){ goo(); },
        resetCallback: function() { newTyped(); }
    });

    $(".reset").click(function(){
        $("#typed").typed('reset');
    });

});

function newTyped(){ /* A new typed object */ }

function goo(){
}

function foo(){ console.log("Callback"); }
