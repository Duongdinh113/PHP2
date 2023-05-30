<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>document</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    
    <div>
         <div class="mt-[50px] ">
                <form class="grid" action="?url=update-product" method="POST">
                    <input hidden type="text" value="<?= $products['id']?>"  name="id" id="">
                    <label for="">Tên sản phẩm</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text"  name="ten" value="<?= $products['ten_sp']?>" id="">
                    <label for="">Đơn giá</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" value="<?= $products['gia']?>" name="gia" id="">
                    <button class="border-[1px] mt-[5px]">sửa</button>
                </form>
         </div>
    </div>
    </body>
</html>