<!DOCTYPE html>
<html lang="bg">
<head>
<title>Мнение</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/w3pro.css">
<style>
.w3-blue{color:#fff!important;background-color:#3589f1!important}
.w3-light-blue,.w3-hover-light-blue:hover{color:#000!important;background-color:#98c3f8!important}
.w3-light2-blue,.w3-hover-light2-blue:hover{color:#000!important;background-color:#76aff5!important}
.w3-text-red,.w3-hover-text-red:hover{color:#f44336!important}
</style>
<meta 
	name="Мнение"
	content="Благодарим Ви!">
</head>

<body class="w3-light-gray">

<div class="w3-top w3-blue">
	<a href="/" class="w3-bar-item w3-button w3-padding-16 w3-hover-light-blue w3-left">Начало</a>
	<a target="_blank" href="https://www.parliament.bg/bg/const" class="w3-bar-item w3-button w3-padding-16 w3-hover-light-blue w3-hide-small w3-hide-medium w3-left">Конституция </a>
	<a href="/contact.html" class="w3-bar-item w3-button w3-padding-16 w3-hover-light-blue w3-hide-small w3-hide-medium w3-right">Контакт</a>
	<a href="/links.html" class="w3-bar-item  w3-button w3-padding-16 w3-hover-light-blue w3-hide-small w3-hide-medium w3-right">Връзки</a>
	<a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16 w3-hover-light-blue w3-right w3-hide-large" style="width: 100px" onclick="myMenu()">&#9776; &nbsp; Меню</a>  
<div class="w3-bar w3-blue" style="text-align: center; width: 12%; min-width: 330px; margin: auto;">
	<a href="/base.html" class="w3-bar-item w3-button w3-padding-16 w3-hover-light-blue w3-hide-small w3-hide-medium">База</a>
	<a href="/discussion/page/1/" class="w3-bar-item w3-button w3-padding-16 w3-light2-blue w3-hover-light2-blue w3-hide-small w3-hide-medium">Дискусия</a>
	<a href="/benevoles/" class="w3-bar-item w3-button w3-padding-16 w3-hover-light-blue w3-hide-small w3-hide-medium">Доброволци</a>
</div>
</div>

<nav id="side-button" class="w3-sidebar w3-bar-block w3-card w3-top w3-blue w3-center w3-hide w3-hide-large" style="width: 100%; min-width: 130px; height: 65%; margin-top: 55px;">
	<img class="w3-image w3-padding-32" src="/images/logo/tree-1.svg" alt="tree" style="width: 25%;">
	<img class="w3-image w3-padding-32" src="/images/logo/nuclear-power-plant.svg" alt="nuclear-power-plant" style="width: 15%;">
	<img class="w3-image w3-padding-32" src="/images/logo/tree-2.svg" alt="tree" style="width: 25%;">
	<a target="_blank" href="https://www.parliament.bg/bg/const" class="w3-bar-item w3-button w3-padding-16 w3-border w3-hover-light-blue">Конституция </a>
	<a href="/base.html" class="w3-bar-item w3-button w3-padding-16 w3-border-bottom w3-hover-light-blue">База</a>
	<a href="/discussion/page/1/" class="w3-bar-item w3-button w3-padding-16 w3-border-bottom w3-hover-light-blue">Дискусия</a>
	<a href="/links.html" class="w3-bar-item w3-button w3-padding-16 w3-border-bottom w3-hover-light-blue ">Връзки</a>
	<a href="/contact.html" class="w3-bar-item w3-button w3-padding-16 w3-border-bottom w3-hover-light-blue">Контакт</a>
	<a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16 w3-border-bottom w3-hover-light-blue" onclick="myMenu()">&times;</a>
	<a href="/benevoles/" class="w3-bar-item w3-button w3-padding-64 w3-border-bottom w3-light2-blue w3-hover-light2-blue">Доброволци</a>
</nav>

<div class="w3-content" style="max-width: 810px; margin-top: 60px">
	
	<div class="w3-container w3-center">

<?php
// define variables and set to empty values
$title = $comment = $name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $title = test_input($_POST["title"]);
	$comment = test_input($_POST["comment"]);
	$name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    
    
	   // validation expected data exists
    if (
		!empty($title) and
		!empty($comment) and
        !empty($name) and
        !empty($email) 
		
        
    ) {
			//JSON array
			$data = array("title"=>$title, "Comment"=>$comment, "Name"=>$name, "Mail"=>$email);
			echo "<h1>Благодарим Ви!<h1>";
			
			//write to file
			$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

			  fwrite($myfile, json_encode($data, JSON_UNESCAPED_UNICODE));

			fclose($myfile);
		}
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

	</div>	
</div>

<!-- Footer -->
<footer role="contentinfo" class="w3-container w3-center w3-light-blue w3-opacity w3-margin">
	<p>
			Powered by <a href="https://www.w3schools.com/w3css/w3css_pro.asp" target="_blank" class="w3-hover-text-red">w3pro.css</a> |
			Workflow by <a href="https://github.com/" target="_blank" class="w3-hover-text-red">GitHub
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
			<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
			</svg></a>

			<br>
			Developed by <a href="https://radoslav.xyz/" target="_blank" class="w3-hover-text-red">radoslav.xyz</a>
			<br>
			Добра България за Хората 2026
	</p>
</footer>

<!-- Script to open and close sidebar-->
<script>
function myMenu() {
  var x = document.getElementById("side-button");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>