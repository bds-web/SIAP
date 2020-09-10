@extends('media')
@section('title','Home')
@section('container')
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="container">
    <div class="row tile_count" style="border-style: solid;border-color: #F7F7F7;">
        <div class="col-md-2 col-sm-3 col-xs-3 tile_stats_count">
          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <span class="count_top"><i class="fa fa-check"></i> Approve</span>
              <div class="count">2500</div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-3 tile_stats_count">
          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <span class="count_top"><i class="fa fa-check-square"></i> Verifikasi</span>
              <div class="count blue">2500</div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-3 tile_stats_count">
          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <span class="count_top"><i class="fa fa-check-circle"></i> Validasi</span>
              <div class="count red">2500</div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-3 tile_stats_count">
          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <span class="count_top"><i class="fa fa-book"></i> Sertifikat</span>
              <div class="count blue">2500</div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-3 tile_stats_count">
          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <span class="count_top"><i class="fa fa-suitcase"></i> Realisasi</span>
              <div class="count">2500</div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col"></div>
          </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-3 tile_stats_count">
          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <span class="count_top"><i class="fa fa-money"></i> Paid</span>
              <div class="count red">2500</div>
              <!-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> -->
            </div>
            <div class="col"></div>
          </div>
        </div>
      </div>
  </div>
  <!-- /top tiles -->

  <!-- SLIDER -->
  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_content">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ URL::asset('src/images/slider/slider1.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ URL::asset('src/images/slider/slider2.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{ URL::asset('src/images/slider/slider3.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF SLIDER -->

  <!-- DATA BROKER -->
  <div class="row">
    <div class="col-md-4 col-sm-4 ">
      <div class="x_panel tile fixed_height_320 overflow_hidden">
        <div class="x_title">
          <h2>Target Premi</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li></li>
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
                  <p class="">Device</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 ">
                  <p class="">Progress</p>
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
                      <p><i class="fa fa-square blue"></i>IOS </p>
                    </td>
                    <td>30%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square green"></i>Android </p>
                    </td>
                    <td>10%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square purple"></i>Blackberry </p>
                    </td>
                    <td>20%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square aero"></i>Symbian </p>
                    </td>
                    <td>15%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square red"></i>Others </p>
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
      <div class="x_panel tile fixed_height_320 overflow_hidden">
        <div class="x_title">
          <h2>Jumlah Sertifikat</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li></li>
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
                  <p class="">Device</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 ">
                  <p class="">Progress</p>
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
                      <p><i class="fa fa-square blue"></i>IOS </p>
                    </td>
                    <td>30%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square green"></i>Android </p>
                    </td>
                    <td>10%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square purple"></i>Blackberry </p>
                    </td>
                    <td>20%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square aero"></i>Symbian </p>
                    </td>
                    <td>15%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square red"></i>Others </p>
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
      <div class="x_panel tile fixed_height_320 overflow_hidden">
        <div class="x_title">
          <h2>Statistik Broker</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li></li>
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
                  <p class="">Device</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 ">
                  <p class="">Progress</p>
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
                      <p><i class="fa fa-square blue"></i>IOS </p>
                    </td>
                    <td>30%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square green"></i>Android </p>
                    </td>
                    <td>10%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square purple"></i>Blackberry </p>
                    </td>
                    <td>20%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square aero"></i>Symbian </p>
                    </td>
                    <td>15%</td>
                  </tr>
                  <tr>
                    <td>
                      <p><i class="fa fa-square red"></i>Others </p>
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
  </div>
  <!-- END OF DATA BROKER -->
  <div class="clearfix">&nbsp;</div>
</div>
@endsection
