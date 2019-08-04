$("#cfmPassword").change(function(){
    if($(this).val() != $("#password").val()){
              alert("values do not match");
    }
});
$('input:radio[name="status_diskon"]').change(
    function(){
        if ($(this).val() == '1') {
            $("#diskon").prop('disabled', false);
        }
        else {
            $("#diskon").prop('disabled', true);
        }
    });