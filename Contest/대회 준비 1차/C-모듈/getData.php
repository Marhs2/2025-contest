<?php
require_once "db.php";

$test = DB::fetchAll("SELECT * FROM notice WHERE 1 <= idx AND idx <= 6");

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  $inputData = json_decode(file_get_contents('php://input'), true);

  if ($inputData !== null) {

    if ($index !== null && $beforeIndex !== null) {
      $test = DB::fetchAll("SELECT * FROM notice WHERE idx BETWEEN $beforeIndex AND $index");
    } else {
      echo "잘못된 데이터입니다.";
    }
  } else {
    echo "유효하지 않은 JSON 데이터입니다.";
  }
}
?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    let index = 6;
    let beforeIndex = 1;
    const $next = document.querySelector(".next");

    $next.addEventListener("click", () => {
      if (index >= 30) {
        index = 31;
        beforeIndex = 25;
      } else {
        beforeIndex = index;
        index += 6;
      }

      fetch("getData.php", {
          method: "POST",
          headers: {},
          body: JSON.stringify({
            index: index,
            beforeIndex: beforeIndex
          })
        })
        .then((res) => res.text())
        .then((data) => {
          console.log(data);
        })
        .catch((error) => {
          console.error("에러 발생:", error);
        });
    });
  });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="next">다음</div>
  <ul>
    <?php foreach ($test as $i) { ?>
      <li>
        <?= $i->type ?>
      </li>
      <li>
        <?= $i->title ?>
      </li>
      <li>
        <?= $i->date ?>
      </li>
      <li></li>
    <?php } ?>
  </ul>
</body>

</html>