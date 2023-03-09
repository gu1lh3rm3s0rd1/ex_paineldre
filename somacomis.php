<?php

// SELECT COMISSAO
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"SELECT X.MES_NUM AS MES, X.ANO AS ANO, SUM((X.VALOR*X.COMIS1)/100) AS TOTAL
  FROM ( SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, 
  EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, E1_VALOR AS VALOR, E1_COMIS1 AS COMIS1
  FROM P11PROD.SF2010 SF2 INNER JOIN P11PROD.SE1010 SE1 ON F2_DOC = E1_NUM 
  WHERE F2_DUPL <> ' ' AND F2_TIPO <> 'D' AND E1_TIPO = 'NF' AND SF2.D_E_L_E_T_ = ' ' AND SE1.D_E_L_E_T_ = ' '
  ) X WHERE X.ANO = EXTRACT(YEAR FROM SYSDATE)-1 GROUP BY X.ANO, X.MES_NUM ORDER BY X.MES_NUM");
} elseif ($Ano == 2023) {
  $sql= oci_parse ($conexao,"SELECT X.MES_NUM AS MES, X.ANO AS ANO, SUM((X.VALOR*X.COMIS1)/100) AS TOTAL
  FROM ( SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, 
  EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, E1_VALOR AS VALOR, E1_COMIS1 AS COMIS1
  FROM P11PROD.SF2010 SF2 INNER JOIN P11PROD.SE1010 SE1 ON F2_DOC = E1_NUM 
  WHERE F2_DUPL <> ' ' AND F2_TIPO <> 'D' AND E1_TIPO = 'NF' AND SF2.D_E_L_E_T_ = ' ' AND SE1.D_E_L_E_T_ = ' '
  ) X WHERE X.ANO = EXTRACT(YEAR FROM SYSDATE) GROUP BY X.ANO, X.MES_NUM ORDER BY X.MES_NUM");    
}

oci_execute($sql);

$totalcomis = 0.00;
$totalcomis1 = 0.00;
$totalcomis2 = 0.00;
$totalcomis3 = 0.00;
$totalcomis4 = 0.00;
$totalcomis5 = 0.00;
$totalcomis6 = 0.00;
$totalcomis7 = 0.00;
$totalcomis8 = 0.00;
$totalcomis9 = 0.00;
$totalcomis10 = 0.00;
$totalcomis11 = 0.00;
$totalcomis12 = 0.00;

while ($dados = oci_fetch_array($sql)){

  $mescomis = $dados ['MES'];

      if ($mescomis == 1) {
      $totalcomis1 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mescomis == 2){
        $totalcomis2 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mescomis == 3){
        $totalcomis3 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mescomis == 4){
        $totalcomis4 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mescomis == 5){
        $totalcomis5 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mescomis == 6){
        $totalcomis6 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescomis == 7){
        $totalcomis7 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescomis == 8){
        $totalcomis8 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescomis == 9){
        $totalcomis9 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescomis == 10){
        $totalcomis10 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescomis == 11){
        $totalcomis11 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mescomis == 12){
        $totalcomis12 = str_replace(",",".",$dados ['TOTAL']);       
      }

  } 

  $totalcomis = $totalcomis1+$totalcomis2+$totalcomis3+$totalcomis4+$totalcomis5+$totalcomis6+$totalcomis7+$totalcomis8+$totalcomis9+$totalcomis10+$totalcomis11+$totalcomis12;

?>
