@php
	// dd($bia->company_id)
@endphp
<script>
$(document).ready(function() {
	$('.assessment-form').on('submit', function(e) {
        let url = "{{ route('bia.assessment', ['bia'=>$biaId, 'department'=>$departmentId, 'section'=>$sectionId]) }}";
        ajaxSave($(this), url, e);
    })
	$('.assessment-services select').on('change', function(e) {
		var val = $(this).val()
		finance = ($(this).parent('td').attr('id') == 'finance-per-day' ? true : false)
		if (!$(this).hasClass('esc')) {
			if (!$(this).is('.biaWeight')) {
				$(this).parent('td').removeClass().addClass('no-padding text-center ' + colorByValue(val))
			} else {
				$(this).parent('td').removeClass().addClass('no-padding text-center ' + colorByValueForWeight(val))
			}
		}
		total = 0
		var selectVal = subTotal = 0
		var form = $(this).parents('form')
		$(this).parents('tbody').find('select').each(function() {
			selectVal = $(this).val()
			if (!$(this).is('.biaWeight')) {
				subTotal += Number(selectVal)
			} else {
				weightToMultiply = biaValidWeightToMultiply(Number(selectVal))
				total += (subTotal * weightToMultiply)
				subTotal = 0
			}
		})
		var calc = serviceCalculation(total)
		form.find('.level').html(calc.level).parent('th').removeClass().addClass(calc.bg)
		form.find('.total').html(total).parent('th').removeClass().addClass(calc.bg)
		form.find('.rto').html(calc.rto).parent('th').removeClass().addClass(calc.bg)
		form.find('.hidden-rto').val(calc.rto)
		form.find('.hidden-avg').val(total)
	})
	// SHOW UPSTREAM POPUP
	$(document).on('click', '.dependency', function(event) {
		event.preventDefault();
		var button 	= $(this);
		var dependencyType = button.attr('data-type');
		// var url 	= getDependencyUrl(dependencyType)
		var url 	= "{{ route('company.dependencies', ['company' => $bia->company_id]) }}";

		if ( url && dependencyType ) {
			var input  	= button.find('input');
			var modal  	= $('#dependencyModal');
			var ID = '#'+input.attr('id');
			var dependencies = input.val();
			button.addClass('editing');
			$.ajax({
				url: url,
				method : 'GET',
				data: {'dependencies': input.val(), dependency_type: dependencyType, 'input': 1},
				beforeSend: function() {},
				success: function(response) {
					// console.log( response )
					modal.find('.modal-title').html(button.attr('data-title'));
					modal.find('.modal-body').addClass('blockedCheckbox').html(response);
					modal.find('.modal-footer .btn-primary').attr('id', 'saveUpstreamDependency');
					modal.attr('rowid', ID).modal('show');
				},
				error: function(error) {
					alert('error');

				},
			})
		}
	})
	$(document).on('click', '#dependencyModal .btn-save', function(event) {
		event.preventDefault();
		var val = '';
		var modal = $(this).parents('.modal');
		var ID = modal.attr('rowid');
		var dependencyRow = $('.dependency.editing');
		$('.upstream:checked').each(function(index) {
			val += $(this).val() +',';
		});
		var selectedOpts = val.replace(/,$/g,'');
		$(ID).val(selectedOpts);

		dependencyRow.parents('.card-body').find('.btn-save').first().click();
		if ( selectedOpts.length > 0 ) dependencyRow.removeClass('bg-lightgreen').addClass('bg-darkred');
		else dependencyRow.removeClass('bg-darkred').addClass('bg-lightgreen');
		modal.modal('hide');
	})
	$('#dependencyModal').on('hidden.bs.modal', function () {
		$('.dependency.editing').removeClass('editing');
	})
	// TOP ACTION BUTTONS
	$(document).on('click', '.btn-publish', function (event) {
		event.preventDefault();
		// swal("Error!", "Something went wrong.", "error")
		if ( confirm() ) {
			alert( 'var' )
		}
	})
	$(document).on('click', '.btn-save-all', function (event) {
		event.preventDefault();
		$('form.assessment-form').each(function(e) {
			let url = "{{ route('bia.assessment', ['bia'=>$biaId, 'department'=>$departmentId, 'section'=>$sectionId]) }}";
        	ajaxSave($(this), url);
		})
	})
	$(document).on('click', '.btn-reset-all', function (event) {
		event.preventDefault();
		var button 	= $(this);
		var url 	= "{{ route('bia.reset', ['bia'=>$biaId, 'department'=>$departmentId, 'section'=>$sectionId]) }}";

		if ( url ) {
			var oldTxt = button.text();
			$.ajax({
				url: url,
				method : 'POST',
				data: {},
				beforeSend: function() { ajaxBtnStatusSaving(button) },
				success: function(response) {
					 ajaxBtnStatusActive(button, oldTxt);
					 notify(response, true);
				},
				error: function(error) {
					 ajaxBtnStatusActive(button, oldTxt)
					 notify(response);
				},
			})
		}
	})

	// DOCUMENT READY - END
})
function colorByValue(val) {
	var cl = null;
	if (val) {
		switch (val) {
			case '1': 	cl = 'bg-lightgreen'; break;
			case '2':
			case '4': 	cl = 'bg-darkyellow'; break;
			case '5':
			case '8': 	cl = 'bg-darkorange'; break;
			case '7':
			case '16': 	cl = 'bg-darkred'; break;
			default: 	cl = 'bg-skyblue'; break;
		}
	}
	return cl;
}
function biaValidWeightToMultiply(weight=null) {
	if (weight) { return weight;}
	return 1;	
}
function colorByValueForWeight(val) {
	var cl = null;
	if (val) {
		switch (val) {
			case '1': 	cl = 'bg-lightgreen'; break;
			case '2': 	cl = 'bg-darkyellow'; break;
			case '3': 	cl = 'bg-darkred'; break;
			default: 	cl = 'bg-lightgreen'; break;
		}
	}
	return cl;
}
function serviceCalculation(val) {
	var data = {}
	if (val >= 0 && val <= 20) {
		data.level = 'Non-essential'
		data.rto = '2 - 4 Weeks'
		data.bg = 'bg-lightgreen'
	} else if (val >= 21 && val <= 40) {
		data.level = 'Normal'
		data.rto = '7 Days'
		data.bg = 'bg-skyblue'
	} else if (val >= 41 && val <= 60) {
		data.level = 'Important'
		data.rto = '3 Days'
		data.bg = 'bg-darkyellow'
	} else if (val >= 61 && val <= 80) {
		data.level = 'Urgent'
		data.rto = '24 Hours'
		data.bg = 'bg-darkorange'
	} else if (val >= 80) {
		data.level = 'Critical'
		data.rto = '0 - 4 Hours'
		data.bg = 'bg-darkred'
	}
	return data
}
</script>