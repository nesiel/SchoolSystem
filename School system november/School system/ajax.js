$(document).ready(function(){
    $("#link").click(function(){
    $.ajax({url:"test.php", success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $("#course").click(function(){
    $.ajax({url:"course.php", success: function(result){
        $("#div1").html(result);
    }});
});
});
$(document).ready(function(){
    $("#student").click(function(){
    $.ajax({url:"course.php", success: function(result){
        $("#div1").html(result);
    }});
});
});