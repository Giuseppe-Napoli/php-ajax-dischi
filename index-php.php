<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Dischi</title>
</head>
<body>

<?php
  include __DIR__ . '/data/db.php';
?>

<header>
    <div class="wrap mb-5">
      <div class="logo">
        <img src="assets/img/logo.png" alt="logo">
      </div>
    </div>
  </header>
  <main>

    <div class="container ">
      <div class="row d-flex justify-content-center">
        <?php foreach($database as $disco) { ?>
        <div class="box col-md-4 col-lg-3 m-3 text-center">
          <img class="mb-3 mt-3 img-fluid" src="<?php echo $disco['poster'] ?>" :alt="album.title">
          <h3 class="mb-3">
            <?php echo $disco['title'] ?>
          </h3>
          <span class="fw-normal "><?php echo $disco['author'] ?></span>
          <span><?php echo $disco['year'] ?></span>
        </div>
        <?php }?>
      </div>
    </div>
  </main>
</body>
</html>