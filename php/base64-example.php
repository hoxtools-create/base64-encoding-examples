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
