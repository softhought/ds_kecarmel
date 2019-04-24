$(document ).ready(function() {
    var basepath = $("#basepath").val();

    var mode = $("#mode").val();

    if (mode=='ADD') {
                      $("#line_div_2").css('display', 'none');
                      $("#line_div_3").css('display', 'none');
                      $("#line_div_4").css('display', 'none');
                      $("#line_div_5").css('display', 'none');
    }else if(mode=='EDIT'){
         var linevalue=   $("input[name='lineno']:checked").val();

         lineDisplay(linevalue);
       
    }

                    
   
   
    $(document).on('submit','#flashnewsForm',function(e){
		e.preventDefault();


		if(validateFlashNews())
		{

           
           
            var formDataserialize = $("#flashnewsForm").serialize();
            formDataserialize = decodeURI(formDataserialize);
            console.log(formDataserialize);

            var formData = { formDatas: formDataserialize };
            var type = "POST"; //for creating new resource
            var urlpath = basepath + 'flashnews/flashnews_action';
            $("#flashnewssavebtn").css('display', 'none');
            $("#loaderbtn").css('display', 'block');

            $.ajax({
                type: type,
                url: urlpath,
                data: formData,
                dataType: 'json',
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                success: function(result) {
					if (result.msg_status == 1) {
							
                        $("#suceessmodal").modal({
                            "backdrop": "static",
                            "keyboard": true,
                            "show": true
                        });
                        var addurl = basepath + "flashnews/addFlashNews";
                        var listurl = basepath + "flashnews";
                        $("#responsemsg").text(result.msg_data);
                        $("#response_add_more").attr("href", addurl);
                        $("#response_list_view").attr("href", listurl);

                    } 
					else {
                        $("#flashnews_response_msg").text(result.msg_data);
                    }
					
                    $("#loaderbtn").css('display', 'none');
					
                    $("#flashnewssavebtn").css({
                        "display": "block",
                        "margin": "0 auto"
                    });
                },
                error: function(jqXHR, exception) {
                    var msg = '';
                }
            });
            
            
            
			
		}

    });
    




    //  Code

    $(document).on('keyup','#projectcode',function(e){
        e.preventDefault();
        
            var mode = $("#mode").val();
           

            var projectcode = $("#projectcode").val();
            var prvprojectcode = $("#prvprojectcode").val();


            if(projectcode==prvprojectcode && mode=="EDIT") {
                
            }
            else{
              
                $("#error_msg").text("").css("display", "none");
    
                var type = "POST"; 
                var urlpath = basepath + 'project/checkProjectCode';
                $.ajax({
                    type: type,
                    url: urlpath,
                    data: {projectcode:projectcode},
                    dataType: 'json',
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    success: function(result) {
                        if(result.msg_status==1){
                            $("#error_msg")
                            .text("Error : Project Code already exist.Please check...")
                            .addClass("form_error")
                            .css("display", "block");
                            $("#projectsavebtn").attr('disabled',true);
                        }
                        else{
                            $("#error_msg").text("").css("display", "none");
                            $("#projectsavebtn").attr('disabled',false);
                        }
                    },
                    error: function(jqXHR, exception) {
                        var msg = '';
                    }
                });
                
           
            }
    });






    $(document).on("click", ".newsstatus", function() {
        
		var uid = $(this).data("newsid");
        var status = $(this).data("setstatus");
        var url = basepath + 'flashnews/setFlashNewsStatus';
        setActiveStatus(uid, status, url);

    });

    /* update album serial */


        $(document).on("click", ".albumserial", function() {
                
                var albumid = $(this).data("albumid");
                var slno = $(this).data("slno");
                var action = $(this).data("action");
             
                  $("#loadalbumlist").html('');   
                var type = "POST"; 
                var urlpath = basepath + 'album/changeAlbumSerial';
                $.ajax({
                    type: type,
                    url: urlpath,
                    data: {albumid:albumid,slno:slno,action:action},
                    dataType: 'html',
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    success: function(result) {
                      $("#loadalbumlist").html(result);   
                    },
                    error: function(jqXHR, exception) {
                        var msg = '';
                    }
                });

    });

 $('input:radio[name="lineno"]').change(function(){
  
    var linevalue= $(this).val();
    lineDisplay(linevalue);
    
});



});/* document ready end */



function validateFlashNews()
{
    
    var lineone = $("#lineone").val();
    var linetwo = $("#linetwo").val();
    var linethree = $("#linethree").val();
    var linefour = $("#linefour").val();
    var linefive = $("#linefive").val();
   

    $("#error_msg").text("").css("dispaly", "none").removeClass("form_error");

    if(lineone=="")
    {
        $("#lineone").focus();
        $("#error_msg")
        .text("Error : Enter news line one")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }

    if(lineone.length >50 )
    {
        $("#lineone").focus();
        $("#error_msg")
        .text("Error : max 50 characters line one")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }

    if(linetwo.length >50 )
    {
        $("#linetwo").focus();
        $("#error_msg")
        .text("Error : max 50 characters line two")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }

   if(linethree.length >50 )
    {
        $("#linethree").focus();
        $("#error_msg")
        .text("Error : max 50 characters line three")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }

    if(linefour.length >50 )
    {
        $("#linefour").focus();
        $("#error_msg")
        .text("Error : max 50 characters line four")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }

    if(linefive.length >50 )
    {
        $("#linefive").focus();
        $("#error_msg")
        .text("Error : max 50 characters line five")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }



	return true;
}


function confirmProjectCode(){

    var projectcode = $("#projectcode").val();
    var mode = $("#mode").val();

    if(mode=='ADD'){
        if (confirm('Confirm Project Code: '+projectcode)) {
            return true;
        } else {
            return false;
        }

    }else{
        return true;
    }
    

}

function lineDisplay(linevalue){
    //alert(linevalue);
        if (linevalue==5) {

                      $("#line_div_2").css('display', 'block');
                      $("#line_div_3").css('display', 'block');
                      $("#line_div_4").css('display', 'block');
                      $("#line_div_5").css('display', 'block');

        }else if(linevalue==4){

                      $("#line_div_2").css('display', 'block');
                      $("#line_div_3").css('display', 'block');
                      $("#line_div_4").css('display', 'block');
                      $("#line_div_5").css('display', 'none');

        }else if(linevalue==3){
                      $("#line_div_2").css('display', 'block');
                      $("#line_div_3").css('display', 'block');
                      $("#line_div_4").css('display', 'none');
                      $("#line_div_5").css('display', 'none');

        }else if(linevalue==2){
                      $("#line_div_2").css('display', 'block');
                      $("#line_div_3").css('display', 'none');
                      $("#line_div_4").css('display', 'none');
                      $("#line_div_5").css('display', 'none');

        }else{
                      $("#line_div_2").css('display', 'none');
                      $("#line_div_3").css('display', 'none');
                      $("#line_div_4").css('display', 'none');
                      $("#line_div_5").css('display', 'none');

        }
}