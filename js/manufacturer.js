function addManufacturere() {
    var manufacturer_name = $('#manufacturer_name').val().trim();
    if(manufacturer_name == '') {
        alert("Please input manufacturere name");
    } else {
        $.ajax({
            'url':'services/add_manufacturer.php',
            method: "POST",
            data: {'name' : manufacturer_name},
            success: function(data) {
                switch(data) {
                    case 'success':
                            var msg = '<div class="alert alert-success text-center">';
                                msg += '<strong>Success!</strong> Manufacturer entry added successfully.';
                                msg += '</div>';
                            break;
                    case 'error':
                            var msg = '<div class="alert alert-danger text-center">';
                                msg += '<strong>Failed!</strong> Something went wrong, Please try again later.';
                                msg += '</div>';
                            break;
                    case 'duplicate':
                            var msg = '<div class="alert alert-warning text-center">';
                                msg += '<strong>Warning!</strong> Entry already exist.';
                                msg += '</div>';
                            break;
                }
                $('#alerts').html(msg);
                $("#alerts").show();
                $("#alerts").show().delay(5000).fadeOut();
            }
        });
    }
}