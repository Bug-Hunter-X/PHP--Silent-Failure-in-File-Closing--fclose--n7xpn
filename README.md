# PHP: Silent Failure in File Closing (fclose)

This repository demonstrates a common but easily overlooked error in PHP file handling: ignoring the return value of `fclose()`. While PHP's garbage collector usually cleans up resources, explicitly checking for errors improves robustness and prevents potential resource leaks or silent failures.

The `bug.php` file contains the flawed code. The `bugSolution.php` file shows the improved version with proper error handling.

**Key takeaway:** Always check the return values of file handling functions (like `fopen()`, `fclose()`, `fread()`, etc.) to catch and handle errors gracefully.