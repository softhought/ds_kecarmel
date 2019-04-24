$(document).ready(function(){
    var basepath = $("#basepath").val();
    var rowNoUpload = 0;

 $( ".datepicker" ).datepicker({
       
       changeMonth: true,
       changeYear: true,
       format: 'dd/mm/yyyy'

    });
   $('.selectpicker').selectpicker();

    /* submit admission form*/

      $(document).on('click', '.browse', function(){
      var file = $(this).parent().parent().parent().find('.file');
      file.trigger('click');
    });

      $(document).on('change', '.file', function(){
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    }); 


 $(document).on('submit','#GalleryForm',function(event)
    {
        event.preventDefault();
        if(validateGallery())
        {   
        
      
          
          
            var formData = new FormData($(this)[0]);
            $("#gallerysavebtn").css('display', 'none');
            $("#loaderbtn").css('display', 'block');
        

            //console.log(formData);
            
    
        $.ajax({
                type: "POST",
                url: basepath+'gallery/saveGalleryImage',
                dataType: "json",
                processData: false,
                contentType: false, // "application/x-www-form-urlencoded; charset=UTF-8",
                data: formData,
                
                success: function (result) {
                    
                    if (result.msg_status == 1) {
                            
                        $("#suceessmodal").modal({
                            "backdrop": "static",
                            "keyboard": true,
                            "show": true
                        });
                        var addurl = basepath + "gallery/addImage";
                        var listurl = basepath + "gallery/galleryview";
                        $("#responsemsg").text(result.msg_data);
                        $("#response_add_more").attr("href", addurl);
                        $("#response_list_view").attr("href", listurl);

                    } 
                    else {
                        $("#gallery_response_msg").text(result.msg_data);
                    }
                    
                    $("#loaderbtn").css('display', 'none');
                    
                    $("#gallerysavebtn").css({
                        "display": "block",
                        "margin": "0 auto"
                    });
                  
                }, 
                error: function (jqXHR, exception) {
                  var msg = '';
                    if (jqXHR.status === 0) {
                        msg = 'Not connect.\n Verify Network.';
                    } else if (jqXHR.status == 404) {
                        msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                   // alert(msg);  
                }
            }); /*end ajax call*/

        }   // end master validation
        
    });

// Set Status
    $(document).on("click", ".eventsstatus", function() {
    var uid = $(this).data("eventsid");
        var status = $(this).data("setstatus");
        var url = basepath + 'events/setStatus';
        setActiveStatus(uid, status, url);

    });

/*delete notice*/
   $(document).on("click", ".delete_image", function() {
      var imageid = $(this).data("imageid");

          var urlpath = basepath + 'gallery/deleteGalleryImage';

          $.confirm({
        title: 'Confirm!',
        content: 'Are you sure to delete?',
        buttons: {
            confirm: function () {
                    /*--------------------------- Ajax------------------------------*/

                     $.ajax({
                    type: "POST",
                    url:  urlpath,
                    data: {imageid:imageid},
                    dataType: 'json',
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
                    success: function (result) {
                      if(result.msg_status=1)
                      {
                        location.reload();
                      }
                      
                    }, 
                    error: function (jqXHR, exception) {
                      var msg = '';
                      if (jqXHR.status === 0) {
                        msg = 'Not connect.\n Verify Network.';
                      } else if (jqXHR.status == 404) {
                        msg = 'Requested page not found. [404]';
                      } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                      } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                      } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                      } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                      } else {
                          msg = 'Uncaught Error.\n' + jqXHR.responseText;
                        }
                      alert(msg);  
                      }
                  }); /*end ajax call*/
                    /*--------------------------- End Ajax-------------------------*/



            },
            cancel: function () {
              //  $.alert('Canceled!');
              
            }
           
        }
    });
    

    
    


     



    });

  // check upload size
     $("input[type='file']").on("change", function () {
     if(this.files[0].size > 500000) {
       alert("Please upload file less than 500KB. Thanks!!");
       $(this).val('');
     }
    });

});// end of document ready




function validateGallery()
{
    var album = $("#album").val();
    var filename = $("#fileName_0_1").val();
    var filename2 = $("#fileName_2_1").val();


  

    $("#gallerymsg").text("").css("dispaly", "none").removeClass("form_error");



    if(album=="0")
    {
        $("#album").focus();
        $("#gallerymsg")
        .text("Error : Select album")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }


    if(filename=="")
    {
        $("#fileName_0_1").focus();
        $("#gallerymsg")
        .text("Error : Please upload small image")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }

   if(filename2=="")
    {
        $("#fileName_2_1").focus();
        $("#gallerymsg")
        .text("Error : Please upload big image")
        .addClass("form_error")
        .css("display", "block");
        return false;
    }
    
 
    return true;
}

function confirmeventdelete()
{
 // return confirm("Are you sure to delete?");
//  return confirm("Sorry ! Permission denied");




}


