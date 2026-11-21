"use strict";

// Original text
const text = "Hello, HoxTools!";

// Encode text into Base64
const encoded = btoa(text);

// Decode Base64 back into text
const decoded = atob(encoded);

// Display results
console.log("Original Text:", text);
console.log("Encoded Text:", encoded);
console.log("Decoded Text:", decoded);
