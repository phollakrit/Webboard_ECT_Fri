<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr> 
    <div style="text-align: center;">
        <?php
        $id=$_GET['id'];
        echo "ต้องการดูกระทู้หมายเลข $id<br>";
        if ($id%2==0){
            echo "เป็นกระทู้หมายเลขคู่";
        }else{
            echo "เป็นกระทู้หมายเลขคี่";
        }
        ?>        
    </div>       
    <br>
    <table style="border: 2px solid black; width: 40%" align="center">
        <tr style="background-color: #6cd2fe;">
            <td>แสดงความคิดเห็น</td>
        </tr>
        <tr><td align="center">
            <textarea cols="50" rows="10"></textarea><br>
            <input type="submit" value="ส่งข้อความ">            
        </td></tr>
    </table>
    <br>
    <div style="text-align: center;"><a href="index.php">กลับไปหน้าหลัก</a></div>
</body>
</html>