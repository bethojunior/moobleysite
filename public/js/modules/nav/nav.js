$(".button-collapse").sideNav();

elementProperty.addEventInElement('#share','onclick',function () {
    navigator.share({
        title: 'Moobley Cash',
        text: 'Aqui está o link do site do Moobley Cash',
        url: window.location.href,
    })
})
