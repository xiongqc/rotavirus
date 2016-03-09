<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<META http-equiv="Content-Style-Type" content="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>
			FUBAR
		</title>		
		<LINK REL=STYLESHEET TYPE="text/css" HREF="http://www.datamonkey.org//2007/styles.css">
		
<script language='javascript' type='text/javascript' src='http://www.datamonkey.org//js/flot/jquery.js'></script>
<script language='javascript' type='text/javascript' src='http://www.datamonkey.org//js/flot/jquery.flot.js'></script>
<script language='javascript' type='text/javascript' src='http://www.datamonkey.org//js/flot/jquery.flot.crosshair.js'></script>
<script language='javascript' type='text/javascript' src='http://www.google.com/jsapi'></script>
<script language='javascript' type='text/javascript' src='http://www.datamonkey.org//js/3d/javascript/SurfacePlot.js'></script>
<script language='javascript' type='text/javascript' src='http://www.datamonkey.org//js/3d/javascript/ColourGradient.js'></script>
	
 	</head>

<body background = "/images/aquastripe.gif" bgcolor = "#FFFFFF" >

<DIV align = left style = 'max-width:720px;border-left: solid 3px #FF5223;border-right: solid 3px #FF5223;'>
<div style = 'text-align:center;background-color:#FF5223;font-size:12px;padding:2px;'>

<a href = '/dataupload.php' class = 'UPLOAD'>Analyze your data</a>
<a href = 'http://www.datamonkey.org' class = 'NAVBAR'>Home</a>
<a href = '/help/index.php' class = 'NAVBAR'>Help</a>
<a href = '/help/citations.php' class = 'NAVBAR'>Citations</a>
<a href = '/cgi-bin/datamonkey/mpiJobStatus.pl' class = 'NAVBAR'>Job Queue</a>
<a href = '/2007/usage.php' class = 'NAVBAR'>Stats</a>
<a href = 'http://hyphy.ucsd.edu' class = 'NAVBAR'>HyPhy package</a>
<!--<a href = 'http://www.datamonkeys.org' class = 'NAVBAR'>Datamonkeys webcomic</a>-->

</div>
<img src = 'http://www.datamonkey.org//images/datamonkey_title.png' width = '720' height = '144' border = '0'  alt = 'Navigation Banner'>

<script type='text/javascript' src='http://www.datamonkey.org/wz_tooltip.js'></script>
<H1 CLASS='SuccessCap'>FUBAR analysis results</H1><DIV CLASS='RepClassCT'><b>Reports</b> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.33504401697069.1&task=13&format=0'>[HTML]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.33504401697069.1&task=13&format=1' target = '_blank'>[CSV]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.33504401697069.1&task=13&format=2'>[Plots]</a></DIV><DIV Class='RepClassBox'><b>Job ID:</b>upload.33504401697069.1 <a class = 'InfoLink' href='http://www.datamonkey.org/cgi-bin/datamonkey/jobStatus.pl?file=upload.33504401697069.1' TARGET = '_top'>[Information:Other analyses]</a></DIV><DIV CLASS='RepClassSM'><b>Data summary</b><p><b>485</b> sequences with <b>1</b> partition<DIV CLASS = 'ErrorTagSM'>These sequences have not been screened for recombination. Selection analyses of alignments with recombinants in them using a single tree may generate <u>misleading</u> results.</DIV><br clear=all><span style = 'font-size: x-small; margin-left:10px;'>Partition <b>1</b>: 402 codons 0 subs/site</span>
</DIV><DIV CLASS='RepClassSM'>FUBAR was run on a grid with <b>20</b> synonymous rates and <b>20</b> non-synonymous rates, yielding <b>400</b> total points, of which <b>190</b> represented <i>negative</i> selection, <b>20</b> - <i>neutral</i> evolution, and <b>190</b> - <i>positive</i> selection.<div style='width:650px;height:260px;spacing:10px;background-color:white;border: 1px solid black;'>
                   <span style='text-align:right; width:100%'>MCMC trace</span>
                   <div id="fubar_mcmc_trace" style = 'width:625px;height:225px;'></div></div><script type="text/javascript">
$(function () {
    var d1 = [];
    var mcmc = [
[1,-29075.2],
[2,-29064.6],
[3,-29063.2],
[4,-29076.2],
[5,-29078.1],
[6,-29060.0],
[7,-29058.3],
[8,-29063.3],
[9,-29055.7],
[10,-29067.5],
[11,-29082.2],
[12,-29076.5],
[13,-29067.6],
[14,-29073.9],
[15,-29084.8],
[16,-29064.8],
[17,-29078.2],
[18,-29068.0],
[19,-29070.2],
[20,-29074.2],
[21,-29089.4],
[22,-29074.7],
[23,-29074.4],
[24,-29093.1],
[25,-29095.7],
[26,-29079.9],
[27,-29077.0],
[28,-29068.4],
[29,-29078.2],
[30,-29071.9],
[31,-29049.3],
[32,-29046.6],
[33,-29062.4],
[34,-29065.9],
[35,-29049.5],
[36,-29075.4],
[37,-29082.4],
[38,-29085.7],
[39,-29046.1],
[40,-29062.3],
[41,-29062.7],
[42,-29070.3],
[43,-29058.8],
[44,-29059.6],
[45,-29059.5],
[46,-29062.0],
[47,-29068.9],
[48,-29052.0],
[49,-29064.2],
[50,-29069.1],
[51,-29076.3],
[52,-29069.7],
[53,-29076.8],
[54,-29067.7],
[55,-29090.7],
[56,-29070.5],
[57,-29067.4],
[58,-29065.7],
[59,-29068.2],
[60,-29072.5],
[61,-29078.7],
[62,-29075.5],
[63,-29069.6],
[64,-29083.0],
[65,-29065.1],
[66,-29070.5],
[67,-29083.5],
[68,-29072.0],
[69,-29078.2],
[70,-29076.8],
[71,-29066.1],
[72,-29066.1],
[73,-29076.7],
[74,-29062.2],
[75,-29054.2],
[76,-29066.6],
[77,-29065.2],
[78,-29081.7],
[79,-29068.8],
[80,-29075.6],
[81,-29060.4],
[82,-29070.8],
[83,-29055.7],
[84,-29068.6],
[85,-29062.0],
[86,-29062.8],
[87,-29048.6],
[88,-29069.4],
[89,-29076.3],
[90,-29059.5],
[91,-29066.3],
[92,-29080.4],
[93,-29067.8],
[94,-29070.3],
[95,-29065.0],
[96,-29072.1],
[97,-29063.0],
[98,-29058.6],
[99,-29074.9],
[100,-29069.5],];    
    plot = $.plot($("#fubar_mcmc_trace"), [{ label: 'log(L) = hover to show',  data: mcmc, color: 'rgb(64, 64, 64)'}], 
                                     {crosshair: { mode: 'x' },
                                     grid: { hoverable: true, autoHighlight: false} 
                                     });
                                     
var legends = $('#fubar_mcmc_trace .legendLabel');
    legends.each(function () {
        // fix the widths so they don't jump around
        $(this).css('width', $(this).width());
    });

    var updateLegendTimeout = null;
    var latestPosition = null;
    
    function updateLegend() {
        updateLegendTimeout = null;
        
        var pos = latestPosition;
        
        var axes = plot.getAxes();
        if (pos.x < axes.xaxis.min || pos.x > axes.xaxis.max ||
            pos.y < axes.yaxis.min || pos.y > axes.yaxis.max)
            return;

        var i, j, dataset = plot.getData();
        for (i = 0; i < dataset.length; ++i) {
            var series = dataset[i];

            // find the nearest points, x-wise
            for (j = 0; j < series.data.length; ++j)
                if (series.data[j][0] > pos.x)
                    break;
            
            p1 = series.data[j - 1][1];

            legends.eq(i).text(series.label.replace(/=.*/, '= ' + p1));
        }
    }
    
    $('#fubar_mcmc_trace').bind('plothover',  function (event, pos, item) {
        latestPosition = pos;
        if (!updateLegendTimeout)
            updateLegendTimeout = setTimeout(updateLegend, 50);
    });

});
</script><p/>Posterior alignment-wide distribution of substitution rates<p/><dl>
                    <dt class = 'DT1'> <b>Mean values.</b> &beta; = 0.72,  &beta;-&alpha; = -0.28, &omega; =  4.47</dt>
                    <dt class = 'DT2'> <b>Weights.</b> Pr[&alpha; &gt; &beta;] = 0.823, Pr[&alpha; = &beta;] = 0.017, Pr[&alpha; &lt; &beta;] = 0.160</dt>
                 </dl><IMG SRC = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-0-png&mode=5' WIDTH = '640' HEIGHT = '480' BORDER = '1'><p><a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-0-svg&mode=4'>[SVG]</a>&nbsp;<a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-grid-svg&mode=4'>[FUBAR grid]</a>&nbsp;</p></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found no sites with evidence of pervasive diversifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.33504401697069.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'></form></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found <b>393</b> sites with evidence of pervasive purifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.33504401697069.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'><p><DIV CLASS = 'HelpfulTips'>This summary table reports the means of posterior distribution of synonymous (&alpha;) and non-synonymous (&beta;) substitution rates over <b>sites</b>, as well as the mean posterior probability for &omega; (=&beta;/&alpha;) &lt; 1 at a site.</DIV><DIV CLASS='RepClassSM'>
<TABLE BORDER = '0'><TR CLASS='TRReport' style = 'font-size:small'><td>Codon</td>
<td>&alpha;</td>
<td>&beta;</td>
<td>&beta;-&alpha;</td>
<td>Posterior Prob &beta;&lt;&alpha;</td>
<td>3D rate plot<span class = 'INFO' onmouseover = "Tip('The SVG format may not display correctly in all browsers')">?</span></td></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>1
</td>

<td>0.552969
</td>

<td>0.000203989
</td>

<td>-0.552765
</td>

<td>0.99637
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-1-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-1-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>3
</td>

<td>0.326938
</td>

<td>0.00106805
</td>

<td>-0.32587
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-3-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-3-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>4
</td>

<td>0.114581
</td>

<td>0.0398742
</td>

<td>-0.0747063
</td>

<td>0.933067
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-4-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-4-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>5
</td>

<td>0.454849
</td>

<td>0.029686
</td>

<td>-0.425163
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-5-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-5-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>6
</td>

<td>0.472122
</td>

<td>0.0273089
</td>

<td>-0.444813
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-6-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-6-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>7
</td>

<td>0.315826
</td>

<td>0.0367679
</td>

<td>-0.279058
</td>

<td>0.999799
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-7-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-7-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>8
</td>

<td>0.2316
</td>

<td>0.0293238
</td>

<td>-0.202276
</td>

<td>0.997751
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-8-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-8-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>9
</td>

<td>0.282997
</td>

<td>0.0333289
</td>

<td>-0.249669
</td>

<td>0.98863
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-9-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-9-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>10
</td>

<td>0.221632
</td>

<td>0.0279229
</td>

<td>-0.193709
</td>

<td>0.997316
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-10-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-10-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>11
</td>

<td>0.456552
</td>

<td>0.0273574
</td>

<td>-0.429194
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-11-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-11-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>12
</td>

<td>0.430832
</td>

<td>0.0276755
</td>

<td>-0.403156
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-12-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-12-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>14
</td>

<td>0.426382
</td>

<td>0.000725084
</td>

<td>-0.425657
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-14-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-14-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>15
</td>

<td>0.458929
</td>

<td>0.00119425
</td>

<td>-0.457735
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-15-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-15-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>16
</td>

<td>0.454344
</td>

<td>0.0277455
</td>

<td>-0.426599
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-16-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-16-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>17
</td>

<td>0.583823
</td>

<td>0.00174436
</td>

<td>-0.582078
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-17-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-17-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>18
</td>

<td>0.340806
</td>

<td>0.0276297
</td>

<td>-0.313176
</td>

<td>0.999974
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-18-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-18-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>19
</td>

<td>0.191546
</td>

<td>0.0310341
</td>

<td>-0.160511
</td>

<td>0.997407
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-19-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-19-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>20
</td>

<td>0.206388
</td>

<td>0.0287168
</td>

<td>-0.177671
</td>

<td>0.976597
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-20-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-20-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>21
</td>

<td>0.286488
</td>

<td>0.0279534
</td>

<td>-0.258535
</td>

<td>0.999982
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-21-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-21-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>22
</td>

<td>0.571232
</td>

<td>0.000733772
</td>

<td>-0.570498
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-22-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-22-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>23
</td>

<td>0.46322
</td>

<td>0.00242981
</td>

<td>-0.46079
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-23-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-23-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>24
</td>

<td>0.421171
</td>

<td>0.00190155
</td>

<td>-0.41927
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-24-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-24-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>25
</td>

<td>0.460264
</td>

<td>0.000796542
</td>

<td>-0.459468
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-25-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-25-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>26
</td>

<td>0.567138
</td>

<td>0.00128196
</td>

<td>-0.565856
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-26-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-26-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>27
</td>

<td>0.445769
</td>

<td>0.0294142
</td>

<td>-0.416355
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-27-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-27-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>28
</td>

<td>0.440721
</td>

<td>0.0280116
</td>

<td>-0.41271
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-28-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-28-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>29
</td>

<td>0.929441
</td>

<td>0.0289871
</td>

<td>-0.900454
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-29-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-29-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>30
</td>

<td>0.443926
</td>

<td>0.0380184
</td>

<td>-0.405908
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-30-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-30-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>31
</td>

<td>0.354315
</td>

<td>0.000844466
</td>

<td>-0.353471
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-31-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-31-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>32
</td>

<td>0.627248
</td>

<td>0.0285047
</td>

<td>-0.598744
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-32-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-32-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>33
</td>

<td>0.400957
</td>

<td>0.00392483
</td>

<td>-0.397032
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-33-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-33-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>34
</td>

<td>0.474856
</td>

<td>0.000688576
</td>

<td>-0.474167
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-34-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-34-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>35
</td>

<td>0.429949
</td>

<td>0.00124481
</td>

<td>-0.428704
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-35-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-35-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>36
</td>

<td>0.4498
</td>

<td>0.00389058
</td>

<td>-0.445909
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-36-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-36-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>37
</td>

<td>1.31164
</td>

<td>0.027271
</td>

<td>-1.28437
</td>

<td>0.999776
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-37-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-37-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>38
</td>

<td>0.274018
</td>

<td>0.0458222
</td>

<td>-0.228196
</td>

<td>0.960523
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-38-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-38-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>39
</td>

<td>0.457889
</td>

<td>0.0312871
</td>

<td>-0.426602
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-39-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-39-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>40
</td>

<td>0.458354
</td>

<td>0.000691883
</td>

<td>-0.457662
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-40-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-40-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>41
</td>

<td>0.674491
</td>

<td>0.0272332
</td>

<td>-0.647258
</td>

<td>0.999138
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-41-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-41-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>42
</td>

<td>0.451854
</td>

<td>0.00124909
</td>

<td>-0.450605
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-42-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-42-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>43
</td>

<td>0.303763
</td>

<td>0.0279414
</td>

<td>-0.275821
</td>

<td>0.999922
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-43-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-43-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>44
</td>

<td>0.412243
</td>

<td>0.0275638
</td>

<td>-0.38468
</td>

<td>0.999971
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-44-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-44-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>45
</td>

<td>0.428752
</td>

<td>0.115238
</td>

<td>-0.313514
</td>

<td>0.999532
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-45-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-45-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>46
</td>

<td>0.449793
</td>

<td>0.000694033
</td>

<td>-0.449099
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-46-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-46-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>47
</td>

<td>0.492057
</td>

<td>0.00391246
</td>

<td>-0.488144
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-47-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-47-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>48
</td>

<td>0.259263
</td>

<td>0.000759869
</td>

<td>-0.258503
</td>

<td>0.999989
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-48-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-48-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>49
</td>

<td>0.280923
</td>

<td>0.00128269
</td>

<td>-0.27964
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-49-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-49-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>50
</td>

<td>0.317679
</td>

<td>0.00123213
</td>

<td>-0.316447
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-50-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-50-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>51
</td>

<td>0.447026
</td>

<td>0.0273099
</td>

<td>-0.419716
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-51-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-51-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>52
</td>

<td>0.459606
</td>

<td>0.00112344
</td>

<td>-0.458483
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-52-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-52-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>53
</td>

<td>0.47147
</td>

<td>0.0274082
</td>

<td>-0.444061
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-53-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-53-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>54
</td>

<td>0.388711
</td>

<td>0.00265887
</td>

<td>-0.386052
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-54-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-54-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>55
</td>

<td>0.493879
</td>

<td>0.027282
</td>

<td>-0.466597
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-55-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-55-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>57
</td>

<td>0.470888
</td>

<td>0.00114391
</td>

<td>-0.469745
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-57-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-57-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>58
</td>

<td>0.504447
</td>

<td>0.0298424
</td>

<td>-0.474604
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-58-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-58-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>59
</td>

<td>0.559387
</td>

<td>0.00402685
</td>

<td>-0.555361
</td>

<td>0.995663
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-59-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-59-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>60
</td>

<td>0.424027
</td>

<td>0.106838
</td>

<td>-0.317189
</td>

<td>0.998499
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-60-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-60-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>61
</td>

<td>0.453681
</td>

<td>0.000684054
</td>

<td>-0.452997
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-61-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-61-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>62
</td>

<td>0.460061
</td>

<td>0.0392237
</td>

<td>-0.420837
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-62-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-62-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>63
</td>

<td>0.461648
</td>

<td>0.000688717
</td>

<td>-0.460959
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-63-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-63-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>64
</td>

<td>0.460662
</td>

<td>0.00115497
</td>

<td>-0.459507
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-64-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-64-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>65
</td>

<td>0.354087
</td>

<td>0.0026511
</td>

<td>-0.351436
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-65-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-65-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>66
</td>

<td>0.453039
</td>

<td>0.00125825
</td>

<td>-0.451781
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-66-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-66-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>67
</td>

<td>0.387213
</td>

<td>0.00111816
</td>

<td>-0.386095
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-67-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-67-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>68
</td>

<td>0.447173
</td>

<td>0.000687458
</td>

<td>-0.446485
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-68-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-68-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>69
</td>

<td>0.463982
</td>

<td>0.0272421
</td>

<td>-0.43674
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-69-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-69-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>70
</td>

<td>0.463803
</td>

<td>0.0274782
</td>

<td>-0.436325
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-70-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-70-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>71
</td>

<td>0.446434
</td>

<td>0.00187967
</td>

<td>-0.444554
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-71-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-71-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>72
</td>

<td>0.455432
</td>

<td>0.00124326
</td>

<td>-0.454189
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-72-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-72-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>73
</td>

<td>0.458079
</td>

<td>0.029402
</td>

<td>-0.428677
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-73-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-73-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>74
</td>

<td>0.429728
</td>

<td>0.00120418
</td>

<td>-0.428523
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-74-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-74-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>75
</td>

<td>0.45165
</td>

<td>0.0274142
</td>

<td>-0.424236
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-75-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-75-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>76
</td>

<td>0.475296
</td>

<td>0.00126565
</td>

<td>-0.47403
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-76-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-76-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>77
</td>

<td>0.544374
</td>

<td>0.00196497
</td>

<td>-0.542409
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-77-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-77-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>78
</td>

<td>0.418102
</td>

<td>0.0274235
</td>

<td>-0.390678
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-78-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-78-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>79
</td>

<td>0.463033
</td>

<td>0.0273968
</td>

<td>-0.435636
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-79-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-79-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>80
</td>

<td>0.481794
</td>

<td>0.0438213
</td>

<td>-0.437973
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-80-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-80-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>81
</td>

<td>0.468143
</td>

<td>0.000669612
</td>

<td>-0.467473
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-81-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-81-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>82
</td>

<td>1.06807
</td>

<td>0.00142704
</td>

<td>-1.06664
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-82-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-82-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>83
</td>

<td>0.370927
</td>

<td>0.0275137
</td>

<td>-0.343414
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-83-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-83-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>84
</td>

<td>0.981766
</td>

<td>0.0273588
</td>

<td>-0.954407
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-84-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-84-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>85
</td>

<td>0.351493
</td>

<td>0.0275764
</td>

<td>-0.323917
</td>

<td>0.99998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-85-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-85-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>86
</td>

<td>0.328497
</td>

<td>0.0653317
</td>

<td>-0.263165
</td>

<td>0.993883
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-86-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-86-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>87
</td>

<td>0.685527
</td>

<td>0.0276402
</td>

<td>-0.657886
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-87-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-87-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>88
</td>

<td>0.51462
</td>

<td>0.000703232
</td>

<td>-0.513917
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-88-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-88-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>89
</td>

<td>0.30453
</td>

<td>0.0283342
</td>

<td>-0.276195
</td>

<td>0.99976
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-89-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-89-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>90
</td>

<td>0.444129
</td>

<td>0.00119334
</td>

<td>-0.442935
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-90-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-90-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>91
</td>

<td>0.476048
</td>

<td>0.000703533
</td>

<td>-0.475344
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-91-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-91-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>92
</td>

<td>0.457572
</td>

<td>0.0304397
</td>

<td>-0.427132
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-92-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-92-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>93
</td>

<td>0.755949
</td>

<td>0.0274392
</td>

<td>-0.72851
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-93-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-93-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>94
</td>

<td>0.447558
</td>

<td>0.00125273
</td>

<td>-0.446305
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-94-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-94-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>95
</td>

<td>0.461886
</td>

<td>0.000873805
</td>

<td>-0.461012
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-95-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-95-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>96
</td>

<td>0.491647
</td>

<td>0.00119941
</td>

<td>-0.490448
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-96-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-96-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>97
</td>

<td>0.51199
</td>

<td>0.0336621
</td>

<td>-0.478328
</td>

<td>0.975797
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-97-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-97-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>98
</td>

<td>0.532794
</td>

<td>0.0273831
</td>

<td>-0.505411
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-98-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-98-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>99
</td>

<td>0.443342
</td>

<td>0.00137121
</td>

<td>-0.441971
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-99-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-99-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>100
</td>

<td>0.386919
</td>

<td>0.0621248
</td>

<td>-0.324794
</td>

<td>0.928339
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-100-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-100-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>101
</td>

<td>0.431395
</td>

<td>0.0440566
</td>

<td>-0.387338
</td>

<td>0.999984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-101-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-101-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>102
</td>

<td>0.428528
</td>

<td>0.00111164
</td>

<td>-0.427417
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-102-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-102-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>103
</td>

<td>0.457607
</td>

<td>0.0014432
</td>

<td>-0.456164
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-103-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-103-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>104
</td>

<td>0.47548
</td>

<td>0.000875193
</td>

<td>-0.474605
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-104-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-104-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>105
</td>

<td>0.432873
</td>

<td>0.00388031
</td>

<td>-0.428993
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-105-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-105-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>106
</td>

<td>0.472177
</td>

<td>0.00180468
</td>

<td>-0.470373
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-106-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-106-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>107
</td>

<td>0.504576
</td>

<td>0.00126261
</td>

<td>-0.503314
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-107-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-107-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>108
</td>

<td>0.463206
</td>

<td>0.0011915
</td>

<td>-0.462015
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-108-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-108-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>109
</td>

<td>0.459344
</td>

<td>0.0417989
</td>

<td>-0.417545
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-109-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-109-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>110
</td>

<td>0.464966
</td>

<td>0.0272442
</td>

<td>-0.437722
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-110-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-110-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>111
</td>

<td>0.483241
</td>

<td>0.000505451
</td>

<td>-0.482736
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-111-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-111-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>112
</td>

<td>0.434361
</td>

<td>0.00390091
</td>

<td>-0.43046
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-112-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-112-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>113
</td>

<td>0.427042
</td>

<td>0.0007906
</td>

<td>-0.426252
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-113-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-113-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>114
</td>

<td>0.543923
</td>

<td>0.02837
</td>

<td>-0.515553
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-114-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-114-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>115
</td>

<td>0.467474
</td>

<td>0.0273722
</td>

<td>-0.440101
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-115-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-115-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>116
</td>

<td>0.474471
</td>

<td>0.00168821
</td>

<td>-0.472783
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-116-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-116-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>117
</td>

<td>0.877837
</td>

<td>0.00130479
</td>

<td>-0.876532
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-117-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-117-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>118
</td>

<td>0.464646
</td>

<td>0.0278258
</td>

<td>-0.436821
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-118-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-118-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>119
</td>

<td>0.463816
</td>

<td>0.00274713
</td>

<td>-0.461069
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-119-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-119-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>120
</td>

<td>0.453358
</td>

<td>0.0434949
</td>

<td>-0.409863
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-120-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-120-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>121
</td>

<td>1.02361
</td>

<td>0.0303747
</td>

<td>-0.99324
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-121-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-121-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>122
</td>

<td>0.324649
</td>

<td>0.0659864
</td>

<td>-0.258663
</td>

<td>0.994236
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-122-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-122-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>123
</td>

<td>0.384112
</td>

<td>0.0341001
</td>

<td>-0.350012
</td>

<td>0.99947
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-123-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-123-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>124
</td>

<td>0.459141
</td>

<td>0.000692085
</td>

<td>-0.458449
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-124-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-124-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>125
</td>

<td>0.479922
</td>

<td>0.0274348
</td>

<td>-0.452487
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-125-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-125-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>126
</td>

<td>0.521539
</td>

<td>0.0275833
</td>

<td>-0.493956
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-126-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-126-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>127
</td>

<td>0.498844
</td>

<td>0.0276037
</td>

<td>-0.47124
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-127-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-127-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>128
</td>

<td>0.453396
</td>

<td>0.00126324
</td>

<td>-0.452133
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-128-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-128-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>129
</td>

<td>0.427949
</td>

<td>0.000678773
</td>

<td>-0.42727
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-129-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-129-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>130
</td>

<td>0.708534
</td>

<td>0.0547881
</td>

<td>-0.653746
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-130-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-130-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>131
</td>

<td>0.459829
</td>

<td>0.00124373
</td>

<td>-0.458585
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-131-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-131-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>132
</td>

<td>0.311703
</td>

<td>0.0286037
</td>

<td>-0.2831
</td>

<td>0.999835
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-132-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-132-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>133
</td>

<td>0.460996
</td>

<td>0.000886446
</td>

<td>-0.46011
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-133-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-133-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>134
</td>

<td>0.44438
</td>

<td>0.0347394
</td>

<td>-0.409641
</td>

<td>0.999966
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-134-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-134-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>135
</td>

<td>0.482365
</td>

<td>0.00193408
</td>

<td>-0.480431
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-135-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-135-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>136
</td>

<td>0.46054
</td>

<td>0.000612629
</td>

<td>-0.459928
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-136-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-136-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>137
</td>

<td>0.455539
</td>

<td>0.0285927
</td>

<td>-0.426946
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-137-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-137-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>138
</td>

<td>0.439762
</td>

<td>0.0012539
</td>

<td>-0.438508
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-138-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-138-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>139
</td>

<td>0.559387
</td>

<td>0.00402685
</td>

<td>-0.555361
</td>

<td>0.995663
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-139-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-139-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>140
</td>

<td>0.253375
</td>

<td>0.00132793
</td>

<td>-0.252047
</td>

<td>0.999469
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-140-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-140-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>141
</td>

<td>0.459121
</td>

<td>0.027773
</td>

<td>-0.431348
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-141-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-141-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>142
</td>

<td>0.462534
</td>

<td>0.00410557
</td>

<td>-0.458428
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-142-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-142-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>143
</td>

<td>1.00332
</td>

<td>0.102057
</td>

<td>-0.901266
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-143-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-143-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>144
</td>

<td>0.501594
</td>

<td>0.0280269
</td>

<td>-0.473567
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-144-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-144-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>145
</td>

<td>0.457777
</td>

<td>0.00135172
</td>

<td>-0.456425
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-145-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-145-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>146
</td>

<td>0.440952
</td>

<td>0.028934
</td>

<td>-0.412018
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-146-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-146-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>147
</td>

<td>0.83168
</td>

<td>0.00137897
</td>

<td>-0.830301
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-147-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-147-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>148
</td>

<td>0.459421
</td>

<td>0.000692269
</td>

<td>-0.458729
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-148-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-148-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>149
</td>

<td>0.3696
</td>

<td>0.00116566
</td>

<td>-0.368434
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-149-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-149-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>150
</td>

<td>0.513739
</td>

<td>0.000702938
</td>

<td>-0.513036
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-150-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-150-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>151
</td>

<td>0.412142
</td>

<td>0.0486565
</td>

<td>-0.363485
</td>

<td>0.999918
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-151-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-151-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>152
</td>

<td>0.567524
</td>

<td>0.0273935
</td>

<td>-0.540131
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-152-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-152-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>153
</td>

<td>0.492327
</td>

<td>0.0274872
</td>

<td>-0.46484
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-153-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-153-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>154
</td>

<td>0.388801
</td>

<td>0.0285501
</td>

<td>-0.360251
</td>

<td>0.999833
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-154-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-154-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>155
</td>

<td>0.473806
</td>

<td>0.000504284
</td>

<td>-0.473302
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-155-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-155-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>156
</td>

<td>0.459277
</td>

<td>0.00128185
</td>

<td>-0.457995
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-156-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-156-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>157
</td>

<td>0.380424
</td>

<td>0.0274044
</td>

<td>-0.35302
</td>

<td>0.999962
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-157-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-157-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>158
</td>

<td>0.486124
</td>

<td>0.0272426
</td>

<td>-0.458881
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-158-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-158-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>159
</td>

<td>0.280201
</td>

<td>0.000532445
</td>

<td>-0.279668
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-159-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-159-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>160
</td>

<td>0.450897
</td>

<td>0.00191565
</td>

<td>-0.448981
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-160-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-160-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>161
</td>

<td>0.189456
</td>

<td>0.0282342
</td>

<td>-0.161222
</td>

<td>0.994503
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-161-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-161-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>162
</td>

<td>0.459653
</td>

<td>0.033266
</td>

<td>-0.426387
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-162-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-162-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>163
</td>

<td>0.383079
</td>

<td>0.000923546
</td>

<td>-0.382156
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-163-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-163-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>164
</td>

<td>0.442921
</td>

<td>0.000710826
</td>

<td>-0.44221
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-164-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-164-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>165
</td>

<td>0.437807
</td>

<td>0.000684749
</td>

<td>-0.437122
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-165-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-165-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>166
</td>

<td>0.466093
</td>

<td>0.00259043
</td>

<td>-0.463503
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-166-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-166-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>167
</td>

<td>0.616669
</td>

<td>0.00131926
</td>

<td>-0.61535
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-167-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-167-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>168
</td>

<td>0.462218
</td>

<td>0.00131323
</td>

<td>-0.460905
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-168-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-168-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>169
</td>

<td>0.472848
</td>

<td>0.0272716
</td>

<td>-0.445577
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-169-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-169-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>170
</td>

<td>0.45551
</td>

<td>0.00400459
</td>

<td>-0.451506
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-170-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-170-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>171
</td>

<td>0.403932
</td>

<td>0.000492437
</td>

<td>-0.40344
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-171-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-171-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>172
</td>

<td>0.530191
</td>

<td>0.0859453
</td>

<td>-0.444246
</td>

<td>0.99993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-172-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-172-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>173
</td>

<td>0.3786
</td>

<td>0.0275205
</td>

<td>-0.351079
</td>

<td>0.999835
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-173-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-173-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>174
</td>

<td>0.538398
</td>

<td>0.0273508
</td>

<td>-0.511047
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-174-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-174-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>175
</td>

<td>0.459176
</td>

<td>0.0276548
</td>

<td>-0.431522
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-175-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-175-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>176
</td>

<td>0.452978
</td>

<td>0.0026746
</td>

<td>-0.450303
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-176-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-176-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>177
</td>

<td>0.552911
</td>

<td>0.000147167
</td>

<td>-0.552764
</td>

<td>0.996376
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-177-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-177-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>178
</td>

<td>0.396889
</td>

<td>0.0275882
</td>

<td>-0.369301
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-178-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-178-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>179
</td>

<td>0.47884
</td>

<td>0.000697581
</td>

<td>-0.478142
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-179-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-179-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>180
</td>

<td>0.552911
</td>

<td>0.000147167
</td>

<td>-0.552764
</td>

<td>0.996376
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-180-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-180-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>181
</td>

<td>0.559387
</td>

<td>0.00402685
</td>

<td>-0.555361
</td>

<td>0.995663
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-181-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-181-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>182
</td>

<td>0.536715
</td>

<td>0.0283175
</td>

<td>-0.508398
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-182-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-182-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>183
</td>

<td>0.457625
</td>

<td>0.00128507
</td>

<td>-0.45634
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-183-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-183-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>184
</td>

<td>0.433078
</td>

<td>0.000657657
</td>

<td>-0.432421
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-184-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-184-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>185
</td>

<td>0.273987
</td>

<td>0.00129325
</td>

<td>-0.272694
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-185-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-185-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>186
</td>

<td>0.310784
</td>

<td>0.000969433
</td>

<td>-0.309814
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-186-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-186-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>187
</td>

<td>0.621839
</td>

<td>0.00141686
</td>

<td>-0.620422
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-187-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-187-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>188
</td>

<td>0.425878
</td>

<td>0.0284475
</td>

<td>-0.39743
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-188-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-188-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>189
</td>

<td>0.416124
</td>

<td>0.00408722
</td>

<td>-0.412037
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-189-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-189-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>190
</td>

<td>0.465625
</td>

<td>0.000876849
</td>

<td>-0.464748
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-190-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-190-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>191
</td>

<td>0.465801
</td>

<td>0.0281743
</td>

<td>-0.437626
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-191-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-191-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>192
</td>

<td>0.416439
</td>

<td>0.0275387
</td>

<td>-0.388901
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-192-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-192-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>193
</td>

<td>0.953507
</td>

<td>0.0275879
</td>

<td>-0.925919
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-193-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-193-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>194
</td>

<td>0.463835
</td>

<td>0.00125547
</td>

<td>-0.46258
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-194-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-194-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>195
</td>

<td>0.7348
</td>

<td>0.00208657
</td>

<td>-0.732714
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-195-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-195-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>196
</td>

<td>1.06814
</td>

<td>0.0279046
</td>

<td>-1.04023
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-196-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-196-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>197
</td>

<td>0.612843
</td>

<td>0.00124186
</td>

<td>-0.611602
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-197-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-197-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>198
</td>

<td>0.507699
</td>

<td>0.000675423
</td>

<td>-0.507023
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-198-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-198-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>199
</td>

<td>0.439694
</td>

<td>0.14393
</td>

<td>-0.295764
</td>

<td>0.998723
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-199-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-199-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>200
</td>

<td>0.856066
</td>

<td>0.00144069
</td>

<td>-0.854625
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-200-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-200-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>201
</td>

<td>0.454451
</td>

<td>0.000663963
</td>

<td>-0.453787
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-201-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-201-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>202
</td>

<td>0.300476
</td>

<td>0.000519961
</td>

<td>-0.299956
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-202-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-202-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>203
</td>

<td>0.743583
</td>

<td>0.0007279
</td>

<td>-0.742855
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-203-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-203-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>204
</td>

<td>1.06593
</td>

<td>0.0276355
</td>

<td>-1.03829
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-204-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-204-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>205
</td>

<td>0.420618
</td>

<td>0.0322897
</td>

<td>-0.388328
</td>

<td>0.999965
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-205-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-205-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>206
</td>

<td>0.880536
</td>

<td>0.00474922
</td>

<td>-0.875786
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-206-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-206-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>207
</td>

<td>0.457733
</td>

<td>0.00408748
</td>

<td>-0.453646
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-207-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-207-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>208
</td>

<td>0.498463
</td>

<td>0.0272634
</td>

<td>-0.471199
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-208-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-208-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>209
</td>

<td>0.622864
</td>

<td>0.0274338
</td>

<td>-0.59543
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-209-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-209-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>210
</td>

<td>0.532415
</td>

<td>0.000947381
</td>

<td>-0.531467
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-210-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-210-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>211
</td>

<td>0.603461
</td>

<td>0.0699077
</td>

<td>-0.533554
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-211-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-211-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>212
</td>

<td>0.465892
</td>

<td>0.000876844
</td>

<td>-0.465015
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-212-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-212-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>213
</td>

<td>0.447862
</td>

<td>0.031805
</td>

<td>-0.416057
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-213-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-213-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>214
</td>

<td>0.466333
</td>

<td>0.00163328
</td>

<td>-0.4647
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-214-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-214-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>215
</td>

<td>0.952729
</td>

<td>0.00210261
</td>

<td>-0.950626
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-215-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-215-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>216
</td>

<td>0.481829
</td>

<td>0.00110251
</td>

<td>-0.480726
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-216-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-216-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>217
</td>

<td>0.734408
</td>

<td>0.0288644
</td>

<td>-0.705544
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-217-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-217-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>218
</td>

<td>0.46502
</td>

<td>0.00208238
</td>

<td>-0.462938
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-218-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-218-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>219
</td>

<td>0.464521
</td>

<td>0.000693866
</td>

<td>-0.463827
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-219-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-219-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>220
</td>

<td>0.454261
</td>

<td>0.0272776
</td>

<td>-0.426984
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-220-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-220-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>221
</td>

<td>0.404326
</td>

<td>0.0273699
</td>

<td>-0.376956
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-221-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-221-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>222
</td>

<td>0.421376
</td>

<td>0.000681032
</td>

<td>-0.420695
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-222-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-222-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>223
</td>

<td>0.423697
</td>

<td>0.0273073
</td>

<td>-0.396389
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-223-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-223-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>224
</td>

<td>0.452012
</td>

<td>0.000689009
</td>

<td>-0.451323
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-224-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-224-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>225
</td>

<td>0.476568
</td>

<td>0.0277851
</td>

<td>-0.448783
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-225-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-225-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>226
</td>

<td>0.472874
</td>

<td>0.0275405
</td>

<td>-0.445334
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-226-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-226-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>227
</td>

<td>0.449189
</td>

<td>0.000498213
</td>

<td>-0.448691
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-227-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-227-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>228
</td>

<td>0.463553
</td>

<td>0.00120517
</td>

<td>-0.462348
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-228-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-228-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>229
</td>

<td>0.743322
</td>

<td>0.000727831
</td>

<td>-0.742594
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-229-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-229-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>230
</td>

<td>0.446392
</td>

<td>0.0274636
</td>

<td>-0.418928
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-230-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-230-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>231
</td>

<td>0.483565
</td>

<td>0.0275623
</td>

<td>-0.456003
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-231-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-231-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>232
</td>

<td>0.459933
</td>

<td>0.000710856
</td>

<td>-0.459223
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-232-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-232-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>233
</td>

<td>0.447639
</td>

<td>0.0275353
</td>

<td>-0.420104
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-233-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-233-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>234
</td>

<td>0.724094
</td>

<td>0.0437609
</td>

<td>-0.680333
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-234-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-234-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>235
</td>

<td>0.453028
</td>

<td>0.0272621
</td>

<td>-0.425766
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-235-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-235-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>236
</td>

<td>0.406757
</td>

<td>0.00112873
</td>

<td>-0.405628
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-236-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-236-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>237
</td>

<td>0.481764
</td>

<td>0.027268
</td>

<td>-0.454496
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-237-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-237-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>238
</td>

<td>0.395531
</td>

<td>0.0286733
</td>

<td>-0.366858
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-238-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-238-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>239
</td>

<td>0.491486
</td>

<td>0.00126527
</td>

<td>-0.490221
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-239-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-239-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>240
</td>

<td>0.439859
</td>

<td>0.000920243
</td>

<td>-0.438939
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-240-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-240-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>241
</td>

<td>0.46274
</td>

<td>0.027366
</td>

<td>-0.435374
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-241-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-241-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>242
</td>

<td>0.451886
</td>

<td>0.00123307
</td>

<td>-0.450653
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-242-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-242-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>243
</td>

<td>0.454061
</td>

<td>0.00112769
</td>

<td>-0.452933
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-243-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-243-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>244
</td>

<td>0.461161
</td>

<td>0.0387241
</td>

<td>-0.422437
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-244-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-244-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>245
</td>

<td>0.42877
</td>

<td>0.000682249
</td>

<td>-0.428087
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-245-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-245-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>246
</td>

<td>0.351603
</td>

<td>0.000689284
</td>

<td>-0.350914
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-246-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-246-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>247
</td>

<td>0.559387
</td>

<td>0.00402685
</td>

<td>-0.555361
</td>

<td>0.995663
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-247-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-247-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>248
</td>

<td>0.36602
</td>

<td>0.0930534
</td>

<td>-0.272967
</td>

<td>0.999038
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-248-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-248-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>249
</td>

<td>0.4631
</td>

<td>0.0272506
</td>

<td>-0.43585
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-249-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-249-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>250
</td>

<td>0.991676
</td>

<td>0.0275829
</td>

<td>-0.964093
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-250-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-250-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>251
</td>

<td>0.396496
</td>

<td>0.000492782
</td>

<td>-0.396003
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-251-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-251-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>252
</td>

<td>0.470212
</td>

<td>0.0284896
</td>

<td>-0.441722
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-252-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-252-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>253
</td>

<td>0.437407
</td>

<td>0.0595559
</td>

<td>-0.377851
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-253-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-253-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>254
</td>

<td>0.461821
</td>

<td>0.0639665
</td>

<td>-0.397854
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-254-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-254-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>255
</td>

<td>0.46066
</td>

<td>0.00125433
</td>

<td>-0.459406
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-255-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-255-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>256
</td>

<td>0.350146
</td>

<td>0.000499072
</td>

<td>-0.349647
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-256-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-256-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>258
</td>

<td>0.457794
</td>

<td>0.027366
</td>

<td>-0.430428
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-258-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-258-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>259
</td>

<td>0.444006
</td>

<td>0.0278142
</td>

<td>-0.416192
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-259-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-259-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>260
</td>

<td>0.366734
</td>

<td>0.0275475
</td>

<td>-0.339186
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-260-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-260-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>261
</td>

<td>1.00356
</td>

<td>0.0284985
</td>

<td>-0.975059
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-261-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-261-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>262
</td>

<td>0.455505
</td>

<td>0.0278989
</td>

<td>-0.427606
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-262-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-262-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>263
</td>

<td>0.467034
</td>

<td>0.0273896
</td>

<td>-0.439645
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-263-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-263-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>264
</td>

<td>0.49711
</td>

<td>0.000695653
</td>

<td>-0.496414
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-264-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-264-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>265
</td>

<td>0.460304
</td>

<td>0.00252691
</td>

<td>-0.457777
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-265-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-265-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>266
</td>

<td>0.46481
</td>

<td>0.0276504
</td>

<td>-0.437159
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-266-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-266-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>267
</td>

<td>0.429889
</td>

<td>0.00125072
</td>

<td>-0.428639
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-267-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-267-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>268
</td>

<td>0.470877
</td>

<td>0.0011683
</td>

<td>-0.469709
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-268-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-268-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>269
</td>

<td>0.45959
</td>

<td>0.00420358
</td>

<td>-0.455386
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-269-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-269-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>270
</td>

<td>0.448084
</td>

<td>0.0337739
</td>

<td>-0.41431
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-270-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-270-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>271
</td>

<td>0.465017
</td>

<td>0.000731402
</td>

<td>-0.464285
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-271-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-271-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>272
</td>

<td>0.764194
</td>

<td>0.00138815
</td>

<td>-0.762806
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-272-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-272-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>273
</td>

<td>0.435067
</td>

<td>0.0281122
</td>

<td>-0.406954
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-273-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-273-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>274
</td>

<td>0.460942
</td>

<td>0.00192287
</td>

<td>-0.459019
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-274-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-274-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>275
</td>

<td>0.750913
</td>

<td>0.0330172
</td>

<td>-0.717896
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-275-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-275-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>276
</td>

<td>0.46466
</td>

<td>0.0273571
</td>

<td>-0.437303
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-276-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-276-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>277
</td>

<td>0.3967
</td>

<td>0.00156487
</td>

<td>-0.395135
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-277-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-277-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>278
</td>

<td>0.449871
</td>

<td>0.0272973
</td>

<td>-0.422573
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-278-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-278-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>279
</td>

<td>0.466477
</td>

<td>0.00117069
</td>

<td>-0.465307
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-279-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-279-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>280
</td>

<td>0.533198
</td>

<td>0.00070655
</td>

<td>-0.532492
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-280-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-280-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>281
</td>

<td>0.464526
</td>

<td>0.0272665
</td>

<td>-0.43726
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-281-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-281-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>282
</td>

<td>0.410172
</td>

<td>0.247769
</td>

<td>-0.162403
</td>

<td>0.943626
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-282-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-282-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>283
</td>

<td>0.362215
</td>

<td>0.000660873
</td>

<td>-0.361554
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-283-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-283-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>284
</td>

<td>0.459451
</td>

<td>0.00115329
</td>

<td>-0.458298
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-284-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-284-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>285
</td>

<td>0.802667
</td>

<td>0.00140152
</td>

<td>-0.801266
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-285-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-285-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>286
</td>

<td>0.440516
</td>

<td>0.000681436
</td>

<td>-0.439835
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-286-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-286-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>287
</td>

<td>1.05219
</td>

<td>0.00152473
</td>

<td>-1.05067
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-287-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-287-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>288
</td>

<td>0.879973
</td>

<td>0.000802963
</td>

<td>-0.87917
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-288-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-288-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>289
</td>

<td>0.453562
</td>

<td>0.000838603
</td>

<td>-0.452723
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-289-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-289-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>290
</td>

<td>1.04915
</td>

<td>0.00133315
</td>

<td>-1.04781
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-290-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-290-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>291
</td>

<td>0.465452
</td>

<td>0.00267997
</td>

<td>-0.462772
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-291-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-291-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>292
</td>

<td>0.394006
</td>

<td>0.0794724
</td>

<td>-0.314533
</td>

<td>0.999635
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-292-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-292-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>293
</td>

<td>0.450412
</td>

<td>0.000713475
</td>

<td>-0.449699
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-293-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-293-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>294
</td>

<td>0.441176
</td>

<td>0.00410385
</td>

<td>-0.437072
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-294-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-294-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>295
</td>

<td>0.46216
</td>

<td>0.00259912
</td>

<td>-0.459561
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-295-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-295-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>296
</td>

<td>0.603327
</td>

<td>0.0317838
</td>

<td>-0.571543
</td>

<td>0.999979
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-296-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-296-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>297
</td>

<td>0.45065
</td>

<td>0.00107846
</td>

<td>-0.449571
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-297-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-297-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>300
</td>

<td>0.243821
</td>

<td>0.000561652
</td>

<td>-0.243259
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-300-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-300-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>301
</td>

<td>0.451741
</td>

<td>0.0272352
</td>

<td>-0.424506
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-301-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-301-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>302
</td>

<td>1.03438
</td>

<td>0.0015937
</td>

<td>-1.03278
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-302-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-302-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>303
</td>

<td>0.552911
</td>

<td>0.000147167
</td>

<td>-0.552764
</td>

<td>0.996376
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-303-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-303-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>304
</td>

<td>0.471437
</td>

<td>0.027237
</td>

<td>-0.4442
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-304-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-304-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>305
</td>

<td>0.351202
</td>

<td>0.0274256
</td>

<td>-0.323776
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-305-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-305-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>306
</td>

<td>0.45899
</td>

<td>0.0282367
</td>

<td>-0.430754
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-306-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-306-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>307
</td>

<td>0.462757
</td>

<td>0.000874658
</td>

<td>-0.461883
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-307-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-307-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>308
</td>

<td>0.472654
</td>

<td>0.0287951
</td>

<td>-0.443858
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-308-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-308-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>309
</td>

<td>0.457341
</td>

<td>0.0670753
</td>

<td>-0.390266
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-309-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-309-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>310
</td>

<td>0.463027
</td>

<td>0.0337314
</td>

<td>-0.429296
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-310-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-310-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>311
</td>

<td>0.699881
</td>

<td>0.000741517
</td>

<td>-0.69914
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-311-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-311-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>312
</td>

<td>0.377555
</td>

<td>0.000490093
</td>

<td>-0.377065
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-312-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-312-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>313
</td>

<td>0.463612
</td>

<td>0.0303138
</td>

<td>-0.433299
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-313-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-313-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>314
</td>

<td>0.468964
</td>

<td>0.0273414
</td>

<td>-0.441623
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-314-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-314-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>315
</td>

<td>0.441585
</td>

<td>0.0514773
</td>

<td>-0.390108
</td>

<td>0.999861
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-315-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-315-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>316
</td>

<td>0.444876
</td>

<td>0.000497141
</td>

<td>-0.444379
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-316-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-316-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>317
</td>

<td>0.454152
</td>

<td>0.000693949
</td>

<td>-0.453458
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-317-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-317-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>318
</td>

<td>0.561198
</td>

<td>0.0960039
</td>

<td>-0.465194
</td>

<td>0.999614
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-318-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-318-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>319
</td>

<td>0.828295
</td>

<td>0.107734
</td>

<td>-0.720561
</td>

<td>0.999983
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-319-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-319-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>320
</td>

<td>0.616497
</td>

<td>0.0273135
</td>

<td>-0.589184
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-320-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-320-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>321
</td>

<td>0.470612
</td>

<td>0.000669049
</td>

<td>-0.469943
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-321-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-321-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>322
</td>

<td>0.442131
</td>

<td>0.0274756
</td>

<td>-0.414655
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-322-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-322-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>323
</td>

<td>0.44623
</td>

<td>0.000866883
</td>

<td>-0.445364
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-323-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-323-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>324
</td>

<td>0.349517
</td>

<td>0.00119909
</td>

<td>-0.348318
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-324-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-324-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>325
</td>

<td>0.469511
</td>

<td>0.0312559
</td>

<td>-0.438255
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-325-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-325-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>326
</td>

<td>0.656326
</td>

<td>0.0272704
</td>

<td>-0.629055
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-326-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-326-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>327
</td>

<td>0.464136
</td>

<td>0.0489501
</td>

<td>-0.415186
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-327-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-327-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>328
</td>

<td>0.866263
</td>

<td>0.0356638
</td>

<td>-0.830599
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-328-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-328-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>329
</td>

<td>0.373906
</td>

<td>0.027942
</td>

<td>-0.345964
</td>

<td>0.999987
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-329-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-329-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>330
</td>

<td>1.04319
</td>

<td>0.0508737
</td>

<td>-0.992314
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-330-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-330-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>331
</td>

<td>0.467035
</td>

<td>0.000778202
</td>

<td>-0.466257
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-331-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-331-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>332
</td>

<td>0.458673
</td>

<td>0.027254
</td>

<td>-0.431419
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-332-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-332-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>333
</td>

<td>0.290685
</td>

<td>0.118458
</td>

<td>-0.172226
</td>

<td>0.953468
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-333-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-333-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>334
</td>

<td>0.414121
</td>

<td>0.00118003
</td>

<td>-0.412941
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-334-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-334-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>335
</td>

<td>0.417342
</td>

<td>0.00132184
</td>

<td>-0.41602
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-335-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-335-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>336
</td>

<td>0.46323
</td>

<td>0.000839567
</td>

<td>-0.46239
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-336-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-336-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>337
</td>

<td>0.434527
</td>

<td>0.00086167
</td>

<td>-0.433665
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-337-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-337-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>338
</td>

<td>0.459449
</td>

<td>0.0272789
</td>

<td>-0.43217
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-338-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-338-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>339
</td>

<td>0.323859
</td>

<td>0.0275399
</td>

<td>-0.296319
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-339-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-339-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>340
</td>

<td>0.600943
</td>

<td>0.0276515
</td>

<td>-0.573291
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-340-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-340-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>341
</td>

<td>0.458189
</td>

<td>0.0284517
</td>

<td>-0.429738
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-341-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-341-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>342
</td>

<td>0.820668
</td>

<td>0.114865
</td>

<td>-0.705803
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-342-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-342-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>343
</td>

<td>0.465239
</td>

<td>0.0277172
</td>

<td>-0.437522
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-343-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-343-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>344
</td>

<td>0.470578
</td>

<td>0.0272437
</td>

<td>-0.443334
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-344-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-344-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>345
</td>

<td>0.324961
</td>

<td>0.0618021
</td>

<td>-0.263159
</td>

<td>0.998843
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-345-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-345-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>346
</td>

<td>0.442059
</td>

<td>0.00263177
</td>

<td>-0.439427
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-346-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-346-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>347
</td>

<td>0.435359
</td>

<td>0.000657498
</td>

<td>-0.434701
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-347-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-347-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>348
</td>

<td>0.491422
</td>

<td>0.0283585
</td>

<td>-0.463064
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-348-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-348-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>349
</td>

<td>0.444115
</td>

<td>0.00086546
</td>

<td>-0.44325
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-349-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-349-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>350
</td>

<td>0.440087
</td>

<td>0.000684221
</td>

<td>-0.439403
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-350-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-350-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>351
</td>

<td>0.421234
</td>

<td>0.0399837
</td>

<td>-0.381251
</td>

<td>0.999964
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-351-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-351-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>352
</td>

<td>0.464045
</td>

<td>0.0813419
</td>

<td>-0.382703
</td>

<td>0.999986
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-352-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-352-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>353
</td>

<td>0.649393
</td>

<td>0.0011813
</td>

<td>-0.648212
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-353-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-353-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>354
</td>

<td>0.389534
</td>

<td>0.0296815
</td>

<td>-0.359853
</td>

<td>0.999835
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-354-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-354-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>355
</td>

<td>0.512349
</td>

<td>0.0276992
</td>

<td>-0.48465
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-355-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-355-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>356
</td>

<td>0.469849
</td>

<td>0.00192883
</td>

<td>-0.46792
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-356-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-356-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>357
</td>

<td>0.480213
</td>

<td>0.000671098
</td>

<td>-0.479542
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-357-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-357-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>358
</td>

<td>0.271996
</td>

<td>0.0791059
</td>

<td>-0.19289
</td>

<td>0.937637
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-358-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-358-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>359
</td>

<td>0.149922
</td>

<td>0.000594329
</td>

<td>-0.149328
</td>

<td>0.999611
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-359-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-359-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>360
</td>

<td>0.34328
</td>

<td>0.000878798
</td>

<td>-0.342401
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-360-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-360-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>361
</td>

<td>0.234067
</td>

<td>0.00138212
</td>

<td>-0.232685
</td>

<td>0.999956
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-361-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-361-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>362
</td>

<td>0.432737
</td>

<td>0.0276904
</td>

<td>-0.405047
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-362-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-362-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>363
</td>

<td>0.464536
</td>

<td>0.000876133
</td>

<td>-0.46366
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-363-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-363-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>364
</td>

<td>1.078
</td>

<td>0.000900704
</td>

<td>-1.0771
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-364-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-364-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>365
</td>

<td>0.334191
</td>

<td>0.00050276
</td>

<td>-0.333688
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-365-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-365-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>366
</td>

<td>0.356128
</td>

<td>0.000497989
</td>

<td>-0.35563
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-366-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-366-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>367
</td>

<td>0.455024
</td>

<td>0.027361
</td>

<td>-0.427663
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-367-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-367-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>368
</td>

<td>0.478434
</td>

<td>0.0272379
</td>

<td>-0.451196
</td>

<td>0.991503
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-368-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-368-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>369
</td>

<td>0.37246
</td>

<td>0.0283474
</td>

<td>-0.344113
</td>

<td>0.999579
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-369-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-369-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>370
</td>

<td>0.559387
</td>

<td>0.00402685
</td>

<td>-0.555361
</td>

<td>0.995663
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-370-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-370-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>371
</td>

<td>0.458871
</td>

<td>0.000691854
</td>

<td>-0.458179
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-371-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-371-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>372
</td>

<td>0.481874
</td>

<td>0.0276771
</td>

<td>-0.454196
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-372-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-372-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>373
</td>

<td>0.468243
</td>

<td>0.00263809
</td>

<td>-0.465604
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-373-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-373-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>374
</td>

<td>0.322206
</td>

<td>0.000863397
</td>

<td>-0.321343
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-374-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-374-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>375
</td>

<td>0.393373
</td>

<td>0.0276954
</td>

<td>-0.365677
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-375-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-375-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>376
</td>

<td>0.465771
</td>

<td>0.001306
</td>

<td>-0.464465
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-376-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-376-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>379
</td>

<td>0.442292
</td>

<td>0.00191446
</td>

<td>-0.440377
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-379-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-379-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>380
</td>

<td>0.460861
</td>

<td>0.000925656
</td>

<td>-0.459936
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-380-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-380-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>381
</td>

<td>0.326686
</td>

<td>0.0274166
</td>

<td>-0.29927
</td>

<td>0.999982
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-381-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-381-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>382
</td>

<td>0.757449
</td>

<td>0.000896468
</td>

<td>-0.756552
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-382-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-382-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>383
</td>

<td>0.523253
</td>

<td>0.00114738
</td>

<td>-0.522106
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-383-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-383-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>384
</td>

<td>0.475549
</td>

<td>0.00143729
</td>

<td>-0.474112
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-384-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-384-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>385
</td>

<td>0.308113
</td>

<td>0.0012608
</td>

<td>-0.306853
</td>

<td>0.999916
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-385-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-385-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>386
</td>

<td>0.469669
</td>

<td>0.00130289
</td>

<td>-0.468366
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-386-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-386-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>387
</td>

<td>0.285919
</td>

<td>0.0029196
</td>

<td>-0.283
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-387-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-387-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>388
</td>

<td>0.483198
</td>

<td>0.0282555
</td>

<td>-0.454942
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-388-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-388-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>389
</td>

<td>0.466558
</td>

<td>0.0272749
</td>

<td>-0.439283
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-389-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-389-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>390
</td>

<td>0.366818
</td>

<td>0.0280211
</td>

<td>-0.338797
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-390-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-390-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>391
</td>

<td>0.535916
</td>

<td>0.0273841
</td>

<td>-0.508532
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-391-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-391-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>392
</td>

<td>0.440846
</td>

<td>0.000685546
</td>

<td>-0.440161
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-392-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-392-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>393
</td>

<td>0.22416
</td>

<td>0.027931
</td>

<td>-0.196229
</td>

<td>0.999867
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-393-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-393-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>394
</td>

<td>0.269288
</td>

<td>0.000709958
</td>

<td>-0.268578
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-394-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-394-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>395
</td>

<td>0.03734
</td>

<td>0.000417275
</td>

<td>-0.0369228
</td>

<td>0.991683
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-395-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-395-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>396
</td>

<td>0.281812
</td>

<td>0.000906745
</td>

<td>-0.280906
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-396-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-396-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>397
</td>

<td>0.159915
</td>

<td>0.00125696
</td>

<td>-0.158658
</td>

<td>0.998531
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-397-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-397-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>398
</td>

<td>0.0374481
</td>

<td>0.000484137
</td>

<td>-0.036964
</td>

<td>0.990457
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-398-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-398-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>399
</td>

<td>0.552911
</td>

<td>0.000147167
</td>

<td>-0.552764
</td>

<td>0.996376
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-399-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-399-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>400
</td>

<td>0.403206
</td>

<td>0.0278153
</td>

<td>-0.37539
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-400-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-400-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>402
</td>

<td>0.188559
</td>

<td>0.00225265
</td>

<td>-0.186306
</td>

<td>0.999837
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-402-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.33504401697069.1-402-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>
</TABLE></DIV>
</form></DIV><DIV Class='DateStamp'>Page generated on<i> 2016/3/8 20:22 GMT</i></DIV>	<div style = 'text-align:right;background-color:#FF5223;font-size:12px;padding-right:5px;'><i>UCSD Viral Evolution Group 2004-2016</i></div>
</div>
<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://datamonkey.org/piwik/" : "http://datamonkey.org/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 6);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://datamonkey.org/piwik/piwik.php?idsite=6" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
</body>
</html>
