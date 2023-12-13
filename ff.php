<?php 
$ip=$data['id'];

$run2=mysqli_query($con,"SELECT * FROM subcategory where category='$ip'");
 
    while ($data2=mysqli_fetch_assoc($run2)) {

?>
              <tr>
                <td> <?php echo $data2['id']; ?></td>
                <td> <?php echo $data2['subcategory']; ?></td>
                <td> <?php echo $data2['decription']; ?></td>
                <td><span class="text-ellipsis"><?php  echo$data['decription'];   ?></span></td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
              </tr>
            </table>

          </tr>

        <?php } ?>
        
            </table>
           

          </tr>

        <?php }?>