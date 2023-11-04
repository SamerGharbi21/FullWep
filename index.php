<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?> 

   
    <div class="position-relative overflow-hidden p-3 p-md-5 m-mb-3 text-white rounded bg-dark">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-6 fw-normal">اربح مع سامر</h1>
      <p class="lead my-3">باقي على فتح التسجيل</p>
      <p class="lead my-3">للسحب على ربح نسخة مجانية من برنامج</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Coming Soon...</a></p>
    </div>
  </div>


    <form class="mt-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
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

  <div class="mb-3">
    <label for="Email" class="form-label">البريد الالكتروني</label>
    <input type="text" class="form-control" name="email" id="Email" value="<?php echo $email?>">
    <div class="form-text error"><?php echo $errors['EmailError'] ?></div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

   <div class="row mb-5 pb-5">
<?php foreach($users as $user): ?>
    <div class="col-sm-6 my-2">
        <div class="card">
            <div class="card-body">
    <h6 class="card-tittle"> <?php echo htmlspecialchars ($user['fname']) . ' ' .  htmlspecialchars ($user['lname']) ?> </h6>
        <p class="card-text"> <?php echo  htmlspecialchars ($user['email']) ?></p>
    </div>
    </div>
    </div>

        <?php endforeach; ?>

</div>

        <?php include './parts/footer.php'; ?>
