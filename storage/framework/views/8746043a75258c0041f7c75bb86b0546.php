<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Beuqlo.</title>

    <style>
        
    </style>

    <style>
        .group-action a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php echo $__env->make('layouts.components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('main'); ?>

    <div class="Add-data" style="margin-top:10em">
    <h1 class="text-center mb-4">Add Your Purchase</h1>
    <br>
    <div class="container">

        <div class="row justify-content-center">
           <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Product</label>
                          <input type="text" name="NamaProduk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Catalogue</label>
                            <select class="form-select" name="Catalogue" aria-label="Default select example">
                                <option selected>Select Catalogue</option>
                                <option value="Accessories">Accessories</option>
                                <option value="Bag">Bag</option>
                                <option value="T-Shirt">T-Shirt</option>
                                <option value="Jacket">Jacket</option>
                                <option value="Dress">Dress</option>
                                <option value="Shoes">Shoes</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Price</label>
                            <input type="number" name="Harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
           </div>
        </div>
    </div>

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</div>
</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project-laravel/resources/views/add.blade.php ENDPATH**/ ?>