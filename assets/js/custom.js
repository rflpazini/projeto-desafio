$(document).ready(function() {
    viewPortConfig();
    window.addEventListener("resize", viewPortConfig);

    $("#compare").click(function(event) {
        if ($('#select-cars').val() == null || $('#select-cars').val().length < 2) {
            alert("Selecione dois(2) veículos para fazer a comparação! ");
            return;
        }

        $.ajax({
                method: "POST",
                url: "config/actions.php",
                data: {
                    action: 'compara',
                    modelos: $('#select-cars').val()
                }
            })
            .done(function(msg) {
                $('#cars').addClass('hide');
                $('.result').addClass('on');
                $('#compare').addClass('hide');
                $('#export').removeClass('hide').addClass('on');
                $('#table').html(msg);
            })
    });

    $("#again").click(function(event) {
        location.reload();
    });

    $("#download").click(function(event) {
        var down = $("#select-download").val();
        location = "config/actions.php?action=export&html=" + $('.table-responsive').html() + "&tipo=" + down;
        if (down == 'pdf') {
        	window.print();
        	location = 'index.php';
        };
    })
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
