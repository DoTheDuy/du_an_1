
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>du_an_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .nav-link, .nav-link.active {
            color: #fff !important;
        }
        .content {
            margin: 20px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <div class="alert alert-success " chuc_nang="alert">
            <h2 class="text-center">QUẢN TRỊ KHÓA HỌC </h2>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-dark rounded">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navbar-brand active" aria-current="page" href="/du_an_1">Trang chủ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=category">Loại khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=product">Khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=user">Khách hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=comment">Bình luận</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=giangvien">Giảng viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=lop">Lớp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--    <div class="content">-->
<!--        --><?php //include $VIEW_NAME; ?>
<!--    </div>-->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script>
    (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })();
</script>
</body>
</html>

