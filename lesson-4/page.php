<?php
function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
        if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
    }
    return $result;
}
$dirbig = 'pictures';
$dir = 'pictures-small';
$files = scandir($dir);
$files = excess($files);
?>
<?php for ($i = 0; $i < count($files); $i++) { ?>
    <a href='<?=$dirbig.'/'.$files[$i]?>'><img src='<?=$dir.'/'.$files[$i]?>' alt='#'></a>
        <?php if (($i + 1) % 3 == 0) { ?><br /><?php } ?>
            <?php }
?>