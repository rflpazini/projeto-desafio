$(document).ready(function() {
    viewPortConfig();
    window.addEventListener("resize", viewPortConfig);

    $("#compare").click(function(event) {
        if ($('select').val() == null || $('select').val().length < 2) {
            alert("Selecione dois(2) veículos para fazer a comparação! ");
            return;
        }

        $.ajax({
                method: "POST",
                url: "config/actions.php",
                data: {
                    action: 'add',
                    modelos: $('select').val()
                }
            })
            .done(function(msg) {
                $('#cars').addClass('hide');
                $('.result').addClass('on');
                $('#compare').addClass('hide');
                $('#create-pdf').removeClass('hide').addClass('on');
                $('#table').html(msg);
            });
    });

    $("#again").click(function(event) {
        location.reload();
    });

    $('#create-pdf').click(function(e){
    	window.print();
    });
});


function viewPortConfig() {
    var vpWidth = $(window).width();

    if (vpWidth <= 990) {
        $("#cars").removeClass('card');
        $(".thumbnail").addClass('card');
    } else {
        $(".thumbnail").removeClass('card');
        $("#cars").addClass('card');
    }
}
