<?php

    if(isset($_POST['btn'])){
        require_once 'DisplayNumber.php';
        $displayNumber = new DisplayNumber();
         $result = $displayNumber->showNumber($_POST);
    }
?>

<form action="" method="post">
     <table>
         <tr>
             <th>First Number:</th>
             <td><input type="text" name="first_number"/></td>
         </tr>
         <tr>
             <th>Second Number:</th>
             <td><input type="text" name="second_number"/></td>
         </tr>
         <tr>
             <td></td>
             <td>
                 <textarea name="txt_descripcion" cols="66" rows="10" id="txt_descripcion">
                     <?php
                     if(isset($result)){
                         echo $result;
                     }
                   ?>
                 </textarea>
             </td>
         </tr>
         <tr>
             <td></td>
              <td><input type="submit" name="btn"/></td>
         </tr>
     </table>
</form>