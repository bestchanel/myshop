<script>

function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}


</script>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark fade-in">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">ตัวเลือก</span>
                </a>
                <!-- <div class="col-md-12 row">
                    <div class="col-md-10">
                        <input class="form-control type="search" placeholder="Search Products" aria-label="Search" id="search_box">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" type="submit" onclick="getProductList()">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div> -->
                <ul class="navbar-nav" style="width: -webkit-fill-available;">

                    <li class="nav-item btn_hover btn_hover btn_filter <?php if($_GET['product_group'] == ""){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard" >ทั้งหมด</a>
                    </li>

                    <li class="nav-item btn_hover btn_hover btn_filter <?php if($_GET['product_group'] == 'CPU'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=CPU" >CPU</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'MAINBOARD'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=MAINBOARD">Mainboard</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'VGA'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=VGA">VGA</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'RAM'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=RAM">RAM</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'HDD'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=HDD">HDD</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'SSD'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=SSD">SSD</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'POWER_SUPPLY'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=POWER_SUPPLY">Power Supply</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'CASE'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=CASE">Case</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'CPU_COOLLER'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=CPU_COOLLER">CPU Cooler</a>
                    </li>

                    <li class="nav-item  btn_hover btn_filter <?php if($_GET['product_group'] == 'MONITOR'){ echo "btn_hl"; } ?>">
                        <a class="nav-link active" aria-current="page" href="?app=dashboard&product_group=MONITOR">Monitor</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col py-3 pb-5 p-3 bg-secondary">
            <h1 class="pb-5 mb-5 mt-5 text-light" style="border-bottom-style: solid;">
                ค่าความนิยมของสินค้า <?php echo strtoupper(str_replace("_", " ", $_GET['product_group']))?> <i class="fas fa-chart-pie"></i>
            </h1>
            <div class="col-md-12 row text-center" style="place-content: center;">

                <div class="col-md-8 card shadow-lg p-3 mb-5 bg-body rounded w-auto">
                    <div id="donutchart" style="width: 900px; height: 500px;"></div>
                </div>

                <div class="col-md-4 card shadow-lg p-3 mb-5 bg-body rounded" id="product_groups" onclick="setLinkToLists();">
                    <table class="table-light display" id="myTable" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>
                                    แบรนด์
                                </th>
                                <th>
                                    ขายแล้ว(ครั้ง)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for ($i=0; $i < count($product_group_list); $i++) { ?>
                        <tr style="cursor: pointer;" class="Data_<?php echo strtoupper($product_group_list[$i]['product_brand'])?>" id="tr_<?php echo strtoupper($product_group_list[$i]['product_brand'])?>" onclick="myPageEventHandler(<?php echo ($i+1)?>);">
                            <td style="text-align: center;" class="td_<?php echo strtoupper($product_group_list[$i]['product_brand'])?>">
                                <?php echo strtoupper($product_group_list[$i]['product_brand'])?>
                            </td>
                            <td style="text-align: center;" class="td_<?php echo strtoupper($product_group_list[$i]['product_brand'])?>">
                                <?php echo $product_group_list[$i]['product_rate']?>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="card bg-body p-5">
                    <div class="card_graph p-2 rounded">
                        <div onclick="loadDataChartModal('product_rate')" class="btn btn-warning">
                            <div id="filter_rate"></div>
                        </div>
                        <div onclick="loadDataChartModal('product_price')" class="btn btn-success">
                            <div id="filter_price"></div>
                        </div>
                    </div>
                    <div id="top_x_div" class="col-md-12"></div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>


var chart_data;
var res_data;
var fetch_data;
var g_brand;

$(document).ready( function () {
  $('#myTable').DataTable();
} );


// ==================================== General chart =========================================
google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart(input) {
    let product_group = "<?php echo $_GET['product_group']?>";
    
    fetch('models/DashboardModel.php',{
        method: 'post',
        body: JSON.stringify({
            action:'get_dashboard',
            product_group: product_group
        })
        })
        .then((response) => response.json())
        .then((res) => {
            if(res){
                // console.log(res);
                // var data = google.visualization.arrayToDataTable([
                    //     [
                        //         "product_brand",
                        //         "product_rate"
                        //     ],
                        //     [
                            //         "AMD",
                            //         33
                            //     ],
                            //     [
                //         "AMD",
                //         33
                //     ],
                //     [
                    //         "INTEL",
                //         22
                //     ],
                //     [
                    //         "intel",
                    //         22
                //     ]
                // ]);
                // var data = google.visualization.arrayToDataTable([
                    //         ['Task', 'Hours per Day'],
                    //         ['Work',     11],
                    //         ['Eat',      2],
                    //         ['Commute',  2],
                    //         ['Watch TV', 2],
                    //         ['Sleep',    7]
                    //     ]);
                    var data = google.visualization.arrayToDataTable(res);
                    let obj_slice = Object()
                    obj_slice[input] = {offset: 0.2}

                    var options = {
                        slices: obj_slice,
                        title: "<?php echo $_GET['product_group']?>",
                        pieHole: 0.4,
                        animation:{
                            startup : true,
                            duration: 1000,
                            easing: 'linear',
                        }
                    };
                
                    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                        chart.draw(data, options);

                    fetch_data = data;
                    chart_data = chart;
                    res_data = res;

                    setLinkToLists();

                    google.visualization.events.addListener(chart, 'select', function() {

                        // console.log(chart.getSelection()[0].row);
                        let id_slice = chart.getSelection()[0].row;
                        let obj_slice = Object()
                        obj_slice[id_slice] = {offset: 0.2}
                        
                        let settings = {
                            slices: obj_slice,
                            title: "<?php echo $_GET['product_group']?>",
                            pieHole: 0.4,
                            animation:{
                                startup : true,
                                duration: 1000,
                                easing: 'linear',
                            }
                        }

                        chart.draw(data, settings);
                        g_brand = data.Wf[id_slice].c[0].v

                        let ele = $('.Data_'+data.Wf[id_slice].c[0].v)
                        let ele_td = $('.td_'+data.Wf[id_slice].c[0].v)
                        
                        $('.hl_this').removeClass("text-light")
                        $('.hl_this').removeClass("bg-secondary")
                        // $('.hl_this').removeClass("fw-bold")
                        $('.hl_this').removeClass("hl_this")

                        ele.addClass("text-light");
                        // ele.addClass("fw-bold");
                        ele.addClass("hl_this");

                        ele_td.addClass("bg-secondary");
                        ele_td.addClass("hl_this");
                        
                        // hl_List(chart, data)
                        loadDataChartModal('product_rate');
                    });
                   

                
            }else{
                alert("ขออภัยเกิดข้อผิดพลาดระหว่างทำการ");
            }
        })
        
    }
// ==================================== Detail chart =========================================

function loadDataChartModal(filter) {
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);

    // console.log('g_brand = '+g_brand);
    // console.log('filter = '+filter);
    function drawStuff() {
        fetch('contollers/getStaticByBrand.php',{
        method: 'post',
        body: JSON.stringify({
            brand: g_brand,
            filter: filter
        })
        })
        .then((response) => response.json())
        .then((res) => {
            // console.log(res);
            if(res){
                var data = new google.visualization.arrayToDataTable(res);
                let display_filter = "";
                let display_filter_th = "";
                // console.log(data);

                if(filter == 'product_rate'){
                    display_filter = "Rating"
                    display_filter_th = "ขายแล้ว"
                }else if(filter == 'product_price'){
                    display_filter = "Selling price"
                    display_filter_th = "รายได้"
                }

                var options = {
                    title: 'กราฟวิเคราะห์สินค้าแบร์น '+g_brand,
                    width: "100%",
                    legend: { position: 'none' },
                    chart: { title: 'กราฟวิเคราะห์สินค้าแบร์น '+g_brand+'('+display_filter_th+')',
                            // subtitle: 'popularity by percentage' 
                        },
                    // bars: 'vertical', // Required for Material Bar Charts.
                    bars: 'horizontal', // Required for Material Bar Charts.
                    axes: {
                    x: {
                        0: { side: 'top', label: display_filter} // Top x-axis.
                    }
                    },
                    bar: { groupWidth: "50%" },
                    animation:{
                        startup : true,
                        duration: 1000,
                        easing: 'linear',
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                    chart.draw(data, options);
            }
        });

    };
    console.log(filter);
    
    if (filter == 'product_price') {
        $('.card_graph').addClass("text-light")
        $('.card_graph').addClass("bg-success")
        $('.card_graph').removeClass("text-dark")
        $('.card_graph').removeClass("bg-warning")
        $('#filter_price').html('<i class="fas fa-dollar-sign"></i> ราคาที่ขายของสินค้าแต่ละชนิด')
        $('#filter_rate').html('<i class="fas fa-clipboard-check"></i> จำนวณของสินค้าแต่ละชนิดที่ขายไป')
    } else {
        $('.card_graph').addClass("text-dark")
        $('.card_graph').addClass("bg-warning")
        $('.card_graph').removeClass("text-light")
        $('.card_graph').removeClass("bg-success")
        $('#filter_rate').html('<i class="fas fa-clipboard-check"></i> จำนวณของสินค้าแต่ละชนิดที่ขายไป')
        $('#filter_price').html('<i class="fas fa-dollar-sign"></i> ราคาที่ขายของสินค้าแต่ละชนิด')
    }
        
}

function myPageEventHandler(input) {
    chart_data.setSelection([{'row': input}]);
    drawChart(input)
    hl_List()
}

function setLinkToLists(input) {
    let arr = fetch_data;
    for (let i = 0; i < arr.Wf.length; i++) {
        try {
            $("#tr_"+arr.Wf[i].c[0].v).attr('onclick', "myPageEventHandler("+i+")")
            // console.log("[id] => "+ arr.Wf[i].c[0].v + ", [Fn] => " + i);
        } catch (e) {
            continue;
        }
    }
}

function hl_List() {
    let chart_index = chart_data.getSelection()[0].row
    let ele = $('.Data_'+fetch_data.Wf[chart_index].c[0].v)
    let ele_td = $('.td_'+fetch_data.Wf[chart_index].c[0].v)
    let i = chart_data.getSelection()[0].row
    g_brand = fetch_data.Wf[i].c[0].v

    $('.hl_this').removeClass("text-light")
    $('.hl_this').removeClass("bg-secondary")
    // $('.hl_this').removeClass("fw-bold")
    $('.hl_this').removeClass("hl_this")

    ele.addClass("text-light");
    // ele.addClass("fw-bold");
    ele.addClass("hl_this");

    ele_td.addClass("bg-secondary");
    ele_td.addClass("hl_this");


    loadDataChartModal('product_rate');
}

</script>