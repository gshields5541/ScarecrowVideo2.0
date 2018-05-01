$(document).ready(function () {
    function movie(){
        $.ajax({
            url: "action.php",
            method: "POST",
            data : {category_ID: 1},
            success: function(data){

            }
        })
    }
})