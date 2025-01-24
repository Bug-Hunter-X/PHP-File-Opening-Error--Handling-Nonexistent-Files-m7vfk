```php
$file = fopen("nonexistent.txt", "r");
if ($file === false) {
    // Handle the error robustly
    $error = error_get_last();
    if ($error) {
        echo "Error opening file: " . $error['message'] . "\n";
    } else {
        echo "Error opening file. Unknown error.\n";
    }
} else {
    // Process the file
    $contents = fread($file, filesize("nonexistent.txt")); //Or process line by line
    fclose($file);
    echo "File contents:\n" . $contents;
}
```