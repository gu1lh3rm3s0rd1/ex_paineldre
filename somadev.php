<?php

//  SELECT PIS
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"With DEV as (SELECT DISTINCT F1_FILIAL,F1_DTDIGIT,F1_TIPO,F1_DOC,F1_SERIE,F1_FORNECE,F1_LOJA,F1_MOEDA,F1_TXMOEDA,F1_VALMERC,
  F1_FRETE,F1_DESPESA,F1_VALIPI,F1_ICMSRET,F1_DESCONT,SUBSTR(F1_DTDIGIT,5,2) AS MES
  FROM SF1010 ,SD1010 , SB1010 ,SA1010 
  WHERE F1_FILIAL = '01' AND 
    F1_TIPO = 'D' AND 
    SUBSTR(F1_DTDIGIT, 1, 4) = '2021' AND
    sf1010.d_e_l_e_t_ = ' ' AND 
    D1_FILIAL = '01' AND 
    D1_DOC = F1_DOC AND D1_SERIE = F1_SERIE AND D1_FORNECE = F1_FORNECE AND D1_LOJA = F1_LOJA AND
    D1_CF >= '   ' AND D1_CF <= '999' AND
    sd1010.d_e_l_e_t_ = ' ' AND
    B1_FILIAL = '01' AND 
    B1_COD = D1_COD AND
    sb1010.d_e_l_e_t_ = ' ' AND 
    A1_FILIAL = '01' AND 
    A1_COD = F1_FORNECE AND A1_LOJA = F1_LOJA AND
    sa1010.d_e_l_e_t_ = ' '
  ORDER BY F1_FILIAL,F1_DOC,F1_SERIE,F1_FORNECE,F1_LOJA,F1_TIPO)
  SELECT MES,SUM(F1_VALMERC+F1_FRETE+F1_DESPESA+F1_VALIPI+F1_ICMSRET-F1_DESCONT) AS TOTAL FROM DEV
  GROUP BY MES
  ORDER BY MES");
} elseif ($Ano == 2023) {
  $sql= oci_parse ($conexao,"With DEV as (SELECT DISTINCT F1_FILIAL,F1_DTDIGIT,F1_TIPO,F1_DOC,F1_SERIE,F1_FORNECE,F1_LOJA,F1_MOEDA,F1_TXMOEDA,F1_VALMERC,
  F1_FRETE,F1_DESPESA,F1_VALIPI,F1_ICMSRET,F1_DESCONT,SUBSTR(F1_DTDIGIT,5,2) AS MES
  FROM SF1010 ,SD1010 , SB1010 ,SA1010 
  WHERE F1_FILIAL = '01' AND 
    F1_TIPO = 'D' AND 
    SUBSTR(F1_DTDIGIT, 1, 4) = TO_CHAR(CURRENT_DATE, 'YYYY') AND
    sf1010.d_e_l_e_t_ = ' ' AND 
    D1_FILIAL = '01' AND 
    D1_DOC = F1_DOC AND D1_SERIE = F1_SERIE AND D1_FORNECE = F1_FORNECE AND D1_LOJA = F1_LOJA AND
    D1_CF >= '   ' AND D1_CF <= '999' AND
    sd1010.d_e_l_e_t_ = ' ' AND
    B1_FILIAL = '01' AND 
    B1_COD = D1_COD AND
    sb1010.d_e_l_e_t_ = ' ' AND 
    A1_FILIAL = '01' AND 
    A1_COD = F1_FORNECE AND A1_LOJA = F1_LOJA AND
    sa1010.d_e_l_e_t_ = ' '
  ORDER BY F1_FILIAL,F1_DOC,F1_SERIE,F1_FORNECE,F1_LOJA,F1_TIPO)
  SELECT MES,SUM(F1_VALMERC+F1_FRETE+F1_DESPESA+F1_VALIPI+F1_ICMSRET-F1_DESCONT) AS TOTAL FROM DEV
  GROUP BY MES
  ORDER BY MES");
}

oci_execute($sql);

$totaldev = 0.00;
$totaldev1 = 0.00;
$totaldev2 = 0.00;
$totaldev3 = 0.00;
$totaldev4 = 0.00;
$totaldev5 = 0.00;
$totaldev6 = 0.00;
$totaldev7 = 0.00;
$totaldev8 = 0.00;
$totaldev9 = 0.00;
$totaldev10 = 0.00;
$totaldev11 = 0.00;
$totaldev12 = 0.00;

while ($dados = oci_fetch_array($sql)){

  $mesdev = $dados ['MES'];

      if ($mesdev == 1) {
      $totaldev1 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesdev == 2){
        $totaldev2 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesdev == 3){
        $totaldev3 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesdev == 4){
        $totaldev4 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesdev == 5){
        $totaldev5 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesdev == 6){
        $totaldev6 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesdev == 7){
        $totaldev7 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesdev == 8){
        $totaldev8 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesdev == 9){
        $totaldev9 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesdev == 10){
        $totaldev10 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesdev == 11){
        $totaldev11 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesdev == 12){
        $totaldev12 = str_replace(",",".",$dados ['TOTAL']);       
     }

}

$totaldev = $totaldev1+$totaldev2+$totaldev3+$totaldev4+$totaldev5+$totaldev6+$totaldev7+$totaldev8+$totaldev9+$totaldev10+$totaldev11+$totaldev12;

?>
