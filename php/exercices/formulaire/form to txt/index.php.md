## COPIE DU WEB #FullFlemme
```php
<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $file = fopen("emaillist.txt","a+");
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
```php

```
