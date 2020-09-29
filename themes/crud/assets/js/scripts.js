$(document).ready(function() {
	$('a[data-confirm]').click(function(ev){
		var href = $(this).attr('href');
		ev.preventDefault();
		console.log(href)

		if (!$("#modalDelete").length) {
			$('body').append("<div class='modal'tabindex='-1' role='dialog' id='modalDelete'><div class='modal-dialog modal-dialog-centered' role='document'><div class='modal-content'><div class='modal-header'><p class='modal-title'>Deseja realmente excluir esse contato?</p><button class='close' type='button' data-dismiss='modal'><span>x</span></button></div><div class='modal-body'><a id='dataConfirmOk'><button type='button' class='btn btn-danger'>Excluir</button></a></div></div></div></div>");
		}

		$('#dataConfirmOk').attr('href', href);
		$('#modalDelete').modal({shown:true});

		return false;

	});

})
