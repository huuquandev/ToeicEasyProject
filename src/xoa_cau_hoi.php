<?php
    include_once '../function.php';
    // if(checkLogin());
    $flag = 0;
    if($_SESSION['level'] == 1){
        $flag = 1;
    }
    ChanNguoiDung();
    $question_id = $_GET['question_id'];
    $topicId = getTopicFromQuestion($question_id);
    xoaCauHoi($question_id);
    echo "Xóa thành công";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa câu hỏi</title>
    <!-- Begin bootstrap cdn -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="	sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- End bootstrap cdn -->
</head>
<body>
<main style="min-height: 100vh; max-width: 100%;">
<?php include 'navbar.php';?>

		<div class="d-flex justify-content-center">
        <a href="quan_ly_quiz.php?topic_id=<?php echo $topicId; ?>" class="btn btn-primary">Trở lại</a>

	</main>
</body>
<?php include 'footer.php'; ?>
</html>