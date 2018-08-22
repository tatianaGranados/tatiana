$(document).ready(function () {
    $('#myButton').click(function () {
        animateProgressBar($('#avance').val());
    });
function animateProgressBar(percentageCompleted) {
    $('#barra').animate({
        'width': (600 * percentageCompleted) / 100
    }, 3000);

     $({ counter: 1 }).animate({ counter: percentageCompleted }, {
        duration: 3000,
        step: function () {
            $('#barra').text(Math.ceil(this.counter) + ' % de Avance');
        }
    })
    }
});
