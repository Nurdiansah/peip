
<?php
    include "../connect.php";

    // query count master menu
    $query = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN folder = 'OPS_DEPT' THEN id_dokumen END)) AS ops_dept,
                                        COUNT(DISTINCT(CASE WHEN folder = 'CRW_DEPT' THEN id_dokumen END)) AS crw_dept,
                                        COUNT(DISTINCT(CASE WHEN folder = 'FIN_DEPT' THEN id_dokumen END)) AS fin_dept,
                                        COUNT(DISTINCT(CASE WHEN folder = 'GA_DEPT' THEN id_dokumen END)) AS ga_dept,
                                        COUNT(DISTINCT(CASE WHEN folder = 'HR_DEPT' THEN id_dokumen END)) AS hr_dept,
                                        COUNT(DISTINCT(CASE WHEN folder = 'QHSE_DEPT' THEN id_dokumen END)) AS qhse_dept,
                                        COUNT(DISTINCT(CASE WHEN folder = 'IT_DEPT' THEN id_dokumen END)) AS it_dept,
                                        COUNT(DISTINCT(CASE WHEN folder = 'MKT_DEPT' THEN id_dokumen END)) AS mkt_dept,
                                        COUNT(DISTINCT(CASE WHEN folder = 'TECHNICAL' THEN id_dokumen END)) AS TECHNICAL
                                    FROM dokumen
                                    INNER JOIN ms_folder
                                        ON kd_folder = id_folder");
    $dataQuery = mysqli_fetch_assoc($query);

    // query count sub menu OPS DEPT
    $querySubOps = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN sub_folder = 'GNA' THEN id_dokumen END)) AS ops_gna,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_RDN' THEN id_dokumen END)) AS ops_rdn,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MA_32' THEN id_dokumen END)) AS ops_ma32,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MA_35' THEN id_dokumen END)) AS ops_ma35,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_KJ2' THEN id_dokumen END)) AS ops_kj2,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_KJ3' THEN id_dokumen END)) AS ops_kj3
                                        FROM dokumen
                                        INNER JOIN ms_folder
                                            ON kd_folder = id_folder
                                        WHERE folder = 'OPS_DEPT'");
    $dataSubOps = mysqli_fetch_assoc($querySubOps);

    // query count sub menu CREW DEPT
    $querySubCrw = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN sub_folder = 'GNA' THEN id_dokumen END)) AS crw_gna,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_RDN' THEN id_dokumen END)) AS crw_rdn,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MA_32' THEN id_dokumen END)) AS crw_ma32,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MA_35' THEN id_dokumen END)) AS crw_ma35,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_KJ2' THEN id_dokumen END)) AS crw_kj2,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_KJ3' THEN id_dokumen END)) AS crw_kj3
                                        FROM dokumen
                                        INNER JOIN ms_folder
                                            ON kd_folder = id_folder
                                        WHERE folder = 'CRW_DEPT'");
    $dataSubCrw = mysqli_fetch_assoc($querySubCrw);

    // query count sub menu GA DEPT
    $querySubGa = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN sub_folder = 'REPORT' THEN id_dokumen END)) AS ga_report,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'LST_INV' THEN id_dokumen END)) AS ga_lstinv,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'LETTER_OUT' THEN id_dokumen END)) AS ga_ltrout,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'LETTER_IN' THEN id_dokumen END)) AS ga_ltrin,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'TRANS_RCPT' THEN id_dokumen END)) AS ga_transrcpt,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'DOC_CHKLST' THEN id_dokumen END)) AS ga_docchklst,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MAT_REQOFF' THEN id_dokumen END)) AS ga_matreqoff,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'RCPTNST' THEN id_dokumen END)) AS ga_rcptnst,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MNT_OFMEET' THEN id_dokumen END)) AS ga_mntofmeet,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'SECURITY' THEN id_dokumen END)) AS ga_security,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'OFFICE_BOY' THEN id_dokumen END)) AS ga_officeboy,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'SCAN_DOC' THEN id_dokumen END)) AS ga_scandoc
                                        FROM dokumen
                                        INNER JOIN ms_folder
                                            ON kd_folder = id_folder
                                        WHERE folder = 'GA_DEPT'");
    $dataSubGa = mysqli_fetch_assoc($querySubGa);

    // HR
    $querySubHr = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN sub_folder = 'EMP_DB' THEN id_dokumen END)) AS EMP_DB,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'PAYROLL' THEN id_dokumen END)) AS PAYROLL,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'PRMT_BNSTRIP' THEN id_dokumen END)) AS PRMT_BNSTRIP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'PRSNL_RPT' THEN id_dokumen END)) AS PRSNL_RPT,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ASSEST' THEN id_dokumen END)) AS ASSEST,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'INSRNC' THEN id_dokumen END)) AS INSRNC,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'TAX' THEN id_dokumen END)) AS TAX,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'RCRTMN' THEN id_dokumen END)) AS RCRTMN,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'EMP_STATUS' THEN id_dokumen END)) AS EMP_STATUS,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'DT_WRNGEMP' THEN id_dokumen END)) AS DT_WRNGEMP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'SHR_EMPCRT' THEN id_dokumen END)) AS SHR_EMPCRT,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'UPD_REGKMNKR' THEN id_dokumen END)) AS UPD_REGKMNKR,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'UPD_REGCOMP' THEN id_dokumen END)) AS UPD_REGCOMP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ABSENCE' THEN id_dokumen END)) AS ABSENCE,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'OVER_TIME' THEN id_dokumen END)) AS OVER_TIME,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'BONUS' THEN id_dokumen END)) AS BONUS,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'THR' THEN id_dokumen END)) AS THR,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'KPI' THEN id_dokumen END)) AS KPI,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'PAKLR_EMP' THEN id_dokumen END)) AS PAKLR_EMP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'LEGAL' THEN id_dokumen END)) AS LEGAL,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MCU_EMP' THEN id_dokumen END)) AS MCU_EMP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'TRNG_MTRXEMP' THEN id_dokumen END)) AS TRNG_MTRXEMP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'STAT_KLGDBEMP' THEN id_dokumen END)) AS STAT_KLGDBEMP
                                        FROM dokumen
                                        INNER JOIN ms_folder
                                            ON kd_folder = id_folder
                                        WHERE folder = 'HR_DEPT'");
    $dataSubHr = mysqli_fetch_assoc($querySubHr);

    // FInance
    $querySubFin = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN sub_folder = 'FINANCE' THEN id_dokumen END)) AS FINANCE,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ACCNTNG' THEN id_dokumen END)) AS ACCNTNG,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'PRCRMNT' THEN id_dokumen END)) AS PRCRMNT
                                        FROM dokumen
                                        INNER JOIN ms_folder
                                            ON kd_folder = id_folder
                                        WHERE folder = 'FIN_DEPT'");
    $dataSubFin = mysqli_fetch_assoc($querySubFin);

    // marketing
    $querySubMkt = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN sub_folder = 'SPOBP' THEN id_dokumen END)) AS SPOBP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'Q88_OBP' THEN id_dokumen END)) AS Q88_OBP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'SPQ_88' THEN id_dokumen END)) AS SPQ_88,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'TNDR_PRCS' THEN id_dokumen END)) AS TNDR_PRCS,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'PRJ_PLAN' THEN id_dokumen END)) AS PRJ_PLAN,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'PRJ_AWRD' THEN id_dokumen END)) AS PRJ_AWRD,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'UPD_CIVD' THEN id_dokumen END)) AS UPD_CIVD,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'LBBAPB' THEN id_dokumen END)) AS LBBAPB,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'LST_PRJGNG' THEN id_dokumen END)) AS LST_PRJGNG,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'CERT_HIRE' THEN id_dokumen END)) AS CERT_HIRE,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'PRCS_INVC' THEN id_dokumen END)) AS PRCS_INVC
                                        FROM dokumen
                                        INNER JOIN ms_folder
                                        ON kd_folder = id_folder
                                        WHERE folder = 'MKT_DEPT'");
    $dataSubMkt = mysqli_fetch_assoc($querySubMkt);

    // QHSE
    $querySubHse = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN sub_folder = 'HSE_PLAN' THEN id_dokumen END)) AS HSE_PLAN,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'POLICY' THEN id_dokumen END)) AS POLICY,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'SOP_COMP' THEN id_dokumen END)) AS SOP_COMP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'DRILL_SCHD' THEN id_dokumen END)) AS DRILL_SCHD,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'TRNG' THEN id_dokumen END)) AS TRNG,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'I_CARE' THEN id_dokumen END)) AS I_CARE,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'HSPT_AGGRM' THEN id_dokumen END)) AS HSPT_AGGRM,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'TRNG_MTRX' THEN id_dokumen END)) AS TRNG_MTRX,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'LIST_APD' THEN id_dokumen END)) AS LIST_APD,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'CRT_CSMSLST' THEN id_dokumen END)) AS CRT_CSMSLST,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'KPI' THEN id_dokumen END)) AS KPI,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'DOC_PRPTN' THEN id_dokumen END)) AS DOC_PRPTN,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'SMC_PRPTN' THEN id_dokumen END)) AS SMC_PRPTN,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ISO' THEN id_dokumen END)) AS ISO,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'STR_ORGUPD' THEN id_dokumen END)) AS STR_ORGUPD,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'SCP_OWO' THEN id_dokumen END)) AS SCP_OWO,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'UPD_FRMCOMP' THEN id_dokumen END)) AS UPD_FRMCOMP,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MGMT_CHNG' THEN id_dokumen END)) AS MGMT_CHNG,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'HND_OVRRPT' THEN id_dokumen END)) AS HND_OVRRPT
                                        FROM dokumen
                                        INNER JOIN ms_folder
                                            ON kd_folder = id_folder
                                        WHERE folder = 'QHSE_DEPT'");
    $dataSubHse = mysqli_fetch_assoc($querySubHse);

    // technical
    $querySubTech = mysqli_query($conn, "SELECT COUNT(DISTINCT(CASE WHEN sub_folder = 'GNA' THEN id_dokumen END)) AS GNA,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_RDN' THEN id_dokumen END)) AS ENC_RDN,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MA_32' THEN id_dokumen END)) AS MA_32,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'MA_35' THEN id_dokumen END)) AS MA_35,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_KJ2' THEN id_dokumen END)) AS ENC_KJ2,
                                            COUNT(DISTINCT(CASE WHEN sub_folder = 'ENC_KJ3' THEN id_dokumen END)) AS ENC_KJ3
                                        FROM dokumen
                                        INNER JOIN ms_folder
                                            ON kd_folder = id_folder
                                        WHERE folder = 'TECHNICAL'");

    $dataSubTech = mysqli_fetch_assoc($querySubTech);
?>

<section>

    <!-- <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
    </div> -->
    <div class="row mt-4 mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h6><a href="index.php">Home</a> / Dashboard</h6>
                        <img src="../assets/images/peip.png" width="90px" >
                    </div>
                    <!-- Styles -->
                    <style>
                    #chartdiv {
                    width: 100%;
                    height: 450px;
                    }

                    </style>

                    <!-- Resources -->
                    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
                    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
                    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

                    <!-- Chart code -->
                    <script>
                    am4core.ready(function() {

                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    var container = am4core.create("chartdiv", am4core.Container);
                    container.width = am4core.percent(100);
                    container.height = am4core.percent(100);
                    container.layout = "horizontal";


                    var chart = container.createChild(am4charts.PieChart);

                    // Add data
                    chart.data = [{
                    "data": "Operation Dept",
                    "value": <?= $dataQuery['ops_dept']; ?>,
                    "subData": [{ name: "Gas Nuri Arizona", value: <?= $dataSubOps['ops_gna']; ?> }, { name: "Enc Rhayden", value: <?= $dataSubOps['ops_rdn']; ?> }, { name: "Mitra Anugerah 32", value: <?= $dataSubOps['ops_ma32']; ?> }, { name: "Mitra Anugerah 35", value: <?= $dataSubOps['ops_ma35']; ?> }, { name: "Enc Kalijapat 2", value: <?= $dataSubOps['ops_kj2']; ?> }, { name: "Enc Kalijapat 3", value: <?= $dataSubOps['ops_kj3']; ?> }]
                    }, {
                    "data": "Crewing Dept",
                    "value": <?= $dataQuery['crw_dept']; ?>,
                    "subData": [{ name: "Gas Nuri Arizona", value: <?= $dataSubCrw['crw_gna']; ?> }, { name: "Enc Rhayden", value: <?= $dataSubCrw['crw_rdn']; ?> }, { name: "Mitra Anugerah 32", value: <?= $dataSubCrw['crw_ma32']; ?> }, { name: "Mitra Anugerah 35", value: <?= $dataSubCrw['crw_ma35']; ?> }, { name: "Enc Kalijapat 2", value: <?= $dataSubCrw['crw_kj2']; ?> }, { name: "Enc Kalijapat 3", value: <?= $dataSubCrw['crw_kj3']; ?> }]
                    }, {
                    "data": "General Affair Dept",
                    "value": <?= $dataQuery['ga_dept']; ?>,
                    "subData": [{ name: "Report", value: <?= $dataSubGa['ga_report']; ?> }, { name: "List Inventory", value: <?= $dataSubGa['ga_lstinv']; ?> }, { name: "Letter Out", value: <?= $dataSubGa['ga_ltrout']; ?> }, { name: "Letter In", value: <?= $dataSubGa['ga_ltrin']; ?> }, { name: "Transmital Receipt", value: <?= $dataSubGa['ga_transrcpt']; ?> }, { name: "Document Check List", value: <?= $dataSubGa['ga_docchklst']; ?> }, { name: "Material Requistion Office", value: <?= $dataSubGa['ga_matreqoff']; ?> }, { name: "Receptionist", value: <?= $dataSubGa['ga_rcptnst']; ?> }, { name: "Minutes Of Meeting", value: <?= $dataSubGa['ga_mntofmeet']; ?> }, { name: "Security", value: <?= $dataSubGa['ga_security']; ?> }, { name: "Office Boy", value: <?= $dataSubGa['ga_officeboy']; ?> }, { name: "Scaning Document", value: <?= $dataSubGa['ga_scandoc']; ?> }]
                    }, {
                    "data": "HR Dept",
                    "value": <?= $dataQuery['hr_dept']; ?>,
                    "subData": [{ name: "Employee Database", value: <?= $dataSubHr['EMP_DB']; ?> }, { name: "Payroll", value: <?= $dataSubHr['PAYROLL']; ?> }, { name: "Permit Bussiness Trip", value: <?= $dataSubHr['PRMT_BNSTRIP']; ?> }, { name: "Personal Report", value: <?= $dataSubHr['PRSNL_RPT']; ?> }, { name: "Assesment", value: <?= $dataSubHr['ASSEST']; ?> }, { name: "Insurance", value: <?= $dataSubHr['INSRNC']; ?> }, { name: "TAX", value: <?= $dataSubHr['TAX']; ?> }, { name: "Recruitment", value: <?= $dataSubHr['RCRTMN']; ?> }, { name: "Employee Status", value: <?= $dataSubHr['EMP_STATUS']; ?> }, { name: "Data Warning Employee", value: <?= $dataSubHr['DT_WRNGEMP']; ?> }, { name: "Shore Employee Certificate (Hold)", value: <?= $dataSubHr['SHR_EMPCRT']; ?> }, { name: "Update Regulation Kemenaker", value: <?= $dataSubHr['UPD_REGKMNKR']; ?> }, { name: "Update Regulation Company", value: <?= $dataSubHr['UPD_REGCOMP']; ?> }, { name: "Absence", value: <?= $dataSubHr['ABSENCE']; ?> }, { name: "Over Time", value: <?= $dataSubHr['OVER_TIME']; ?> }, { name: "Bonus", value: <?= $dataSubHr['BONUS']; ?> }, { name: "THR", value: <?= $dataSubHr['THR']; ?> }, { name: "KPI", value: <?= $dataSubHr['KPI']; ?> }, { name: "Paklaring Employee", value: <?= $dataSubHr['PAKLR_EMP']; ?> }, { name: "Legal", value: <?= $dataSubHr['LEGAL']; ?> }, { name: "MCU Employee", value: <?= $dataSubHr['MCU_EMP']; ?> }, { name: "Training Matrix Employee", value: <?= $dataSubHr['TRNG_MTRXEMP']; ?> }, { name: "Status Keluarga Database Employee", value: <?= $dataSubHr['STAT_KLGDBEMP']; ?> }]
                    }, {
                    "data": "Finance",
                    "value": <?= $dataQuery['fin_dept']; ?>,
                    "subData": [{ name: "Finance", value: <?= $dataSubFin['FINANCE'] ?> }, { name: "Accounting", value: <?= $dataSubFin['ACCNTNG'] ?> }, { name: "Procurement", value: <?= $dataSubFin['PRCRMNT'] ?> }]
                    }, {
                    "data": "Marketing Dept",
                    "value": <?= $dataQuery['mkt_dept']; ?>,
                    "subData": [{ name: "Ship Particulars Owned By PEIP", value: <?= $dataSubMkt['SPOBP']; ?> }, { name: "Q88 Owned By PEIP", value: <?= $dataSubMkt['Q88_OBP']; ?> }, { name: "Ship Particulars & Q88 Own By Others", value: <?= $dataSubMkt['SPQ_88']; ?> }, { name: "Tender Process", value: <?= $dataSubMkt['TNDR_PRCS']; ?> }, { name: "Project Plan", value: <?= $dataSubMkt['PRJ_PLAN']; ?> }, { name: "Project Awarded", value: <?= $dataSubMkt['PRJ_AWRD']; ?> }, { name: "Update Civd", value: <?= $dataSubMkt['UPD_CIVD']; ?> }, { name: "List Bid Bond And Performace Bond", value: <?= $dataSubMkt['LBBAPB']; ?> }, { name: "List Project On Going", value: <?= $dataSubMkt['LST_PRJGNG']; ?> }, { name: "Certificate ON/OFF Hire", value: <?= $dataSubMkt['CERT_HIRE']; ?> }, { name: "Process Invoice", value: <?= $dataSubMkt['PRCS_INVC']; ?> }]
                    }, {
                    "data": "QHSE Dept",
                    "value": <?= $dataQuery['qhse_dept']; ?>,
                    "subData": [{ name: "HSE Plan", value: <?= $dataSubHse['HSE_PLAN']; ?> }, { name: "Policy", value: <?= $dataSubHse['POLICY']; ?> }, { name: "SOP Company", value: <?= $dataSubHse['SOP_COMP']; ?> }, { name: "Drill Schedule", value: <?= $dataSubHse['DRILL_SCHD']; ?> }, { name: "Training", value: <?= $dataSubHse['TRNG']; ?> }, { name: "I Care", value: <?= $dataSubHse['I_CARE']; ?> }, { name: "Hospital Agreement", value: <?= $dataSubHse['HSPT_AGGRM']; ?> }, { name: "List APD", value: <?= $dataSubHse['LIST_APD']; ?> }, { name: "Certificate CSMS List", value: <?= $dataSubHse['CRT_CSMSLST']; ?> }, { name: "KPI", value: <?= $dataSubHse['KPI']; ?> }, { name: "DOC Preparation", value: <?= $dataSubHse['DOC_PRPTN']; ?> }, { name: "SMC Preparation", value: <?= $dataSubHse['SMC_PRPTN']; ?> }, { name: "ISO", value: <?= $dataSubHse['ISO']; ?> }, { name: "Structural Organization Update", value: <?= $dataSubHse['STR_ORGUPD']; ?> }, { name: "Scope Of Work Organization", value: <?= $dataSubHse['SCP_OWO']; ?> }, { name: "Update Form Company", value: <?= $dataSubHse['UPD_FRMCOMP']; ?> }, { name: "Management Of Change", value: <?= $dataSubHse['MGMT_CHNG']; ?> }, { name: "Hand Over Report", value: <?= $dataSubHse['HND_OVRRPT']; ?> }]
                    }, {
                    "data": "Information Technology",
                    "value": <?= $dataQuery['it_dept']; ?>,
                    "subData": [{ name: "Information Technology", value: 30 }]
                    }, {
                    "data": "Technical",
                    "value": <?= $dataQuery['TECHNICAL']; ?>,
                    "subData": [{ name: "Gas Nuri Arizona", value: <?= $dataSubTech['GNA']; ?> }, { name: "Enc Rhayden", value: <?= $dataSubTech['ENC_RDN']; ?> }, { name: "Mitra Anugerah 32", value: <?= $dataSubTech['MA_32']; ?> }, { name: "Mitra Anugerah 35", value: <?= $dataSubTech['MA_35']; ?> }, { name: "Enc Kalijapat 2", value: <?= $dataSubTech['ENC_KJ2']; ?> }, { name: "Enc Kalijapat 3", value: <?= $dataSubTech['ENC_KJ3']; ?> }]
                    }];

                    // Add and configure Series
                    var pieSeries = chart.series.push(new am4charts.PieSeries());
                    pieSeries.dataFields.value = "value";
                    pieSeries.dataFields.category = "data";
                    pieSeries.slices.template.states.getKey("active").properties.shiftRadius = 0;
                    //pieSeries.labels.template.text = "{category}\n{value.percent.formatNumber('#.#')}%";

                    pieSeries.slices.template.events.on("hit", function(event) {
                    selectSlice(event.target.dataItem);
                    })

                    var chart2 = container.createChild(am4charts.PieChart);
                    chart2.width = am4core.percent(30);
                    chart2.radius = am4core.percent(80);

                    // Add and configure Series
                    var pieSeries2 = chart2.series.push(new am4charts.PieSeries());
                    pieSeries2.dataFields.value = "value";
                    pieSeries2.dataFields.category = "name";
                    pieSeries2.slices.template.states.getKey("active").properties.shiftRadius = 0;
                    //pieSeries2.labels.template.radius = am4core.percent(50);
                    //pieSeries2.labels.template.inside = true;
                    //pieSeries2.labels.template.fill = am4core.color("#ffffff");
                    pieSeries2.labels.template.disabled = true;
                    pieSeries2.ticks.template.disabled = true;
                    pieSeries2.alignLabels = false;
                    pieSeries2.events.on("positionchanged", updateLines);

                    var interfaceColors = new am4core.InterfaceColorSet();

                    var line1 = container.createChild(am4core.Line);
                    line1.strokeDasharray = "2,2";
                    line1.strokeOpacity = 0.5;
                    line1.stroke = interfaceColors.getFor("alternativeBackground");
                    line1.isMeasured = false;

                    var line2 = container.createChild(am4core.Line);
                    line2.strokeDasharray = "2,2";
                    line2.strokeOpacity = 0.5;
                    line2.stroke = interfaceColors.getFor("alternativeBackground");
                    line2.isMeasured = false;

                    var selectedSlice;

                    function selectSlice(dataItem) {

                    selectedSlice = dataItem.slice;

                    var fill = selectedSlice.fill;

                    var count = dataItem.dataContext.subData.length;
                    pieSeries2.colors.list = [];
                    for (var i = 0; i < count; i++) {
                        pieSeries2.colors.list.push(fill.brighten(i * 2 / count));
                    }

                    chart2.data = dataItem.dataContext.subData;
                    pieSeries2.appear();

                    var middleAngle = selectedSlice.middleAngle;
                    var firstAngle = pieSeries.slices.getIndex(0).startAngle;
                    var animation = pieSeries.animate([{ property: "startAngle", to: firstAngle - middleAngle }, { property: "endAngle", to: firstAngle - middleAngle + 360 }], 600, am4core.ease.sinOut);
                    animation.events.on("animationprogress", updateLines);

                    selectedSlice.events.on("transformed", updateLines);

                    //  var animation = chart2.animate({property:"dx", from:-container.pixelWidth / 2, to:0}, 2000, am4core.ease.elasticOut)
                    //  animation.events.on("animationprogress", updateLines)
                    }


                    function updateLines() {
                    if (selectedSlice) {
                        var p11 = { x: selectedSlice.radius * am4core.math.cos(selectedSlice.startAngle), y: selectedSlice.radius * am4core.math.sin(selectedSlice.startAngle) };
                        var p12 = { x: selectedSlice.radius * am4core.math.cos(selectedSlice.startAngle + selectedSlice.arc), y: selectedSlice.radius * am4core.math.sin(selectedSlice.startAngle + selectedSlice.arc) };

                        p11 = am4core.utils.spritePointToSvg(p11, selectedSlice);
                        p12 = am4core.utils.spritePointToSvg(p12, selectedSlice);

                        var p21 = { x: 0, y: -pieSeries2.pixelRadius };
                        var p22 = { x: 0, y: pieSeries2.pixelRadius };

                        p21 = am4core.utils.spritePointToSvg(p21, pieSeries2);
                        p22 = am4core.utils.spritePointToSvg(p22, pieSeries2);

                        line1.x1 = p11.x;
                        line1.x2 = p21.x;
                        line1.y1 = p11.y;
                        line1.y2 = p21.y;

                        line2.x1 = p12.x;
                        line2.x2 = p22.x;
                        line2.y1 = p12.y;
                        line2.y2 = p22.y;
                    }
                    }

                    chart.events.on("datavalidated", function() {
                    setTimeout(function() {
                        selectSlice(pieSeries.dataItems.getIndex(0));
                    }, 1000);
                    });


                    }); // end am4core.ready()
                    </script>

                    <!-- HTML -->
                    <div id="chartdiv">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
