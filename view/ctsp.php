<?php
extract($spct);
$html_dssp_lienquan = showsp($splq);
$html_dsspnho = showspnho($spnho);

function showspnho($spnho)
{
    $html_dsspnho = '';

    foreach ($spnho as $sp) {
        extract($sp);
        $html_dsspnho .= '<img class="dsspnho-image" data-id="' . $id . '" data-hinh="' . $hinh_sp . '" src="' . $hinh_sp . '" alt="">';
    }

    return $html_dsspnho;
}


$dssp = show_sp();
/*  */


?>


<div class="chitietsp">

    <div class="ctsp_top">
        <div class="sp_left">
            <div class="img_chitiet">
                <img id="mainImage" src="<?= $hinh_sp ?>" alt="">
            </div>
            <div class="chitiet_full">
                <!-- <img src="layout/img/ao1.jpg" alt="" onclick="slide(0)">
                    <img src="layout/img/ao2.jpg" alt="" onclick="slide(1)">
                    <img src="layout/img/ao3.jpg" alt="" onclick="slide(2)">
                    <img src="layout/img/ao1.jpg" alt="" onclick="slide(3)"> -->
                <?= $html_dsspnho ?>
            </div>
        </div>
        <div class="sp_right">
            <p class="tensp"><?= $ten_sp ?></p>
            <p class="conhang">Còn hàng</p>
            <p class="gia"><?= number_format($gia, 0, ",") ?>đ</p>
            <!-- HTML -->
            <p class="kichco">Kích cỡ</p>
            <button class="bt" onclick="highlightButton(this, 'S')" id="sizeS">S</button>
            <button class="bt" onclick="highlightButton(this, 'M')" id="sizeM">M</button>
            <button class="bt" onclick="highlightButton(this, 'L')" id="sizeL">L</button>
            <button class="bt" onclick="highlightButton(this, 'XL')" id="sizeXL">XL</button>
            <button class="bt" onclick="highlightButton(this, 'XXL')" id="sizeXXL">XXL</button>


            <div class="sl">
                <p class="soluong">Số lượng</p>
                <div class="sl_sp">
                    <!-- <button id="giamSoLuong">-</button>
                    <span id="soLuongSanPham">1</span>
                    <button id="tangSoLuong">+</button> -->
                    <input type="number" name="soluongInput" id="soluongInput<?= $index ?>" min="1" max="10"
                        value="<?= $sl ?>" data-index="<?= $index ?>">

                </div>
            </div>


            <?php
            $kq = "";
            $selectedSize = isset($_POST['size']) ? $_POST['size'] : 'N/A';
           
            $kq .= '<form action="index.php?pg=muangay" method="post"> 
                <input type="hidden" name="hinh_sp" value="' . $hinh_sp . '">
                <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                <input type="hidden" name="gia" value="' . $gia . '">
                <input type="hidden" name="idpro" value="' . $id . '">
                 <input type="hidden" name="size" value="' . $selectedSize . '">
                  <td id="soLuongTd"><?= $sl ?></td>
            <button type="submit" class="muangay" name="dathang">MUA NGAY</button>
            </form>';
            echo $kq;
            ?>

            <?php
            $kq = "";
            $selectedSize = isset($_POST['size']) ? $_POST['size'] : 'N/A';
              
            $kq .= '<form action="index.php?pg=giohang" method="post"> 
                <input type="hidden" name="hinh_sp" value="' . $hinh_sp . '">
                <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                <input type="hidden" name="gia" value="' . $gia . '">
                <input type="hidden" name="idpro" value="' . $id . '">
                 <input type="hidden" name="size" value="' . $selectedSize . '">


            <button type="submit" class="themgh" name="dathang">THÊM GIỎ HÀNG</button>
            </form>';
            echo $kq;
            ?>
        </div>
    </div>

    <div class="ctsp_mota">
        <h2>MÔ TẢ SẢN PHẨM</h2>
        <p>
            <?= $mota ?>

        </p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    document.addEventListener("input", function(event) {
        if (event.target.classList.contains("soluongInput")) {
            var inputValue = event.target.value;
            var index = event.target.dataset.index;
            document.getElementById("soluongTd" + index).textContent = inputValue;
        }
    });
    </script>
    <script>
    // Lắng nghe sự kiện khi giá trị số lượng thay đổi
    document.addEventListener("input", function(event) {
        if (event.target.classList.contains("soluongInput")) {
            // Lấy giá trị từ ô input
            var inputValue = event.target.value;

            // Lấy index của dòng trong giỏ hàng từ thuộc tính data
            var index = event.target.dataset.index;

            // Cập nhật giá trị số lượng vào thẻ td tương ứng
            document.getElementById("soluongTd" + index).textContent = inputValue;
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        $("#binhluan").load("view/binhluan.php", {
            idpro: <?= $id ?>
        });
    });
    </script>

    <div class="ctsp_danhgia" id="binhluan">
        <!-- <h2>ĐÁNH GIÁ</h2> -->
    </div>


    <h1 style="text-align: center;font-family:Arial, Helvetica, sans-serif">SẢN PHẨM LIÊN QUAN</h1>
    <div class="containerfull mr10">
        <div class="splq"><?= $html_dssp_lienquan ?></div>
    </div>



</div>


<script>
var lastClickedButton = null;

function highlightButton(button, size) {
    console.log('Button clicked');

    // Loại bỏ lớp 'highlight' khỏi nút cuối cùng đã được nhấp
    if (lastClickedButton !== null) {
        lastClickedButton.classList.remove('highlight');
    }

    // Thêm lớp 'highlight' cho nút mới được nhấp
    button.classList.add('highlight');

    // Cập nhật nút cuối cùng được nhấp
    lastClickedButton = button;

    // Gửi dữ liệu đã chọn lên server sử dụng Ajax
    $.ajax({
        type: "GET",
        url: "process.php",
        data: {
            size: size
        },
        success: function(response) {
            // Xử lý phản hồi từ server nếu cần
            console.log(response);
        },
        error: function(error) {
            // Xử lý lỗi nếu có
            console.log(error);
        }
    });

    // Thực hiện các hành động bổ sung nếu cần dựa trên kích cỡ đã chọn (tùy chọn)
    console.log('Kích cỡ đã chọn:', size);
}
</script>


<script>
const soLuongSanPhamElement = document.getElementById("soLuongSanPham");
const tangSoLuongButton = document.getElementById("tangSoLuong");
const giamSoLuongButton = document.getElementById("giamSoLuong");

let soLuong = 0;

function capNhatSoLuong() {
    soLuongSanPhamElement.textContent = soLuong;
}

tangSoLuongButton.addEventListener("click", function() {
    soLuong++;
    capNhatSoLuong();
});

giamSoLuongButton.addEventListener("click", function() {
    if (soLuong > 0) {
        soLuong--;
        capNhatSoLuong();
    }
});



// slider
/*  var slider = document.querySelector(".imgslider");
 var arr = [
     "layout/img/<?= $hinh ?>",
     "layout/img/ao2.jpg",
     "layout/img/ao3.jpg",
     "layout/img/ao1.jpg"
 ];
 var idx = 0;

 function slide(index) {
     idx = index;
     slider.src = arr[idx];
 } */

// button
</script>

<script>
// Hàm JavaScript để thay đổi hình ảnh khi click vào
function changeImage(id, hinh_sp) {
    var imageElement = document.getElementById('mainImage');
    imageElement.src = hinh_sp;
}
var sanphams = document.querySelectorAll('.sanpham');
sanphams.forEach(function(sanpham) {
    sanpham.addEventListener('click', function() {
        // Lấy id và hình của sản phẩm từ thuộc tính data
        var id = sanpham.dataset.id;
        var hinh_sp = sanpham.dataset.hinh_sp;
        changeImage(id, hinh_sp);
    });
});
var dsspnhoImages = document.querySelectorAll('.dsspnho-image');

dsspnhoImages.forEach(function(image) {
    image.addEventListener('click', function() {
        var id = image.dataset.id;
        var hinh_sp = image.dataset.hinh_sp;
        changeImage(id, hinh_sp);
    });
});
</script>


<style>
.highlight {
    background-color: rgb(33, 158, 211) !important;
}
</style>