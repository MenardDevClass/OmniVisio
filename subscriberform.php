<?php
if($_POST["Message"]) {
mail("menard.maxime94@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>