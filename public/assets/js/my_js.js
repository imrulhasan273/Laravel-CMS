$(document).ready(function () {
    // $("#file2").hide();
    $("#file1").hide();
    $("select.contents").change(function () {
        var selectedCountry = $(this).children("option:selected").val();
        if (selectedCountry == "V") {
            // $("#file2").css("display", "none");
            $("#file2").hide();
            $("#file1").show();
        } else {
            $("#file1").hide();
            $("#file2").show();
        }
    });
});
