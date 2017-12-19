<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M:\Bilkent\CS353\Project\Frontend\Categories</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="#">CaseSwitchers </a></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="#">Home </a></li>
                    <li role="presentation"><a href="#">Posts </a></li>
                    <li class="active" role="presentation"><a href="#">Categories </a></li>
                    <li role="presentation"><a href="#">Users </a></li>
                    <li role="presentation"></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#">Profile </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Categories </h1></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-sm-offset-9">
                <div class="row">
                    <div class="col-sm-8 col-sm-pull-1">
                        <input type="search" name="Search" value="Search" disabled="">
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-default btn-sm" type="button">Search </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Post Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Algorithms </td>
                                <td>266 </td>
                            </tr>
                            <tr>
                                <td>Artificial Intelligence</td>
                                <td>903 </td>
                            </tr>
                            <tr>
                                <td>Blockchain </td>
                                <td>231 </td>
                            </tr>
                            <tr>
                                <td>General </td>
                                <td>2344 </td>
                            </tr>
                            <tr>
                                <td>Machine Learning</td>
                                <td>685 </td>
                            </tr>
                            <tr>
                                <td>User Experience</td>
                                <td>331 </td>
                            </tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>