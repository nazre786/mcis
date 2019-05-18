<!doctype html>
<html lang="en">
    <head>
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/custom/css/style.css">
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Hello, world!</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#"><span>MCIS</span> App</a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Add Manufacturer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Add Model</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">View Inventory</a>
                        </li> 
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Manage Inventory
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Add Manufacturer</a>
                                <a class="dropdown-item" href="#">Add Model</a>
                                <a class="dropdown-item" href="#">View Inventory</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="banner">
            <div class="container">
                <div class="banner-text">
                    <a href="#mics" class="btn btn-warning text-dark btn-banner">continue</a>
                </div>
            </div>
        </div>
        <section id="mics">
            <div class="container">

                <h2 class="text-center text-info">Mini Car Inventory System !</h2>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-mfn-tab" data-toggle="tab" href="#nav-mfn" role="tab" aria-controls="nav-mfn" aria-selected="true">Add Manufacturer</a>
                                <a class="nav-item nav-link" id="nav-model-tab" data-toggle="tab" href="#nav-model" role="tab" aria-controls="nav-model" aria-selected="false">Add Model</a>
                                <a class="nav-item nav-link" id="nav-view-tab" data-toggle="tab" href="#nav-view" role="tab" aria-controls="nav-view" aria-selected="false">View Inventory</a>                      
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-mfn" role="tabpanel" aria-labelledby="nav-mfn-tab">
                                <form action="#" class="was-validated">
                                    <div class="form-group">
                                        <label for="manufacturer_name">Manufacturer:</label>
                                        <input type="text" class="form-control" id="manufacturer_name" placeholder="Enter Manufacturer Name" name="manufacturer_name" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div id="alerts" style="display:none;">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-default" onclick="addManufacturere()">Add</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-model" role="tabpanel" aria-labelledby="nav-model-tab">
                                <form class="was-validated">
                                    <div class="form-group">
                                        <label for="model-name">Model Name:</label>
                                        <input type="text" class="form-control" id="model-name" placeholder="Enter Model Name" name="model-name" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select-manufacturer">Select Manufacturer:</label>
                                        <select class="form-control" id="select-manufacturer">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="model-count">Count:</label>
                                        <input type="number" class="form-control" id="model-count" min="0" value="0">
                                    </div>
                                    <div class="form-group files color">
                                        <label for="image-1">Upload Your Picture 1</label>
                                        <input type="file" name="image" id="image-1" class="form-control" required>
                                    </div>
                                    <div class="form-group files color">
                                        <label for="image-2">Upload Your Picture 2</label>
                                        <input type="file" name="image" id="image-2" class="form-control" required>
                                    </div>
                                    <div id="alerts1" style="display:none;">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-default" onclick="addModel()">Save</button>
                                    </div>
                                </form> 
                            </div>
                            <div class="tab-pane fade" id="nav-view" role="tabpanel" aria-labelledby="nav-view-tab">

                                <div class="container">
                                    <div class="card">
                                         <table   class="table table-hover shopping-cart-wrap">
                                            <thead class="text-muted">
                                                <tr>
                                                    <th scope="col"  style="word-wrap: break-word">Serial Number</th>
                                                    <th scope="col"  style="word-wrap: break-word">Manufacturer Name</th>
                                                    <th scope="col"  style="word-wrap: break-word">Model Name</th>
                                                    <th scope="col"  class="text-right" style="word-wrap: break-word">Count</th>
                                                    <th scope="col"  class="text-right" style="word-wrap: break-word">Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div id="alerts3" style="display:none;">
                                    </div>
                                    </div> <!-- card.// -->

                                </div> 
                                <!--container end.//-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    <!-- Footer -->
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>hello</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src="vendor/twbs/bootstrap/dist/custom/js/custom.js"></script>
    <script src="js/manufacturer.js"></script>
    <script src="js/add_model.js"></script>
    <script src="js/inventory.js"></script>
    <script>
    $('#nav-model-tab').click(function() {
    loadManufacturer();
    });
    $('#nav-view-tab').click(function() {
    loadInventories();
    });
    </script>
</body>
</html>