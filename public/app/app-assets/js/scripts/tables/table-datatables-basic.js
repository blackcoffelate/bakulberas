$(function () {
  'use strict'

  var dt_basic_table = $('.datatables-basic'),
    dt_complex_header_table = $('.dt-complex-header')

  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path')
  }
 
  if (dt_basic_table.length) {
    var dt_basic = dt_basic_table.DataTable({
      order: [[0, 'desc']],
      dom:
        '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 10,
      lengthMenu: [10, 25, 50, 75, 100],
      buttons: [
        {
          text:
            feather.icons['plus'].toSvg({ class: 'me-50 font-small-4' }) +
            'Add New Record',
          className: 'create-new btn btn-primary',
          init: function (api, node, config) {
            $(node).removeClass('btn-secondary')
          },
		  action: function (e, dt, node, config) {
			  window.location.href = dt_basic_table.data('addlink')
		  }
        },
      ],
      language: {
        paginate: {
          previous: '&nbsp;',
          next: '&nbsp;',
        },
      },
    })
    $('div.head-label').html('<h6 class="mb-0">'+dt_basic_table.data('label')+'</h6>')
  }
})

