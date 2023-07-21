<?php

$listSV = array(
    array(
        'masv' => "ph001",
        'name' => "Lê Thu Hà",
        'point' => 9
    ),
    array(
        'masv' => "ph002",
        'name' => "Trần Thị Huệ",
        'point' => 2
    ),
    array(
        'masv' => "ph003",
        'name' => "Trần Thị Loan",
        'point' => 7
    ),
    array(
        'masv' => "ph004",
        'name' => "Nguyễn Văn An",
        'point' => 3
    ),
    array(
        'masv' => "ph005",
        'name' => "Hoàng Quang Trung",
        'point' => 4
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
        table tr th {
            border-bottom: 3px solid green;
            padding: 7px 20px;
        }

        table tr td {
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
    </tr>
    <tr>
        <td>1</td>
        <td>PH001</td>
        <td>Lê Thu Hà</td>
        <td>9</td>
    </tr>
    <tr>
        <td>1</td>
        <td>PH001</td>
        <td>Lê Thu Hà</td>
        <td>9</td>
    </tr>
    <tr>
        <td>1</td>
        <td>PH001</td>
        <td>Lê Thu Hà</td>
        <td>9</td>
    </tr>

</table>
</body>
</html>


