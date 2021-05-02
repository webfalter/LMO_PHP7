<?php
/** Liga Manager Online 4
  *
  * http://lmo.sourceforge.net/
  *
  * This program is free software; you can redistribute it and/or
  * modify it under the terms of the GNU General Public License as
  * published by the Free Software Foundation; either version 2 of
  * the License, or (at your option) any later version.
  * 
  * This program is distributed in the hope that it will be useful,
  * but WITHOUT ANY WARRANTY; without even the implied warranty of
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
  * General Public License for more details.
  *
  * REMOVING OR CHANGING THE COPYRIGHT NOTICES IS NOT ALLOWED!
  *
  */

$platz_a = '';
$platz_b = '';

if(($file!="") && ($kurve==1)){
  $addp=$_SERVER['PHP_SELF']."?action=graph&amp;file=".$file."&amp;stat1=";
  $show_stat1=isset($_GET['stat1'])?$_GET['stat1']:$stat1;
  $show_stat2=isset($_GET['stat2'])?$_GET['stat2']:$stat2;
  if ($show_stat1==0 && $show_stat2!=0 || $show_stat1==$show_stat2) {
    $show_stat1=$show_stat2;
    $show_stat2=0;
  }
  $tension = '0.4';
  //if($lmo_fieber_tension==1) $tension = 0;
?>

<div class="container">
  <div class="row">
    <div class="col-sm-1">
      <div class="container">
        <div class="row">
         <div class="col">&nbsp;</div>
        </div>
        <div class="row">
         <div class="col">&nbsp;</div>
        </div>
        <div class="row">
         <div class="col">&nbsp;</div>
        </div>
        <div class="row">
          <div class="col text-right">
          <?php
  for ($i=1; $i<=$anzteams; $i++) {
    if($i!=$show_stat1){?>
	    <p><a href="<?php echo $addp.$i?>" title="<?php echo $teams[$i]?>"><?php echo $teamk[$i]." ".HTML_smallTeamIcon($file,$teams[$i]," alt='$teams[$i]' style='vertical-align: middle;'"); ?></a></p>
	    <?php
    } else {
      echo "<p>".$teamk[$i]." ".HTML_smallTeamIcon($file,$teams[$i]," alt='$teams[$i]'")."</p>\n";
    }
  }?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-10">
      <div class="container">
      <?php
  if($show_stat1==0){?>
        <div class="row">
          <div class="col"><br/><?php echo $text[24]?></div>
        </div><?php
  } else {
    $tabtype=0;
    require(PATH_TO_LMO."/lmo-calcgraph.php");
    for($j=0;$j<$anzst;$j++){
        $platz_a = $platz_a.$platz[$show_stat1][$j].",";
    }
    $platz_a = $platz_a."0";
    if($show_stat2>0){
      for($j=0;$j<$anzst;$j++){
          $platz_b = $platz_b.$platz[$show_stat2][$j].",";
      }
      $platz_b = $platz_b."0";
      }?>
        <div class="row">
          <div class="col"><br/><canvas id="myChart" width="1000" height="600"></canvas>
		     <?php
                $pgtext1=$text[135];
                $pgtext2=$text[136];
                // Anzahl Spieltage in x-AScha
                $spieltag = array();
                for($i=1; $i<=$anzst;$i++) {
                    $spieltag[] = "'$i'";
                }
                $xAxis = implode(",", $spieltag);
                $platz1 = explode(",", $platz_a);
                $platz2 = explode(",", $platz_b);
                foreach(array_keys($platz1, '0') as $key) {
                    unset($platz1[$key]);
                }
                foreach(array_keys($platz2, 0) as $key) {
                unset($platz2[$key]);
                }
                $pgplatz1 = implode(",", $platz1);
                $pgplatz2 = implode(",", $platz2);
			?>

<script>

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: [<?php echo $xAxis; ?>],
			datasets: [{
				label: '<?php echo $teams[$show_stat1]; ?>',
				fill: false,
				lineTension: <?php echo $tension; ?>,
				backgroundColor: 'yellow',
				borderColor: 'red',
				data: [<?php echo $pgplatz1; ?>],
			}, {
				label: '<?php echo $teams[$show_stat2]; ?>',
				fill: false,
				lineTension: <?php echo $tension; ?>,
				backgroundColor: 'yellow',
				borderColor: 'blue',
				data: [<?php echo $pgplatz2; ?>],
			},]
		},
		options: {
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
					    color: 'grey'
					},
					scaleLabel: {
						display: true,
						fontSize: 24,
						labelString: '<?php echo $pgtext1; ?>'
						
					}
				}],
				yAxes: [{
					display: true,
					gridLines: {
					    color: 'grey'
					},
					scaleLabel: {
						display: true,
						fontSize: 24,
						labelString: '<?php echo $pgtext2; ?>'
					},
					ticks: {
					    reverse: true,
					    min: 1,
					    max: <?php echo $anzteams; ?>,
					    maxTicksLimit: <?php echo $anzteams; ?>
					}
				}]
			},
			tooltips: {
			    displayColors: false
			}
		}
	});
</script>
          </div>
        </div>
<?php } ?>
    </div>
  </div>
    <div class="col-sm-1">
      <div class="container">
        <div class="row">
         <div class="col">&nbsp;</div>
        </div>
        <div class="row">
         <div class="col">&nbsp;</div>
        </div>
        <div class="row">
         <div class="col">&nbsp;</div>
        </div>
        <div class="row">
          <div class="col">
          <?php
  for ($i=1; $i<=$anzteams; $i++) {
    if($i!=$show_stat2){?>
            <p><a href="<?php echo $addp.$show_stat1."&amp;stat2=".$i?>" title="<?php echo $teams[$i]?>"><?php echo HTML_smallTeamIcon($file,$teams[$i]," alt='$teams[$i]' style='vertical-align: middle;'")." ".$teamk[$i]; ?></a></p>
            <?php
    } else {
      echo "<p>".HTML_smallTeamIcon($file,$teams[$i]," alt='$teams[$i]'")." ".$teamk[$i]."</p>\n";
    }
  }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>
