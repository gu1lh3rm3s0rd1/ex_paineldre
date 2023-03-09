<?php

// SELECT SOMA FAT
include 'conexao.php';

if ($Ano == 2022) {
    $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
    FROM
    (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
            EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALFAT AS TOTAL 
    FROM P11PROD.SF2010 SF2 
    WHERE F2_DUPL <> ' ' AND F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
    ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE)-1 GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");
} elseif ($Ano == 2023) {
    $sql= oci_parse ($conexao,"SELECT Y.MES_NUM AS MES, Y.ANO AS ANO, SUM(Y.TOTAL) AS TOTAL
    FROM
    (SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
            EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, F2_VALFAT AS TOTAL 
    FROM P11PROD.SF2010 SF2 
    WHERE F2_DUPL <> ' ' AND F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' '
    ) Y WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE) GROUP BY Y.ANO, Y.MES_NUM ORDER BY Y.MES_NUM");    
}

oci_execute($sql);

$totalf = 0.00;
$totalf1 = 0.00;
$totalf2 = 0.00;
$totalf3 = 0.00;
$totalf4 = 0.00;
$totalf5 = 0.00;
$totalf6 = 0.00;
$totalf7 = 0.00;
$totalf8 = 0.00;
$totalf9 = 0.00;
$totalf10 = 0.00;
$totalf11 = 0.00;
$totalf12 = 0.00;

while ($dados = oci_fetch_array($sql)){

    $mesf = $dados ['MES'];    

    if ($mesf == 1) {
          $totalf1 = str_replace(",",".",$dados ['TOTAL']);
          }elseif ($mesf == 2){
          $totalf2 = str_replace(",",".",$dados ['TOTAL']);  
          }elseif ($mesf == 3){
          $totalf3 = str_replace(",",".",$dados ['TOTAL']);
          }elseif ($mesf == 4){
          $totalf4 = str_replace(",",".",$dados ['TOTAL']);       
          }elseif ($mesf == 5){
          $totalf5 = str_replace(",",".",$dados ['TOTAL']);
          }elseif ($mesf == 6){
          $totalf6 = str_replace(",",".",$dados ['TOTAL']); 
          }elseif ($mesf == 7){
          $totalf7 = str_replace(",",".",$dados ['TOTAL']); 
          }elseif ($mesf == 8){
          $totalf8 = str_replace(",",".",$dados ['TOTAL']); 
          }elseif ($mesf == 9){
          $totalf9 = str_replace(",",".",$dados ['TOTAL']); 
          }elseif ($mesf == 10){
          $totalf10 = str_replace(",",".",$dados ['TOTAL']); 
          }elseif ($mesf == 11){
          $totalf11 = str_replace(",",".",$dados ['TOTAL']); 
          }elseif ($mesf == 12){
          $totalf12 = str_replace(",",".",$dados ['TOTAL']);       
          }      

    }

    $totalf = $totalf1+$totalf2+$totalf3+$totalf4+$totalf5+$totalf6+$totalf7+$totalf8+$totalf9+$totalf10+$totalf11+$totalf12;

?>