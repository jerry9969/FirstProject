<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade Details</title>
</head>
<body align="center">
    <h1>Trade Details:</h1>
    <div class="container">
        <form>
            <div class="form-group">
                <label>Today's Date:</label>
                <input type="date" class="form-control datepicker">
            </div>
            <div class="form-group">
                <label>Buy/Sell:</label>
                <select class="form-control">
                    <option>Buy</option>
                    <option>Sell</option>
                </select>
            </div>
            <div class="form-group">
            <label>Symbol:</label>
                <select class="form-control">
                    <option>Nifty</option>
                    <option>Sensex</option>
                </select>
            </div>
            <div class="form-group">
               <label>Quantity:</label>
                <input type="text">
            </div>
            <div class="form-group">
               <label>Price:</label>
                <input type="text">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>