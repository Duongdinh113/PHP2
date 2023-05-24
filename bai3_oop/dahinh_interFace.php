<?php
    interface DiChuyen {
        function di();
            // không cần ghi abtrasuct đường trước nhưng auto là trừu tượng
        }
    class ConCho implements DiChuyen {
        public function di()
        {
            echo "con chó đi bằng 4 chân";
        }
    }
    class ConNguoi implements DiChuyen {
        public function di()
        {
            echo "con người đi bằng 2 chân";
        }
    }
    // khác nhau giữa abstract bà interface
    // - abstract là classs còn interface không phải là class
    // - interface chỉ có phương thức trừu tượng và không có thuộc tính và phương thức bình thường
    // - gống nhau: interface và abstract đều là bản thiết kế chung cho hệ thống phần mềm
    // - nhưng interface là bản thiết kế cho các class có chung hành động
    // - abstract là bản thiết kế cho các class có cùng bản chất
?>