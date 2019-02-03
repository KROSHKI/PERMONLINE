<? AdminVerify(1);
//if($_POST['enter'] and $_POST['name'] and $_POST['description']){}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Добавление поста</title>
        <link href="https://пермьонлайн.рф/assets/libs/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="https://пермьонлайн.рф/assets/css/admin.css" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <script src="https://пермьонлайн.рф/assets/js/jq.min.js"></script>
        <script src="https://пермьонлайн.рф/assets/libs/bootstrap/bootstrap.js"></script>
    </head>
    <body class="fixed-nav sticky-footer bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                <a class="navbar-brand" href="/admin/posts">Панель Администратора</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/add">
                            <i class="fa fa-fw fa-plus"></i>
                            <span class="nav-link-text">Добавить пост</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/posts">
                            <i class="fa fa-fw fa-list"></i>
                            <span class="nav-link-text">Посты</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/logout">
                            <i class="fa fa-fw fa-sign-out"></i>
                            <span class="nav-link-text">Выход</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="card mb-3">
                        <div class="card-header">Добавление поста</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <form action="/admin/control/add" method="post">
                                        <div class="form-group">
                                            <label>Название</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        <form action="" method="POST">
                                            <select class="form-control" name="country">
                                                <option value="Интересные места">Интересные места</option>
                                                 <option value="История">История</option>
                                                 <option value="События">События</option>
                                            </select>
                                        </form>    
                                        <!-- <div class="form-group">
                                            <label>Описание</label>
                                            <textarea class="form-control" style="width:500px;" rows="3" name="description"></textarea>
                                        </div> -->
                                        <div class="form-group">
                                            <label>MAP API</label>
                                            <textarea class="form-control" style="width:650px;" rows="5" name="map_api"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Текст</label>
                                            <textarea class="form-control" style="width:650px;" rows="5" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Изображение</label>
                                            <input class="form-control" type="file" name="img">
                                        </div>
                                        <button type="submit" name="enter" class="btn btn-primary btn-block">Добавить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>