<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            solid-color: black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<table border="1px">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $customerList = [
        "1" => [
            "ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",

        ],
        "2" => [
            "ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",

        ],
        "3" => [
            "ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",

        ],
        "4" => [
            "ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",

        ],
        "5" => [
            "ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội",

        ]
    ];
    ?>
    <?php foreach ($customerList as $key => $value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['ten'] ?></td>
            <td><?php echo $value['ngaysinh'] ?></td>
            <td><?php echo $value['diachi'] ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>
