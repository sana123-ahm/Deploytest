current_step = 1

function add_number(number){

    $("#" + current_step).addClass("is-active");
    $("#form_ajx").val($("#form_ajx").val() + number)
    current_step += 1;
    $('#disable_button').prop("disabled",false)
    return current_step;

    $()

}

function remove_all(){

    $("#form_ajx").val("")

    for(var i = 1; i<= current_step;i++){
        console.log(i);
        $("#" + i).removeClass("is-active");
    }
    current_step = 1;
    $('#disable_button').prop("disabled",true)

    return current_step;
}
