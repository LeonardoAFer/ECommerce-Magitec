$(document).ready(() => {
		
	$('#estoque').on('click', () => {
		$.post('../php/estoque.php', data => { 
			$('#pagina').html(data)
		})
	})


	$('#relestoque').on('click', () => {
		$.post('../php/consultar_estoque.php', data => { 
			$('#pagina').html(data)
		})
	})

	$('#relecompra').on('click', () => {
$.post('../php/consultar_compras.php' , data =>{
	$('#pagina').html(data)
})


	})

	
})


	