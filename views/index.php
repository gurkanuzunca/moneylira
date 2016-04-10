<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyLira</title>

    <link rel="stylesheet" href="assets/libs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/component.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<header id="header">
    <div class="head">
        <div class="container">
            <div class="logo">
                MONEYLİRA
            </div>
        </div>
    </div>

    <div class="navigation">
        <div class="container">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Kişiler</a></li>
                <li><a href="#">Borçlar</a></li>
                <li><a href="#">Alacaklar</a></li>
            </ul>
        </div>
    </div>

</header>


<main id="main">
    <div class="container">
        <h1 class="page-header">Önizleme</h1>

        <ol class="breadcrumb">
            <li class="active">Anasayfa</li>
        </ol>

        <div class="row">


            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="panel-caption">EYLEMLER</h3>
                        <p class="panel-caption-text">Eklenen son işlemler</p>


                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="table-check">
                                    <div class="checkbox checkbox-primary">
                                        <input title="" type="checkbox">
                                        <label></label>
                                    </div>
                                </th>
                                <th>İsim</th>
                                <th class="text-right">Tutar</th>
                                <th>Durum</th>
                                <th>Tarih</th>
                                <th class="text-right">İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input title="" type="checkbox">
                                        <label></label>
                                    </div>
                                </td>
                                <td>Hasan Ballı</td>
                                <td class="text-right">150,00 TL</td>
                                <td>
                                    <span class="label label-success">Alacak</span>
                                </td>
                                <td>12/10/2016</td>
                                <td class="table-action">
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="checkbox checkbox-primary">
                                        <input title="" type="checkbox">
                                        <label></label>
                                    </div>
                                </td>
                                <td>Hasan Ballı</td>
                                <td class="text-right">150,00 TL</td>
                                <td>
                                    <span class="label label-purple">Borç</span>
                                </td>
                                <td>12/10/2016</td>
                                <td class="table-action">
                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="panel-footer">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>



            <div class="col-sm-3">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h3 class="panel-caption">EYLEMLER</h3>
                        <p class="panel-caption-text">Son eylemler listesi</p>

                    </div>
                </div>
            </div>
        </div>




    </div>
</main>

</body>
</html>