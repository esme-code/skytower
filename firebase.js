// index.js
const functions = require('firebase-functions');
const express = require('express');
const app = express();

// Define a route to handle requests to the root path
app.get('/', (req, res) => {
  res.send('Hello from Firebase Hosting!');
});

// Export the Express app as a Cloud Function
exports.api = functions.https.onRequest(app);
