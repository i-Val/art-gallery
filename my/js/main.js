// Code to see a pic in detail
function goThere (n) {
    window.location.href = "biggal.php?s="+n;
}
// var a = "<?php echo 'mandy'; ?>";
function like (n) {
    window.location.href = "likes.php?a="+n;
}

//Map Api
window.onload = function () {
    var target = document.getElementById ('mapp');
    var coords = new google.maps.LatLng (9.0, 8.6);
    var options = {
        center: coords,
        zoom: 4,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var  map = new google.maps.Map (target, options);
};