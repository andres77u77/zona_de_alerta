$(document).ready(Cargar_Historico_Alertas());
function Cargar_Historico_Alertas(){

    $.ajax({
    type: 'POST',
    url: '../php/controllers/GraficaAlertas.php',
    dataType: 'JSON',
    async: true,
        success:function(Datos){

            var config = {
            type: 'line',
            data: {
              labels: ['','1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31',''],
              datasets: [{
                label: 'Temperatura',
                backgroundColor: "#EB350E",
                borderColor: "#EB350E",
                data: Datos,
                fill: false,
              }]
            },
            options: {
              responsive: true,
              title: {
                display: true,
                text: 'MES ACTUAL'
              },
              tooltips: {
                mode: 'index',
                intersect: false,
              },
              hover: {
                mode: 'nearest',
                intersect: true
              },
              scales: {
                xAxes: [{
                  display: true,
                  scaleLabel: {
                    display: true,
                    labelString: 'DIAS'
                  }
                }],
                yAxes: [{
                  display: true,
                  scaleLabel: {
                    display: true,
                    labelString: 'GRADOS C'
                  }
                }]
              }
            }
          };


            var ctx_dias = document.getElementById('GRAFICA_ALERTAS').getContext('2d');

            if (window.myLine_dias) {
                window.myLine_dias.clear();
                window.myLine_dias.destroy();
            }

            window.myLine_dias = new Chart(ctx_dias, config);
        }
    });
}  