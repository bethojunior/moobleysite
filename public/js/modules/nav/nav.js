$(".button-collapse").sideNav();

elementProperty.addEventInElement('#share','onclick',function () {
    navigator.share({
        title: document.getElementById('Moobley cash').innerHTML,
        text: 'Aqui está o link do site do Moobley Cash',
        url: window.location.href,
    })
})
