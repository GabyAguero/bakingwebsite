<td>ID</td>
                                    <td>Productname</td>
                                    <td>Productprice</td>
                                    <td>Manufacturingdate</td>
                                    <td>Productdescription</td>
                                    <td>Action</td>
                                </tr>
                                <tr>
                                    <?php
                                    
                                    while($row=mysqli_fetch_assoc ($result));
                                    
                                    ?>
                                    <td><?php echo $row["ID"];?></td>
                                    <td><?php echo $row["Productname"];?></td>
                                    <td><?php echo $row["Productprice"];?></td>
                                    <td><?php echo $row["Manufacturingdate"];?></td>
                                    <td><?php echo $row["Productdescription"];?></td>
                                    <td><?php echo $row["Action"];?></td>
                                    
                                    echo '<a href="update.php?id=' . $row['id'] .'"
                                    >Update data</a>';

                                    <td><a href="updateform.php?'<?php $row['ID'];?>'">Update Info</a></td>
                                    