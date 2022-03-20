
                
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Email</td>
                                    <td>Họ Tên</td>
                                    <td>Xem chi tiết</td>
                                    <td>Xóa tài khoản</td>
                                </tr>
                            </thead>
                            <tbody class="thaythe">
                                    <?php
                                        include '../../database/config.php';
                                        $keysearch = $_POST['keysearch'];

                                        $result_per_page = 7;
                                        $number_record = "SELECT * FROM taikhoan WHERE hoten LIKE '%${keysearch}%'";
                                        $result_1 = mysqli_query($conn, $number_record);
                                        $number_of_result = mysqli_num_rows($result_1);
                                        $number_of_pages = ceil($number_of_result/$result_per_page);
                                        if(!isset($_GET['page'])){
                                            $page = 1;
                                        }else{
                                            if($_GET['page'] > $number_of_pages){
                                                $page = 1;
                                            }else{
                                                $page = $_GET['page'];
                                            }
                                        }
                                    
                                        $this_page_first_result = ($page-1)*$result_per_page;
                                        $sql = "SELECT * FROM taikhoan WHERE hoten LIKE '%${keysearch}%' LIMIT ".$this_page_first_result.",". $result_per_page;
                                        $result = mysqli_query($conn, $sql);
                                        while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id_taikhoan'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['hoten'];?></td>
                                                <td>         
                                                    <a href="?id=<?php echo $row['id_taikhoan'];?>" class = "edittableuser" id="editaccount"> <i class="fas fa-eye"></i></a>
                                                </td>
                                                <input type="hidden" value="<?php echo $row['id_taikhoan'] ?>" id="xoa_id">
                                                <td><a href="#" class = "edittableuser delete deleteaccount" id="deleteaccount"> <i class="fal fa-trash-alt"></a></td>
                                                
                                            </tr>
                                            <?php
                                        }
                                    ?>
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="numberpage">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li>Trang: </li>
                            
                            </ul>
                        </nav>
                    </div>
                    
                </div>
           