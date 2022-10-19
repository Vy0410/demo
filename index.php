<?php
include("index_data.php");
//include("themsanpham.php");
?>
<html>

<body>
    <table border=solid>
        <tr>
            <td>Mã sản phẩm</td>
            <td>Tên sản phẩm</td>
            <td>Loại</td>
            <td>Đơn giá</td>
            <td>Hình ảnh</td>
        </tr>
        <?php
        foreach($dssanpham_rowsdata as $data)
        {
        ?>
        <tr>
            <td><?php echo $data['masanpham'] ?></td>
            <td><?php echo $data['tensanpham'] ?></td>
            <td><?php echo $data['loai']  //echo $dsloaisanpham_rowsdata as $data['tenloai'] ?></td>
            <td><?php echo $data['dongia'] ?></td>
            <td><?php echo '<img height="100" width="100" src="img/'.$data['hinhanh'].'"';?></td>
            <td>
                <?php //$masanpham = $data['masanpham']; 
                include("XoaSanPham.php"); 
                ?>
            </td>
            <td>
                <a href="SuaSanPham.php?id=<?php echo $data['masanpham']?>">Sua
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>