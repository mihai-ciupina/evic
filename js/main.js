$(document).ready(function(){

		//$('#search_result_form').submit();

	//$( "#search_result_form" ).submit(function( event ) {
	//$(document).on("submit", "#search_result_form", function(){
	//	alert( "Handler for .submit() called." );
		//event.preventDefault();

	//});
	
	//$(document).on("click", "#submit_button", function(){
	//	alert($('#hidden_page_number').val());
	//});

	$(document).on("click", "#pagination>a", function(e){
		e.preventDefault();
		//$("input[name=name]").val("somename");
		//$("form:first").trigger("submit");
		
		//$('#hidden_page_number').val( $(this).text());
		//var xxx = $('#hidden_page_number').attr("href");
		$('#search_result_form').attr("action", $(this).attr("href"));
		
		$("#submit_button").trigger("click");
		//$( "form:first" ).submit();
	});


	$(document).on("click", "[id$=_select_ul]>li", function(){

		var field = (($(this).parent().attr("id")).split("_ul"))[0];

		$("#" + field + "_chzn-drop_div").hide();
		$("#" + field + "").val($(this).text());
		$("#" + field + "_span .chzn-container>a>span").text($(this).text());
		$("#" + field + "_ul>li").removeClass("selected");
		$(this).addClass("selected");
	});



	$(document).on("click", ".chzn-single", function(){

		var field = (($(this).parent().parent().attr("id")).split("_span"))[0];

		$("#" + field + "_chzn-drop_div").show();
		$("#" + field + "_input").focus();
	})



	$(document).on("mouseenter mouseleave", ".chzn-results li", function(){
		$(this).toggleClass('highlighted');
	});
	
	
	
	$(document).on("keyup", "[id$=_select_input]", function(){
		var field = (($(this).attr("id")).split("_input"))[0];
		var search_value = $(this).val().toLowerCase();
		$("#" + field + "_ul>li").each(function(){
			var text = $(this).text().toLowerCase();
			(text.indexOf(search_value) >= 0) ? $(this).show() : $(this).hide();            
		});
	});

	
	
	$(document).on("click", "[id$=Product_detailView_basicAction_LBL_LABEL]", function(){
		var product_code = $(this).attr("product_code");

		my_ajax({"product_code":"" + product_code + ""}, "generate_pdf_label");
		
	})



	$(document).on("click", "[id$=_select_trigger_modal]", function(){
		var field = (($(this).attr("id")).split("_trigger_modal"))[0];
		$("[id$="+field+"_modal]").modal({
			keyboard: false
		});

		my_ajax({"field_name":"" + field + ""}, "read_li", field);
		
	})

		
	// Delete product record
	$(document).on("click", "#Product_detailView_basicAction_LBL_DELETE", function(){
		var id = $(this).attr("product_id");
		var redirect_url = $(this).attr("redirect_url");
		//alert(id);
		if(id) {
			if(confirm("Do you really want to delete the product?")) {
				my_ajax({'product_id':'' + id + ''}, "delete_product", redirect_url);
			}
		}
	});
	
	
	// Update the check box status
	$(document).on("click", "[id$=_ul_checkbox]", function(){
		var important = -1;
		if($(this).prop("checked")) {
			important = 1;
		} else {
			important = 0;
		}
		var field = ($(this).attr("field_name"));
		var id = $(this).attr("field_id");
		if(id) {
			my_ajax({"field_name":"" + field + "", 'field_id':'' + id + '', 'important':'' + important + ''}, "update_checkbox_li", field);
		}
	});
	
	
	// Delete li record
	$(document).on("click", ".delete_li_modal", function(){
		var field = ($(this).attr("field_name"));
		var id = $(this).attr("field_id");
		//alert(field);
		if(id) {
			if(confirm("Do you really want to delete record ?")) {
				my_ajax({"field_name":"" + field + "", 'field_id':'' + id + ''}, "delete_li", field);
			}
		}
	});


	//Add li record
	$(document).on("click", "[id$=_select_modal_submit_text]", function(){
		var field = (($(this).attr("id")).split("_modal_submit_text"))[0];
		var field_value = $("#" + field + "_modal_input_text").val();
		if(field_value){
			if(confirm("Do you really want to add the record ?"))
				my_ajax({"field_name":"" + field + "", "field_value":"" + field_value + ""}, "insert_li", field);
		}
	});


	//click on close modal
	$(document).on("click", "[id$=select_close_modal]", function(){
		var field = (($(this).attr("id")).split("_close_modal"))[0];
		my_ajax({"field_name":"" + field + ""}, "reload_dropdown_div", field);
	});	
	
	
	// Delete user record
	$(document).on("click", "#User_detailView_basicAction_LBL_DELETE", function(){
		var id = $(this).attr("user_id");
		var redirect_url = $(this).attr("redirect_url");
		if(id) {
			if(confirm("Sigur doriti sa stergeti utilizatorul?")) {
				my_ajax({'user_id':'' + id + ''}, "delete_user", redirect_url);
			}
		}
	});

	
	
})
		

		
my_ajax = function (params, action, field){
	
	$.ajax({
		type: "POST",
		url: "/evic/product/" + action + "",
		data : params,
		success: function(data, textStatus, jqXHR ){

			switch(action){
				case "read_li":
					$("#" + field + "_ul_modal_div").html(data);
					break;
				case "delete_li":
					$("#" + field + "_ul_modal_div").html(data);
					break;
				case "insert_li":
					$("#" + field + "_ul_modal_div").html(data);
					break;
				case "reload_dropdown_div":
					$("#" + field + "_span").html(data);
					break;
				case "delete_product":
					if(data == "TRUE") {
						alert("Produsul a fost sters cu succes.");
						window.location.href = field;
					} else {
						alert("Produsul NU a fost sters!");
					}
					break;
				case "generate_pdf_label":
					if(data == "TRUE") {
						$("#Product_detailView_basicAction_LBL_A").removeClass("remove_visibility");
						$("#Product_detailView_basicAction_LBL_A").addClass("add_visibility ");
					} else {
						alert("Nu s-a generat fisierul PDF. Daca aveti un fisier pdf deschis, inchideti-l.");
					}
					break;
					
				case "update_checkbox_li":
					$("#" + field + "_ul_modal_div").html(data);
					break;
			
				case "delete_user":
					if(data == "TRUE") {
						alert("Utilizatorul a fost sters cu succes.");
						window.location.href = field;
					} else {
						alert("Utilizatorul NU a fost sters!");
					}
					break;
				
			}
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert(errorThrown);
		}
	});
}		
