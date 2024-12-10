```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        // Process each line
        echo $line;
    }
    fclose($file);
} else {
    // Handle file opening error
    echo "Error opening file.";
}
```
This code has a potential issue: it doesn't explicitly check the return value of `fclose()`. While PHP's garbage collector *usually* handles this, it's best practice to check for errors.  If `fclose()` fails (due to permission issues, or a system error), your script might not be aware of it.