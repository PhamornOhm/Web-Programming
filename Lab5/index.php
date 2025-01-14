<?php
//– เชื่อมต่อ Database
$host = "localhost";
$mysqli = new mysqli($host, "root", "", "restaurant");

//– การตั้งค่าภาษา รองรับภาษาไทย
$mysqli->set_charset("utf8");

//– Query ข้อมูล
$sql = "SELECT * FROM customer"; // แก้ไขชื่อ table ให้ตรงกับฐานข้อมูลของคุณ
$result = $mysqli->query($sql);



// ดึงข้อมูลจากตาราง menus
$sql_manus = "SELECT * FROM manus";
$result_manus = $mysqli->query($sql_manus);


//– ตรวจสอบข้อผิดพลาด
if (!$result) {
    die("ข้อผิดพลาดในคำสั่ง SQL: " . $mysqli->error);
}

//– ตัดหรือปิดการเชื่อมต่อ Database
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    body{
        box-sizing: border-box;
        padding: 0;
    }

    p{

       font-size: 30px;
       font-weight: bold;
    }

    table{
             margin: 20px auto;
            border-collapse: collapse;
            width: 70%;
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);

    }
    th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 10px;
           
        }

    .head{
            
    background-color: aquamarine;
    }

    nav{
        display: flex;
        background-color: antiquewhite;
        height: 100px;

    }


    li,a{
        list-style: none;
        margin-left: 10px;
        text-decoration:none; 
        margin-top: 40px;
        cursor: pointer;
        font-weight: bold;
       
    }
    img{
           
  position: absolute;
  right: 0px;
  width: 114px;
 


    }

.red-cursor {
  color:red; 

}

</style>
<body>

<nav>
        <img src="../Screenshot 2025-01-06 162012.png" alt="Italian Trulli">
        <li class='red-cursor'><a href="#">Home</a></li>
        <li><a href="#">Detail</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>


</nav>
    <center><p>Customer</p></center>
    <!-- <form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
    </form> -->
<table class="ta" >
    <ul>

                <tr>
                    <td class="head"><h3>ID</h3></td> 
                    <td class="head"><h3>Name</h3></td> 
                    <td class="head"><h3>City</h3></td> 
                </tr>
                

        <?php if ($result->num_rows > 0) : ?>
            <?php while ($row = $result->fetch_assoc()) : ?>

        
                <tr>
                    <td> <?php echo $row["id"]; ?> <br></td>
                    <td> <?php echo $row["name"]; ?></td>
                    <td><?php echo $row["city"]; ?></td>
            </tr>
            <?php endwhile; ?>
        <?php else : ?>
            <li>ไม่มีข้อมูลในฐานข้อมูล</li>
        <?php endif; ?>
    </ul>
</table>    <br><br><br>    
    <center><p>Menu</p></center>

    
    <table class="ta">
            
                <tr>
                    <td class="head"><h3>ID</h3></td> 
                    <td class="head"><h3>Name</h3></td> 
                    <td class="head"><h3>Price</h3></td> 
                </tr>
    <ul>
    <?php if ($result_manus->num_rows > 0): ?>
                <?php while ($menu = $result_manus->fetch_assoc()): ?>
                    <tr>
                        <td>    <?php echo $menu["manu_id"]; ?></td>
                        <td>  <?php echo $menu["manu_name"]; ?></td>
                        <td> <?php echo $menu["price"]; ?> บาท<br></td>
                        </tr>
                <?php endwhile; ?>
            <?php else: ?>
                  <li>ไม่มีข้อมูลในฐานข้อมูล</li>

        <?php endif; ?>
    </ul>
    </table>



</body>
</html>
