# Base64 Encoding Examples

Practical Base64 encoding and decoding examples using PHP and JavaScript.

This repository is designed for beginners and developers who want to understand how Base64 works and how to use it in web applications.

## What is Base64?

Base64 is an encoding method that converts binary data into an ASCII text representation.

**Important:** Base64 is encoding, not encryption. It does not protect sensitive information or provide security.

## Examples

### PHP

Source code: [php/base64-example.php](php/base64-example.php)

```php
<?php

declare(strict_types=1);

// Original text
$text = "Hello, HoxTools!";

// Encode text into Base64
$encoded = base64_encode($text);

// Decode Base64 back into text
$decoded = base64_decode($encoded, true);

// Display results
echo "Original Text: " . $text . PHP_EOL;
echo "Encoded Text: " . $encoded . PHP_EOL;
echo "Decoded Text: " . ($decoded !== false ? $decoded : "Invalid Base64") . PHP_EOL;
```

### JavaScript

Source code: [javascript/base64-example.js](javascript/base64-example.js)

```javascript
"use strict";

const text = "Hello, HoxTools!";

const encoded = btoa(text);
const decoded = atob(encoded);

console.log("Original Text:", text);
console.log("Encoded Text:", encoded);
console.log("Decoded Text:", decoded);
```

**Note:** JavaScript `btoa()` and `atob()` work directly with binary strings. For Unicode text, use a UTF-8 compatible conversion approach.

## Try the Online Tool

You can encode and decode text using the free HoxTools online tool:

https://hoxtools.com/tools/base64-encoder-decoder.php

## Related Guide

Learn more about Base64 encoding, common uses, and security limitations:

https://hoxtools.com/articles/base64-encoder-decoder-online.php

## License

No license has been specified yet. All rights remain with the repository owner unless a license is added.
