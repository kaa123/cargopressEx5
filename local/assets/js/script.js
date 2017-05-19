$(function(){
    $("#phone").mask("(999) 999-9999");

    $("#form-question").on("submit", function (e) {
        // e.preventDefault();
        var formData = $(this).serializeArray();

        $.ajax({
            url: '/local/ajax/questions.php',
            type : 'POST',
            data : formData,
            success: function (data) {
                var result = JSON.parse(data);
                console.log(result);
            }
        });
    });

    $('.el-slider:first').addClass('active');
});



