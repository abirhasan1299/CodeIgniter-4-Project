<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live HTML Text Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      display: flex;
      height: 100vh;
      overflow: hidden;
    }

    #editor-container,
    #preview-container {
      width: 50%;
      height: 100%;
      overflow: auto;
    }

    #editor,
    #preview {
      width: 100%;
      height: 100%;
      border: none;
      box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }
    .submit{
        background: green;
        color:whitesmoke;
        width: 100%;
        padding:20px;
        margin-top:2%;
        border:none;
        border-radius: 5px;
    }
    #editor{
        border: 1px solid tomato;
        border-radius: 5px;
        margin-top: 2%;
        padding:10px;
    }
  </style>
</head>

<body>
    <br><br><br>
  <div id="editor-container">
    <form action="<?= base_url()?>/admin/today" method="post" autocomplete="off">
        <textarea id="editor" rows="20" name="text" placeholder="Type your HTML code here..."></textarea>
        <input type="submit" name="submit" value="Submit" class="submit">
    </form>
  </div>

  <div id="preview-container">
    <iframe id="preview"></iframe>
  </div>

  <script>
    const editor = document.getElementById('editor');
    const preview = document.getElementById('preview');

    editor.addEventListener('input', updatePreview);

    function updatePreview() {
      const htmlCode = editor.value;
      const iframeDocument = preview.contentDocument || preview.contentWindow.document;
      iframeDocument.body.innerHTML = htmlCode;
    }
  </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
