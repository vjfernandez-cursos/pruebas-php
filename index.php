<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./node_modules/codemirror/lib/codemirror.css">
 
    <script src="./node_modules/codemirror/lib/codemirror.js"></script>
    <script src="./node_modules/codemirror/mode/javascript/javascript.js"></script>
    <title>Document</title>
</head>
<body>
<textarea id ="mycode">
Necesito un break
</textarea>



  <script>
 var myTextarea = document.getElementById("mycode");
 var editor = CodeMirror.fromTextArea(myTextarea, {
    lineNumbers: true,
    mode: 'javascript'
  });

</script>
  
</body>
</html>