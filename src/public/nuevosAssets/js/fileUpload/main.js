  var prot = window.location.protocol;
			var host = window.location.host;

$(function () {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#form1').fileupload({
    
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
    	
    	add: function(e, data) {
            var uploadErrors = [];
            var acceptFileTypes = /(gif|jpe?g|png|bmp|pdf)$/i;
            
            if(data.originalFiles[0]['type'].length && !acceptFileTypes.test(data.originalFiles[0]['type'])) {
	                uploadErrors.push('Formato de archivo no admitido para esta operacion');
            }
            if ( data.originalFiles[0]['type'] == ''){
            	uploadErrors.push('Formato de archivo no admitido para esta operacion');
            }
            if(data.originalFiles[0]['size'].length && data.originalFiles[0]['size'] > 50000) {
                uploadErrors.push('El archivo es demasiado grande (maximo 5mb)');
            }
            if(uploadErrors.length > 0) {
                alert(uploadErrors.join("\n"));
            } else {
            	$('#button-form-contacto').hide();
                data.submit();
            }
	    },
	    
        url: prot+"//"+host+'/retail/fileUploadServlet'
 
    });
    $('#form1').bind('fileuploadcompleted', function (e, data) {
    	setTimeout(function(){$('#button-form-contacto').show()},3000);
    	$('#agregar').hide();
    });
    
    $('#form1').fileupload('option', {
        url: prot+"//"+host+'/retail/fileUploadServlet',
        
    });
       
});

