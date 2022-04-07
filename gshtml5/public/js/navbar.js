document.window.scroll(function(){
    if (document.scrollTop()>10) {
        document.getElementById("logo").innerHTML = '<p class="suprema">G<span>S</span>HTML5</p>';
    }
})

// $(window).scroll(function() {
//     if ($(document).scrollTop() > 150) {
//         $('.navbar').addClass('shrink');
//     }
//     else {
//         $('.navbar').removeClass('shrink');
//     }
// });