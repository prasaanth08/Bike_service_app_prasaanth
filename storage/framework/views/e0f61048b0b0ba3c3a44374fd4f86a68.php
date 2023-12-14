


<nav class="navbar navbar-expand-lg navbar-light  " style="background-color:#ccc;" >
  <img src="<?php echo e(asset('/image/clipart3013511.png')); ?>" width="100px" alt="Image">
  <a class="navbar-brand h1" href="#">Elite Bikes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    
    <?php if(Auth::user()->role==0): ?>
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item mx-1">
        <a class="nav-link" href="<?php echo e(url('/admin/index')); ?>">Home</a>
      </li>
      <li class="nav-item mx-1">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item mx-1">
        <a class="nav-link" href="<?php echo e(route('admin.customer')); ?>">Booked Customer</a>
      </li>
      <li class="nav-item mx-1">
        <a class="nav-link" href="#about">About</a>
      </li>
     
      <li class="nav-item mx-1">
        <a class="nav-link" href="#contact">Contat Us</a>
      </li>
    </ul>
    
    <?php elseif(Auth::user()->role==1): ?>
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item mx-1">
        <a class="nav-link" href="<?php echo e(url('/user/index')); ?>">Home</a>
      </li>
      <li class="nav-item mx-1">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item mx-1">
        <a class="nav-link" href="<?php echo e(route('booking.status')); ?>">Previous Booking & Status</a>
      </li>
      <li class="nav-item mx-1">
        <a class="nav-link" href="#about">About</a>
      </li>
      
      <li class="nav-item mx-1">
        <a class="nav-link" href="#contact">Contat Us</a>
      </li>
    </ul>
    <?php endif; ?>
    <ul class="navbar-nav">   
      <li class="nav-item dropdown">
       
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa-solid fa-user" style="color: #000000;"></i> <?php echo e(Auth::user()->name); ?>

        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>">Logout</a>     
        </div>
      </li>
    </ul>
  </div>
  
</nav>


<?php /**PATH C:\Users\Nathan\Desktop\Bike Service Application\Bike_Service-app\resources\views/layouts/header.blade.php ENDPATH**/ ?>