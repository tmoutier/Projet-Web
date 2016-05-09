            <?php
$file = 'test.txt';
$content = $_POST["name"] ;
echo '$content';
file_put_contents($file, $content, FILE_APPEND);
?>