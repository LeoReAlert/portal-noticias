
@extends('pages.admin.index')

@section('content')



 <div style="display:flex;">
              <div class="col-md-6 col-lg-3 mt-5">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">2500</p>
                                    <p class="head_couter">Notícias Publícadas</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mt-5">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">123.50</p>
                                    <p class="head_couter">Banners</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-3 mt-5">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">1,805</p>
                                    <p class="head_couter">Arquivos</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>

                      <div class="col-md-l2 col-lg-12 mt-3">

  
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        




        <div id="chart_div"></div>

</div>








 <script type="text/javascript">
         
         google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawStacked);

function drawStacked() {
      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Cliques');
      data.addColumn('number', 'Visualizações');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, .25],
        [{v: [9, 0, 0], f: '9 am'}, 2, .5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 1],
        [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
        [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
        [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
        [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
        [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
      ]);

      var options = {
        title: 'Interações feitas por usuários do site e sistema',
        isStacked: true,
        hAxis: {
          title: 'Data e Hora',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Valor (Acessos de 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
      </script>



  @endsection('content')