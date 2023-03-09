<?php 
  $Ano = 2022;
?>

<!--div class="table-responsive"-->
  <table class="table table-bordered" style="width: 100%; height: 185px; font-size: 13.75px; text-align: center;">
    <tr>
      <th style="vertical-align: middle;">(+) RECEITA OPERACIONAL BRUTA</th>
      <th style="vertical-align: middle;">JANEIRO</th>
      <th style="vertical-align: middle;">FEVEREIRO</th>
      <th style="vertical-align: middle;">MARÇO</th>
      <th style="vertical-align: middle;">ABRIL</th>
      <th style="vertical-align: middle;">MAIO</th>
      <th style="vertical-align: middle;">JUNHO</th>
      <th style="vertical-align: middle;">JULHO</th>
      <th style="vertical-align: middle;">AGOSTO</th>
      <th style="vertical-align: middle;">SETEMBRO</th>
      <th style="vertical-align: middle;">OUTUBRO</th>
      <th style="vertical-align: middle;">NOVEMBRO</th>
      <th style="vertical-align: middle;">DEZEMBRO</th>
      <th style="vertical-align: middle;">TOTAL</th>
    </tr>

    <?php include 'somafat.php'; ?>

    <tr>
      <th style="vertical-align: middle;">Vendas de Produtos / Mercadorias</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf1,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf10,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalf,2,",",".")?></td>
    </tr>

    <?php include 'somaicmdev.php'; ?>

    <tr>
      <th style="vertical-align: middle;">ICMS / Devolução Vendas</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev1,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev10,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmdev,2,",",".")?></td>
    </tr>
  </table>
<!--/div-->
  <table class="table table-bordered" style="width: 100%; height: 185px; font-size: 13.75px; text-align: center;">
    <tr>
      <th style="vertical-align: middle;">(-) DEDUÇÕES DA RECEITA BRUTA</th>
      <th style="vertical-align: middle;">JANEIRO</th>
      <th style="vertical-align: middle;">FEVEREIRO</th>
      <th style="vertical-align: middle;">MARÇO</th>
      <th style="vertical-align: middle;">ABRIL</th>
      <th style="vertical-align: middle;">MAIO</th>
      <th style="vertical-align: middle;">JUNHO</th>
      <th style="vertical-align: middle;">JULHO</th>
      <th style="vertical-align: middle;">AGOSTO</th>
      <th style="vertical-align: middle;">SETEMBRO</th>
      <th style="vertical-align: middle;">OUTUBRO</th>
      <th style="vertical-align: middle;">NOVEMBRO</th>
      <th style="vertical-align: middle;">DEZEMBRO</th>
      <th style="vertical-align: middle;">TOTAL</th>
    </tr>

    <?php include 'somaipi.php'; ?>

    <tr>
      <th style="vertical-align: middle;">IPI / Venda de Produtos</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi1,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi10,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalipi,2,",",".")?></td>
    </tr>

    <?php include 'somaicm.php'; ?>

    <tr>
      <th style="vertical-align: middle;">ICMS / Venda de Produtos</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm1,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm10,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicm,2,",",".")?></td>
    </tr>
        
    <?php include 'somacofins.php'; ?>

    <tr>
      <th style="vertical-align: middle;">COFINS</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins1,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins10,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcofins,2,",",".")?></td>
    </tr>

    <?php include 'somapis.php'; ?>

    <tr>
      <th style="vertical-align: middle;">PIS</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis1,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis10,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalpis,2,",",".")?></td>
    </tr>

    <?php include 'somadev.php'; ?>

    <tr>
      <th style="vertical-align: middle;">Devolução de Venda de Produtos</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev1,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev10,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totaldev,2,",",".")?></td>
    </tr>

    <?php include 'somaicmst.php'; ?>

    <tr>
      <th style="vertical-align: middle;">ICMS ST / Vendas de Produtos</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret1,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret10,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalicmsret,2,",",".")?></td>
    </tr>
  </table>

  <table class="table table-bordered" style="width: 100%; font-size: 13.75px; text-align: center;">
    <tr>
      <th style="vertical-align: middle;">(=) RECEITA LÍQUIDA</th>
      <th style="vertical-align: middle;">JANEIRO</th>
      <th style="vertical-align: middle;">FEVEREIRO</th>
      <th style="vertical-align: middle;">MARÇO</th>
      <th style="vertical-align: middle;">ABRIL</th>
      <th style="vertical-align: middle;">MAIO</th>
      <th style="vertical-align: middle;">JUNHO</th>
      <th style="vertical-align: middle;">JULHO</th>
      <th style="vertical-align: middle;">AGOSTO</th>
      <th style="vertical-align: middle;">SETEMBRO</th>
      <th style="vertical-align: middle;">OUTUBRO</th>
      <th style="vertical-align: middle;">NOVEMBRO</th>
      <th style="vertical-align: middle;">DEZEMBRO</th>
      <th style="vertical-align: middle;">TOTAL</th>
    </tr>

    <?php 
      $totalll = $totalf1-$totalipi1-$totalicm1-$totalcofins1-$totalpis1-$totaldev1-$totalicmsret1+$totalicmdev1;
      $totall2 = $totalf2-$totalipi2-$totalicm2-$totalcofins2-$totalpis2-$totaldev2-$totalicmsret2+$totalicmdev2;
      $totall3 = $totalf3-$totalipi3-$totalicm3-$totalcofins3-$totalpis3-$totaldev3-$totalicmsret3+$totalicmdev3;
      $totall4 = $totalf4-$totalipi4-$totalicm4-$totalcofins4-$totalpis4-$totaldev4-$totalicmsret4+$totalicmdev4;
      $totall5 = $totalf5-$totalipi5-$totalicm5-$totalcofins5-$totalpis5-$totaldev5-$totalicmsret5+$totalicmdev5;
      $totall6 = $totalf6-$totalipi6-$totalicm6-$totalcofins6-$totalpis6-$totaldev6-$totalicmsret6+$totalicmdev6;
      $totall7 = $totalf7-$totalipi7-$totalicm7-$totalcofins7-$totalpis7-$totaldev7-$totalicmsret7+$totalicmdev7;
      $totall8 = $totalf8-$totalipi8-$totalicm8-$totalcofins8-$totalpis8-$totaldev8-$totalicmsret8+$totalicmdev8;
      $totall9 = $totalf9-$totalipi9-$totalicm9-$totalcofins9-$totalpis9-$totaldev9-$totalicmsret9+$totalicmdev9;
      $totall0 = $totalf10-$totalipi10-$totalicm10-$totalcofins10-$totalpis10-$totaldev10-$totalicmsret10+$totalicmdev10;
      $totall11 = $totalf11-$totalipi11-$totalicm11-$totalcofins11-$totalpis11-$totaldev11-$totalicmsret11+$totalicmdev11;
      $totall12 = $totalf12-$totalipi12-$totalicm12-$totalcofins12-$totalpis12-$totaldev12-$totalicmsret12+$totalicmdev12;
      $totalg = $totalll+$totall2+$totall3+$totall4+$totall5+$totall6+$totall7+$totall8+$totall9+$totall0+$totall11+$totall12; 
    ?> 

    <tr>
      <th style="vertical-align: middle;">TOTAL</th>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalll,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall2,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall3,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall4,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall5,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall6,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall7,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall8,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall9,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall0,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall11,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totall12,2,",",".")?></td>
      <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalg,2,",",".")?></td>
    </tr>
  </table>

  <table class="table table-bordered total" style="width: 100%; height: 185px; font-size: 13.75px; text-align: center;">
    <tr>
      <th style="vertical-align: middle;">(-) DESPESAS DE VENDAS</th>
      <th style="vertical-align: middle;">JANEIRO</th>
      <th style="vertical-align: middle;">FEVEREIRO</th>
      <th style="vertical-align: middle;">MARÇO</th>
      <th style="vertical-align: middle;">ABRIL</th>
      <th style="vertical-align: middle;">MAIO</th>
      <th style="vertical-align: middle;">JUNHO</th>
      <th style="vertical-align: middle;">JULHO</th>
      <th style="vertical-align: middle;">AGOSTO</th>
      <th style="vertical-align: middle;">SETEMBRO</th>
      <th style="vertical-align: middle;">OUTUBRO</th>
      <th style="vertical-align: middle;">NOVEMBRO</th>
      <th style="vertical-align: middle;">DEZEMBRO</th>
      <th style="vertical-align: middle;">TOTAL</th>
    </tr>

    <?php include 'somafretes.php'; ?>

        <tr>
          <th style="vertical-align: middle;">Fretes S / Vendas de Produtos</th>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes1,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes2,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes3,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes4,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes5,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes6,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes7,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes8,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes9,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes10,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes11,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes12,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalfretes,2,",",".")?></td>
        </tr>

        <?php include 'somacomis.php'; ?>

        <tr>
          <th>Comissão S / Vendas de Produtos</th>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis1,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis2,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis3,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis4,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis5,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis6,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis7,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis8,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis9,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis10,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis11,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis12,2,",",".")?></td>
          <td style="vertical-align: middle;"><?php echo 'R$ ' . number_format($totalcomis,2,",",".")?></td>
        </tr>
  </table>
   