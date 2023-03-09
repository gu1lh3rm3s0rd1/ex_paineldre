<?php

// SELECT DESCONTOS CONCEDIDOS
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"With DEV as (SELECT DISTINCT F1_FILIAL,F1_DTDIGIT,F1_TIPO,F1_DOC,F1_SERIE,F1_FORNECE,F1_LOJA,F1_MOEDA,F1_TXMOEDA,F1_VALMERC,
    F1_VALICM, F1_FRETE,F1_DESPESA,F1_VALIPI,F1_ICMSRET,F1_DESCONT,SUBSTR(F1_DTDIGIT,5,2) AS MES
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
    SELECT MES,SUM(F1_VALICM) AS TOTAL FROM DEV
    GROUP BY MES
    ORDER BY MES");
  } elseif ($Ano == 2023) {
    $sql= oci_parse ($conexao,"With DEV as (SELECT DISTINCT F1_FILIAL,F1_DTDIGIT,F1_TIPO,F1_DOC,F1_SERIE,F1_FORNECE,F1_LOJA,F1_MOEDA,F1_TXMOEDA,F1_VALMERC,
    F1_VALICM, F1_FRETE,F1_DESPESA,F1_VALIPI,F1_ICMSRET,F1_DESCONT,SUBSTR(F1_DTDIGIT,5,2) AS MES
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
    SELECT MES,SUM(F1_VALICM) AS TOTAL FROM DEV
    GROUP BY MES
    ORDER BY MES");
  }

    oci_execute($sql);

    $totalicmdev = 0.00;
    $totalicmdev1 = 0.00;
    $totalicmdev2 = 0.00;
    $totalicmdev3 = 0.00;
    $totalicmdev4 = 0.00;
    $totalicmdev5 = 0.00;
    $totalicmdev6 = 0.00;
    $totalicmdev7 = 0.00;
    $totalicmdev8 = 0.00;
    $totalicmdev9 = 0.00;
    $totalicmdev10 = 0.00;
    $totalicmdev11 = 0.00;
    $totalicmdev12 = 0.00;

  while ($dados = oci_fetch_array($sql)){

    $mesicmdev = $dados ['MES'];

        if ($mesicmdev  == 1) {
        $totalicmdev1 = str_replace(",",".",$dados ['TOTAL']);
        }elseif ($mesicmdev  == 2){
          $totalicmdev2 = str_replace(",",".",$dados ['TOTAL']);       
        }elseif ($mesicmdev  == 3){
          $totalicmdev3 = str_replace(",",".",$dados ['TOTAL']);
        }elseif ($mesicmdev  == 4){
          $totalicmdev4 = str_replace(",",".",$dados ['TOTAL']);       
        }elseif ($mesicmdev  == 5){
          $totalicmdev5 = str_replace(",",".",$dados ['TOTAL']);
        }elseif ($mesicmdev  == 6){
          $totalicmdev6 = str_replace(",",".",$dados ['TOTAL']); 
        }elseif ($mesicmdev  == 7){
          $totalicmdev7 = str_replace(",",".",$dados ['TOTAL']); 
        }elseif ($mesicmdev  == 8){
          $totalicmdev8 = str_replace(",",".",$dados ['TOTAL']); 
        }elseif ($mesicmdev  == 9){
          $totalicmdev9 = str_replace(",",".",$dados ['TOTAL']); 
        }elseif ($mesicmdev  == 10){
          $totalicmdev10 = str_replace(",",".",$dados ['TOTAL']); 
        }elseif ($mesicmdev  == 11){
          $totalicmdev11 = str_replace(",",".",$dados ['TOTAL']); 
        }elseif ($mesicmdev  == 12){
          $totalicmdev12 = str_replace(",",".",$dados ['TOTAL']);       
      
    }

  }

  $totalicmdev = $totalicmdev1+$totalicmdev2+$totalicmdev3+$totalicmdev4+$totalicmdev5+$totalicmdev6+$totalicmdev7+$totalicmdev8+$totalicmdev9+$totalicmdev10+$totalicmdev11+$totalicmdev12;

?>
