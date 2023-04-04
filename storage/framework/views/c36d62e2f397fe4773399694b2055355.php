<?php $__env->startSection('main'); ?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');

        .body{
            width:100%;
        }
    </style>

    <body>
        <form action="welcome">
        <div id="carouselExampleCaptions" class="carousel slide mt-4" style="overflow: -x:none">
            
        

        <div class="About Shop" style="background-color: rgb(0, 0, 0);"> 
            <div class="row">
                <div class="desc" style="justify-content:center; padding:0;">
                <div class="card" style="margin: 7.5em 5em; text-align:center;">
                    <div class="card-body" style="margin: 4em; margin: 4em 5em; text-align:Left">
                    <h5 class="card-title" style="font-size:xxx-large; margin-bottom:0.5em">Welcome <span class="text-secondary-emphasis"><?php echo e(Auth::user()->name); ?></span></h5>
                        <h5 class="card-title" style="font-size:xxx-large; margin-bottom:0.5em">Have a nice shopping 👜</h5>
                    </div>
                    </div>
                </div>


        <div class="Categories" style="background-color: rgb(244, 244, 244);"> 
            <div class="row">
                    <div class="desc" style="justify-content:center; padding:0;">
                    <div class="card" style="margin: 7.5em 5em; text-align:center; background-color:black">
                        <div class="card-body" style="margin: 4em; margin: 4em 5em; text-align:Left">
                        <h5 class="card-title text-white" style=" font-size:xxx-large; margin-bottom:1.5em; margin-left:8.5em">Categories</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em">Acsessories</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">Bag</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">T-Shirt</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">Jacket</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">Dress</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">Shoes</h5>
                    </div>
                    </div>
                    </div>

                
        
                
</body>







<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project-laravel/resources/views/dashboard.blade.php ENDPATH**/ ?>