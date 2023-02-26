require('./bootstrap');

window.Echo.channel("alertchannel")
.listen("AlertEvent", function(e) {
    alert(e.message);
})