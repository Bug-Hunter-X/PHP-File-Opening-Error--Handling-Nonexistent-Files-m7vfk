```php
$file = fopen("nonexistent.txt", "r");
if ($file) {
    // Process the file
    fclose($file);
} else {
    // Handle the error
    echo "Error opening file.";
}
```