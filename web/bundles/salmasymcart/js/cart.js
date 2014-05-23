/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {

    $("#quantity input").change(function() {

        var item_id = $(this).attr("id");
        var quantity = $(this).val();
        var path = $("#path").val();



        $.ajax({
            type: "POST",
            url: path,
            data: {
                item_id: item_id,
                quantity: quantity
            }, beforeSend: function() {

                $("#subtotal-" + item_id + " img").show();
                $("#total img").show();
            },
            success: function(response)
            {
                var obj = jQuery.parseJSON(response);
                $("#subtotal-" + item_id + " img").hide();
                $("#total img").hide();

                $("#subtotal-" + item_id + " strong").html(obj.subtotal + " USD");

                $("#total strong").html(obj.total + " USD");

            }
        });
    });

    $("#add-to-cart").click(function() {
        var path = $(this).attr("action");
        $.ajax({
            type: "POST",
            url: path,
            success: function(response)
            {
               if(response="success"){
                   $("#cart-alert").show();
               }

            }
        });
    });




});

