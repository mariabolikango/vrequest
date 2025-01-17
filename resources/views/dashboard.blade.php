<x-app-layout>
 
    <div class="flex h-screen bg-white "> 


        <div class="flex flex-col flex-1 w-full ">
            <header class="z-40 py-4  bg-white  ">
                <div class="flex demandes-center justify-between h-8 px-6 mx-auto">
                    
                 


                  

                </div>
            </header>
            <main class="">
                 <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4{{-- border-orange-400"--}}> 

                    <div class="grid grid-cols-12 gap-6">
                        <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                            <div class="col-span-12 mt-8">
                                <div class="flex demandes-center h-10 intro-y">
                                    <h2 class="mr-5 text-lg font-medium truncate">Dashboard</h2>
                                </div>
                                <div class="grid grid-cols-12 gap-6 mt-5">
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                                <div
                                                    class="bg-green-500 rounded-full h-6 px-2 flex justify-demandes-center text-white font-semibold text-sm">
                                                    <span id="span1" class="flex demandes-center">
                                                        @if ($demandes_total==0)
                                                            0
                                                        @else
                                                        {{number_format(($demandes_traitees/$demandes_total)*100,0)}}
                                                        @endif
                                                    </span>%
                                                </div>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8">{{$demandes_traitees}}</div>

                                                    <div class="mt-1 text-base text-gray-600">Demandes Traitées</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                </svg>
                                                <div
                                                    class="bg-red-500 rounded-full h-6 px-2 flex justify-demandes-center text-white font-semibold text-sm">
                                                    <span id="span2" class="flex demandes-center">
                                                        @if ($demandes_total==0)
                                                            0
                                                        @else
                                                           {{number_format(($demandes_rejetees/$demandes_total)*100,0)}}
                                                        @endif
                                                    </span>%
                                                </div>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8">{{$demandes_rejetees}}</div>

                                                    <div class="mt-1 text-base text-gray-600">Demandes rejetées</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                                </svg>
                                                <div
                                                    class="bg-yellow-500 rounded-full h-6 px-2 flex justify-demandes-center text-white font-semibold text-sm">
                                                    <span id="span3" class="flex demandes-center">
                                                        @if ($demandes_total==0)
                                                            0
                                                        @else
                                                            {{number_format(($demandes_en_attente/$demandes_total)*100,0)}}
                                                        @endif
                                                    </span>%
                                                </div>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8">{{  $demandes_en_attente}}</div>

                                                    <div class="mt-1 text-base text-gray-600">Demandes en attentes</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                        href="#">
                                        <div class="p-5">
                                            <div class="flex justify-between">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                                </svg>
                                                <div
                                                    class="bg-blue-500 rounded-full h-6 px-2 flex justify-demandes-center text-white font-semibold text-sm">
                                                    <span id="span4" class="flex demandes-center">
                                                        @if ($courses_total==0)
                                                            0
                                                        
                                                            
                                                        @else

                                                            {{number_format(($courses_en_attente/$courses_total)*100,0)}}
                                                        
                                                        @endif
                                                    </span>%
                                                </div>
                                            </div>
                                            <div class="ml-2 w-full flex-1">
                                                <div>
                                                    <div class="mt-3 text-3xl font-bold leading-8">{{$courses_en_attente}}</div>

                                                    <div class="mt-1 text-base text-gray-600">Courses en attentes</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-span-12 mt-5">
                                <div class="grid gap-2 grid-cols-1 lg:grid-cols-2">
                                    <div class="bg-white shadow-lg p-4" id="chartline">
                                        @foreach ($mois_demande as $item)
                                        <input type="hidden" id="mois" value="{{$item}}">
                                        @endforeach
                                        @foreach ($demande_traite_mois as $item1)
                                        <input type="hidden" id="traite" value="{{$item1}}">
                                        @endforeach
                                        @foreach ($demande_rejete_mois as $item2)
                                        <input type="hidden" id="rejete" value="{{$item2}}">
                                        @endforeach
                                        Courbe demande</div>
                                    <div class="bg-white shadow-lg" id="chartpie"><input type="hidden" id="total" value="{{$demandes_total}}"> <h3 class=" px-5 py-3">Stat demande</h3></div>
                                </div>
                            </div>
                            <div class="col-span-12 mt-5">
                                <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                    <div class="bg-white p-4 shadow-lg rounded-lg">
                                        <h1 class="font-bold text-base">Demandes recentes</h1>
                                        <div class="mt-4">
                                            <div class="flex flex-col">
                                                <div class="-my-2 overflow-x-auto">
                                                    <div class="py-2 align-middle inline-block min-w-full">
                                                        <div
                                                            class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                            <table class="min-w-full divide-y divide-gray-200">
                                                                <thead>
                                                                    <tr>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Motif</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Nombre de Passagers</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Date deplacement</span>
                                                                            </div>
                                                                        </th>
                                                                        <th
                                                                            class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Status</span>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="bg-white divide-y divide-gray-200">
                                                                    @foreach ($demandes_recentes as $demande)
                                                                    <tr>
                                                                       
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p>{{$demande->motif}}</p>
                                                                        </td>
                                                                        <td
                                                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                        <p>{{$demande->nbre_passagers}}</p>
                                                                    </td>
                                                                    <td
                                                                    class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                    <p>{{$demande->date_deplacement}}</p>
                                                                </td>
                                                                <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                <p>  @if ( $demande->status ==0)
                                                                    en attente
                                                                @endif
                                                                @if ( $demande->status ==1)
                                                                    traitée
                                                                @endif
                                                                @if ( $demande->status ==2)
                                                                rejetée
                                                            @endif
                                                            </p>
                                                            </td>
                                                                    
                                                             
                                                                    </tr>
                                                                    @endforeach
                                                                   
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
 
    <script>
        var chart = document.querySelector('#chartline')
        var mois = document.querySelectorAll('#mois');
        var mois_demande = [] ;
        var demande1 = document.querySelectorAll('#traite');
        var demande2 = document.querySelectorAll('#rejete');
        var demande_taite = [] ;
        var demande_rejete = [] ;
        
        mois.forEach(function(item){
               mois_demande.push(item.value);
              
        });
        demande1.forEach(function(item1){
            demande_taite.push(item1.value);
        });
        demande2.forEach(function(item2){
            demande_rejete.push(item2.value);
        });
        
   
        var options = {
            series: [{
                name: 'Demandes Rejetées',
                type: 'area',
                data: demande_rejete
            }, {
                name: 'Demandes Traitées',
                type: 'line',
                data: demande_taite
            }],
            chart: {
                height: 350,
                type: 'area',
                zoom: {
                    enabled: false
                }
            },
            colors: ['#F55F3D', '#34DA20'],
            stroke: {
                curve: 'smooth'
            },
            fill: {
                type: 'solid',
                opacity: [0.35, 1],
            },
            labels: mois_demande,
            markers: {
                size: 0
            },
            yaxis: [{
                    title: {
                        text: 'Series A',
                    },
                },
                {
                    opposite: true,
                    title: {
                        text: 'Series B',
                    },
                },
            ],
            tooltip: {
                shared: true,
                intersect: false,
                y: {
                    formatter: function(y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " points";
                        }
                        return y;
                    }
                }
            }
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>
    <script>
        var chart = document.querySelector('#chartpie')
        
        var options = {
            
            series: [document.querySelector('#span4').textContent,  document.querySelector('#span1').textContent, document.querySelector('#span3').textContent, document.querySelector('#span2').textContent],
            chart: {
                height: 350,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '22px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: 'Total Demandes',
                            formatter: function(w) {
                                var total = document.querySelector('#total')
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return total.value
                            }
                        }
                    }
                }
            },
            labels: ['Courses en attentes', 'Demande traitées', 'Demandes en attentes', 'Demandes rejetees'],
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
      
    </script>

</x-app-layout>
