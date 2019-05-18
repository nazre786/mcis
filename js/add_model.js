function loadManufacturer() {
    $.ajax({
        'url':'services/get_manufacturer.php',
        method: "GET",
        success: function(data) {
            data = JSON.parse(data);
            var manufacturer = "<option>Select Manufacturer</option>";
            for(i=0; i < data.length; i++) {
                manufacturer += "<option value='"+data[i].id+"'>"+ data[i].name +"</option>";
            }
            $('#select-manufacturer').html(manufacturer);
        }
    });
}

loadManufacturer();

function addModel() {
    var image1 = $('#image-1').prop('files')[0];
    var image2 = $('#image-2').prop('files')[0];
    var form_data = new FormData();
    form_data.append('model-name', $('#model-name').val());
    form_data.append('manufacturer_id', $('#select-manufacturer').val());
    form_data.append('model-count', $('#model-count').val());
    form_data.append('image_file1', image1);
    form_data.append('image_file2', image2);

    $.ajax({
        'url':'services/add_model.php',
        method: "POST",
        data: form_data,
        processData: false,
        contentType: false,
        success: function(data) {
            switch(data) {
                case 'success':
                        var msg = '<div class="alert alert-success text-center">';
                            msg += '<strong>Success!</strong> Car Model added successfully.';
                            msg += '</div>';
                        break;
                case 'error':
                        var msg = '<div class="alert alert-danger text-center">';
                            msg += '<strong>Failed!</strong> Something went wrong, Please try again later.';
                            msg += '</div>';
                        break;
            }
            $('#alerts1').html(msg);
            $("#alerts1").show();
            $("#alerts1").show().delay(5000).fadeOut();
        }
    });
}

