            
            <?php $__env->startSection('main'); ?>



            <div>
                <div class="container" style="margin-top:7em">
                    <div class="card-body">
                        <h1 class="text-center mb-5 py-5">Add To Cart</h1>
                        <div class="row">
                            <div class="row">
                                <div class="col-sm-6"style="width:100%">
                                <div class="card">
                                    <div class="card-body" >
                                    <h5 class="card-title">Add Product</h5>
                                    <a href="/add.data" class="btn btn-success shadow mt-3 mb-4">Add +</a>
                                        <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <?php if($message = Session::get('success', 'Succsess Adding Data')): ?>
                                                <div class="alert alert-success" role="alert">
                                                <?php echo e($message); ?>

                                                </div>
                                                <?php endif; ?>
                                    </div>
                                </div> 
                                <br>
                                <div class="row">
                                        <div class="card">
                                        <div class="card-body">
                                            <table class="table">
                                        <thead>
                                            <tr>
                                                <br><br>
                                                <th scope="col">No.</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Catalogue</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Created at</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no= 1;
                                            ?>
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <th scope="row"><?php echo e($no++); ?></th>
                                            <td><?php echo e($row->NamaProduk); ?></td>
                                            <td><?php echo e($row->Catalogue); ?></td>
                                            <td>RP. <?php echo e($row->Harga); ?></td>
                                            <td> <?php echo e($row->created_at->format('D M Y')); ?></td>
                                            <td>
                                                <a href="/delete/<?php echo e($row->id); ?>" class="btn btn-danger">Delete</button>
                                                <a href="/showdata/<?php echo e($row->id); ?>" class="btn btn-info">Edit</button>
                                            </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                        </div>
                                        </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

            









            


            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project-laravel/resources/views/store.blade.php ENDPATH**/ ?>