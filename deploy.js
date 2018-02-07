$(document).ready(function(){
	setInterval("deploy()",1000);
});


function deploy() {

	$.ajax({
        type: "POST",
        url: "deploy.php",
        success: function(msg){
                	
           if(msg != "") {
                      	
           		$('#result').html($('#result').html()+"<br />"+msg);
            }			                   
        }
    });

	

}