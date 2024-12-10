```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        // Process each line
        echo $line;
    }
    if (fclose($file) === false) {
        // Handle file closing error
        echo "Error closing file.";
    }
} else {
    // Handle file opening error
    echo "Error opening file.";
}
```
This improved version explicitly checks the return value of `fclose()`. If it returns `false`, an error message is displayed, alerting the user to a problem.