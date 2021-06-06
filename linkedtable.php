<!DOCTYPE html>
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>fabric timeline data</title>

</head>

<body>
    <script>
        const searchFun = () => {
            let filter = document.getElementById('MyInput').value.toUpperCase();

            let myTable = document.getElementById('myTable');

            let tr = myTable.getElementsByTagName('tr');

            for (var i = 0; i < tr.length; i++) {
                let td = tr[i].getElementsByTagName('td')[0];

                if (td) {
                    let textvalue = td.textContent || td.innerHTML;

                    if (textvalue.toLocaleUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Fab Hub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" id="MyInput" onkeyup="searchFun()" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <li class="nav-item active float-right">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <table class="table table-striped table-dark" id="myTable">
        <tr>
            <th scope="col">sr.no.</th>
            <th scope="col">style name</th>
            <th scope="col">fabric details</th>
            <th scope="col">tech pack</th>
            <th scope="col">graded specs</th>
            <th scope="col">factory</th>
            <th scope="col">mill</th>
            <th scope="col">cost sheet</th>
            <th scope="col">PO</th>
            <th scope="col">PI</th>
            <th scope="col">proto sample</th>
            <th scope="col">fit sample</th>
            <th scope="col">fabric approval</th>
            <th scope="col">fit comments</th>
            <th scope="col">fit approval</th>
            <th scope="col">trim approval</th>
            <th scope="col">line review</th>
            <th scope="col">FOB</th>
            <th scope="col">FPT and GPT</th>
            <th scope="col">PP sample</th>
            <th scope="col">fabric ex-mill</th>
            <th scope="col">trim In-house</th>
            <th scope="col">fabric In-house</th>
            <th scope="col">PPM</th>
            <th scope="col">PCD</th>
            <th scope="col">loading</th>
            <th scope="col">Inline</th>
            <th scope="col">Midline</th>
            <th scope="col">Final</th>
            <th scope="col">Ex-Factory</th>
            <th scope="col">FCA</th>
        </tr>

        <?php
            $conn = mysqli_connect("localhost","root","","fab");
            if($conn -> connect_error){
                die("Connection failed : ". $conn-> connect_error);
            }
            $sql = "SELECT * FROM `fabdb`";
            $result = $conn -> query($sql);
        
            if($result -> num_rows > 0){
                while($row=$result->fetch_assoc()){
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["srno"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["stylename"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fabricdetails"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["techpack"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["gradedspecs"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["factory"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["mill"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["costsheet"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["po"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["pi"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["protosample"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fitsample"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fabricapproval"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fitcomments"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fitapproval"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["trimapproval"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["linereview"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fob"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fptandgpt"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["ppsample"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fabricexmill"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["trimsinhouse"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fabricinhouse"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["ppm"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["pcd"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["loading"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["inline"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["midline"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["final"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["exfactory"]."</a></td>";
                        echo "<td><a href=Edit_Employee.php?".$row["srno"].">".$row["fca"]."</a></td>";
                }
                echo "</table>";   
            }
            else{
                echo "0 result";
        }
        $conn -> close();
        ?>
    </table>

</body>

</html>
