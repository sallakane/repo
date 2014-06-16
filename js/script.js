(function($) {
    $(document).ready(function() {


        $("#TitlecontentText").keypress(function (e) {
            $("#TitleRendu").html($("#TitlecontentText").val());
        });    


        $("select#couleurTitle").change(function (){
            $("#TitleRendu").css('color',$("select#couleurTitle").val())
        });
        
    });
}(jQuery));