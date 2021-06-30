<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Der Garten Bauer</title>
    <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    -->
    <!-- Custom styles for this template -->
    <link href="assets/css/bootstrap.css?v=2" rel="stylesheet" />
    <link href="assets/css/main.css?v=2" rel="stylesheet" />
</head>

<body>

    <?php include("header.php");?>

    <div class="container-fluid">
        <div class="row">
            <?php include("nav.php");?>
            <div class="col-md-9 col-lg-10 ms-sm-auto d-md-block">
                <!--me-0 px-3 
                -->
                <main>
                    <br />
                    <div class="container">
                        <?php
                        for($i=0; $i<5; $i++):
                        ?>
                        <div class="row">
                            <div class="card mb-6 ean-rounded shadow" style="padding:20px;margin-bottom:20px;">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                    <img src="assets/img/client.png" class="img-fluid rounded-start" alt="picture">
                                    </div>
                                    <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title text-secondary">Nerida Gallegos</h5>
                                        <p class="card-text text-primary">Laim, Munchen</p>
                                        <p class="card-text">Very proffesional work, punctual and very nice, I will recomend many times and fo my own future works in my house and projects.</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        endfor;
                        ?>
                    </div>
                </main>
                
                <footer class="footer">
                    <div class="row bg-secondary text-white" >
                        <div class="col p-3 align-self-center text-center">
                            <span class="fs-6 align-middle">&copy; Bleimarkt | Nerida Gallegos | +51 959759632
                                (WhatsApp)</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>