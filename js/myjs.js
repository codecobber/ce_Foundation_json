

    
      $(document).ready(function(){

             //edit button
            $('#editme').on('click',function(){
                if($('.buttons').css('display')=="none"){
                    $('.buttons').css('display','block');   
                }
                else{
                    $('.buttons').css('display','none');  
                }
            });


            $.get("js/data.json", function(data){
              myFunction(data);
            });


            function myFunction(arr) {
                
                var i;
                for(i = 0; i < arr.length; i++) {
                    var id = "ps" + arr[i].id;
                    var cont = arr[i].content;
                    document.getElementById(id).innerHTML = cont;
                }
                
            }
            


            



            $('.buttons').on('click',function(){ 
                
                var id = "#p" + $(this).attr('id');
                var buttID = id.replace('p','');
                 console.log(id);

                //add red border
                if( $(id).hasClass('borderClass') ){
                    $(id).removeClass('borderClass');
                    $(id).attr('contentEditable','false');
                    

                //get content 
                var captured = $(id).html();

                //write to file
                $.ajax({
                    type: 'POST',
                        url: 'writePage.php',
                        data: {content: captured, id: id},
                        success: function(response){
                            $(id).html(response);
                            
                        }
                }); 

                }else{
                    $(id).addClass('borderClass');
                    $(id).attr('contentEditable','true');
                    
                }

            });
        });
    
  