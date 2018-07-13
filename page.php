<!Doctype HTML>
<html>
<!-- I added a head with a title, meta tag for responsive and bootsrap dependencies. -->
<head>
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<header>
    <!-- Header content goes here. Use bootstrap header: https://www.w3schools.com/bootstrap/default.asp -->
</header>

<main> <!-- Main content goes here -->
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Create Inventory</a></li>
            <li><a data-toggle="tab" href="#menu1">Create Loan</a></li>
            <li><a data-toggle="tab" href="#menu2">Update Inventory</a></li>
            <li><a data-toggle="tab" href="#menu3">Inventory</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div id = 'create_loan' class = 'labelcontent'>
                    <form action="/main.php">
                        First name:<br>
                        <input type="text" name="firstname" value="Mickey">
                        <br>
                        Last name:<br>
                        <input type="text" name="lastname" value="Mouse">
                        <br>
                        A number:<br>
                        <input type="text" name="a_number" value="A00948759">
                        <br>
                        email:<br>
                        <input type="text" name="email" value="dfubbfefu@gmail.com">

                        <br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>

            </div>
            <div id="menu1" class="tab-pane fade">
                <p>
                    Create form for creating loan
                </p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <p>
                    Create form for updating inventory item
                </p>
            </div>
            <div id="menu3" class="tab-pane fade">
                <p>
                    Table displaying all inventory items.
                    ****Modify the table for the inventory fields.****
                </p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- <div class = 'label'>
            <button class = 'labellink' onclick = "openpage(event, 'create_inventory')" >Create Inventory</button>
            <button class = 'labellink' onclick = "openpage(event, 'create_loan')">Create Loan</button>
            <button class = 'labellink' onclick = "openpage(event, 'update_inventory')">Update Inventory</button>
            <button class = 'labellink' onclick = "openpage(event, 'inventory')">Inventory</button>
        </div> -->
    </div>
</main>

<footer>
    <!-- Footer content goes here. Use bootstrap footer: https://www.w3schools.com/bootstrap/default.asp -->
</footer>


<!-- I dont kno what these divs are for. -->

<!-- <div id = 'update_inventory' class = 'labelcontent'></div>

<div id = 'inventory' class = 'labelcontent'></div> -->
</body>
</html>
