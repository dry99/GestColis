<?php
  ob_start();
?>

          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >

            <div class="col-lg-6">
              <div class="bs-example" data-example-id="simple-jumbotron">
                <div class="jumbotron">
                  <h1>Bonjour !</h1>
                  <p>Les messages de motivations ici, This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="tile_count row">
                <div class="col-md-4 col-sm-4  col-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                  <div class="count">2500</div>
                  <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                </div>
                <div class="col-md-4 col-sm-4  col-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
                  <div class="count">123.50</div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                </div>
                <div class="col-md-4 col-sm-4  col-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                  <div class="count green">2,500</div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
                <div class="col-md-4 col-sm-4  col-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                  <div class="count">4,567</div>
                  <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                </div>
                <div class="col-md-4 col-sm-4  col-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                  <div class="count">2,315</div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
                <div class="col-md-4 col-sm-4  col-6 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                  <div class="count">7,325</div>
                  <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                </div>
            </div>
          </div></div>
        
          <!-- /top tiles -->
          <div class="row p-0 m-0">
            <div class="col-md-6 col-sm-12 form-group top_search input-group m-0 ">
              <input type="text" class="form-control" placeholder="Reference colis...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Chercher !</button>
              </span>
            </div>
            <div class="col-md-3 col-6">
              <div class="row p-1">
                <button type="button" class="col-12  btn btn-round btn-info">Transfert</button>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row p-1">
                <button type="button" class="col-12 btn btn-round btn-success">Reception</button>
              </div>
            </div>
          </div>

          <br />

          <div class="row">

            <div class="col-md-4 col-sm-4 text-center ">
              <div class="x_panel  widget widget_tally_box">
                <div class="x_content">

                  <div class="flex">
                    <ul class="list-inline widget_profile_box">
                      <li>
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                      </li>
                    </ul>
                  </div>

                  <h3 class="name">Dry Musimbi</h3>

                  <div class="flex">
                    <ul class="list-inline count2">
                      <li>
                        <h3>123</h3>
                        <span>Reception</span>
                      </li>
                      <li>
                        <h3>1234</h3>
                        <span>Transfert</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel tile ">
                <div class="x_title">
                  <h2>Statistique Colis</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li> 
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>-->
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 ">
                          <p class="">Ville</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 ">
                          <p class="">Pourcentage</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>Bouake </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Abidjan </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Yamoussoukro </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>San Pedro </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Les autres </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Bar graph <small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li> -->
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <canvas id="mybarChart"></canvas>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /page content -->
<?php
  $content =ob_get_clean();
  require_once 'template.php';
?>