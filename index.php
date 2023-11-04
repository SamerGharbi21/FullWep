<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="./css/style.css"> 
    <title>Document</title>
</head>
<body>

    <div class="container">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-mb-3 text-white rounded bg-dark">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع سامر</h1>
      <p class="lead my-3">باقي على فتح التسجيل</p>
      <p class="lead my-3">للسحب على ربح نسخة مجانية من برنامج</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Coming Soon...</a></p>
    </div>
  </div>


    <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
    <li class="list-group-item">A fourth item</li>
    <li class="list-group-item">And a fifth one</li>
    </ul>

  
    <form class="mt-5" action="index.php" method="POST">
        <h3> الرجاء ادخال المعلومات </h3>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" class="form-control" name="fname" id="exampleInputEmail1" value="<?php echo $fname?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form- error"><?php echo $errors['FnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" class="form-control" name="lname" id="exampleInputEmail1" value="<?php echo $lname?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['LnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text" class="form-control" name="email" id="exampleInputEmail1" value="<?php echo $email?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['EmailError'] ?></div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

   
<?php foreach($users as $user): ?>
    <h1> <?php echo htmlspecialchars ($user['fname']) . ' ' .  htmlspecialchars ($user['lname']) . ' ' .  htmlspecialchars ($user['email']) ?> <h1>
<?php endforeach; ?>

<script src="./js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>
</html>
