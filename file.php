<?php
function changeExtension($file, $newExtension) {
    $path_parts = pathinfo($file);
    if (isset($path_parts['dirname']) && isset($path_parts['filename'])) {
        $newFile = $path_parts['dirname'] . DIRECTORY_SEPARATOR . $path_parts['filename'] . '.' . $newExtension;
        echo "File extension changed successfully: " . $newFile . "\n";
    } else {
        echo "Error: Unable to change the file extension.\n";
    }
}
?>