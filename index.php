<html lang="us" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>4. feladat</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="kapcsolat.php">
            <h1>Kapcsolat</h1>
            <p>Születési dátum:
        <label>
            <select name="evek" class="ev">
                <?php
                    for($i = 2024; $i > 1900; $i--)
                        echo "<option>$i</option>"
                ?>
            </select>
        </label>
            <label class="honapoklabel">
                <select name="honapok">
                    <?php
                    for($i = 12; $i >= 1; $i--)
                       if($i < 10) {
                           echo "<option>0$i</option>";
                       } else {
                           echo "<option>$i</option>";
                       }
                    ?>
                </select>
            </label>
            <label>
                <select name="napok">
                    <?php
                    for($i = 31; $i >= 1; $i--)
                        if($i < 10) {
                            echo "<option>0$i</option>";
                        } else {
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
            </label>
            </p>
            <p>Testsúly:
              <?php
              $range = array(
                  array(0, 30),
                  array(30, 60),
                  array(60, 90),
                  array(90, 120),
                  array(120, 150)
              );

              foreach($range as $index => $values) {
                  $min = $values[0];
                  $max = $values[1];
                  $value = (string) $min.'-'.$max;
                  echo "<input class='rb' type='radio' name='range' value='$value' id='range$index'>";
                  echo "<label class='rb' for='range$index'>$min - $max</label>";
                  echo "<br>";
              }
              ?>
            </p>
            <p>Név (minimum 8 maximum 20 betű)
            <label>
                <input type="text" class="textnev" name="nev" minlength="8" maxlength="20" pattern="^[\p{L}\s]{8,20}$" required>
            </label></p>
            <p>Email (kötelező maximum 40 karakter)
            <label>
                <input class="textemail" type="email" name="email" maxlength="40" required>
            </label></p>
            <p>Üzenet (minimum 20 karakter)
            <label>
                <textarea class="textszöveg" minlength="20" name="uzenet" required></textarea>
            </label><p>
            <input class="gomb" type="submit" name="gomb" value="Küld"></p>
        </form>
    </div>
</body>
</html>
