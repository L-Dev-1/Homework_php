<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Loan Application Form</h2>
        <form id="loanForm">
            <div class="form-group">
                <label for="name">Payment Number:</label>
                <input type="number" class="form-control" id="Pay_num" name="pay_num" required>
            </div>
            <div class="form-group">
                <label for="email">Loan Balance:</label>
                <input type="number" class="form-control" id="loan_bl" name="loan_bl" required>
            </div>
            <div class="form-group">
                <label for="phone">Payment:</label>
                <input type="number" class="form-control" id="payment" name="payment" required>
            </div>
            <div class="form-group">
                <label for="phone">Principal:</label>
                <input type="number" class="form-control" id="principle" name="principle" required>
            </div>
            <div class="form-group">
                <label for="phone">Interest:</label>
                <input type="number" class="form-control" id="interest" name="interest" required>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        <h2>Loan Data</h2>
        <table id="loanDataTable" class="table">
            <thead>
                <tr>
                    <th>Payment Number</th>
                    <th>Loan Balance</th>
                    <th>Payment</th>
                    <th>Principal</th>
                    <th>Interest</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table body will be dynamically populated -->
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            $('#loanForm').submit(function(e){
                e.preventDefault(); // Prevent form submission

                // Retrieve form data
                var pay_num = $('#Pay_num').val();
                var loan_bl = $('#loan_bl').val();
                var payment = $('#payment').val();
                var principle = $('#principle').val();
                var interest = $('#interest').val();

                // Append data to table
                $('#loanDataTable tbody').append('<tr><td>'+pay_num+'</td><td>'+loan_bl+'</td><td>'+payment+'</td><td>'+principle+'</td><td>'+interest+'</td></tr>');

                // Clear form fields
                $('#loanForm')[0].reset();
            });
        });
    </script>
</body>
</html>
