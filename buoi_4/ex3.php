<?php
    $listSV=array(
        array(
            'masv'=>"ph001",
            'name'=>"Lê Thu Hà",
            'point'=>9,
            'avatar' => 'chanDung'
        ),
        array(
            'masv'=>"ph002",
            'name'=>"Trần Thị Huệ",
            'point'=>2,
            'avatar' => "chanDung"
        ),
        array(
            'masv'=>"ph003",
            'name'=>"Trần Thị Loan",
            'point'=>7,
            'avatar' => "chanDung",
        ),
        array(
            'masv'=>"ph004",
            'name'=>"Nguyễn Văn An",
            'point'=>3,
            'avatar' => "chanDung"
        ),
        array(
            'masv'=>"ph005",
            'name'=>"Hoàng Quang Trung",
            'point'=>4,
            'avatar' => "chanDung"
        ),
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổ dữ liệu mảng lên giao diện bảng</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
        table tr th{
            border-bottom: 3px solid green;
            padding: 7px 20px;
        }
        table tr td{
            border-bottom: 1px solid green;
            padding: 7px 20px;
        }
    </style>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>MaSV</th>
            <th>Họ và tên</th>
            <th>Điểm thi</th>
            <th>Trạng thái</th>
            <th>Avatar</th>
        </tr>
        <?php
        $stt=0;
            foreach($listSV as $sv) {
                $stt++;
        ?>
        <!-- codehtml -->
            <tr>
                <td><?php echo $stt;?></td>
                <td><?php echo $sv['masv']?></td>
                <td><?php echo $sv['name']?></td>
                <td><?php echo $sv['point']?></td>
                <td><?php echo (($sv['point']<5)?"false":"pass") ?></td>
                <td>
                    <?php
                    echo '<img src="chanDung.jpg" alt="">';
                    ?>
                </td>
            </tr>
        <?php
            }
        ?>
        <!-- Hãy hiển thị bảng danh sách sinh viên thi trượt -->

    </table>
    <h1>Danh sach thi truot</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>MaSV</th>
            <th>Họ và tên</th>
            <th>Điểm thi</th>
            <th>Trạng thái</th>
        </tr>
        <?php
        $stt=0;
            foreach($listSV as $sv){
                if($sv['point']<5){
                    $stt++;
         ?>
              <tr>
                <td><?php echo $stt;?></td>
                <td><?php echo $sv['masv']?></td>
                <td><?php echo $sv['name']?></td>
                <td><?php echo $sv['point']?></td>
                  <td><?php echo 'fail'?></td>
            </tr>
            <?php
                }
            }
        ?>
</body>
</html>