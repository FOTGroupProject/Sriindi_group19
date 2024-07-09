<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h3 class="text-dark mb-4">Order # [Order ID] Details</h3>
                <p>Payment via [Payment Type]</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">General Details</h5>
                        <p class="card-text">Order Date: [Order Date]</p>
                        <p class="card-text">Order Status: 
                            <select id="order_status" name="order_status_[Order ID]" class="form-control">
                                <option value="pending">Pending</option>
                                <option value="refund">Refund</option>
                                <option value="complete">Complete</option>
                                <option value="processing">Processing</option>
                                <option value="cancel">Cancel</option>
                            </select>
                        </p>
                        <p class="card-text">Customer: [Customer Name]</p>
                        <button id="save_order_status" class="btn btn-primary">Save Status</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Billing Details</h5>
                        <p class="card-text">Address: [Customer Address]</p>
                        <p class="card-text">Email: [Customer Email]</p>
                        <p class="card-text">Phone: [Customer Phone]</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mt-4">Product Details</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Product ID</th>
                        <th scope="col">Product</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Product Name 1</td>
                        <td>2</td>
                        <td>$25.00</td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Product Name 2</td>
                        <td>1</td>
                        <td>$50.00</td>
                        <td>$50.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-left">Subtotal:</td>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-left">Shipping:</td>
                        <td>$10.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-left">Total:</td>
                        <td>$110.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Customer Note</h5>
                        <textarea class="form-control mb-3" rows="3"></textarea>
                        <button id="save_changes" class="btn btn-primary mr-2">Save Changes</button>
                        <a href="#" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        // JavaScript for saving order status
        document.getElementById('save_order_status').addEventListener('click', function() {
            var selectedStatus = document.getElementById('order_status').value;
            // Replace with logic to save the order status via AJAX or form submission
            alert('Order status saved: ' + selectedStatus);
        });
    </script>
</body>
</html>
