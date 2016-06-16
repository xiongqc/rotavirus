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
<H1 CLASS='SuccessCap'>FUBAR analysis results</H1><DIV CLASS='RepClassCT'><b>Reports</b> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.620015151417517.1&task=13&format=0'>[HTML]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.620015151417517.1&task=13&format=1' target = '_blank'>[CSV]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.620015151417517.1&task=13&format=2'>[Plots]</a></DIV><DIV Class='RepClassBox'><b>Job ID:</b>upload.620015151417517.1 <a class = 'InfoLink' href='http://www.datamonkey.org/cgi-bin/datamonkey/jobStatus.pl?file=upload.620015151417517.1' TARGET = '_top'>[Information:Other analyses]</a></DIV><DIV CLASS='RepClassSM'><b>Data summary</b><p><b>475</b> sequences with <b>1</b> partition<DIV CLASS = 'ErrorTagSM'>These sequences have not been screened for recombination. Selection analyses of alignments with recombinants in them using a single tree may generate <u>misleading</u> results.</DIV><br clear=all><span style = 'font-size: x-small; margin-left:10px;'>Partition <b>1</b>: 214 codons 0 subs/site</span>
</DIV><DIV CLASS='RepClassSM'>FUBAR was run on a grid with <b>20</b> synonymous rates and <b>20</b> non-synonymous rates, yielding <b>400</b> total points, of which <b>190</b> represented <i>negative</i> selection, <b>20</b> - <i>neutral</i> evolution, and <b>190</b> - <i>positive</i> selection.<div style='width:650px;height:260px;spacing:10px;background-color:white;border: 1px solid black;'>
                   <span style='text-align:right; width:100%'>MCMC trace</span>
                   <div id="fubar_mcmc_trace" style = 'width:625px;height:225px;'></div></div><script type="text/javascript">
$(function () {
    var d1 = [];
    var mcmc = [
[1,-11886.3],
[2,-11894.2],
[3,-11897.7],
[4,-11879.5],
[5,-11871.4],
[6,-11883.7],
[7,-11889.2],
[8,-11871.3],
[9,-11888.4],
[10,-11889.8],
[11,-11880.5],
[12,-11887.4],
[13,-11879.6],
[14,-11886.8],
[15,-11896.1],
[16,-11885.2],
[17,-11899.2],
[18,-11878.0],
[19,-11872.6],
[20,-11894.8],
[21,-11879.2],
[22,-11891.0],
[23,-11882.5],
[24,-11883.6],
[25,-11889.8],
[26,-11893.3],
[27,-11873.9],
[28,-11886.2],
[29,-11886.9],
[30,-11888.1],
[31,-11887.0],
[32,-11886.9],
[33,-11881.2],
[34,-11889.6],
[35,-11886.7],
[36,-11890.0],
[37,-11870.0],
[38,-11876.5],
[39,-11876.5],
[40,-11885.6],
[41,-11889.6],
[42,-11872.9],
[43,-11882.9],
[44,-11889.0],
[45,-11866.6],
[46,-11877.0],
[47,-11874.8],
[48,-11893.0],
[49,-11883.6],
[50,-11902.3],
[51,-11886.3],
[52,-11871.0],
[53,-11873.9],
[54,-11886.1],
[55,-11883.6],
[56,-11883.2],
[57,-11892.4],
[58,-11883.3],
[59,-11880.1],
[60,-11887.5],
[61,-11900.6],
[62,-11891.3],
[63,-11892.4],
[64,-11887.5],
[65,-11884.6],
[66,-11876.8],
[67,-11892.0],
[68,-11868.0],
[69,-11891.3],
[70,-11868.2],
[71,-11883.5],
[72,-11898.7],
[73,-11869.4],
[74,-11886.7],
[75,-11870.1],
[76,-11885.5],
[77,-11880.7],
[78,-11883.7],
[79,-11882.4],
[80,-11880.4],
[81,-11889.8],
[82,-11889.7],
[83,-11875.9],
[84,-11886.4],
[85,-11901.6],
[86,-11886.4],
[87,-11888.9],
[88,-11870.4],
[89,-11880.0],
[90,-11889.7],
[91,-11873.1],
[92,-11872.3],
[93,-11880.8],
[94,-11890.7],
[95,-11880.6],
[96,-11885.0],
[97,-11876.0],
[98,-11878.9],
[99,-11890.1],
[100,-11880.7],];    
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
                    <dt class = 'DT1'> <b>Mean values.</b> &beta; = 0.80,  &beta;-&alpha; = -0.20, &omega; =  6.70</dt>
                    <dt class = 'DT2'> <b>Weights.</b> Pr[&alpha; &gt; &beta;] = 0.670, Pr[&alpha; = &beta;] = 0.056, Pr[&alpha; &lt; &beta;] = 0.274</dt>
                 </dl><IMG SRC = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-0-png&mode=5' WIDTH = '640' HEIGHT = '480' BORDER = '1'><p><a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-0-svg&mode=4'>[SVG]</a>&nbsp;<a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-grid-svg&mode=4'>[FUBAR grid]</a>&nbsp;</p></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found <b>2</b> sites with evidence of pervasive diversifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.620015151417517.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'><p><DIV CLASS = 'HelpfulTips'>This summary table reports the means of posterior distribution of synonymous (&alpha;) and non-synonymous (&beta;) substitution rates over <b>sites</b>, as well as the mean posterior probability for &omega; (=&beta;/&alpha;) &gt; 1 at a site.					   Indications of chain convergence and sampling variability for predictions at a given site are provided by the potential scale reduction factor (PSRF; if close to 1, then the MCMC chains have sufficiently converged), 					   and the effective sample size N<sub>eff</sub>.					   </DIV><DIV CLASS = 'RepClassBox'>The expected number of false positives is <span style = 'color:red;'>0.13 (95% CI: [0-1])</span>.</DIV><DIV CLASS='RepClassSM'>
<TABLE BORDER = '0'><TR CLASS='TRReport' style = 'font-size:small'><td>Codon</td>
<td>&alpha;</td>
<td>&beta;</td>
<td>&beta;-&alpha;</td>
<td>Posterior Prob &beta;&gt;&alpha;</td>
<td>Emp. Bayes Factor</td>
<td>PSRF</td>
<td>N<sub>eff</sub></td>
<td>3D rate plot<span class = 'INFO' onmouseover = "Tip('The SVG format may not display correctly in all browsers')">?</span></td></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>24
</td>

<td>0.0432504
</td>

<td>0.151884
</td>

<td>0.108634
</td>

<td>0.91406
</td>

<td>28.247
</td>

<td>1.00041
</td>

<td>924.353
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-24-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-24-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>27
</td>

<td>0.020655
</td>

<td>0.116596
</td>

<td>0.095941
</td>

<td>0.951089
</td>

<td>51.6431
</td>

<td>0.998171
</td>

<td>1570.39
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-27-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-27-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>
</TABLE></DIV>
</form></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found <b>139</b> sites with evidence of pervasive purifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.620015151417517.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'><p><DIV CLASS = 'HelpfulTips'>This summary table reports the means of posterior distribution of synonymous (&alpha;) and non-synonymous (&beta;) substitution rates over <b>sites</b>, as well as the mean posterior probability for &omega; (=&beta;/&alpha;) &lt; 1 at a site.</DIV><DIV CLASS='RepClassSM'>
<TABLE BORDER = '0'><TR CLASS='TRReport' style = 'font-size:small'><td>Codon</td>
<td>&alpha;</td>
<td>&beta;</td>
<td>&beta;-&alpha;</td>
<td>Posterior Prob &beta;&lt;&alpha;</td>
<td>3D rate plot<span class = 'INFO' onmouseover = "Tip('The SVG format may not display correctly in all browsers')">?</span></td></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>4
</td>

<td>0.158353
</td>

<td>0.00493509
</td>

<td>-0.153418
</td>

<td>0.999163
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-4-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-4-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>6
</td>

<td>0.244352
</td>

<td>0.0448902
</td>

<td>-0.199462
</td>

<td>0.997373
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-6-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-6-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>7
</td>

<td>0.327001
</td>

<td>0.0317451
</td>

<td>-0.295256
</td>

<td>0.999989
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-7-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-7-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>11
</td>

<td>0.270248
</td>

<td>0.00838176
</td>

<td>-0.261866
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-11-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-11-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>12
</td>

<td>0.218177
</td>

<td>0.0132834
</td>

<td>-0.204893
</td>

<td>0.998899
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-12-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-12-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>13
</td>

<td>0.293495
</td>

<td>0.0402524
</td>

<td>-0.253243
</td>

<td>0.998913
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-13-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-13-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>15
</td>

<td>0.137357
</td>

<td>0.0378879
</td>

<td>-0.0994695
</td>

<td>0.907403
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-15-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-15-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>16
</td>

<td>0.407147
</td>

<td>0.0387209
</td>

<td>-0.368426
</td>

<td>0.999739
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-16-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-16-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>17
</td>

<td>1.57785
</td>

<td>0.0967008
</td>

<td>-1.48115
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-17-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-17-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>18
</td>

<td>0.783987
</td>

<td>0.0584599
</td>

<td>-0.725527
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-18-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-18-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>19
</td>

<td>0.755796
</td>

<td>0.0471341
</td>

<td>-0.708662
</td>

<td>0.999989
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-19-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-19-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>20
</td>

<td>0.32056
</td>

<td>0.100927
</td>

<td>-0.219633
</td>

<td>0.969049
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-20-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-20-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>22
</td>

<td>0.157043
</td>

<td>0.0330866
</td>

<td>-0.123957
</td>

<td>0.948489
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-22-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-22-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>23
</td>

<td>0.355058
</td>

<td>0.0967021
</td>

<td>-0.258356
</td>

<td>0.992728
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-23-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-23-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>26
</td>

<td>0.19858
</td>

<td>0.0602128
</td>

<td>-0.138367
</td>

<td>0.947885
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-26-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-26-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>28
</td>

<td>0.172889
</td>

<td>0.0120675
</td>

<td>-0.160821
</td>

<td>0.995987
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-28-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-28-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>31
</td>

<td>0.0724911
</td>

<td>0.00619997
</td>

<td>-0.0662911
</td>

<td>0.962835
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-31-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-31-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>32
</td>

<td>0.0631487
</td>

<td>0.00309688
</td>

<td>-0.0600518
</td>

<td>0.978355
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-32-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-32-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>34
</td>

<td>0.112238
</td>

<td>0.00793723
</td>

<td>-0.104301
</td>

<td>0.984586
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-34-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-34-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>35
</td>

<td>0.0748551
</td>

<td>0.00371213
</td>

<td>-0.071143
</td>

<td>0.98033
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-35-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-35-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>37
</td>

<td>0.068192
</td>

<td>0.00336619
</td>

<td>-0.0648258
</td>

<td>0.9846
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-37-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-37-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>38
</td>

<td>0.246408
</td>

<td>0.0620104
</td>

<td>-0.184398
</td>

<td>0.977319
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-38-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-38-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>40
</td>

<td>0.290574
</td>

<td>0.0546698
</td>

<td>-0.235904
</td>

<td>0.994818
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-40-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-40-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>41
</td>

<td>0.292181
</td>

<td>0.0190855
</td>

<td>-0.273096
</td>

<td>0.999925
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-41-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-41-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>44
</td>

<td>0.455022
</td>

<td>0.0600198
</td>

<td>-0.395002
</td>

<td>0.999821
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-44-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-44-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>45
</td>

<td>0.323002
</td>

<td>0.103964
</td>

<td>-0.219038
</td>

<td>0.960007
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-45-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-45-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>47
</td>

<td>0.395904
</td>

<td>0.0572907
</td>

<td>-0.338614
</td>

<td>0.998511
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-47-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-47-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>48
</td>

<td>0.787422
</td>

<td>0.00959803
</td>

<td>-0.777824
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-48-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-48-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>49
</td>

<td>0.102806
</td>

<td>0.00556682
</td>

<td>-0.0972391
</td>

<td>0.994284
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-49-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-49-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>51
</td>

<td>0.707804
</td>

<td>0.033768
</td>

<td>-0.674036
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-51-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-51-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>52
</td>

<td>0.206896
</td>

<td>0.0146559
</td>

<td>-0.19224
</td>

<td>0.998835
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-52-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-52-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>53
</td>

<td>0.747328
</td>

<td>0.0243557
</td>

<td>-0.722973
</td>

<td>0.921321
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-53-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-53-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>54
</td>

<td>0.32827
</td>

<td>0.0203191
</td>

<td>-0.307951
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-54-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-54-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>55
</td>

<td>0.155195
</td>

<td>0.0421111
</td>

<td>-0.113084
</td>

<td>0.948873
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-55-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-55-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>56
</td>

<td>0.226929
</td>

<td>0.0118319
</td>

<td>-0.215097
</td>

<td>0.999697
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-56-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-56-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>59
</td>

<td>0.118689
</td>

<td>0.006571
</td>

<td>-0.112118
</td>

<td>0.993249
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-59-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-59-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>60
</td>

<td>0.132433
</td>

<td>0.00622188
</td>

<td>-0.126211
</td>

<td>0.993115
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-60-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-60-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>63
</td>

<td>0.136319
</td>

<td>0.00480143
</td>

<td>-0.131518
</td>

<td>0.997485
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-63-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-63-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>67
</td>

<td>0.0706033
</td>

<td>0.00404889
</td>

<td>-0.0665544
</td>

<td>0.976003
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-67-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-67-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>68
</td>

<td>0.168131
</td>

<td>0.0118674
</td>

<td>-0.156264
</td>

<td>0.995624
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-68-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-68-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>70
</td>

<td>0.80671
</td>

<td>0.0100576
</td>

<td>-0.796653
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-70-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-70-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>72
</td>

<td>0.0526406
</td>

<td>0.0024144
</td>

<td>-0.0502262
</td>

<td>0.981573
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-72-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-72-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>74
</td>

<td>0.749833
</td>

<td>0.0275372
</td>

<td>-0.722295
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-74-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-74-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>75
</td>

<td>0.134838
</td>

<td>0.00611892
</td>

<td>-0.128719
</td>

<td>0.993606
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-75-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-75-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>77
</td>

<td>0.0748551
</td>

<td>0.00371213
</td>

<td>-0.071143
</td>

<td>0.98033
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-77-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-77-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>79
</td>

<td>0.0482254
</td>

<td>0.00603777
</td>

<td>-0.0421876
</td>

<td>0.931259
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-79-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-79-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>83
</td>

<td>0.050839
</td>

<td>0.00511863
</td>

<td>-0.0457204
</td>

<td>0.946535
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-83-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-83-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>85
</td>

<td>0.198259
</td>

<td>0.00894733
</td>

<td>-0.189312
</td>

<td>0.998174
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-85-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-85-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>86
</td>

<td>0.1172
</td>

<td>0.0309003
</td>

<td>-0.0862993
</td>

<td>0.910933
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-86-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-86-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>87
</td>

<td>0.707235
</td>

<td>0.0105201
</td>

<td>-0.696715
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-87-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-87-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>89
</td>

<td>0.0536342
</td>

<td>0.00277862
</td>

<td>-0.0508556
</td>

<td>0.979285
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-89-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-89-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>95
</td>

<td>0.305516
</td>

<td>0.058571
</td>

<td>-0.246945
</td>

<td>0.996819
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-95-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-95-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>96
</td>

<td>0.749131
</td>

<td>0.262683
</td>

<td>-0.486448
</td>

<td>0.971602
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-96-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-96-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>99
</td>

<td>0.117859
</td>

<td>0.00979659
</td>

<td>-0.108062
</td>

<td>0.986231
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-99-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-99-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>100
</td>

<td>0.214422
</td>

<td>0.0379552
</td>

<td>-0.176466
</td>

<td>0.989955
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-100-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-100-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>101
</td>

<td>0.260857
</td>

<td>0.079842
</td>

<td>-0.181015
</td>

<td>0.968906
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-101-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-101-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>102
</td>

<td>0.789927
</td>

<td>0.0273874
</td>

<td>-0.762539
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-102-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-102-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>103
</td>

<td>0.198708
</td>

<td>0.0839038
</td>

<td>-0.114804
</td>

<td>0.912359
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-103-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-103-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>104
</td>

<td>0.24181
</td>

<td>0.0390561
</td>

<td>-0.202754
</td>

<td>0.996027
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-104-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-104-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>105
</td>

<td>0.279341
</td>

<td>0.0308483
</td>

<td>-0.248493
</td>

<td>0.999886
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-105-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-105-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>106
</td>

<td>0.378197
</td>

<td>0.0720836
</td>

<td>-0.306113
</td>

<td>0.999679
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-106-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-106-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>107
</td>

<td>0.0867961
</td>

<td>0.00482415
</td>

<td>-0.0819719
</td>

<td>0.979711
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-107-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-107-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>108
</td>

<td>0.134403
</td>

<td>0.0142786
</td>

<td>-0.120125
</td>

<td>0.975556
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-108-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-108-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>111
</td>

<td>0.0593057
</td>

<td>0.00404522
</td>

<td>-0.0552604
</td>

<td>0.974152
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-111-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-111-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>112
</td>

<td>0.127692
</td>

<td>0.00890467
</td>

<td>-0.118787
</td>

<td>0.994747
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-112-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-112-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>113
</td>

<td>0.810494
</td>

<td>0.0666574
</td>

<td>-0.743837
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-113-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-113-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>114
</td>

<td>0.821737
</td>

<td>0.244002
</td>

<td>-0.577735
</td>

<td>0.99992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-114-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-114-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>115
</td>

<td>0.207344
</td>

<td>0.0501399
</td>

<td>-0.157205
</td>

<td>0.960216
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-115-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-115-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>116
</td>

<td>0.451975
</td>

<td>0.0581433
</td>

<td>-0.393832
</td>

<td>0.999702
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-116-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-116-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>117
</td>

<td>0.797908
</td>

<td>0.178181
</td>

<td>-0.619728
</td>

<td>0.999886
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-117-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-117-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>118
</td>

<td>0.633985
</td>

<td>0.111954
</td>

<td>-0.522032
</td>

<td>0.99623
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-118-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-118-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>119
</td>

<td>0.785896
</td>

<td>0.096536
</td>

<td>-0.68936
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-119-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-119-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>120
</td>

<td>0.669212
</td>

<td>0.12516
</td>

<td>-0.544052
</td>

<td>0.996018
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-120-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-120-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>121
</td>

<td>0.855919
</td>

<td>0.0382481
</td>

<td>-0.817671
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-121-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-121-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>122
</td>

<td>0.334695
</td>

<td>0.141283
</td>

<td>-0.193412
</td>

<td>0.92497
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-122-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-122-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>123
</td>

<td>0.94396
</td>

<td>0.141103
</td>

<td>-0.802856
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-123-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-123-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>124
</td>

<td>0.600547
</td>

<td>0.0104541
</td>

<td>-0.590093
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-124-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-124-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>125
</td>

<td>0.319995
</td>

<td>0.016415
</td>

<td>-0.30358
</td>

<td>0.999914
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-125-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-125-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>126
</td>

<td>0.788013
</td>

<td>0.0458209
</td>

<td>-0.742192
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-126-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-126-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>127
</td>

<td>0.484053
</td>

<td>0.154273
</td>

<td>-0.329781
</td>

<td>0.940563
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-127-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-127-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>128
</td>

<td>0.754319
</td>

<td>0.0519119
</td>

<td>-0.702407
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-128-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-128-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>129
</td>

<td>1.07715
</td>

<td>0.0966885
</td>

<td>-0.980458
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-129-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-129-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>130
</td>

<td>0.31177
</td>

<td>0.0989094
</td>

<td>-0.21286
</td>

<td>0.976512
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-130-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-130-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>131
</td>

<td>0.739632
</td>

<td>0.0106074
</td>

<td>-0.729025
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-131-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-131-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>136
</td>

<td>0.796767
</td>

<td>0.119702
</td>

<td>-0.677065
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-136-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-136-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>137
</td>

<td>0.258657
</td>

<td>0.108961
</td>

<td>-0.149696
</td>

<td>0.945305
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-137-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-137-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>139
</td>

<td>0.239884
</td>

<td>0.0675816
</td>

<td>-0.172303
</td>

<td>0.962981
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-139-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-139-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>140
</td>

<td>0.279432
</td>

<td>0.129765
</td>

<td>-0.149666
</td>

<td>0.948409
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-140-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-140-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>141
</td>

<td>0.999556
</td>

<td>0.18023
</td>

<td>-0.819326
</td>

<td>0.921503
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-141-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-141-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>152
</td>

<td>0.84026
</td>

<td>0.0989774
</td>

<td>-0.741283
</td>

<td>0.991658
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-152-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-152-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>153
</td>

<td>0.792305
</td>

<td>0.154351
</td>

<td>-0.637954
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-153-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-153-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>154
</td>

<td>0.953639
</td>

<td>0.275884
</td>

<td>-0.677755
</td>

<td>0.999768
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-154-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-154-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>155
</td>

<td>0.377101
</td>

<td>0.143738
</td>

<td>-0.233363
</td>

<td>0.965499
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-155-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-155-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>160
</td>

<td>0.621094
</td>

<td>0.0612331
</td>

<td>-0.559861
</td>

<td>0.999689
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-160-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-160-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>163
</td>

<td>0.254617
</td>

<td>0.0458472
</td>

<td>-0.20877
</td>

<td>0.995842
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-163-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-163-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>164
</td>

<td>0.790137
</td>

<td>0.00826186
</td>

<td>-0.781875
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-164-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-164-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>166
</td>

<td>0.724465
</td>

<td>0.0458252
</td>

<td>-0.67864
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-166-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-166-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>167
</td>

<td>0.21948
</td>

<td>0.00903107
</td>

<td>-0.210449
</td>

<td>0.999407
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-167-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-167-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>168
</td>

<td>0.235044
</td>

<td>0.0556395
</td>

<td>-0.179405
</td>

<td>0.983871
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-168-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-168-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>169
</td>

<td>0.634005
</td>

<td>0.054412
</td>

<td>-0.579593
</td>

<td>0.999818
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-169-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-169-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>170
</td>

<td>0.778075
</td>

<td>0.0349447
</td>

<td>-0.74313
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-170-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-170-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>171
</td>

<td>0.773873
</td>

<td>0.0101212
</td>

<td>-0.763752
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-171-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-171-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>172
</td>

<td>0.534677
</td>

<td>0.172291
</td>

<td>-0.362386
</td>

<td>0.959
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-172-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-172-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>173
</td>

<td>0.711136
</td>

<td>0.0848141
</td>

<td>-0.626322
</td>

<td>0.999657
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-173-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-173-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>174
</td>

<td>0.771592
</td>

<td>0.100328
</td>

<td>-0.671263
</td>

<td>0.99994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-174-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-174-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>175
</td>

<td>0.788392
</td>

<td>0.101867
</td>

<td>-0.686526
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-175-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-175-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>177
</td>

<td>0.789589
</td>

<td>0.011323
</td>

<td>-0.778266
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-177-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-177-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>178
</td>

<td>0.549914
</td>

<td>0.041327
</td>

<td>-0.508587
</td>

<td>0.999842
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-178-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-178-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>179
</td>

<td>0.426957
</td>

<td>0.042665
</td>

<td>-0.384292
</td>

<td>0.999397
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-179-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-179-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>180
</td>

<td>0.346622
</td>

<td>0.0164422
</td>

<td>-0.33018
</td>

<td>0.999932
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-180-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-180-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>181
</td>

<td>0.783814
</td>

<td>0.0100904
</td>

<td>-0.773724
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-181-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-181-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>182
</td>

<td>0.719018
</td>

<td>0.0275847
</td>

<td>-0.691434
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-182-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-182-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>183
</td>

<td>0.260568
</td>

<td>0.00921515
</td>

<td>-0.251353
</td>

<td>0.999662
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-183-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-183-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>184
</td>

<td>0.587031
</td>

<td>0.0320722
</td>

<td>-0.554959
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-184-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-184-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>185
</td>

<td>0.788142
</td>

<td>0.0333602
</td>

<td>-0.754782
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-185-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-185-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>186
</td>

<td>0.285152
</td>

<td>0.0498096
</td>

<td>-0.235343
</td>

<td>0.993945
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-186-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-186-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>187
</td>

<td>0.805115
</td>

<td>0.030548
</td>

<td>-0.774567
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-187-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-187-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>188
</td>

<td>0.831763
</td>

<td>0.0627243
</td>

<td>-0.769039
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-188-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-188-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>189
</td>

<td>0.790255
</td>

<td>0.0417206
</td>

<td>-0.748534
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-189-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-189-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>190
</td>

<td>0.788904
</td>

<td>0.0101095
</td>

<td>-0.778794
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-190-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-190-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>191
</td>

<td>0.630061
</td>

<td>0.0343537
</td>

<td>-0.595707
</td>

<td>0.99998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-191-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-191-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>192
</td>

<td>0.784632
</td>

<td>0.0152485
</td>

<td>-0.769384
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-192-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-192-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>193
</td>

<td>0.754637
</td>

<td>0.0122949
</td>

<td>-0.742342
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-193-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-193-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>195
</td>

<td>0.698503
</td>

<td>0.0460287
</td>

<td>-0.652474
</td>

<td>0.999989
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-195-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-195-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>196
</td>

<td>0.76376
</td>

<td>0.0154209
</td>

<td>-0.748339
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-196-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-196-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>197
</td>

<td>0.769169
</td>

<td>0.0100221
</td>

<td>-0.759147
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-197-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-197-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>199
</td>

<td>0.789379
</td>

<td>0.011844
</td>

<td>-0.777535
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-199-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-199-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>200
</td>

<td>0.697383
</td>

<td>0.00854775
</td>

<td>-0.688835
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-200-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-200-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>202
</td>

<td>0.271378
</td>

<td>0.0627361
</td>

<td>-0.208642
</td>

<td>0.99411
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-202-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-202-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>203
</td>

<td>1.82041
</td>

<td>0.0245956
</td>

<td>-1.79581
</td>

<td>0.940507
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-203-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-203-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>204
</td>

<td>0.788649
</td>

<td>0.0804599
</td>

<td>-0.708189
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-204-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-204-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>206
</td>

<td>0.38067
</td>

<td>0.0713926
</td>

<td>-0.309278
</td>

<td>0.999793
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-206-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-206-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>207
</td>

<td>0.537998
</td>

<td>0.0534821
</td>

<td>-0.484516
</td>

<td>0.999916
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-207-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-207-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>208
</td>

<td>10.4461
</td>

<td>0.0310914
</td>

<td>-10.415
</td>

<td>0.999888
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-208-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-208-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>209
</td>

<td>0.327604
</td>

<td>0.0732771
</td>

<td>-0.254327
</td>

<td>0.983499
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-209-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-209-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>210
</td>

<td>0.323474
</td>

<td>0.0771931
</td>

<td>-0.246281
</td>

<td>0.997424
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-210-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-210-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>211
</td>

<td>0.383115
</td>

<td>0.0323239
</td>

<td>-0.350791
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-211-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-211-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>212
</td>

<td>0.751061
</td>

<td>0.0550677
</td>

<td>-0.695993
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-212-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-212-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>213
</td>

<td>0.307228
</td>

<td>0.0649722
</td>

<td>-0.242256
</td>

<td>0.983452
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-213-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.620015151417517.1-213-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>
</TABLE></DIV>
</form></DIV><DIV Class='DateStamp'>Page generated on<i> 2016/3/5 22:49 GMT</i></DIV>	<div style = 'text-align:right;background-color:#FF5223;font-size:12px;padding-right:5px;'><i>UCSD Viral Evolution Group 2004-2016</i></div>
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
