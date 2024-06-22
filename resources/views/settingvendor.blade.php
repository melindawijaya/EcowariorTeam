<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style /settingvendor.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div class="logo p-3">
                        <img src="logo.png" alt="EcoTrade" class="img-fluid">
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Statistik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dompet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Riwayat Transaksi</a>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Preferences</span>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Settings</h1>
                </div>

                <div class="container">
                    <!-- Account Settings -->
                    <div class="card mb-4">
                        <div class="card-header">
                            Account Settings
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="First Name" value="Rizky">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="Febrian">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" value="rizkyfebrian@gmail.com">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number" value="(+62) 855-865-0123">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-success btn-block">Save Changes</button>
                                    </div>
                                    <div class="form-group col-md-6 d-flex align-items-center justify-content-center">
                                        <div class="profile-pic">
                                            <img src="profile-pic.png" class="rounded-circle" alt="Profile Picture" width="100">
                                            <button type="button" class="btn btn-outline-success mt-2">Choose Image</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Vendor Address -->
                    <div class="card mb-4">
                        <div class="card-header">
                            Vendor Address
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="vendorFirstName">First Name</label>
                                        <input type="text" class="form-control" id="vendorFirstName" placeholder="First Name" value="Rizky">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="vendorLastName">Last Name</label>
                                        <input type="text" class="form-control" id="vendorLastName" placeholder="Last Name" value="Febrian">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="companyName">Company Name (optional)</label>
                                        <input type="text" class="form-control" id="companyName" placeholder="Company Name" value="PT. Jaya Abadi">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="streetAddress">Street Address</label>
                                        <input type="text" class="form-control" id="streetAddress" placeholder="Street Address" value="Jl. Kokrosono no 17, Semarang">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="country">Country / Region</label>
                                        <select id="country" class="form-control">
                                            <option selected>Indonesia</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">States</label>
                                        <select id="state" class="form-control">
                                            <option selected>Kota Semarang</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="zipCode">Zip Code</label>
                                        <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" value="50228">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="vendorEmail">Email</label>
                                        <input type="email" class="form-control" id="vendorEmail" placeholder="Email" value="rizkyfebrian@gmail.com">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="vendorPhone">Phone</label>
                                        <input type="text" class="form-control" id="vendorPhone" placeholder="Phone" value="(+62) 855-865-0123">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Save Changes</button>
                            </form>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="card mb-4">
                        <div class="card-header">
                            Change Password
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="currentPassword">Current Password</label>
                                        <input type="password" class="form-control" id="currentPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="newPassword">New Password</label>
                                        <input type="password" class="form-control" id="newPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="confirmPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Change Password</button>
                            </form>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-block">Save All Changes</button>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
