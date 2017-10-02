



    
      $(document).ready(function(){

       


            function populatePage(arr) {
                
                //populate dom with content
                var i;
                for(i = 0; i < arr.length; i++) {
                    var id = "ps" + arr[i].id;
                    var cont = arr[i].content;
                    document.getElementById(id).innerHTML = cont;
                }
                
            }
            

            function sendData(content,id){

                //write to file
                $.ajax({
                    type: 'POST',
                    url: 'writePage.php',
                    data: {content: content, id: id},
                        success: function(response){
                            $(id).html(response);
                            }
                    }); 
            }


            function getData(){
                $.get("js/data.json", function(data){
                  populatePage(data);
                });
            }


            //call getData to populate dom with content
            getData();





            var id="";
            var captured = "";

            $('.buttons').on('click',function(){ 
                
                id = "#p" + $(this).attr('id');
                captured = $(id).html();


                //add red border
                if( $(id).hasClass('borderClass') ){
                    $(id).removeClass('borderClass');
                    $(id).attr('contentEditable','false');
                    

                //send content 
                sendData(captured, id);
                getData();
                

                }else{
                    $(id).addClass('borderClass');
                    $(id).attr('contentEditable','true');
                    
                }

            });

             //edit button
            $('#editme').on('click',function(){
                if($('.buttons').css('display')=="none"){
                    $('.buttons').css('display','block'); 
                      
                }
                else{
                    $('.buttons').css('display','none'); 
                    $(id).removeClass('borderClass'); 
                    captured = $(id).html();
                    sendData(captured, id);
                    getData();
                }
            });

        });
    
  
