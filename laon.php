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
        <form action="">
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

        
    </div>
</body>
</html>
