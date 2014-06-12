// JavaScript Document
function valida_envia(){ 
   	//valido el nombre 
   	if ((document.fvalida.txt_nombre.value.length<3)||(document.fvalida.txt_nombre.value == parseInt(document.fvalida.txt_nombre.value))){ 
      	 alert("Enter your name...");
      	 document.fvalida.txt_nombre.focus();
      	 return 0; 
   	} 

  	//valido el pais de procedencia 
   	if (document.fvalida.cmb_pais.selectedIndex==0){ 
      	 alert("Select your country..."); 
      	 document.fvalida.cmb_pais.focus(); 
      	 return 0; 
   	} 		

   	//valido la edad. tiene que ser entero mayor que 18 
   	if (document.fvalida.txt_edad.value.length==0){ 
      	 alert("You must enter a whole number on your age..."); 
      	 document.fvalida.txt_edad.focus(); 
      	 return 0; 
   	}else{ 
				 if (parseInt(document.fvalida.txt_edad.value)!=document.fvalida.txt_edad.value){
					 alert("Enter an integer..."); 
         	 document.fvalida.txt_edad.focus(); 
         	 return 0; 					 
				 } 
      	 if (document.fvalida.txt_edad.value < 18){ 
         	 alert("Must be 18 years..."); 
         	 document.fvalida.txt_edad.focus(); 
         	 return 0; 
      	 } 
   	} 

   	//valido el telefono 
   	if (document.fvalida.txt_telefono.value.length==0){ 
      	 alert("Enter a phone number...");
      	 document.fvalida.txt_telefono.focus();
      	 return 0; 
   	} 

   	//valido el email 
		if (document.fvalida.txt_email.value.length==0){
			 alert("Enter an e-mail...");
			 document.fvalida.txt_email.focus();
			 return 0; 
		}


   	//valido fechas 
		var fechaActual = new Date();
		dia = fechaActual.getDate();
		mes = fechaActual.getMonth()+1;
		anio = fechaActual.getFullYear();
		
			
		/* validadando fecha de arribo */   
		/* *************************** */	
		
		//validamos la fecha de llegada
		if (document.fvalida.txt_calendario1.value.length==0){
			 alert("Select date of arrival.");
			 document.fvalida.txt_calendario1.value=anio+"/"+mes+"/"+dia;
			 document.fvalida.txt_calendario1.focus();
			 return 0; 
		}	
		
		//validamos la fecha de retorno
		if (document.fvalida.txt_calendario2.value.length==0){
			 alert("Select return date.");
			 document.fvalida.txt_calendario2.value=anio+"/"+mes+"/"+(dia+1);
			 document.fvalida.txt_calendario2.focus();
			 return 0; 
		}		

   	//valido el comentario 
		if (document.fvalida.txt_comentario.value.length<10){
			 alert("Enter a comment, minimum of 10 characters...");
			 document.fvalida.txt_comentario.focus();
			 return 0; 
		}		
		

   	//el formulario se envia 
   	alert("Thank you very much for sending the form \r \n We will communicate as soon as possible..."); 
   	document.fvalida.submit(); 
} 
