<?php
	$base_lang="pt"; // Set the default language
?>

<?php
function e($text){
 	GLOBAL $base_lang;
	if(file_exists("lang/{$base_lang}.php") && strlen($base_lang) <=3) {
    include("lang/{$base_lang}.php");
      if (isset($lang[$text]) && !empty($lang[$text])) {
        return $lang[$text];
      }
  }else { //default lang = en
		include("lang/pt.php");
		if (isset($lang[$text]) && !empty($lang[$text])) {
			return $lang[$text];
		}
	}
	return $text;
}

?>

<?php
  if(isset($_COOKIE["lang"])){
   $base_lang=$_COOKIE["lang"]; // Get language from cookie
  }

  if(isset($_GET["lang"])){
    setcookie("lang",strip_tags($_GET["lang"]),strtotime('+30 days'),'/', NULL, 0);
    $base_lang=strip_tags($_GET["lang"]); // Or set cookie and new language
  }
?>
