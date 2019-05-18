function loadInventories() {
    $('.card').empty();
    var id='';
        $.ajax({
            'url':'services/get_inventory.php',
            method: "GET",
            data: {'id':id},
            success: function(response) {
                response = JSON.parse(response);
              var inventory_details2="";
            $.each(response, function (i, data) {
                 inventory_details2 +='<table border="1" class="table table-hover shopping-cart-wrap"><tbody><tr><td></td><td>'+data.manufacturer_name+'\
                                      </td><td><figure class="media"><img style="display:block; " src="images/'+data.img1+'" class="img-thumbnail img-sm"/><figcaption class="media-body"><h6 class="title text-truncate">'+data.model_name+'\
                                      </h6></figcaption></figure></td><td class="text-right">'+data.count+'</td><td class="text-right"><a class="btn btn-outline-danger" href="javascript:soldfn('+data.model_id+',\''+data.model_name+'\')"> × Sold</a></td></tr></tbody></table>';
                
                });
                $('.card').append(inventory_details2);
              
            }
        });
     
}

loadInventories();

function soldfn(id,model_name) {
    $.ajax({
        'url':'services/sold_out_inventory.php',
        method: "POST",
        data: {'id':id},
        success: function(data) {
            switch(data) {
                case 'success':
                        var msg = '<div class="alert alert-info text-center">';
                            msg += '<strong>Success!</strong> Model ' + model_name + ' Sold Out';
                            msg += '</div>';
                        break;
                case 'error':
                        var msg = '<div class="alert alert-danger text-center">';
                            msg += '<strong>Failed!</strong> Something went wrong, Please try again later.';
                            msg += '</div>';
                        break;
                        $('#alerts3').html(msg);
                        $("#alerts3").show();
                        $("#alerts3").show().delay(5000).fadeOut();
            }

        }
    });loadInventories();
}