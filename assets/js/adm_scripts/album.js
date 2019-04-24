$(document ).ready(function() {
    var basepath = $("#basepath").val();
   
   
    $(document).on('submit','#albumForm',function(e){
		e.preventDefault();


		if(validateAlbum())
		{

           
           
            var formDataserialize = $("#albumForm").serialize();
            formDataserialize = decodeURI(formDataserialize);
            console.log(formDataserialize);

            var formData = { formDatas: formDataserialize };
            var type = "POST"; //for creating new resource
            var urlpath = basepath + 'album/album_action';
            $("#albumsavebtn").css('display', 'none');
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
                        var addurl = basepath + "album/addAlbum";
                        var listurl = basepath + "album";
                        $("#responsemsg").text(result.msg_data);
                        $("#response_add_more").attr("href", addurl);
                        $("#response_list_view").attr("href", listurl);

                    } 
					else {
                        $("#album_response_msg").text(result.msg_data);
                    }
					
                    $("#loaderbtn").css('display', 'none');
					
                    $("#albumsavebtn").css({
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






    $(document).on("click", ".albumstatus", function() {
        
		var uid = $(this).data("albumid");
        var status = $(this).data("setstatus");
        var url = basepath + 'album/setAlbumStatus';
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



});/* document ready end */



function validateAlbum()
{
    
    var albumname = $("#albumname").val();
   

    $("#error_msg").text("").css("dispaly", "none").removeClass("form_error");

    if(albumname=="")
    {
        $("#albumname").focus();
        $("#error_msg")
        .text("Error : Enter Album Name")
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