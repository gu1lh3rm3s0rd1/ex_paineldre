<?php

// SELECT DEVOLUCAO
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALIMP6 AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE)-1 GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");
} elseif ($Ano == 2023) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALIMP6 AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE) GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");    
}

oci_execute($sql);

$totalpis = 0.00;
$totalpis1 = 0.00;
$totalpis2 = 0.00;
$totalpis3 = 0.00;
$totalpis4 = 0.00;
$totalpis5 = 0.00;
$totalpis6 = 0.00;
$totalpis7 = 0.00;
$totalpis8 = 0.00;
$totalpis9 = 0.00;
$totalpis10 = 0.00;
$totalpis11 = 0.00;
$totalpis12 = 0.00;

while ($dados = oci_fetch_array($sql)){

  $mespis = $dados ['MES'];

      if ($mespis == 1) {
      $totalpis1 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mespis == 2){
        $totalpis2 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mespis == 3){
        $totalpis3 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mespis == 4){
        $totalpis4 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mespis == 5){
        $totalpis5 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mespis == 6){
        $totalpis6 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mespis == 7){
        $totalpis7 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mespis == 8){
        $totalpis8 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mespis == 9){
        $totalpis9 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mespis == 10){
        $totalpis10 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mespis == 11){
        $totalpis11 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mespis == 12){
        $totalpis12 = str_replace(",",".",$dados ['TOTAL']);       
      }

}

$totalpis = $totalpis1+$totalpis2+$totalpis3+$totalpis4+$totalpis5+$totalpis6+$totalpis7+$totalpis8+$totalpis9+$totalpis10+$totalpis11+$totalpis12;

?>
