# Base64 Encoding Examples

Practical Base64 encoding and decoding examples using PHP and JavaScript.

This repository is designed for beginners and developers who want to understand how Base64 works and how to use it in web applications.

## What is Base64?

Base64 is an encoding method that converts binary data into an ASCII text representation.

**Important:** Base64 is encoding, not encryption. It does not protect sensitive information or provide security.

## Examples

### PHP

```php
<?php

$text = "Hello, HoxTools!";

// Encode text
$encoded = base64_encode($text);

echo "Encoded: " . $encoded . PHP_EOL;

// Decode text
$decoded = base64_decode($encoded, true);

echo "Decoded: " . $decoded . PHP_EOL;
```

### JavaScript

```javascript
const text = "Hello, HoxTools!";

// Encode text
const encoded = btoa(text);

console.log("Encoded:", encoded);

// Decode text
const decoded = atob(encoded);

console.log("Decoded:", decoded);
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
