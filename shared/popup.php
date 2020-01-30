<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <title>ตัวอย่าง popup </title>
    <!-- สามารถไปดาวน์โหลดมาไว้ใน server ได้เลย -->
    <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
</head>

<body>
    <!-- นับเวลาถอยหลัง -->
    <h1><span id="seconds">2</span></h1>

    <!--จะโหลดมาไว้ใน  server  หรือใช้แบบนี้ก็ได้ -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>

    <script>
        function openColorBox() {
            //กำหนดขนาดและหน้าเว็บที่จะแสดงใน popup สามารถใส่เป็นภาพก็ได้นะครับ
            $.colorbox({
                iframe: true,
                width: "800px",
                height: "500px",
                href: "http://devbanban.com/"
            });
        }

        function countDown() {
            seconds--
            $("#seconds").text(seconds);
            if (seconds === 0) {
                openColorBox();
                clearInterval(i);
            }
        }
        //กำหนดเวลา วินาทีที่จะให้ popup ทำงาน 
        var seconds = 2,
            i = setInterval(countDown, 1000);
    </script>

    <!-- ่ปุ่ม popup ลงมาหน้าจอ -->
    <button name="save" type="submit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">บันทึก</button>
    <!-- แสดง -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>