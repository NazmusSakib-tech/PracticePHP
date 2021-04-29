<?php

include "function.php";

?>
<!DOCTYPE html>
<html>

<body>
       
        <h1>Calculation Of Number</h1>
        <form action="" method="post">
                <table>
                        <tr>
                                <td>Enter The First Number</td>
                                <td><input type="number" name='num1'></td>
                        </tr>

                        <tr>
                                <td>Enter The Second Number</td>
                                <td><input type="number" name='num2'></td>
                        </tr>

                        <tr>
                                <td><input type="submit" name="calculation" value="Calculate"></td>
                        
                        </tr>
                </table>
        </form>

<?php 
        if(isset ($_POST['calculation'])){

                $numberOne = $_POST['num1'];
                $numberTwo = $_POST['num2'];


                if(empty($numberOne) or empty($numberTwo)){

                        echo "value must not be Empty";
                }
        }

        $cal = new calculation("Nazmus Sakib", "28");
        $cal->add($numberOne, $numberTwo);
        $cal->dispaly();

?>
</body>

</html>