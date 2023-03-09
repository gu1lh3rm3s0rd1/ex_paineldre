<?php

//  SELECT COFINS
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALIMP5 AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE)-1 GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");
} elseif ($Ano == 2023) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALIMP5 AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE) GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");    
}

oci_execute($sql);

$totalcofins = 0.00;
$totalcofins1 = 0.00;
$totalcofins2 = 0.00;
$totalcofins3 = 0.00;
$totalcofins4 = 0.00;
$totalcofins5 = 0.00;
$totalcofins6 = 0.00;
$totalcofins7 = 0.00;
$totalcofins8 = 0.00;
$totalcofins9 = 0.00;
$totalcofins10 = 0.00;
$totalcofins11 = 0.00;
$totalcofins12 = 0.00;

while ($dados = oci_fetch_array($sql)){

  $mescofins = $dados ['MES'];

      if ($mescofins == 1) {
      $totalcofins1= str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mescofins == 2){
        $totalcofins2 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mescofins == 3){
        $totalcofins3 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mescofins == 4){
        $totalcofins4 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mescofins == 5){
        $totalcofins5 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mescofins == 6){
        $totalcofins6 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescofins == 7){
        $totalcofins7 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescofins == 8){
        $totalcofins8 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescofins == 9){
        $totalcofins9 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescofins == 10){
        $totalcofins10 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescofins == 11){
        $totalcofins11 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescofins == 12){
        $totalcofins12 = str_replace(",",".",$dados ['TOTAL']);       
    
  }
}

$totalcofins = $totalcofins1+$totalcofins2+$totalcofins3+$totalcofins4+$totalcofins5+$totalcofins6+$totalcofins7+$totalcofins8+$totalcofins9+$totalcofins10+$totalcofins11+$totalcofins12;

?>

