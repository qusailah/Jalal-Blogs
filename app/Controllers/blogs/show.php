<?php
$config = require "app/../core/config.php";

require "app/../core/Database.php";

$db = new Database($config);

$id = $_GET["id"];

$blog = $db->query("SELECT * FROM posts where post_id = :id ", ["id" => $id])->fetch();

require "app/Views/blogs/show.template.php";