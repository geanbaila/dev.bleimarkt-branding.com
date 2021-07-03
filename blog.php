<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Der Garten Bauer</title>
    <link href="assets/css/bootstrap.css?v=2.3" rel="stylesheet" />
    <link href="assets/css/main.css?v=1.1" rel="stylesheet" />
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
                        
                        <br/>
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="row" style="--bs-gutter-x: 0px !important;">
                                    <div class="col-12" style="
                                    background-image: url(img/2.jpg);
                                    border-radius: 0px 20px 0px 0px;
                                    height:300px;
                                    ">
                                        <a class="accordion-button bg-transparent text-secondary" 
                                        id="panelsStayOpen-headingOne"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" 
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <div class="row container align-items-center">
                                            <div class="col-lg-10 col-sm-12 p-3 text-start">
                                                <h5 class="card-title text-primary fs-5 fw-bold">Nerida Gallegos</h5>
                                                <p class="text-secondary fw-bold">In eiusmod irure Lorem elit officia laborum ipsum aliqua. Dolor eiusmod id ullamco ea nulla. Ad laborum aliqua cupidatat sit nisi officia consequat ex qui sunt incididunt anim. Aliqua veniam enim anim quis.</p>
                                            </div>
                                            <div class="col-lg-2 d-none d-lg-block p-3 text-center text-primary fw-bold">03.06.2020</div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <?php include("nodo.php"); ?>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php for($i=1;$i<5;$i++):?>
                            <br/>
                            <div class="accordion accordion-flush" id="accordionFlushExample<?=$i?>">
                                <div class="accordion-item">
                                    <div class="row" style="--bs-gutter-x: 0px !important;">
                                        <div class="col-12" style="
                                        background-image: url(img/<?=$i?>.jpg);
                                        border-radius: 0px 20px 0px 0px;
                                        height:300px;
                                        ">
                                            <a class="accordion-button collapsed bg-transparent text-secondary" 
                                            id="flush-headingOne<?=$i?>"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?=$i?>" 
                                            aria-expanded="false" aria-controls="flush-collapseOne<?=$i?>">
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <div class="row container align-items-center">
                                                <div class="col-lg-10 col-sm-12 p-3 text-start">
                                                    <h5 class="card-title text-primary fs-5 fw-bold">Nerida Gallegos</h5>
                                                    <p class="text-secondary fw-bold">In eiusmod irure Lorem elit officia laborum ipsum aliqua. Dolor eiusmod id ullamco ea nulla. Ad laborum aliqua cupidatat sit nisi officia consequat ex qui sunt incididunt anim. Aliqua veniam enim anim quis.</p>
                                                </div>
                                                <div class="col-lg-2 d-none d-lg-block  p-3 text-center text-primary fw-bold">03.06.2020</div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div id="flush-collapseOne<?=$i?>" 
                                    class="accordion-collapse collapse" 
                                    aria-labelledby="flush-headingOne<?=$i?>" 
                                    data-bs-parent="#accordionFlushExample<?=$i?>">
                                        <div class="accordion-body">
                                            <?php include("nodo.php"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                            
                    </div>
                </main>
                
                <?php include("footer.php");?>
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