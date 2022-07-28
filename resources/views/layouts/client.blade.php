<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset ('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('/assets/css/material-dashboard.css')}}" rel="stylesheet" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script>
     if (document.getElementById('choices-skills')) {
        var skills = document.getElementById('choices-skills');
        const example = new Choices(skills, {
          delimiter: ',',
          editItems: true,
          maxItemCount: 5,
          removeItemButton: true,
          addItems: true
        });
      }
  </script>
<style>
    .product-card {
    width: 380px;
    position: relative;
    box-shadow: 0 2px 7px #dfdfdf;

    background: #fafafa;
}
.product-details {
    padding: 30px;
}

.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: black;
    margin-bottom: 18px;
}
.product-details h4 a {
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: #363636;
    text-decoration: none;
    transition: 0.3s;
}
.product-bottom-details div {
    float: left;
    width: 50%;
}
.product-links {
    text-align: right;
}
</style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body class="g-sidenav-show"   style="background-color:#f4f3ef">
  @include('include.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('include.navbar')
    <!-- End Navbar -->
    @yield('content')
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
  </main>

   <!--   Core JS Files   -->
   <script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
   <script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
   <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
   <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
   <!-- Kanban scripts -->
   <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js')}}"></script>
   <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js')}}"></script>
   <script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script>
   <script src="{{ asset('assets/js/plugins/world.js')}}"></script>
   <script src="{{ asset('/assets/js/plugins/datatables.js')}}"></script>
   <script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
      searchable: true,
      fixedHeight: true
    });
    </script>

   <script>
     var ctx = document.getElementById("chart-bars").getContext("2d");

     new Chart(ctx, {
       type: "bar",
       data: {
         labels: ["M", "T", "W", "T", "F", "S", "S"],
         datasets: [{
           label: "Sales",
           tension: 0.4,
           borderWidth: 0,
           borderRadius: 4,
           borderSkipped: false,
           backgroundColor: "rgba(255, 255, 255, .8)",
           data: [50, 20, 10, 22, 50, 10, 40],
           maxBarThickness: 6
         }, ],
       },
       options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
           legend: {
             display: false,
           }
         },
         interaction: {
           intersect: false,
           mode: 'index',
         },
         scales: {
           y: {
             grid: {
               drawBorder: false,
               display: true,
               drawOnChartArea: true,
               drawTicks: false,
               borderDash: [5, 5],
               color: 'rgba(255, 255, 255, .2)'
             },
             ticks: {
               suggestedMin: 0,
               suggestedMax: 500,
               beginAtZero: true,
               padding: 10,
               font: {
                 size: 14,
                 weight: 300,
                 family: "Roboto",
                 style: 'normal',
                 lineHeight: 2
               },
               color: "#fff"
             },
           },
           x: {
             grid: {
               drawBorder: false,
               display: true,
               drawOnChartArea: true,
               drawTicks: false,
               borderDash: [5, 5],
               color: 'rgba(255, 255, 255, .2)'
             },
             ticks: {
               display: true,
               color: '#f8f9fa',
               padding: 10,
               font: {
                 size: 14,
                 weight: 300,
                 family: "Roboto",
                 style: 'normal',
                 lineHeight: 2
               },
             }
           },
         },
       },
     });


     var ctx2 = document.getElementById("chart-line").getContext("2d");

     new Chart(ctx2, {
       type: "line",
       data: {
         labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
         datasets: [{
           label: "Mobile apps",
           tension: 0,
           borderWidth: 0,
           pointRadius: 5,
           pointBackgroundColor: "rgba(255, 255, 255, .8)",
           pointBorderColor: "transparent",
           borderColor: "rgba(255, 255, 255, .8)",
           borderColor: "rgba(255, 255, 255, .8)",
           borderWidth: 4,
           backgroundColor: "transparent",
           fill: true,
           data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
           maxBarThickness: 6

         }],
       },
       options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
           legend: {
             display: false,
           }
         },
         interaction: {
           intersect: false,
           mode: 'index',
         },
         scales: {
           y: {
             grid: {
               drawBorder: false,
               display: true,
               drawOnChartArea: true,
               drawTicks: false,
               borderDash: [5, 5],
               color: 'rgba(255, 255, 255, .2)'
             },
             ticks: {
               display: true,
               color: '#f8f9fa',
               padding: 10,
               font: {
                 size: 14,
                 weight: 300,
                 family: "Roboto",
                 style: 'normal',
                 lineHeight: 2
               },
             }
           },
           x: {
             grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false,
               borderDash: [5, 5]
             },
             ticks: {
               display: true,
               color: '#f8f9fa',
               padding: 10,
               font: {
                 size: 14,
                 weight: 300,
                 family: "Roboto",
                 style: 'normal',
                 lineHeight: 2
               },
             }
           },
         },
       },
     });

     var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

     new Chart(ctx3, {
       type: "line",
       data: {
         labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
         datasets: [{
           label: "Mobile apps",
           tension: 0,
           borderWidth: 0,
           pointRadius: 5,
           pointBackgroundColor: "rgba(255, 255, 255, .8)",
           pointBorderColor: "transparent",
           borderColor: "rgba(255, 255, 255, .8)",
           borderWidth: 4,
           backgroundColor: "transparent",
           fill: true,
           data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
           maxBarThickness: 6

         }],
       },
       options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
           legend: {
             display: false,
           }
         },
         interaction: {
           intersect: false,
           mode: 'index',
         },
         scales: {
           y: {
             grid: {
               drawBorder: false,
               display: true,
               drawOnChartArea: true,
               drawTicks: false,
               borderDash: [5, 5],
               color: 'rgba(255, 255, 255, .2)'
             },
             ticks: {
               display: true,
               padding: 10,
               color: '#f8f9fa',
               font: {
                 size: 14,
                 weight: 300,
                 family: "Roboto",
                 style: 'normal',
                 lineHeight: 2
               },
             }
           },
           x: {
             grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false,
               borderDash: [5, 5]
             },
             ticks: {
               display: true,
               color: '#f8f9fa',
               padding: 10,
               font: {
                 size: 14,
                 weight: 300,
                 family: "Roboto",
                 style: 'normal',
                 lineHeight: 2
               },
             }
           },
         },
       },
     });

     // Initialize the vector map
     var map = new jsVectorMap({
       selector: "#map",
       map: "world_merc",
       zoomOnScroll: false,
       zoomButtons: false,
       selectedMarkers: [1, 3],
       markersSelectable: true,
       markers: [{
           name: "USA",
           coords: [40.71296415909766, -74.00437720027804]
         },
         {
           name: "Germany",
           coords: [51.17661451970939, 10.97947735117339]
         },
         {
           name: "Brazil",
           coords: [-7.596735421549542, -54.781694323779185]
         },
         {
           name: "Russia",
           coords: [62.318222797104276, 89.81564777631716]
         },
         {
           name: "China",
           coords: [22.320178999475512, 114.17161225541399],
           style: {
             fill: '#E91E63'
           }
         }
       ],
       markerStyle: {
         initial: {
           fill: "#e91e63"
         },
         hover: {
           fill: "E91E63"
         },
         selected: {
           fill: "E91E63"
         }
       },


     });
   </script>
   <script>
     var win = navigator.platform.indexOf('Win') > -1;
     if (win && document.querySelector('#sidenav-scrollbar')) {
       var options = {
         damping: '0.5'
       }
       Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
     }
   </script>
   <!-- Github buttons -->
   <script async defer src="https://buttons.github.io/buttons.js"></script>
   <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
   <script src="{{asset('assets/js/material-dashboard.min.js?v=3.0.5')}}"></script>
   <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
</body>

</html>
