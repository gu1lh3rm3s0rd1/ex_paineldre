<?php

// SELECT ICM
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALICM AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE)-1 GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");
} elseif ($Ano == 2023) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALICM AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE) GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");    
}

oci_execute($sql);

$totalicm = 0.00;
$totalicm1 = 0.00;
$totalicm2 = 0.00;
$totalicm3 = 0.00;
$totalicm4 = 0.00;
$totalicm5 = 0.00;
$totalicm6 = 0.00;
$totalicm7 = 0.00;
$totalicm8 = 0.00;
$totalicm9 = 0.00;
$totalicm10 = 0.00;
$totalicm11 = 0.00;
$totalicm12 = 0.00;

while ($dados = oci_fetch_array($sql)){

  $mesicm = $dados ['MES'];

      if ($mesicm == 1) {
      $totalicm1 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesicm == 2){
        $totalicm2 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesicm == 3){
        $totalicm3 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesicm == 4){
        $totalicm4 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesicm == 5){
        $totalicm5 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesicm == 6){
        $totalicm6 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicm == 7){
        $totalicm7 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicm == 8){
        $totalicm8 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicm == 9){
        $totalicm9 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicm == 10){
        $totalicm10 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicm == 11){
        $totalicm11 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicm == 12){
        $totalicm12 = str_replace(",",".",$dados ['TOTAL']);       
    
  }
}

$totalicm = $totalicm1+$totalicm2+$totalicm3+$totalicm4+$totalicm5+$totalicm6+$totalicm7+$totalicm8+$totalicm9+$totalicm10+$totalicm11+$totalicm12;

?>
