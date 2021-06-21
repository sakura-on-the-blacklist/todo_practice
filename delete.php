<?php 
// deleteの処理内容を以下に書く

// 1. ファイルの読み込み
require_once('Models/Task.php');

// 2. データの受け取り
$id = $_POST['id'];

// 3. DBからデータの削除
$task = new Task();
$task->delete([$id]);

// 4. リダイレクト
header('location: index.php');
exit;
