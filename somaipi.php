<?php

// SELECT IPI
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALIPI AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE)-1 GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");
} elseif ($Ano == 2023) {
  $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
  FROM
  (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
          EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALIPI AS TOTAL 
  FROM P11PROD.SF2010 SF2 
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
  ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE) GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");    
}

oci_execute($sql);

$totalipi = 0000000000.00;
$totalipi1 = 0000000000.00;
$totalipi2 = 0000000000.00;
$totalipi3 = 0000000000.00;
$totalipi4 = 0000000000.00;
$totalipi5 = 0000000000.00;
$totalipi6 = 0000000000.00;
$totalipi7 = 0000000000.00;
$totalipi8 = 0000000000.00;
$totalipi9 = 0000000000.00;
$totalipi10 = 0000000000.00;
$totalipi11 = 0000000000.00;
$totalipi12 = 0000000000.00;

while ($dados = oci_fetch_array($sql)){

  $mesipi = $dados ['MES'];

      if ($mesipi == 1) {
      $totalipi1 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesipi == 2){
      $totalipi2 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesipi == 3){
      $totalipi3 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesipi == 4){
      $totalipi4 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesipi == 5){
      $totalipi5 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesipi == 6){
      $totalipi6 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesipi == 7){
      $totalipi7 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesipi == 8){
      $totalipi8 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesipi == 9){
      $totalipi9 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesipi == 10){
      $totalipi10 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesipi == 11){
      $totalipi11 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesipi == 12){
      $totalipi12 = str_replace(",",".",$dados ['TOTAL']);       
    
      }
}

$totalipi = $totalipi1+$totalipi2+$totalipi3+$totalipi4+$totalipi5+$totalipi6+$totalipi7+$totalipi8+$totalipi9+$totalipi10+$totalipi11+$totalipi12;

?>
