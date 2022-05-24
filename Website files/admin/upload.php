<head>
<meta charset="UTF-8">
</head>

<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Обратен код : " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Качвате : " . $_FILES["file"]["name"] . "<br>";
    echo "Формат : " . $_FILES["file"]["type"] . "<br>";
    echo "Големина : " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Адрес : " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("../img/novini/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " вече същестува файл с такова име. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../img/novini/" . $_FILES["file"]["name"]);
      echo "Съхранено в : " . "../img/novini/" . $_FILES["file"]["name"];
    }
  }
} else {
  echo "Невалиден файл";
}
?>