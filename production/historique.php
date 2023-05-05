<?php
    ob_start()
?>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">#</th>
                            <th class="column-title">Ref. colis </th>
                            <th class="column-title">Date envoi</th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) 
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                            </th>
                            <th class="column-title">Destinateur (Ville)  </th>
                            <th class="column-title">Destinataire (Ville) </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Montant </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span></th>
                           
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="even pointer">
                            <td class="a-center ">1</td>
                            <td class=" ">121000038</td>
                            <td class=" ">May 24, 2014 10:55:33 PM</td>
                            <td class=" ">Fanny John</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$432.26</td>
                            <td class=" last"><a href="details_collis.php">Consulter <span class="fa fa-eye"></span></a></td>
                        </tr>
                        <tr class="odd pointer">
                            <td class="a-center ">2</td>
                            <td class=" ">121000037</td>
                            <td class=" ">May 24, 2014 10:52:44 PM</td>
                            <td class=" ">Constantin John</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$333.21</td>
                            <td class=" last"><a href="#">Consulter <span class="fa fa-eye"></span></a></td>
                        </tr>
                        <tr class="even pointer">
                            <td class="a-center ">3</td>
                            <td class=" ">121000040</td>
                            <td class=" ">May 24, 2014 11:47:56 PM </td>
                            <td class=" ">Florentine kouassi John</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$7.45</td>
                            <td class=" last"><a href="#">Consulter <span class="fa fa-eye"></span></a></td>
                        </tr>
                        <tr class="odd pointer">
                            <td class="a-center ">4</td>
                            <td class=" ">121000039</td>
                            <td class=" ">May 26, 2014 11:30:12 PM</td>
                            <td class=" ">Ividero John</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">Paid</td>
                            <td class="a-right a-right ">$741.20</td>
                            <td class=" last"><a href="#">Consulter <span class="fa fa-eye"></span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
    $content =ob_get_clean();
    require_once 'template.php';
?>