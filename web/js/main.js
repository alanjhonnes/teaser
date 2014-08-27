$(document).ready(function(){
    $("input[type='radio']").change(function() {
        var name = $("input[name='type']:checked").val();
        console.log(name);
        if (name === 'user'){
            $(".background-user").fadeTo(300, 1);
            $(".background-gym").fadeTo(300, 0);
            $(".background-personal").fadeTo(300, 0);
        }
        else if (name === 'gym'){
            $(".background-user").fadeTo(300, 0);
            $(".background-gym").fadeTo(300, 1);
            $(".background-personal").fadeTo(300, 0);
        }
        else if (name === 'personal'){
            $(".background-user").fadeTo(300, 0);
            $(".background-gym").fadeTo(300, 0);
            $(".background-personal").fadeTo(300, 1);
        }
    });
});