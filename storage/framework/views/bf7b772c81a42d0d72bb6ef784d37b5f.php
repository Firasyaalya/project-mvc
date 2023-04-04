                                <style>
                                    @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
                                </style>

                                <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #ffffff; display:flex; width:100%; 
                                height:90px; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);" font color="#9900FF">
                                    <div class="container-fluid">
                                        <a class="navbar-brand ms-2" style="font-size:x-large; margin-left:5em" href="welcome ">Beaqlo.</a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav" style="margin-left:53em">
                                        <li class="nav-item" style="gap : 2em">
                                            <a class="text-black bg-white nav-link active " href="">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active text-black bg-white" href="">About Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active text-black bg-white" href="">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active text-black bg-white" href="/add.data">Cart</a>
                                        </li>
                                        </ul>
                                    </div>

                                    
                                    <div class="container d-flex me-auto mt-1.5" style="display:flex; position:fixed; margin-left:77.3em">
                                        <?php if(auth()->guard()->guest()): ?>
                                        <div class="d-flex">
                                            <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-dark" style="margin-left:6m">Login</a>
                                        <?php else: ?> 

                                    <div class="dropdown">
                                    <a class="btn btn-dark dropdown-toggle" href="dashboard" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo e(Auth::user()->name); ?>

                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="" class="btn btn-outline-dark me-2" style="margin-right:5em">Profile</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>" class="btn btn-outline-dark me-2" style="margin-right:5em" 
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>    
                                    </ul>
                                    </div>
                                        
                                        <?php endif; ?>

                                        <form action="<?php echo e(route('logout')); ?>" id="logout-form" method="POST">

                                        <?php echo csrf_field(); ?>
                                        </form>    
                                        </div>
                                    
                                    </div>
                                </nav>





                          <?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project-laravel/resources/views/layouts/components/navbar.blade.php ENDPATH**/ ?>