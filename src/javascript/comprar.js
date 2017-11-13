 
 $(function () 
 {
 	var i=2;
	
	$('#producto1').fastselect();
	$('#detalle1').fastselect();

	
	$('#agregar').click(function(){
		AddFila();		
	})
	


 


 function AddFila(){
		var data='<tr id="fila'+i+'" class="aparece"><td><select id="producto'+i+'" class="fstElement fstSingleMode fstNoneSelected form-control" ';
		data+='name="uno" placeholder="opcion"><option value="Bangladesh">Bangladesh</option> ';
		data+='<option value="Barbados">Barbados</option><option value="Belarus">Belarus</option> ';
		data+='<option value="Belgium">Belgium</option></select></td><td>  ';
		data+='<select class="fstElement fstSingleMode fstNoneSelected form-control" multiple name="language" placeholder="opciones" id="detalle'+i+'"> ';
		data+='<option value="Afghanistan">Afghanistan</option> ';
		data+='<option value="Albania">Albania</option> ';
		data+='<option value="Algeria">Algeria</option> ';
		data+='<option value="Andorra">Andorra</option> ';
		data+='<option value="Angola">Angola</option> ';
		data+='</select> ';		
		data+='</td><td><input class="form-control" type="number" step="1" id="cantidad'+i+'"></td> ';
		data+='<td><div class="input-group"><span class="input-group-addon">$</span> ';
		data+='<input disabled="disabled" id="precioUnit'+i+'" class="form-control" type="number" ';
		data+='step="0.01"></div></td><td><div class="input-group"><span class="input-group-addon">$</span> ';
		data+='<input disabled="disabled" id="precioTotal'+i+'" class="form-control" type="number" step="0.01"></div> ';
		data+='</td><td><img id="eliminar'+i+'" class="imagen-fila eliminar aparece" src="../Imagenes/delete.png"></td> ';
		data+='<!-- <td><input type="button" class="add" value="Add Row"></td> --> ';
		data+='<td><img style="display: none;" id="agregar'+i+'" class="imagen-fila aparece" src="../Imagenes/add.png"></td></tr> ';

	

		$('#tabla tr:last').after(data);	

		var campo="#producto"+i;
		$(campo).fastselect();
		campo="#detalle"+i;
		$(campo).fastselect();

		campo="#eliminar"+i;
		$(campo).on('click',function(){			
			$(campo).fadeOut(1000,function(){$(this).closest('tr').remove();});
		});

		i+=1;
 }



 });