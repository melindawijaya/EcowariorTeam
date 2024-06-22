<!-- resources/views/wallet.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoTrade Wallet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style /dompetvendor.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <div class="sidebar bg-light">
            <div class="sidebar-header">
                <h3>EcoTrade</h3>
            </div>
            <ul class="list-unstyled">
                <li><a href="#" class="sidebar-link">Dashboard</a></li>
                <li><a href="#" class="sidebar-link">Pesanan</a></li>
                <li><a href="#" class="sidebar-link">Statistik</a></li>
                <li><a href="#" class="sidebar-link active">Dompet</a></li>
                <li><a href="#" class="sidebar-link">Riwayat Transaksi</a></li>
                <li><a href="#" class="sidebar-link">Settings</a></li>
                <li><a href="#" class="sidebar-link">Log Out</a></li>
            </ul>
        </div>
        <div class="content p-4">
            <div class="container">
                <h2 class="mb-4">Kartu Kredit/Debit</h2>
                <div class="row card-section">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="path/to/bca_card_image.jpg" class="card-img-top card-img" alt="BCA Card">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="path/to/bri_card_image.jpg" class="card-img-top card-img" alt="BRI Card">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 d-flex justify-content-center align-items-center add-card">
                            <a href="#" class="plus-icon">+</a>
                        </div>
                    </div>
                </div>

                <h2 class="mb-4">E-Wallet</h2>
                <div class="row card-section">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="path/to/dana_wallet_image.jpg" class="card-img-top card-img" alt="DANA Wallet">
                            <div class="card-body text-center">
                                0812345678910
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="path/to/shopeepay_wallet_image.jpg" class="card-img-top card-img" alt="ShopeePay Wallet">
                            <div class="card-body text-center">
                                0812345678910
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 d-flex justify-content-center align-items-center add-card">
                            <a href="#" class="plus-icon">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
