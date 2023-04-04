                

                <?php $__env->startSection('main'); ?>

                    <style>
                        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');

                        .body{
                            width:100%;
                        }
                    </style>

                    <head>
                        <link rel="icon" type="icon" href="<?php echo e(asset('img/clothes-hanger.png')); ?>">
                    </head>
                    

                    

                    <body>
                        <form action="welcome">
                        <div id="carouselExampleCaptions" class="carousel slide mt-4" style="overflow: -x:none">
                            
                            <div class="carousel-inner">
                            <div class="carousel-item active" style="display:flex;">
                                <img src="<?php echo e(asset('img/wardrobe4.jpeg')); ?>" class="d-block"  alt="..." style="display:flex; filter:brightness(50%);" justify-content="center" width="100%" height="700px">
                                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 200px">
                                <h5>Find Your Favorite Clothes</h5>
                                <p>The More You Explore, You Will Know The Right Clothes</p>
                                <p><a href="login" class="btn btn-dark mt-3">See More</a></p> 
                                </div>
                            </div>
                        </div>

                        <div class="About Shop" style="background-color: rgb(68, 68, 68);"> 
                            <div class="row">
                                <div class="desc" style="justify-content:center; padding:0;">
                                <div class="card" style="margin: 5em 6em; text-align:center;">
                                    <div class="card-body" style="margin: 4em; margin: 4em 5em; text-align:center">
                                    <img src="<?php echo e(asset('img/flower.png')); ?>" alt="" style="float:left; margin-bottom:2em; width:50%; height:570px">
                                    <h5 class="card-title" style="font-size:xxx-large; margin-top:2em; margin-bottom:0.5em">About Us</h5>
                                    <div class="text mb-4" style="font-size:2.3em;">
                                    <a style="font-weight:350">Halo And Welcome ! </a><br>
                                    <a style="font-weight:350">We Serve The Best For Our Customers</a><br>
                                    <a style="font-weight:350">Click button bellow ! 👇🏻</a><br>
                                    <a style="font-weight:350">If You Want To Know About Us More ✨</a><br>
                                    
                                    <p><a href="https://docs.google.com/document/d/1z9DgeY_F0rmU1-hbWCFUcvIGA8qdORJDm8isadTznKM/edit" class="btn btn-dark mt-4">Learn More About Us</a></p> 
                                    </div>
                                    </div>
                                </div>
                    </body>


                <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project-laravel/resources/views/welcome.blade.php ENDPATH**/ ?>