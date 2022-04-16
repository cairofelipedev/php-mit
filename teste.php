<?php
require_once './admin/dbconfig.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
</head>

<body>
  <p>Select an option:</p>
  <?php
  $stmt = $DB_con->prepare('SELECT * FROM plans where city="lagoa" and channels="netflix" and type="4" ORDER BY id DESC');
  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
  ?>
      <div>
        <input type="radio" id="hide<?php echo $id; ?>" name="<?php echo $id; ?>" value="hide<?php echo $id; ?>" checked />
        <label for="hide">Hide</label>
      </div>

      <div>
        <input type="radio" id="show<?php echo $id; ?>" name="<?php echo $id; ?>" value="show<?php echo $id; ?>" />
        <label for="show">Show</label>
      </div>

      <div id="box<?php echo $id; ?>" style="display:none;"><?php echo $price; ?></div>
      <div id="box2<?php echo $id; ?>"><?php echo $price_display; ?></div>

      <script>
        const box<?php echo $id; ?> = document.getElementById('box<?php echo $id; ?>');

        function handleRadioClick<?php echo $id; ?>() {
          if (document.getElementById('show<?php echo $id; ?>').checked) {
            box<?php echo $id; ?>.style.display = 'block';
            box2<?php echo $id; ?>.style.display = 'none';
          } else {
            box<?php echo $id; ?>.style.display = 'none';
            box2<?php echo $id; ?>.style.display = 'block';
          }
        }

        const radioButtons<?php echo $id; ?> = document.querySelectorAll('input[name="<?php echo $id; ?>"]');
        radioButtons<?php echo $id; ?>.forEach(radio => {
          radio.addEventListener('click', handleRadioClick<?php echo $id; ?>);
        });
      </script>
  <?php
    }
  }
  ?>
</body>

</html>