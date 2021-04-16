<script type="text/javascript">
/**
 * Validar que un campo no este vacio
 * @param fieldName name del campo a validar
 * @param captionFieldId id del campo que tiene la leyenda del campo que se valida
 */
function validarNoVacio(fieldName, captionFieldId){
	var elem = document.getElementsByName(fieldName)[0];
	var fieldCaption = document.getElementById(captionFieldId);
	if (elem != null){
		var text = elem.value;
		if(text == null || text == "" ) {
			if (fieldCaption != null){
				alert("El campo "+fieldCaption.value + " no debe estar vacío.");
			}
			else{
				alert("El campo no debe estar vacío.");
			}
			return false;
		}
	}
	
	return true;
}
</script>
