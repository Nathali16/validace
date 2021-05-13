<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
         
    <?php $validation = \Config\Services::validation(); ?>

    <form method="post" action="<?php echo base_url("/validation"); ?>">
      <div class="form-group">
        <label>Jméno</label>
        <input type="text" name="nazev" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('nazev')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nazev'); ?>
            </div>
        <?php }?>
      </div>
       

      <div class="form-group">
        <label>Plemeno</label>
        <input type="text" name="plemeno" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('plemeno')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('plemeno'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Barva</label>
        <input type="text" name="barva" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('barva')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('barva'); ?>
            </div>
        <?php }?>
      </div>
                <div class="form-group">   
                    <label>Pohlaví</label>
                    <select name="pohlavi"  class="form-control">
                        <option value="1">Fenka</option>
                        <option value="0">Pes</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Vložit</button>
                </div>
            </div>
         </div>

    </form>

  </div>
</body>

</html>