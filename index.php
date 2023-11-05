<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?> 

   
<div class="position-relative overflow-hidden p-3 p-md-5 m-mb-3 text-white text-center rounded bg-light-blue">
    <div class="col-md-5 p-lg-5 mx-auto my-1">
      <img src="imgs/fullwepimg.jpeg" alt="">
        <h1 class="display-6 fw-normal my-5">اربح مع سامر</h1>
        <p class="lead my-3">باقي على فتح التسجيل</p>
        <p id="demo"></p>
        <p class="lead my-3">للسحب على ربح نسخة مجانية من برنامج</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">قريباً...</a></p>
    </div>
</div>


    <form class="mt-5 text-center" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3> الرجاء ادخال المعلومات </h3>

  <div class="mb-3">
    <label for="Fname" class="form-label">الاسم الاول</label>
    <input type="text" class="form-control" name="fname" id="Fname" value="<?php echo $fname?>">
    <div  class="form- error"><?php echo $errors['FnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="Lname" class="form-label">الاسم الاخير</label>
    <input type="text" class="form-control" name="lname" id="Lname" value="<?php echo $lname?>">
    <div  class="form-text error"><?php echo $errors['LnameError'] ?></div>
  </div>

  <div class="mb-3 my-3">
    <label for="Email" class="form-label">البريد الالكتروني</label>
    <input type="text" class="form-control" name="email" id="Email" value="<?php echo $email?>">
    <div class="form-text error"><?php echo $errors['EmailError'] ?></div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


<div id="load" >
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="display: none;">
  <symbol id="wave">
    <path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z"></path>
    <path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z"></path>
    <path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z"></path>
    <path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z"></path>
  </symbol>
</svg>
<div class="box">
  <div class="percent">
    <div class="percentNum" id="count">0</div>
    <div class="percentB">%</div>
  </div>
  <div id="water" class="water">
    <svg viewBox="0 0 560 20" class="water_wave water_wave_back">
      <use xlink:href="#wave"></use>
    </svg>
    <svg viewBox="0 0 560 20" class="water_wave water_wave_front">
      <use xlink:href="#wave"></use>
    </svg>
  </div>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h2 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars ($user['fname']) . ' ' .  htmlspecialchars ($user['lname']) ?></h2>
      <?php endforeach; ?>  
    </div>
      
    </div>
  </div>
</div>


        <?php include './parts/footer.php'; ?>
