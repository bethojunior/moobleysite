$(".button-collapse").sideNav();

elementProperty.addEventInElement('#share','onclick',function () {
    if (navigator.share !== undefined) {
        navigator.share({
            title: document.getElementById('Moobley cash').innerHTML,
            text: 'Aqui está o link do site do Moobley Cash',
            url: window.location.href,
        })
            .then(() => console.log('Successful share'))
            .catch((error) => console.log('Error sharing', error));
    }
})
