<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Before After Slider</title>

  <!-- Image Compare Viewer CSS -->
  <link rel="stylesheet" href="https://unpkg.com/image-compare-viewer@1.5.0/dist/image-compare-viewer.min.css" />

  <style>
    body {
      font-family: sans-serif;
      padding: 40px;
      background: #f2f2f2;
    }

    .image-compare {
      max-width: 700px;
      margin: auto;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <h2 style="text-align:center;">Before / After Demo</h2>

  <div class="image-compare">
    <img src="https://jonathancharles-int.com/catalogue/image/500429-SC-C005-F058_PV-2.jpg" alt="Before">
    <img src="https://jonathancharles-int.com/catalogue/image/500429-SC-C005-F058_PV-1.jpg" alt="After">
  </div>

  <!-- Image Compare Viewer JS -->
  <script src="https://unpkg.com/image-compare-viewer@1.5.0/dist/image-compare-viewer.min.js"></script>

  <script>
    const viewer = new ImageCompare(document.querySelector(".image-compare"), {
      controlColor: "#fff",
      controlShadow: true,
      addCircle: true,
      showLabels: true,
      labelOptions: {
        before: 'Before',
        after: 'After'
      }
    });
    viewer.mount();
  </script>
</body>
</html>
