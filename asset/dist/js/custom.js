$( document ).ready(function() {
	// jquery ajax function for get clients product in dropdown 
	$('#clientId').change(function() {
	        var clientId = $(this).val();
	        $.ajax({
	            type:'POST',
	            url:'getProducts',
	            data:{'clientId':clientId},
	            success:function(responce){
	            	var productList=JSON.parse(responce);
	            	$('#products').html('<option value="">Select Product</option>');
	            	$.each(productList, function(i, product) {
	            	  var productRow='<option value="'+product.product_id+'">'+product.product_description+'</option>';  
	            	  $('#products').append(productRow);
	            	});
	            	
				}
	        });
	
	    });
	// jquery ajax function for search
	$('#searchInvoice').click(function() {
        var clientId = $('#clientId').val();
        var product = $('#products').val();
        var invoicePeriod = $('#invoicePeriod').val();
        $.ajax({
            type:'POST',
            url:'getInvoiceList',
            data:{'clientId':clientId,'product':product,'invoicePeriod':invoicePeriod},
            success:function(responce){
            	var invoiceList=JSON.parse(responce);
            	$('#ajaxList').html('');
            	$.each(invoiceList, function(i, invoice) {
            	  var invoiceRow='<tr><td>'+(i+1)+'</td><td>'+invoice.invoice_num+'</td><td>'+invoice.invoice_date+'</td><td>'+invoice.product_description+'</td><td>'+invoice.qty+'</td><td>'+invoice.price+'</td><td>'+((invoice.price*invoice.qty).toFixed(2))+'</td></tr>';  
            	  $('#ajaxList').append(invoiceRow);
            	}); 
            	 
			}
        });
        

    });
	// jquery function for search theme DataTable
	$(function () {
	    $('#example1').DataTable()
	  })
});
