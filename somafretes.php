<?php

// SELECT FRETES
include 'conexao.php';

if ($Ano == 2022) {
  $sql= oci_parse ($conexao,"SELECT X.MES_NUM AS MES, X.ANO AS ANO, SUM(X.ZFRETEC-X.FRETE) AS TOTAL
  FROM ( SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, 
  EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, SC5.C5_ZFRETEC AS ZFRETEC, SC5.C5_FRETE AS FRETE
  FROM P11PROD.SF2010 SF2 INNER JOIN P11PROD.SC5010 SC5 ON SF2.F2_DOC = SC5.C5_NOTA  
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' ' ) X WHERE X.ANO = EXTRACT(YEAR FROM SYSDATE)-1 
  GROUP BY X.ANO, X.MES_NUM ORDER BY X.MES_NUM");
} elseif ($Ano == 2023) {
  $sql= oci_parse ($conexao,"SELECT X.MES_NUM AS MES, X.ANO AS ANO, SUM(X.ZFRETEC-X.FRETE) AS TOTAL
  FROM ( SELECT TO_CHAR(TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD'),'MM') AS MES_NUM, 
  EXTRACT(YEAR FROM TO_DATE(SF2.F2_EMISSAO,'YYYYMMDD')) AS ANO, SC5.C5_ZFRETEC AS ZFRETEC, SC5.C5_FRETE AS FRETE
  FROM P11PROD.SF2010 SF2 INNER JOIN P11PROD.SC5010 SC5 ON SF2.F2_DOC = SC5.C5_NOTA  
  WHERE F2_TIPO <> 'D' AND SF2.D_E_L_E_T_ = ' ' ) X WHERE X.ANO = EXTRACT(YEAR FROM SYSDATE) 
  GROUP BY X.ANO, X.MES_NUM ORDER BY X.MES_NUM");
}

oci_execute($sql);

$totalfretes = 0.00;
$totalfretes1 = 0.00;
$totalfretes2 = 0.00;
$totalfretes3 = 0.00;
$totalfretes4 = 0.00;
$totalfretes5 = 0.00;
$totalfretes6 = 0.00;
$totalfretes7 = 0.00;
$totalfretes8 = 0.00;
$totalfretes9 = 0.00;
$totalfretes10 = 0.00;
$totalfretes11 = 0.00;
$totalfretes12 = 0.00;

while ($dados = oci_fetch_array($sql)){

  $mesfretes = $dados ['MES'];

      if ($mesfretes == 1) {
      $totalfretes1 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesfretes == 2){
        $totalfretes2 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesfretes == 3){
        $totalfretes3 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesfretes == 4){
        $totalfretes4 = str_replace(",",".",$dados ['TOTAL']);       
      }elseif ($mesfretes == 5){
        $totalfretes5 = str_replace(",",".",$dados ['TOTAL']);
      }elseif ($mesfretes == 6){
        $totalfretes6 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesfretes == 7){
        $totalfretes7 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesfretes == 8){
        $totalfretes8 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesfretes == 9){
        $totalfretes9 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesfretes == 10){
        $totalfretes10 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesfretes == 11){
        $totalfretes11 = str_replace(",",".",$dados ['TOTAL']); 
      }elseif ($mesfretes == 12){
        $totalfretes12 = str_replace(",",".",$dados ['TOTAL']);       
      }

}

$totalfretes = $totalfretes1+$totalfretes2+$totalfretes3+$totalfretes4+$totalfretes5+$totalfretes6+$totalfretes7+$totalfretes8+$totalfretes9+$totalfretes10+$totalfretes11+$totalfretes12;

?>
