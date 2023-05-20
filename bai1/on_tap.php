<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <title>Document</title>

</head>

<body>
<?php
$a = 5; // a là số nguyên ... 
$d = true; // d boolean
$c  = "hello";


// mảng
// mảng tuần tự 
$mang = array(1,2,3,4); // cách 1: khai báo được mọi mảng
$mang1 = [1,2,3,4]; // cách 2: chạy được nhưng phiên bản >7.8
// duyệt mảng hiển thị ra những phần tử là số chẵn


// foreach ($mang1 as $key){
//     if($key % 2 ==0){
//         // echo $key;
//        echo $key;
       

//     }
// }

// echo "<pre>";
// for($i=0 ; $i < count($mang1); $i++){
//     if($mang1[$i] % 2 ==0){
//         echo $mang1[$i];
//     }
// }

// MẢNG LIÊN HỢP
// $manglh = ["A" => 1, "B" => 2,"C" => 3,"D" => 4,];
// // echo $manglh["A"];
// $tong = 0;
// foreach($manglh as $key => $value){
//     // echo $key."=>".$value."</br>";
//     $tong = $tong + $value;
   
// }
// echo $tong;

$mangInfo = ["ten" => "Nguyen Van A", "tuoi" => 19, "email"=>"dinhdvph29050@fpt.edu.vn"];
$mangColor = ["red" => "mau do", "blue" => "xanh nuoc bien" , "green" => "xanh la"];

?>
<table border="1">
    <thead>
    <?php foreach($mangColor as $m => $value){ ?>
            <tr>
                <th><?php echo $m?></th>
             
            </tr>
            <?php }?>
    </thead>
    <tbody>
    <?php foreach($mangColor as $m => $value){ ?>
        <tr style ="color: <?php echo $m?>;">
            <td><?php echo $value?></td>
          
       
        </tr>
        <?php }?>
    </tbody>
</table>
</body>
</html>