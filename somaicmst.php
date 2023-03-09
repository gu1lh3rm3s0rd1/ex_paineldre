<?php

// SELECT ICM
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_ICMSRET AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE)-1 GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");
} elseif ($Ano == 2023) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_ICMSRET AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE) GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");    
}

oci_execute($sql);

$totalicmsret = 0.00;
$totalicmsret1 = 0.00;
$totalicmsret2 = 0.00;
$totalicmsret3 = 0.00;
$totalicmsret4 = 0.00;
$totalicmsret5 = 0.00;
$totalicmsret6 = 0.00;
$totalicmsret7 = 0.00;
$totalicmsret8 = 0.00;
$totalicmsret9 = 0.00;
$totalicmsret10 = 0.00;
$totalicmsret11 = 0.00;
$totalicmsret12 = 0.00;

while ($dados = oci_fetch_array($sql)){

  $mesicmsret = $dados ['MES'];

      if ($mesicmsret == 1) {
      $totalicmsret1 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesicmsret == 2){
        $totalicmsret2 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesicmsret == 3){
        $totalicmsret3 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesicmsret == 4){
        $totalicmsret4 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesicmsret == 5){
        $totalicmsret5 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesicmsret == 6){
        $totalicmsret6 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicmsret == 7){
        $totalicmsret7 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicmsret == 8){
        $totalicmsret8 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicmsret == 9){
        $totalicmsret9 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicmsret == 10){
        $totalicmsret10 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicmsret == 11){
        $totalicmsret11 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesicmsret == 12){
        $totalicmsret12 = str_replace(",",".",$dados ['TOTAL']);       
      }

  }

  $totalicmsret = $totalicmsret1+$totalicmsret2+$totalicmsret3+$totalicmsret4+$totalicmsret5+$totalicmsret6+$totalicmsret7+$totalicmsret8+$totalicmsret9+$totalicmsret10+$totalicmsret11+$totalicmsret12;

?>
