<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    <font align="center">
    <legend> <b>Form Input</b></legend>
    <form action="contoh2.php" method="get" align="center">
        Nama : <input type="text" name="txtNama" id="txtNama"> <br><br>
        Email: <input type="text" name="txtEmail" id="txtEmail"><br><br>
        Phone number: <input type="text" name="txtPhonenumber" id="txtPhonenumber"> <br><br>
        Hobby: <input type="text" name="txtHobby" id="txtHobby"><br><br>
        Description :
        <br>
        <textarea name="Description" id="Description" cols="30" rows="10"></textarea>   
        <br>
            <input type="submit" value="Submit" name ="btnKirim">
            <input type="Reset" value="Reset" name ="btnReset">
    </font>  
    </form>
</body>
</html>