<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<style>
    table,tr,td{
        border: black solid 2px;
    }
    
</style>
<body class="pl-[600px]">

<input type="button" id="btn2" value="thêm"/>
    <table class="w-[300px]">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Đơn giá</td>
            <td>Hành động</td>
        </tr>
        <?php foreach($products as $key => $value){?>
        <tr>
            <td><?= $value['id']?></td>
            <td><?= $value['ten_sp']?></td>
            <td><?= $value['gia']?></td>
            <td><a  onclick="return confirm('Bạn có chắc muốn xóa')" href="?url=remove-product&id=<?= $value['id'];?>">Xóa</a>
            <a href="?url=edit-product&id=<?= $value['id']?>">sửa</a>
        </td>
           
        </tr>
        <?php }?>
    </table>
    <div hidden id="content" class="bg-[gray] w-[300px] h-[300px] fixed top-[100px]" >
        <div class="absolute right-[5px]">
            <input  type="button" id="btn1" value="X"/>
         </div>
         <div class="mt-[50px] ">
                <form class="grid" action="?url=more-product" method="POST">
                    <label for="">Tên sản phẩm</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" placeholder="Tên sản phẩm" name="ten" id="">
                    <label for="">Đơn giá</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" placeholder="Giá"  name="gia" id="">
                    <button class="border-[1px] mt-[5px]">Thêm</button>
                </form>
                </div>
    </div>
        <br/>
       
     
 
        <script language="javascript">
             document.getElementById("btn2").onclick = function () {
                document.getElementById("content").style.display = 'block';
            };
 
            
            document.getElementById("btn1").onclick = function () {
                document.getElementById("content").style.display = 'none';
            };
 
           
        </script>
</body>
</html>