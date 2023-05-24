<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Javascript Example</title>
    </head>
    <body>
        
    <div hidden id="content" class="bg-[gray] w-[300px] h-[300px] fixed top-[100px]" >
        <div class="absolute right-[5px]">
            <input  type="button" id="btn1" value="X"/>
         </div>
         <div class="mt-[50px] ">
                <form class="grid" action="?url=update-product" method="POST">
                    <label for="">Tên sản phẩm</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" placeholder="Tên sản phẩm" name="ten" id="">
                    <label for="">Đơn giá</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" placeholder="Giá"  name="gia" id="">
                    <button class="border-[1px] mt-[5px]">Thêm</button>
                </form>
                </div>
    </div>
    </body>
</html>