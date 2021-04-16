function checkLoginState() {
  FB.getLoginStatus(function(response) {
    basicAPIRequest(response);
  });
}

  function basicAPIRequest() {
    FB.api('/me', 
        {fields: "id,picture,context,email,first_name,gender,link,middle_name,name,timezone"}, 
        function(response) {
          console.log('API response', response);          
        }
    );
  }
//function onSignIn(googleUser) {
//  var profile = googleUser.getBasicProfile();
//  var token = googleUser.getAuthResponse().id_token;
//  var prot = window.location.protocol;
//  var host = window.location.host;
//  
//  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//  console.log('Name: ' + profile.getName());
//  console.log('Image URL: ' + profile.getImageUrl());
//  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
//
//  $.ajax({
//		  type: 'POST',
//		  url: prot+"//"+host+"/retail/ValidacionGoogleServlet',
//		  data: { 'tokenGoogle': token },
//		  beforeSend:function(){
//		    // this is where we append a loading image
//		    //$('#ajax-panel').html('<div class="loading"><img src="/images/loading.gif" alt="Loading..." /></div>');
//		  },
//		  success:function(data){
//		    // successful request; do something with the data
//		    $('#ajax-panel').empty();	    
//		    if (data.retCode === 'success'){
//		    	window.location.replace("success.jsp");
//		    }
//		    else{
//		    	$('#ajax-panel').html('<p class="error"><strong>Error al validar el ingreso con su cuenta de Google.</strong> .</p>');
//		    }
////		    $(data).find('item').each(function(i){
////		      $('#ajax-panel').append('<h4>' + $(this).find('title').text() + '</h4><p>' + $(this).find('link').text() + '</p>');
////		      
////		    });		    
//		  },
//		  error:function(){
//		    // failed request; give feedback to user
//		    $('#ajax-panel').html('<p class="error"><strong>Error al realizar la validación.</strong> .</p>');
//		  }
//		});
   
//}