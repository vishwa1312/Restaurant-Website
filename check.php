<html>
<head>
<title>PHP Form Upload</title>
</head>
<body>

<form method='post' action='check.php' enctype='multipart/form-data'>
    Select a File:
    <input type='file' name='filename' size='10' />
    <input type='submit' value='Upload' name='submit' />
</form>

<?php

if (isset($_POST['submit']))
{
    echo "isset submit";
}
else 
{
    echo "NOT isset submit";
}

?>

</body>
</html>