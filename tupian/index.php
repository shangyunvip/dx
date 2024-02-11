<!DOCTYPE html>
<html>
<head>
    <title>随机调用图片</title>
</head>
<body>
    <?php
    // 图片文件夹路径
    $imageFolder = 'image/';
    
    // 获取图片文件列表
    $imageFiles = scandir($imageFolder);
    
    // 过滤掉"."和".."目录
    $imageFiles = array_diff($imageFiles, array('..', '.'));
    
    // 随机选择一张图片
    $randomImage = $imageFiles[array_rand($imageFiles)];
    
    // 图片显示
    echo '<img src="' . $imageFolder . $randomImage . '" alt="随机图片">';
    ?>
</body>
</html>
