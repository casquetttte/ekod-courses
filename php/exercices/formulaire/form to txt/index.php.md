## COPIE DU WEB #FullFlemme
#### FICHIER INDEX.PHP (unique)
```php
<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $file = fopen("test.txt","a+");
    fwrite($file,$email);
    fclose($file); 
    print_r(error_get_last());
}
?>
<form action= "" method="post" name="form">
<input type="text" name="email">
<br>
<br>
<input type="submit" name="submit" value="submit"><br>
</form>
```

## CORRECTION PROF
#### FICHIER INDEX.PHP
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="clc.php" method="post">
        MSG
        <input type="text" name="zebi"></input><br>
        <input type="submit" value="SEND" name="submit">
</form>
</body>
</html>
```
#### FICHIER CLC.PHP
```php
<?php
var_dump($_POST);
if(isset($_POST['submit']))
{
    $message = 'Content : '.$_POST['zebi']."\n";
    $file = fopen("test.txt","w");
    fwrite($file,$message);
    fclose($file);
    print_r(error_get_last());      
}
?>
```
