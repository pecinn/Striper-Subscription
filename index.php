<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style type="text/css">
        .container {margin-top: 100px;}
        .card {width: 300px;}
        .card:hover{
            -webkit-transform: scale(1.05);
            -webkit-transition: all .3s ease-in-out;
        }
        .price {font-size: 72px;}
        .currency {
            font-size: 25px;
            position: relative;
           top: -30px;
        }
        .list-group-item {
            border: 0px;
            padding: 5px;
        }
    </style>
    <title>Pricing Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center" >
                        <h2 class="price"><span class="currency">R$</span>19,90</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Product 1</h1>
                       <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                       </ul>
                    </div>
                    <div class="card-footer text-center">
                        <form action="paymentProcess.php?pid=1" method="POST">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_51IcbwgKiXDf9h9tvQqwOnxFYOivgryugxVaignyLdUEDBKlpFpnceNWYcnv8BZ3hL3I9p2IuTFtYDUt5UWfFj5tm003boTe13A"
                                        data-amount="1990"
                                        data-name="CodingPassiveIncome"
                                        data-description="Widget"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-currency="brl">
                                </script>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center" >
                        <h2 class="price"><span class="currency">R$</span>29,90</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Product 2</h1>
                       <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                       </ul>
                    </div>
                    <div class="card-footer text-center">
                    <form action="paymentProcess.php?pid=2" method="POST">
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_51IcbwgKiXDf9h9tvQqwOnxFYOivgryugxVaignyLdUEDBKlpFpnceNWYcnv8BZ3hL3I9p2IuTFtYDUt5UWfFj5tm003boTe13A"
                                    data-amount="2990"
                                    data-name="CodingPassiveIncome"
                                    data-description="Widget"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-currency="brl">
                            </script>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center" >
                        <h2 class="price"><span class="currency">R$</span>99,90</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">Product 3</h1>
                       <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                       </ul>
                    </div>
                    <div class="card-footer text-center">
                        <form action="paymentProcess.php?pid=3" method="POST">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_51IcbwgKiXDf9h9tvQqwOnxFYOivgryugxVaignyLdUEDBKlpFpnceNWYcnv8BZ3hL3I9p2IuTFtYDUt5UWfFj5tm003boTe13A"
                                        data-amount="9990"
                                        data-name="CodingPassiveIncome"
                                        data-description="Widget"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-currency="brl">
                                </script>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>