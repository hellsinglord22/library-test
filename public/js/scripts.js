$(document).ready(function(){
    $("#type input:radio").change(function(){
        var value = $('input[name=type]:checked', '#usrform').val(); 
        
        if (value === "R&W"){
            $("#options input:text").attr("type", "hidden");
            $("answer").attr("type"); 
        } else{
            $("#options input:hidden").attr("type", "text"); 
            $("answer").attr("type", "text"); 
        }
    }); 
}); 