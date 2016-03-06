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
<H1 CLASS='SuccessCap'>FUBAR analysis results</H1><DIV CLASS='RepClassCT'><b>Reports</b> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.8276751973739.1&task=13&format=0'>[HTML]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.8276751973739.1&task=13&format=1' target = '_blank'>[CSV]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.8276751973739.1&task=13&format=2'>[Plots]</a></DIV><DIV Class='RepClassBox'><b>Job ID:</b>upload.8276751973739.1 <a class = 'InfoLink' href='http://www.datamonkey.org/cgi-bin/datamonkey/jobStatus.pl?file=upload.8276751973739.1' TARGET = '_top'>[Information:Other analyses]</a></DIV><DIV CLASS='RepClassSM'><b>Data summary</b><p><b>497</b> sequences with <b>1</b> partition<DIV CLASS = 'ErrorTagSM'>These sequences have not been screened for recombination. Selection analyses of alignments with recombinants in them using a single tree may generate <u>misleading</u> results.</DIV><br clear=all><span style = 'font-size: x-small; margin-left:10px;'>Partition <b>1</b>: 882 codons 0 subs/site</span>
</DIV><DIV CLASS='RepClassSM'>FUBAR was run on a grid with <b>20</b> synonymous rates and <b>20</b> non-synonymous rates, yielding <b>400</b> total points, of which <b>190</b> represented <i>negative</i> selection, <b>20</b> - <i>neutral</i> evolution, and <b>190</b> - <i>positive</i> selection.<div style='width:650px;height:260px;spacing:10px;background-color:white;border: 1px solid black;'>
                   <span style='text-align:right; width:100%'>MCMC trace</span>
                   <div id="fubar_mcmc_trace" style = 'width:625px;height:225px;'></div></div><script type="text/javascript">
$(function () {
    var d1 = [];
    var mcmc = [
[1,-57151.4],
[2,-57161.9],
[3,-57154.0],
[4,-57135.7],
[5,-57157.7],
[6,-57137.2],
[7,-57154.5],
[8,-57167.5],
[9,-57149.1],
[10,-57141.4],
[11,-57150.5],
[12,-57151.2],
[13,-57154.3],
[14,-57157.4],
[15,-57144.5],
[16,-57128.8],
[17,-57152.9],
[18,-57168.2],
[19,-57131.8],
[20,-57153.2],
[21,-57147.3],
[22,-57156.7],
[23,-57153.6],
[24,-57150.6],
[25,-57160.1],
[26,-57150.8],
[27,-57140.1],
[28,-57143.0],
[29,-57151.2],
[30,-57158.6],
[31,-57143.5],
[32,-57158.0],
[33,-57143.0],
[34,-57135.2],
[35,-57155.6],
[36,-57144.8],
[37,-57143.3],
[38,-57134.9],
[39,-57150.0],
[40,-57134.1],
[41,-57134.7],
[42,-57152.5],
[43,-57139.1],
[44,-57130.8],
[45,-57144.2],
[46,-57159.7],
[47,-57152.9],
[48,-57161.5],
[49,-57156.1],
[50,-57158.7],
[51,-57148.3],
[52,-57151.9],
[53,-57138.0],
[54,-57145.6],
[55,-57145.4],
[56,-57145.8],
[57,-57140.9],
[58,-57128.7],
[59,-57139.5],
[60,-57134.6],
[61,-57143.3],
[62,-57141.5],
[63,-57140.9],
[64,-57132.5],
[65,-57127.4],
[66,-57145.7],
[67,-57143.0],
[68,-57170.7],
[69,-57132.5],
[70,-57146.1],
[71,-57144.8],
[72,-57133.4],
[73,-57153.4],
[74,-57134.5],
[75,-57140.3],
[76,-57135.9],
[77,-57134.6],
[78,-57130.0],
[79,-57130.3],
[80,-57167.8],
[81,-57139.9],
[82,-57142.9],
[83,-57141.4],
[84,-57165.1],
[85,-57149.7],
[86,-57145.6],
[87,-57152.0],
[88,-57153.5],
[89,-57170.0],
[90,-57142.2],
[91,-57153.4],
[92,-57139.7],
[93,-57168.5],
[94,-57145.3],
[95,-57143.9],
[96,-57135.1],
[97,-57132.2],
[98,-57142.0],
[99,-57146.8],
[100,-57160.8],];    
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
                    <dt class = 'DT1'> <b>Mean values.</b> &beta; = 0.59,  &beta;-&alpha; = -0.41, &omega; =  2.79</dt>
                    <dt class = 'DT2'> <b>Weights.</b> Pr[&alpha; &gt; &beta;] = 0.878, Pr[&alpha; = &beta;] = 0.013, Pr[&alpha; &lt; &beta;] = 0.109</dt>
                 </dl><IMG SRC = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-0-png&mode=5' WIDTH = '640' HEIGHT = '480' BORDER = '1'><p><a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-0-svg&mode=4'>[SVG]</a>&nbsp;<a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-grid-svg&mode=4'>[FUBAR grid]</a>&nbsp;</p></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found <b>2</b> sites with evidence of pervasive diversifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.8276751973739.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'><p><DIV CLASS = 'HelpfulTips'>This summary table reports the means of posterior distribution of synonymous (&alpha;) and non-synonymous (&beta;) substitution rates over <b>sites</b>, as well as the mean posterior probability for &omega; (=&beta;/&alpha;) &gt; 1 at a site.					   Indications of chain convergence and sampling variability for predictions at a given site are provided by the potential scale reduction factor (PSRF; if close to 1, then the MCMC chains have sufficiently converged), 					   and the effective sample size N<sub>eff</sub>.					   </DIV><DIV CLASS = 'RepClassBox'>The expected number of false positives is <span style = 'color:red;'>0.08 (95% CI: [0-1])</span>.</DIV><DIV CLASS='RepClassSM'>
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
<td>2
</td>

<td>0.0278726
</td>

<td>0.35014
</td>

<td>0.322267
</td>

<td>0.998581
</td>

<td>5779.8
</td>

<td>1.03878
</td>

<td>121.155
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-2-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-2-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>161
</td>

<td>0.288234
</td>

<td>0.486876
</td>

<td>0.198643
</td>

<td>0.919076
</td>

<td>93.268
</td>

<td>0.999605
</td>

<td>1084.95
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-161-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-161-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>
</TABLE></DIV>
</form></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found <b>759</b> sites with evidence of pervasive purifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.8276751973739.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'><p><DIV CLASS = 'HelpfulTips'>This summary table reports the means of posterior distribution of synonymous (&alpha;) and non-synonymous (&beta;) substitution rates over <b>sites</b>, as well as the mean posterior probability for &omega; (=&beta;/&alpha;) &lt; 1 at a site.</DIV><DIV CLASS='RepClassSM'>
<TABLE BORDER = '0'><TR CLASS='TRReport' style = 'font-size:small'><td>Codon</td>
<td>&alpha;</td>
<td>&beta;</td>
<td>&beta;-&alpha;</td>
<td>Posterior Prob &beta;&lt;&alpha;</td>
<td>3D rate plot<span class = 'INFO' onmouseover = "Tip('The SVG format may not display correctly in all browsers')">?</span></td></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>1
</td>

<td>0.719231
</td>

<td>0.00126235
</td>

<td>-0.717969
</td>

<td>0.996147
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-1-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-1-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>3
</td>

<td>1.30475
</td>

<td>0.0501764
</td>

<td>-1.25457
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-3-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-3-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>6
</td>

<td>0.210006
</td>

<td>0.0409962
</td>

<td>-0.16901
</td>

<td>0.93127
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-6-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-6-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>7
</td>

<td>0.569286
</td>

<td>0.0730358
</td>

<td>-0.49625
</td>

<td>0.999945
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-7-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-7-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>13
</td>

<td>0.529603
</td>

<td>0.00708403
</td>

<td>-0.522519
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-13-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-13-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>14
</td>

<td>0.423601
</td>

<td>0.00448613
</td>

<td>-0.419114
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-14-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-14-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>16
</td>

<td>0.453505
</td>

<td>0.0333685
</td>

<td>-0.420136
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-16-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-16-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>17
</td>

<td>0.37492
</td>

<td>0.140684
</td>

<td>-0.234236
</td>

<td>0.937895
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-17-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-17-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>18
</td>

<td>0.468728
</td>

<td>0.032735
</td>

<td>-0.435993
</td>

<td>0.999966
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-18-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-18-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>19
</td>

<td>0.530625
</td>

<td>0.0607426
</td>

<td>-0.469882
</td>

<td>0.999985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-19-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-19-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>20
</td>

<td>0.585056
</td>

<td>0.0366049
</td>

<td>-0.548451
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-20-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-20-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>22
</td>

<td>0.534443
</td>

<td>0.115252
</td>

<td>-0.419191
</td>

<td>0.999961
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-22-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-22-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>23
</td>

<td>0.537437
</td>

<td>0.108515
</td>

<td>-0.428922
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-23-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-23-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>24
</td>

<td>0.472493
</td>

<td>0.0717388
</td>

<td>-0.400754
</td>

<td>0.999134
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-24-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-24-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>25
</td>

<td>0.51324
</td>

<td>0.03617
</td>

<td>-0.47707
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-25-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-25-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>26
</td>

<td>0.467052
</td>

<td>0.12824
</td>

<td>-0.338812
</td>

<td>0.994684
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-26-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-26-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>30
</td>

<td>0.524993
</td>

<td>0.0325432
</td>

<td>-0.49245
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-30-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-30-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>31
</td>

<td>0.384836
</td>

<td>0.0332357
</td>

<td>-0.3516
</td>

<td>0.999651
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-31-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-31-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>32
</td>

<td>0.52928
</td>

<td>0.0323226
</td>

<td>-0.496958
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-32-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-32-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>33
</td>

<td>0.519978
</td>

<td>0.151641
</td>

<td>-0.368337
</td>

<td>0.997773
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-33-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-33-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>34
</td>

<td>0.464214
</td>

<td>0.221333
</td>

<td>-0.242881
</td>

<td>0.93981
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-34-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-34-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>35
</td>

<td>0.250019
</td>

<td>0.0380535
</td>

<td>-0.211965
</td>

<td>0.996081
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-35-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-35-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>36
</td>

<td>0.177426
</td>

<td>0.0334635
</td>

<td>-0.143963
</td>

<td>0.989391
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-36-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-36-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>40
</td>

<td>0.513029
</td>

<td>0.133453
</td>

<td>-0.379577
</td>

<td>0.999172
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-40-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-40-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>41
</td>

<td>0.526563
</td>

<td>0.197245
</td>

<td>-0.329317
</td>

<td>0.996591
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-41-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-41-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>42
</td>

<td>0.415938
</td>

<td>0.0368339
</td>

<td>-0.379104
</td>

<td>0.999559
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-42-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-42-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>44
</td>

<td>0.564733
</td>

<td>0.135109
</td>

<td>-0.429623
</td>

<td>0.999881
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-44-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-44-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>45
</td>

<td>0.531582
</td>

<td>0.116407
</td>

<td>-0.415174
</td>

<td>0.999837
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-45-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-45-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>46
</td>

<td>0.525636
</td>

<td>0.0979449
</td>

<td>-0.427691
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-46-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-46-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>47
</td>

<td>0.550053
</td>

<td>0.0332837
</td>

<td>-0.516769
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-47-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-47-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>48
</td>

<td>0.515379
</td>

<td>0.156973
</td>

<td>-0.358406
</td>

<td>0.99809
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-48-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-48-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>49
</td>

<td>0.552429
</td>

<td>0.0327851
</td>

<td>-0.519643
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-49-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-49-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>50
</td>

<td>0.305954
</td>

<td>0.0352102
</td>

<td>-0.270743
</td>

<td>0.999793
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-50-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-50-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>51
</td>

<td>0.488016
</td>

<td>0.0325259
</td>

<td>-0.455491
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-51-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-51-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>52
</td>

<td>0.491706
</td>

<td>0.0330599
</td>

<td>-0.458646
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-52-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-52-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>53
</td>

<td>1.23812
</td>

<td>0.000350931
</td>

<td>-1.23777
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-53-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-53-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>54
</td>

<td>0.554327
</td>

<td>0.0323936
</td>

<td>-0.521933
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-54-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-54-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>55
</td>

<td>0.429161
</td>

<td>0.00245257
</td>

<td>-0.426708
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-55-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-55-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>56
</td>

<td>0.661348
</td>

<td>0.0325669
</td>

<td>-0.628781
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-56-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-56-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>57
</td>

<td>0.531671
</td>

<td>0.1164
</td>

<td>-0.415271
</td>

<td>0.999825
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-57-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-57-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>58
</td>

<td>0.684645
</td>

<td>0.0456963
</td>

<td>-0.638948
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-58-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-58-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>59
</td>

<td>0.531014
</td>

<td>0.00108025
</td>

<td>-0.529934
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-59-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-59-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>60
</td>

<td>0.385432
</td>

<td>0.000911814
</td>

<td>-0.38452
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-60-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-60-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>61
</td>

<td>0.789573
</td>

<td>0.0610995
</td>

<td>-0.728473
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-61-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-61-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>62
</td>

<td>0.528066
</td>

<td>0.168005
</td>

<td>-0.360061
</td>

<td>0.998154
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-62-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-62-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>63
</td>

<td>0.656206
</td>

<td>0.0345275
</td>

<td>-0.621679
</td>

<td>0.993627
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-63-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-63-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>64
</td>

<td>0.544803
</td>

<td>0.0325139
</td>

<td>-0.512289
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-64-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-64-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>65
</td>

<td>0.551902
</td>

<td>0.0941503
</td>

<td>-0.457752
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-65-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-65-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>66
</td>

<td>0.547907
</td>

<td>0.000848109
</td>

<td>-0.547059
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-66-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-66-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>67
</td>

<td>0.530873
</td>

<td>0.000726977
</td>

<td>-0.530146
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-67-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-67-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>68
</td>

<td>0.555872
</td>

<td>0.11199
</td>

<td>-0.443882
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-68-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-68-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>69
</td>

<td>0.481526
</td>

<td>0.0833287
</td>

<td>-0.398197
</td>

<td>0.999507
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-69-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-69-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>70
</td>

<td>0.540745
</td>

<td>0.03258
</td>

<td>-0.508165
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-70-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-70-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>71
</td>

<td>0.518372
</td>

<td>0.0366217
</td>

<td>-0.48175
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-71-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-71-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>72
</td>

<td>0.542712
</td>

<td>0.0331616
</td>

<td>-0.50955
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-72-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-72-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>73
</td>

<td>0.318805
</td>

<td>0.0853561
</td>

<td>-0.233449
</td>

<td>0.99414
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-73-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-73-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>74
</td>

<td>0.55109
</td>

<td>0.0930182
</td>

<td>-0.458072
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-74-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-74-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>75
</td>

<td>0.544507
</td>

<td>0.0340769
</td>

<td>-0.51043
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-75-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-75-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>76
</td>

<td>0.223277
</td>

<td>0.0337949
</td>

<td>-0.189482
</td>

<td>0.99925
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-76-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-76-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>77
</td>

<td>0.510441
</td>

<td>0.194014
</td>

<td>-0.316427
</td>

<td>0.995401
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-77-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-77-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>78
</td>

<td>0.551134
</td>

<td>0.0359668
</td>

<td>-0.515167
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-78-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-78-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>79
</td>

<td>0.56563
</td>

<td>0.0322571
</td>

<td>-0.533373
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-79-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-79-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>80
</td>

<td>0.473112
</td>

<td>0.000634235
</td>

<td>-0.472477
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-80-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-80-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>81
</td>

<td>0.47661
</td>

<td>0.000670534
</td>

<td>-0.47594
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-81-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-81-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>82
</td>

<td>1.10731
</td>

<td>0.000675497
</td>

<td>-1.10663
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-82-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-82-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>83
</td>

<td>0.422952
</td>

<td>0.0376191
</td>

<td>-0.385332
</td>

<td>0.999712
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-83-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-83-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>84
</td>

<td>0.53783
</td>

<td>0.0360546
</td>

<td>-0.501776
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-84-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-84-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>85
</td>

<td>0.537698
</td>

<td>0.0429456
</td>

<td>-0.494752
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-85-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-85-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>86
</td>

<td>0.539806
</td>

<td>0.198925
</td>

<td>-0.340881
</td>

<td>0.999225
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-86-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-86-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>87
</td>

<td>0.858657
</td>

<td>0.0413415
</td>

<td>-0.817316
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-87-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-87-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>88
</td>

<td>0.445504
</td>

<td>0.047435
</td>

<td>-0.398069
</td>

<td>0.999907
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-88-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-88-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>89
</td>

<td>0.429299
</td>

<td>0.0365238
</td>

<td>-0.392775
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-89-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-89-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>90
</td>

<td>0.452494
</td>

<td>0.0390785
</td>

<td>-0.413415
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-90-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-90-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>91
</td>

<td>0.535446
</td>

<td>0.159495
</td>

<td>-0.37595
</td>

<td>0.999736
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-91-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-91-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>92
</td>

<td>0.661814
</td>

<td>0.121478
</td>

<td>-0.540336
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-92-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-92-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>93
</td>

<td>0.5543
</td>

<td>0.0335139
</td>

<td>-0.520786
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-93-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-93-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>94
</td>

<td>0.716389
</td>

<td>0.0031596
</td>

<td>-0.713229
</td>

<td>0.996054
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-94-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-94-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>95
</td>

<td>0.525164
</td>

<td>0.103279
</td>

<td>-0.421885
</td>

<td>0.999971
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-95-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-95-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>96
</td>

<td>0.539311
</td>

<td>0.0326953
</td>

<td>-0.506616
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-96-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-96-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>97
</td>

<td>0.618395
</td>

<td>0.0582993
</td>

<td>-0.560096
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-97-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-97-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>98
</td>

<td>1.08941
</td>

<td>0.155634
</td>

<td>-0.933776
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-98-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-98-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>99
</td>

<td>0.533114
</td>

<td>0.0323663
</td>

<td>-0.500748
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-99-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-99-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>100
</td>

<td>0.501235
</td>

<td>0.15449
</td>

<td>-0.346745
</td>

<td>0.996732
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-100-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-100-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>101
</td>

<td>0.555204
</td>

<td>0.227008
</td>

<td>-0.328195
</td>

<td>0.993139
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-101-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-101-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>102
</td>

<td>0.576326
</td>

<td>0.197359
</td>

<td>-0.378967
</td>

<td>0.998911
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-102-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-102-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>103
</td>

<td>0.510589
</td>

<td>0.0573218
</td>

<td>-0.453267
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-103-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-103-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>104
</td>

<td>0.486688
</td>

<td>0.106227
</td>

<td>-0.380461
</td>

<td>0.999847
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-104-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-104-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>105
</td>

<td>0.646477
</td>

<td>0.0983363
</td>

<td>-0.548141
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-105-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-105-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>106
</td>

<td>0.537854
</td>

<td>0.106677
</td>

<td>-0.431177
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-106-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-106-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>107
</td>

<td>0.564229
</td>

<td>0.0337482
</td>

<td>-0.530481
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-107-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-107-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>108
</td>

<td>0.508206
</td>

<td>0.142131
</td>

<td>-0.366075
</td>

<td>0.999064
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-108-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-108-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>109
</td>

<td>0.522591
</td>

<td>0.00075223
</td>

<td>-0.521839
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-109-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-109-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>110
</td>

<td>0.536724
</td>

<td>0.0323334
</td>

<td>-0.50439
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-110-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-110-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>111
</td>

<td>0.5429
</td>

<td>0.115425
</td>

<td>-0.427476
</td>

<td>0.999985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-111-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-111-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>112
</td>

<td>0.48971
</td>

<td>0.215906
</td>

<td>-0.273803
</td>

<td>0.982113
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-112-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-112-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>113
</td>

<td>0.552676
</td>

<td>0.0587355
</td>

<td>-0.49394
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-113-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-113-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>114
</td>

<td>0.562026
</td>

<td>0.13363
</td>

<td>-0.428396
</td>

<td>0.99987
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-114-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-114-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>115
</td>

<td>0.716389
</td>

<td>0.0031596
</td>

<td>-0.713229
</td>

<td>0.996054
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-115-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-115-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>116
</td>

<td>0.543501
</td>

<td>0.12586
</td>

<td>-0.41764
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-116-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-116-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>117
</td>

<td>0.54262
</td>

<td>0.14067
</td>

<td>-0.40195
</td>

<td>0.999983
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-117-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-117-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>118
</td>

<td>0.551584
</td>

<td>0.115647
</td>

<td>-0.435937
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-118-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-118-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>119
</td>

<td>0.528787
</td>

<td>0.104234
</td>

<td>-0.424553
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-119-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-119-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>120
</td>

<td>0.555629
</td>

<td>0.033192
</td>

<td>-0.522437
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-120-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-120-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>121
</td>

<td>0.532125
</td>

<td>0.128091
</td>

<td>-0.404034
</td>

<td>0.999946
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-121-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-121-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>122
</td>

<td>0.495621
</td>

<td>0.0331514
</td>

<td>-0.462469
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-122-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-122-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>123
</td>

<td>0.58711
</td>

<td>0.000673669
</td>

<td>-0.586436
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-123-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-123-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>124
</td>

<td>0.909127
</td>

<td>0.0547125
</td>

<td>-0.854415
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-124-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-124-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>125
</td>

<td>0.570891
</td>

<td>0.0988636
</td>

<td>-0.472027
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-125-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-125-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>128
</td>

<td>0.657031
</td>

<td>0.301982
</td>

<td>-0.355049
</td>

<td>0.981523
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-128-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-128-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>130
</td>

<td>0.532469
</td>

<td>0.0531054
</td>

<td>-0.479364
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-130-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-130-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>131
</td>

<td>0.525173
</td>

<td>0.171885
</td>

<td>-0.353288
</td>

<td>0.997899
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-131-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-131-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>132
</td>

<td>0.546843
</td>

<td>0.0340074
</td>

<td>-0.512836
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-132-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-132-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>133
</td>

<td>0.529245
</td>

<td>0.136276
</td>

<td>-0.392969
</td>

<td>0.99969
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-133-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-133-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>134
</td>

<td>0.500798
</td>

<td>0.185594
</td>

<td>-0.315204
</td>

<td>0.989346
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-134-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-134-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>135
</td>

<td>0.347674
</td>

<td>0.0347886
</td>

<td>-0.312885
</td>

<td>0.998259
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-135-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-135-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>136
</td>

<td>0.423575
</td>

<td>0.0709783
</td>

<td>-0.352597
</td>

<td>0.999667
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-136-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-136-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>137
</td>

<td>0.532721
</td>

<td>0.165363
</td>

<td>-0.367358
</td>

<td>0.999135
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-137-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-137-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>139
</td>

<td>1.03035
</td>

<td>0.0818739
</td>

<td>-0.948475
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-139-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-139-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>140
</td>

<td>0.544571
</td>

<td>0.18373
</td>

<td>-0.360841
</td>

<td>0.998462
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-140-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-140-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>141
</td>

<td>0.552856
</td>

<td>0.107039
</td>

<td>-0.445817
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-141-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-141-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>142
</td>

<td>0.508435
</td>

<td>0.238876
</td>

<td>-0.26956
</td>

<td>0.982315
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-142-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-142-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>143
</td>

<td>0.435601
</td>

<td>0.119838
</td>

<td>-0.315764
</td>

<td>0.997152
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-143-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-143-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>144
</td>

<td>0.538123
</td>

<td>0.155689
</td>

<td>-0.382434
</td>

<td>0.99979
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-144-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-144-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>145
</td>

<td>0.601651
</td>

<td>0.000368877
</td>

<td>-0.601282
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-145-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-145-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>146
</td>

<td>0.533409
</td>

<td>0.245872
</td>

<td>-0.287537
</td>

<td>0.98679
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-146-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-146-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>147
</td>

<td>0.442179
</td>

<td>0.0430592
</td>

<td>-0.39912
</td>

<td>0.999982
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-147-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-147-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>149
</td>

<td>0.536764
</td>

<td>0.0456577
</td>

<td>-0.491107
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-149-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-149-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>150
</td>

<td>0.514222
</td>

<td>0.120987
</td>

<td>-0.393235
</td>

<td>0.999406
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-150-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-150-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>151
</td>

<td>0.569368
</td>

<td>0.0361993
</td>

<td>-0.533169
</td>

<td>0.991721
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-151-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-151-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>152
</td>

<td>0.437334
</td>

<td>0.0336765
</td>

<td>-0.403658
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-152-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-152-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>153
</td>

<td>0.543047
</td>

<td>0.000492811
</td>

<td>-0.542555
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-153-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-153-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>154
</td>

<td>0.537453
</td>

<td>0.155548
</td>

<td>-0.381905
</td>

<td>0.999801
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-154-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-154-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>155
</td>

<td>0.527452
</td>

<td>0.0826522
</td>

<td>-0.4448
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-155-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-155-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>156
</td>

<td>0.556318
</td>

<td>0.117571
</td>

<td>-0.438748
</td>

<td>0.999983
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-156-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-156-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>157
</td>

<td>0.517047
</td>

<td>0.17008
</td>

<td>-0.346967
</td>

<td>0.997662
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-157-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-157-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>158
</td>

<td>0.420406
</td>

<td>0.0937306
</td>

<td>-0.326675
</td>

<td>0.997734
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-158-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-158-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>159
</td>

<td>0.475883
</td>

<td>0.274704
</td>

<td>-0.201179
</td>

<td>0.916748
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-159-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-159-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>160
</td>

<td>0.544513
</td>

<td>0.155796
</td>

<td>-0.388717
</td>

<td>0.999843
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-160-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-160-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>162
</td>

<td>0.930406
</td>

<td>0.221242
</td>

<td>-0.709164
</td>

<td>0.999688
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-162-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-162-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>163
</td>

<td>0.535051
</td>

<td>0.154458
</td>

<td>-0.380594
</td>

<td>0.999755
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-163-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-163-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>164
</td>

<td>0.51923
</td>

<td>0.195095
</td>

<td>-0.324135
</td>

<td>0.995599
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-164-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-164-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>165
</td>

<td>0.375262
</td>

<td>0.0479584
</td>

<td>-0.327304
</td>

<td>0.996303
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-165-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-165-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>166
</td>

<td>0.497261
</td>

<td>0.185978
</td>

<td>-0.311283
</td>

<td>0.992638
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-166-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-166-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>167
</td>

<td>0.501769
</td>

<td>0.144839
</td>

<td>-0.35693
</td>

<td>0.996671
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-167-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-167-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>168
</td>

<td>0.51678
</td>

<td>0.18325
</td>

<td>-0.33353
</td>

<td>0.99381
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-168-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-168-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>169
</td>

<td>0.536251
</td>

<td>0.127539
</td>

<td>-0.408712
</td>

<td>0.999972
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-169-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-169-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>171
</td>

<td>0.539736
</td>

<td>0.112591
</td>

<td>-0.427145
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-171-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-171-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>172
</td>

<td>0.546354
</td>

<td>0.0328345
</td>

<td>-0.513519
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-172-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-172-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>173
</td>

<td>0.569582
</td>

<td>0.104205
</td>

<td>-0.465378
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-173-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-173-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>174
</td>

<td>0.496751
</td>

<td>0.0348867
</td>

<td>-0.461864
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-174-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-174-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>175
</td>

<td>0.535906
</td>

<td>0.170034
</td>

<td>-0.365872
</td>

<td>0.999285
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-175-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-175-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>176
</td>

<td>0.545191
</td>

<td>0.132516
</td>

<td>-0.412674
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-176-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-176-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>177
</td>

<td>0.550322
</td>

<td>0.097671
</td>

<td>-0.452652
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-177-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-177-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>178
</td>

<td>0.558589
</td>

<td>0.0351024
</td>

<td>-0.523487
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-178-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-178-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>179
</td>

<td>0.453963
</td>

<td>0.169326
</td>

<td>-0.284637
</td>

<td>0.981746
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-179-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-179-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>180
</td>

<td>0.542608
</td>

<td>0.0471302
</td>

<td>-0.495478
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-180-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-180-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>182
</td>

<td>1.13114
</td>

<td>0.0400285
</td>

<td>-1.09111
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-182-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-182-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>183
</td>

<td>0.53948
</td>

<td>0.0329513
</td>

<td>-0.506528
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-183-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-183-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>184
</td>

<td>0.519207
</td>

<td>0.185997
</td>

<td>-0.333209
</td>

<td>0.991997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-184-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-184-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>185
</td>

<td>0.482666
</td>

<td>0.110815
</td>

<td>-0.371851
</td>

<td>0.999549
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-185-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-185-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>186
</td>

<td>0.514167
</td>

<td>0.111028
</td>

<td>-0.403139
</td>

<td>0.999861
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-186-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-186-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>187
</td>

<td>0.88452
</td>

<td>0.0880377
</td>

<td>-0.796482
</td>

<td>0.974853
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-187-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-187-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>188
</td>

<td>0.708911
</td>

<td>0.0936151
</td>

<td>-0.615296
</td>

<td>0.927984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-188-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-188-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>189
</td>

<td>0.64335
</td>

<td>0.0907955
</td>

<td>-0.552554
</td>

<td>0.930408
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-189-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-189-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>190
</td>

<td>0.596208
</td>

<td>0.107738
</td>

<td>-0.48847
</td>

<td>0.911297
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-190-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-190-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>191
</td>

<td>0.708911
</td>

<td>0.0936151
</td>

<td>-0.615296
</td>

<td>0.927984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-191-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-191-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>192
</td>

<td>1.29838
</td>

<td>0.0994401
</td>

<td>-1.19894
</td>

<td>0.975728
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-192-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-192-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>193
</td>

<td>0.900238
</td>

<td>0.110824
</td>

<td>-0.789414
</td>

<td>0.922803
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-193-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-193-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>194
</td>

<td>0.581762
</td>

<td>0.0950587
</td>

<td>-0.486703
</td>

<td>0.919241
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-194-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-194-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>195
</td>

<td>0.541374
</td>

<td>0.0988475
</td>

<td>-0.442526
</td>

<td>0.911043
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-195-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-195-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>196
</td>

<td>0.708986
</td>

<td>0.0936003
</td>

<td>-0.615386
</td>

<td>0.927682
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-196-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-196-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>197
</td>

<td>0.595931
</td>

<td>0.0985687
</td>

<td>-0.497363
</td>

<td>0.917074
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-197-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-197-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>198
</td>

<td>0.71395
</td>

<td>0.106115
</td>

<td>-0.607836
</td>

<td>0.91792
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-198-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-198-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>199
</td>

<td>0.581762
</td>

<td>0.0950587
</td>

<td>-0.486703
</td>

<td>0.919241
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-199-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-199-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>200
</td>

<td>0.708986
</td>

<td>0.0936003
</td>

<td>-0.615386
</td>

<td>0.927682
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-200-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-200-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>201
</td>

<td>0.856572
</td>

<td>0.103045
</td>

<td>-0.753527
</td>

<td>0.96825
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-201-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-201-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>202
</td>

<td>0.541416
</td>

<td>0.144228
</td>

<td>-0.397188
</td>

<td>0.999805
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-202-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-202-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>203
</td>

<td>0.553899
</td>

<td>0.119995
</td>

<td>-0.433904
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-203-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-203-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>204
</td>

<td>0.604726
</td>

<td>0.149194
</td>

<td>-0.455532
</td>

<td>0.999293
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-204-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-204-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>205
</td>

<td>0.564378
</td>

<td>0.0610785
</td>

<td>-0.5033
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-205-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-205-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>206
</td>

<td>0.545942
</td>

<td>0.0325626
</td>

<td>-0.513379
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-206-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-206-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>207
</td>

<td>0.523685
</td>

<td>0.165107
</td>

<td>-0.358578
</td>

<td>0.997177
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-207-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-207-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>208
</td>

<td>0.53593
</td>

<td>0.0431873
</td>

<td>-0.492743
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-208-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-208-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>209
</td>

<td>0.539937
</td>

<td>0.207939
</td>

<td>-0.331998
</td>

<td>0.997436
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-209-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-209-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>210
</td>

<td>0.510172
</td>

<td>0.0339685
</td>

<td>-0.476203
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-210-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-210-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>211
</td>

<td>0.54931
</td>

<td>0.000588962
</td>

<td>-0.548721
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-211-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-211-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>212
</td>

<td>0.806066
</td>

<td>0.0771985
</td>

<td>-0.728867
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-212-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-212-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>213
</td>

<td>0.506487
</td>

<td>0.0332348
</td>

<td>-0.473252
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-213-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-213-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>214
</td>

<td>0.555225
</td>

<td>0.124153
</td>

<td>-0.431072
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-214-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-214-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>215
</td>

<td>0.543294
</td>

<td>0.0373006
</td>

<td>-0.505993
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-215-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-215-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>216
</td>

<td>0.548498
</td>

<td>0.15355
</td>

<td>-0.394948
</td>

<td>0.999835
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-216-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-216-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>217
</td>

<td>0.966543
</td>

<td>0.1671
</td>

<td>-0.799443
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-217-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-217-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>219
</td>

<td>0.960667
</td>

<td>0.0222763
</td>

<td>-0.938391
</td>

<td>0.999712
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-219-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-219-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>220
</td>

<td>0.538832
</td>

<td>0.0584042
</td>

<td>-0.480428
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-220-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-220-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>221
</td>

<td>0.533616
</td>

<td>0.254725
</td>

<td>-0.278891
</td>

<td>0.987831
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-221-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-221-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>222
</td>

<td>0.533873
</td>

<td>0.0339844
</td>

<td>-0.499888
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-222-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-222-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>223
</td>

<td>0.654068
</td>

<td>0.142845
</td>

<td>-0.511223
</td>

<td>0.906226
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-223-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-223-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>225
</td>

<td>0.757158
</td>

<td>0.117905
</td>

<td>-0.639253
</td>

<td>0.917824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-225-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-225-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>226
</td>

<td>0.642299
</td>

<td>0.14376
</td>

<td>-0.498539
</td>

<td>0.903914
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-226-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-226-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>228
</td>

<td>0.543533
</td>

<td>0.0353809
</td>

<td>-0.508152
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-228-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-228-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>229
</td>

<td>0.511882
</td>

<td>0.0781692
</td>

<td>-0.433712
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-229-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-229-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>230
</td>

<td>0.759937
</td>

<td>0.166141
</td>

<td>-0.593796
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-230-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-230-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>232
</td>

<td>0.540477
</td>

<td>0.115321
</td>

<td>-0.425156
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-232-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-232-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>233
</td>

<td>0.516909
</td>

<td>0.198162
</td>

<td>-0.318747
</td>

<td>0.994277
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-233-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-233-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>234
</td>

<td>0.505887
</td>

<td>0.098778
</td>

<td>-0.407109
</td>

<td>0.999826
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-234-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-234-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>236
</td>

<td>0.515204
</td>

<td>0.17841
</td>

<td>-0.336794
</td>

<td>0.997174
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-236-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-236-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>237
</td>

<td>0.512377
</td>

<td>0.124426
</td>

<td>-0.387951
</td>

<td>0.999195
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-237-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-237-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>238
</td>

<td>0.389204
</td>

<td>0.128146
</td>

<td>-0.261057
</td>

<td>0.97653
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-238-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-238-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>239
</td>

<td>0.513014
</td>

<td>0.0372717
</td>

<td>-0.475742
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-239-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-239-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>240
</td>

<td>0.494015
</td>

<td>0.032302
</td>

<td>-0.461713
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-240-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-240-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>241
</td>

<td>0.844418
</td>

<td>0.000790806
</td>

<td>-0.843628
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-241-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-241-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>242
</td>

<td>0.547682
</td>

<td>0.0324116
</td>

<td>-0.515271
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-242-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-242-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>244
</td>

<td>0.503341
</td>

<td>0.0325707
</td>

<td>-0.47077
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-244-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-244-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>245
</td>

<td>0.455637
</td>

<td>0.0333195
</td>

<td>-0.422317
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-245-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-245-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>246
</td>

<td>0.813276
</td>

<td>0.0659041
</td>

<td>-0.747372
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-246-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-246-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>247
</td>

<td>1.24094
</td>

<td>0.2285
</td>

<td>-1.01244
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-247-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-247-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>248
</td>

<td>0.523585
</td>

<td>0.0629956
</td>

<td>-0.460589
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-248-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-248-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>249
</td>

<td>0.620067
</td>

<td>0.0804927
</td>

<td>-0.539574
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-249-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-249-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>250
</td>

<td>0.515747
</td>

<td>0.212087
</td>

<td>-0.30366
</td>

<td>0.991461
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-250-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-250-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>251
</td>

<td>0.53503
</td>

<td>0.164717
</td>

<td>-0.370312
</td>

<td>0.999393
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-251-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-251-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>255
</td>

<td>1.20218
</td>

<td>0.000318077
</td>

<td>-1.20187
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-255-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-255-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>256
</td>

<td>0.549683
</td>

<td>0.133972
</td>

<td>-0.415711
</td>

<td>0.999987
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-256-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-256-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>257
</td>

<td>0.519264
</td>

<td>0.106383
</td>

<td>-0.412881
</td>

<td>0.999927
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-257-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-257-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>258
</td>

<td>0.623826
</td>

<td>0.0324629
</td>

<td>-0.591363
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-258-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-258-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>259
</td>

<td>0.49916
</td>

<td>0.0346656
</td>

<td>-0.464494
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-259-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-259-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>260
</td>

<td>0.918938
</td>

<td>0.0341708
</td>

<td>-0.884767
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-260-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-260-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>261
</td>

<td>0.564913
</td>

<td>0.146583
</td>

<td>-0.41833
</td>

<td>0.999976
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-261-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-261-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>262
</td>

<td>0.495106
</td>

<td>0.032378
</td>

<td>-0.462728
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-262-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-262-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>263
</td>

<td>0.545682
</td>

<td>0.00216705
</td>

<td>-0.543515
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-263-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-263-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>264
</td>

<td>0.517154
</td>

<td>0.000584221
</td>

<td>-0.516569
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-264-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-264-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>265
</td>

<td>0.321871
</td>

<td>0.0345153
</td>

<td>-0.287356
</td>

<td>0.999973
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-265-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-265-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>266
</td>

<td>0.409708
</td>

<td>0.0524914
</td>

<td>-0.357216
</td>

<td>0.998763
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-266-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-266-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>267
</td>

<td>0.527951
</td>

<td>0.00180434
</td>

<td>-0.526147
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-267-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-267-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>268
</td>

<td>0.556955
</td>

<td>0.0324843
</td>

<td>-0.524471
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-268-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-268-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>269
</td>

<td>0.601161
</td>

<td>0.000638586
</td>

<td>-0.600522
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-269-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-269-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>270
</td>

<td>0.583436
</td>

<td>0.0328651
</td>

<td>-0.550571
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-270-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-270-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>305
</td>

<td>0.631055
</td>

<td>0.032374
</td>

<td>-0.598681
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-305-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-305-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>306
</td>

<td>0.544213
</td>

<td>0.106257
</td>

<td>-0.437956
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-306-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-306-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>307
</td>

<td>0.536337
</td>

<td>0.0484455
</td>

<td>-0.487892
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-307-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-307-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>308
</td>

<td>0.273553
</td>

<td>0.094257
</td>

<td>-0.179296
</td>

<td>0.975114
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-308-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-308-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>309
</td>

<td>0.520883
</td>

<td>0.105086
</td>

<td>-0.415797
</td>

<td>0.999989
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-309-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-309-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>310
</td>

<td>0.707029
</td>

<td>0.0909053
</td>

<td>-0.616124
</td>

<td>0.929703
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-310-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-310-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>311
</td>

<td>2.54526
</td>

<td>0.116248
</td>

<td>-2.42901
</td>

<td>0.979503
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-311-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-311-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>338
</td>

<td>0.658544
</td>

<td>0.135842
</td>

<td>-0.522702
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-338-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-338-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>339
</td>

<td>0.539468
</td>

<td>0.106721
</td>

<td>-0.432747
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-339-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-339-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>340
</td>

<td>0.443371
</td>

<td>0.142091
</td>

<td>-0.301279
</td>

<td>0.988985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-340-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-340-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>341
</td>

<td>0.510781
</td>

<td>0.111649
</td>

<td>-0.399132
</td>

<td>0.999918
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-341-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-341-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>342
</td>

<td>0.545506
</td>

<td>0.0324449
</td>

<td>-0.513061
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-342-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-342-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>346
</td>

<td>0.581073
</td>

<td>0.25026
</td>

<td>-0.330813
</td>

<td>0.993262
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-346-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-346-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>347
</td>

<td>0.55334
</td>

<td>0.0859477
</td>

<td>-0.467393
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-347-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-347-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>348
</td>

<td>0.51315
</td>

<td>0.220809
</td>

<td>-0.292341
</td>

<td>0.989886
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-348-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-348-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>349
</td>

<td>0.669123
</td>

<td>0.246041
</td>

<td>-0.423082
</td>

<td>0.993928
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-349-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-349-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>350
</td>

<td>0.492112
</td>

<td>0.296929
</td>

<td>-0.195183
</td>

<td>0.906868
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-350-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-350-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>351
</td>

<td>0.466972
</td>

<td>0.127566
</td>

<td>-0.339407
</td>

<td>0.984351
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-351-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-351-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>352
</td>

<td>0.543456
</td>

<td>0.0365662
</td>

<td>-0.50689
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-352-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-352-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>353
</td>

<td>0.549239
</td>

<td>0.113973
</td>

<td>-0.435265
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-353-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-353-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>354
</td>

<td>0.496294
</td>

<td>0.169867
</td>

<td>-0.326427
</td>

<td>0.995166
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-354-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-354-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>355
</td>

<td>0.483135
</td>

<td>0.0323015
</td>

<td>-0.450834
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-355-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-355-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>356
</td>

<td>0.500331
</td>

<td>0.0323447
</td>

<td>-0.467987
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-356-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-356-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>357
</td>

<td>1.26523
</td>

<td>0.00018905
</td>

<td>-1.26504
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-357-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-357-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>358
</td>

<td>0.532121
</td>

<td>0.032403
</td>

<td>-0.499718
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-358-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-358-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>359
</td>

<td>0.552144
</td>

<td>0.113036
</td>

<td>-0.439108
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-359-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-359-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>360
</td>

<td>0.523788
</td>

<td>0.123682
</td>

<td>-0.400106
</td>

<td>0.999837
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-360-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-360-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>361
</td>

<td>0.44692
</td>

<td>0.00170921
</td>

<td>-0.445211
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-361-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-361-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>362
</td>

<td>0.525868
</td>

<td>0.00072729
</td>

<td>-0.52514
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-362-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-362-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>363
</td>

<td>0.761732
</td>

<td>0.044421
</td>

<td>-0.717311
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-363-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-363-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>364
</td>

<td>0.520425
</td>

<td>0.0019944
</td>

<td>-0.51843
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-364-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-364-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>365
</td>

<td>0.552208
</td>

<td>0.00270329
</td>

<td>-0.549504
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-365-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-365-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>366
</td>

<td>0.675128
</td>

<td>0.0346098
</td>

<td>-0.640518
</td>

<td>0.993616
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-366-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-366-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>367
</td>

<td>0.657538
</td>

<td>0.0328675
</td>

<td>-0.62467
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-367-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-367-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>368
</td>

<td>1.23759
</td>

<td>0.0399116
</td>

<td>-1.19768
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-368-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-368-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>369
</td>

<td>1.02904
</td>

<td>0.0376918
</td>

<td>-0.991348
</td>

<td>0.999977
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-369-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-369-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>370
</td>

<td>0.523733
</td>

<td>0.0636279
</td>

<td>-0.460105
</td>

<td>0.99992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-370-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-370-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>371
</td>

<td>0.408404
</td>

<td>0.0332492
</td>

<td>-0.375154
</td>

<td>0.999404
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-371-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-371-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>373
</td>

<td>0.902896
</td>

<td>0.03333
</td>

<td>-0.869566
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-373-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-373-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>374
</td>

<td>0.371818
</td>

<td>0.00109934
</td>

<td>-0.370718
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-374-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-374-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>375
</td>

<td>0.575371
</td>

<td>0.000811121
</td>

<td>-0.57456
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-375-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-375-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>376
</td>

<td>0.561666
</td>

<td>0.000908197
</td>

<td>-0.560758
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-376-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-376-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>377
</td>

<td>0.50321
</td>

<td>0.145471
</td>

<td>-0.357738
</td>

<td>0.995403
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-377-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-377-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>378
</td>

<td>0.525884
</td>

<td>0.0323519
</td>

<td>-0.493532
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-378-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-378-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>379
</td>

<td>0.539832
</td>

<td>0.032464
</td>

<td>-0.507368
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-379-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-379-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>380
</td>

<td>0.546943
</td>

<td>0.0326843
</td>

<td>-0.514259
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-380-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-380-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>381
</td>

<td>0.476251
</td>

<td>0.0798234
</td>

<td>-0.396427
</td>

<td>0.999314
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-381-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-381-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>382
</td>

<td>0.542494
</td>

<td>0.0327256
</td>

<td>-0.509768
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-382-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-382-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>383
</td>

<td>0.567509
</td>

<td>0.148751
</td>

<td>-0.418758
</td>

<td>0.999899
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-383-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-383-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>384
</td>

<td>0.407027
</td>

<td>0.0656364
</td>

<td>-0.341391
</td>

<td>0.991557
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-384-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-384-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>385
</td>

<td>0.533699
</td>

<td>0.223541
</td>

<td>-0.310157
</td>

<td>0.965025
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-385-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-385-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>386
</td>

<td>0.602963
</td>

<td>0.120349
</td>

<td>-0.482614
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-386-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-386-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>387
</td>

<td>0.664358
</td>

<td>0.22658
</td>

<td>-0.437778
</td>

<td>0.996757
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-387-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-387-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>388
</td>

<td>0.450005
</td>

<td>0.00164077
</td>

<td>-0.448365
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-388-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-388-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>389
</td>

<td>0.574636
</td>

<td>0.126092
</td>

<td>-0.448543
</td>

<td>0.99998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-389-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-389-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>390
</td>

<td>0.617064
</td>

<td>0.0342227
</td>

<td>-0.582842
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-390-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-390-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>391
</td>

<td>0.371546
</td>

<td>0.0343389
</td>

<td>-0.337207
</td>

<td>0.999877
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-391-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-391-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>392
</td>

<td>0.543952
</td>

<td>0.00446367
</td>

<td>-0.539488
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-392-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-392-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>393
</td>

<td>0.804059
</td>

<td>0.0337075
</td>

<td>-0.770352
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-393-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-393-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>394
</td>

<td>0.699803
</td>

<td>0.00320426
</td>

<td>-0.696599
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-394-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-394-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>395
</td>

<td>0.629803
</td>

<td>0.0348428
</td>

<td>-0.59496
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-395-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-395-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>396
</td>

<td>0.712742
</td>

<td>0.00704951
</td>

<td>-0.705692
</td>

<td>0.995656
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-396-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-396-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>397
</td>

<td>1.12416
</td>

<td>0.0711529
</td>

<td>-1.05301
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-397-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-397-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>398
</td>

<td>0.513462
</td>

<td>0.0334416
</td>

<td>-0.480021
</td>

<td>0.999987
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-398-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-398-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>399
</td>

<td>0.78694
</td>

<td>0.0335552
</td>

<td>-0.753385
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-399-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-399-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>400
</td>

<td>0.471033
</td>

<td>0.0363837
</td>

<td>-0.434649
</td>

<td>0.999895
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-400-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-400-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>401
</td>

<td>0.660143
</td>

<td>0.123143
</td>

<td>-0.537
</td>

<td>0.999903
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-401-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-401-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>402
</td>

<td>0.697568
</td>

<td>0.0378028
</td>

<td>-0.659765
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-402-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-402-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>403
</td>

<td>0.555614
</td>

<td>0.0465118
</td>

<td>-0.509102
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-403-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-403-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>404
</td>

<td>1.22047
</td>

<td>0.152961
</td>

<td>-1.06751
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-404-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-404-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>405
</td>

<td>0.548527
</td>

<td>0.0347725
</td>

<td>-0.513755
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-405-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-405-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>406
</td>

<td>0.613398
</td>

<td>0.00435229
</td>

<td>-0.609046
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-406-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-406-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>407
</td>

<td>0.550741
</td>

<td>0.0597083
</td>

<td>-0.491033
</td>

<td>0.999826
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-407-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-407-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>408
</td>

<td>0.699401
</td>

<td>0.00416041
</td>

<td>-0.695241
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-408-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-408-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>409
</td>

<td>1.40321
</td>

<td>0.172509
</td>

<td>-1.2307
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-409-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-409-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>410
</td>

<td>0.880697
</td>

<td>0.00361988
</td>

<td>-0.877077
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-410-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-410-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>411
</td>

<td>1.02324
</td>

<td>0.207026
</td>

<td>-0.816214
</td>

<td>0.999591
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-411-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-411-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>412
</td>

<td>0.602986
</td>

<td>0.00388901
</td>

<td>-0.599097
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-412-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-412-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>413
</td>

<td>0.67921
</td>

<td>0.00246754
</td>

<td>-0.676743
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-413-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-413-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>414
</td>

<td>0.733263
</td>

<td>0.0368814
</td>

<td>-0.696382
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-414-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-414-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>415
</td>

<td>0.659847
</td>

<td>0.0365388
</td>

<td>-0.623308
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-415-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-415-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>417
</td>

<td>0.627012
</td>

<td>0.0996765
</td>

<td>-0.527336
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-417-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-417-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>418
</td>

<td>0.532685
</td>

<td>0.114638
</td>

<td>-0.418047
</td>

<td>0.999808
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-418-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-418-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>419
</td>

<td>0.521656
</td>

<td>0.00395022
</td>

<td>-0.517706
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-419-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-419-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>420
</td>

<td>1.01834
</td>

<td>0.00164542
</td>

<td>-1.0167
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-420-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-420-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>421
</td>

<td>0.562954
</td>

<td>0.0337897
</td>

<td>-0.529165
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-421-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-421-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>422
</td>

<td>0.48162
</td>

<td>0.0038013
</td>

<td>-0.477819
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-422-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-422-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>423
</td>

<td>0.799845
</td>

<td>0.0734595
</td>

<td>-0.726385
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-423-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-423-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>424
</td>

<td>0.39001
</td>

<td>0.0061737
</td>

<td>-0.383837
</td>

<td>0.999857
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-424-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-424-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>425
</td>

<td>0.988899
</td>

<td>0.00256222
</td>

<td>-0.986336
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-425-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-425-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>426
</td>

<td>0.48542
</td>

<td>0.0334056
</td>

<td>-0.452015
</td>

<td>0.999887
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-426-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-426-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>427
</td>

<td>0.685052
</td>

<td>0.00328443
</td>

<td>-0.681768
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-427-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-427-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>428
</td>

<td>0.534711
</td>

<td>0.116471
</td>

<td>-0.418239
</td>

<td>0.999731
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-428-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-428-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>429
</td>

<td>0.636795
</td>

<td>0.0348124
</td>

<td>-0.601982
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-429-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-429-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>430
</td>

<td>0.399629
</td>

<td>0.10438
</td>

<td>-0.295249
</td>

<td>0.924593
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-430-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-430-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>431
</td>

<td>0.503146
</td>

<td>0.0545812
</td>

<td>-0.448565
</td>

<td>0.99931
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-431-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-431-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>432
</td>

<td>1.2116
</td>

<td>0.0951177
</td>

<td>-1.11648
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-432-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-432-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>433
</td>

<td>0.848689
</td>

<td>0.0526563
</td>

<td>-0.796032
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-433-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-433-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>434
</td>

<td>0.84497
</td>

<td>0.00211472
</td>

<td>-0.842856
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-434-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-434-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>435
</td>

<td>0.476284
</td>

<td>0.0680591
</td>

<td>-0.408225
</td>

<td>0.998893
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-435-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-435-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>436
</td>

<td>0.548464
</td>

<td>0.00359355
</td>

<td>-0.544871
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-436-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-436-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>437
</td>

<td>0.531149
</td>

<td>0.0770476
</td>

<td>-0.454101
</td>

<td>0.99994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-437-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-437-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>438
</td>

<td>1.16477
</td>

<td>0.00514005
</td>

<td>-1.15963
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-438-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-438-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>439
</td>

<td>0.598542
</td>

<td>0.0426982
</td>

<td>-0.555844
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-439-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-439-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>440
</td>

<td>0.519125
</td>

<td>0.00385819
</td>

<td>-0.515267
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-440-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-440-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>441
</td>

<td>0.571318
</td>

<td>0.00266852
</td>

<td>-0.568649
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-441-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-441-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>442
</td>

<td>0.582053
</td>

<td>0.00291481
</td>

<td>-0.579138
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-442-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-442-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>443
</td>

<td>1.23436
</td>

<td>0.185767
</td>

<td>-1.04859
</td>

<td>0.999989
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-443-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-443-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>444
</td>

<td>0.525711
</td>

<td>0.0965181
</td>

<td>-0.429193
</td>

<td>0.999496
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-444-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-444-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>445
</td>

<td>0.486639
</td>

<td>0.114684
</td>

<td>-0.371955
</td>

<td>0.993851
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-445-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-445-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>446
</td>

<td>1.20329
</td>

<td>0.0876017
</td>

<td>-1.11569
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-446-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-446-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>447
</td>

<td>0.506751
</td>

<td>0.035177
</td>

<td>-0.471574
</td>

<td>0.999875
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-447-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-447-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>448
</td>

<td>0.609528
</td>

<td>0.0359753
</td>

<td>-0.573553
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-448-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-448-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>449
</td>

<td>0.686058
</td>

<td>0.00336853
</td>

<td>-0.682689
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-449-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-449-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>450
</td>

<td>0.443495
</td>

<td>0.0509199
</td>

<td>-0.392575
</td>

<td>0.993875
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-450-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-450-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>451
</td>

<td>0.50161
</td>

<td>0.00362796
</td>

<td>-0.497982
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-451-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-451-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>452
</td>

<td>1.08752
</td>

<td>0.0022017
</td>

<td>-1.08531
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-452-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-452-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>453
</td>

<td>0.511955
</td>

<td>0.0384013
</td>

<td>-0.473553
</td>

<td>0.999744
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-453-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-453-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>454
</td>

<td>0.589423
</td>

<td>0.0053056
</td>

<td>-0.584118
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-454-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-454-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>455
</td>

<td>0.612693
</td>

<td>0.0947314
</td>

<td>-0.517961
</td>

<td>0.999952
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-455-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-455-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>456
</td>

<td>0.545323
</td>

<td>0.00372433
</td>

<td>-0.541599
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-456-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-456-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>457
</td>

<td>0.579759
</td>

<td>0.00470256
</td>

<td>-0.575056
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-457-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-457-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>458
</td>

<td>0.468569
</td>

<td>0.12806
</td>

<td>-0.340508
</td>

<td>0.985707
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-458-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-458-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>459
</td>

<td>0.863194
</td>

<td>0.034005
</td>

<td>-0.829189
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-459-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-459-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>460
</td>

<td>0.858017
</td>

<td>0.00283997
</td>

<td>-0.855177
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-460-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-460-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>461
</td>

<td>0.712837
</td>

<td>0.00685966
</td>

<td>-0.705978
</td>

<td>0.995682
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-461-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-461-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>462
</td>

<td>1.14609
</td>

<td>0.00110666
</td>

<td>-1.14498
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-462-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-462-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>463
</td>

<td>0.443723
</td>

<td>0.00181968
</td>

<td>-0.441903
</td>

<td>0.999966
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-463-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-463-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>464
</td>

<td>0.411403
</td>

<td>0.00483137
</td>

<td>-0.406572
</td>

<td>0.999963
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-464-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-464-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>465
</td>

<td>0.378709
</td>

<td>0.0877084
</td>

<td>-0.291
</td>

<td>0.963677
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-465-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-465-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>466
</td>

<td>0.539528
</td>

<td>0.00289313
</td>

<td>-0.536635
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-466-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-466-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>467
</td>

<td>0.61685
</td>

<td>0.00195684
</td>

<td>-0.614893
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-467-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-467-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>468
</td>

<td>0.543256
</td>

<td>0.00253484
</td>

<td>-0.540721
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-468-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-468-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>469
</td>

<td>0.653823
</td>

<td>0.0337658
</td>

<td>-0.620057
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-469-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-469-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>470
</td>

<td>0.720588
</td>

<td>0.000489177
</td>

<td>-0.720099
</td>

<td>0.996171
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-470-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-470-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>471
</td>

<td>0.559394
</td>

<td>0.00263675
</td>

<td>-0.556758
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-471-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-471-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>472
</td>

<td>0.628196
</td>

<td>0.00338973
</td>

<td>-0.624807
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-472-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-472-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>473
</td>

<td>0.567254
</td>

<td>0.00262144
</td>

<td>-0.564633
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-473-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-473-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>474
</td>

<td>0.813034
</td>

<td>0.00215852
</td>

<td>-0.810875
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-474-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-474-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>475
</td>

<td>0.465149
</td>

<td>0.0359222
</td>

<td>-0.429227
</td>

<td>0.999956
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-475-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-475-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>476
</td>

<td>0.551956
</td>

<td>0.00591018
</td>

<td>-0.546046
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-476-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-476-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>477
</td>

<td>0.571326
</td>

<td>0.112841
</td>

<td>-0.458485
</td>

<td>0.999958
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-477-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-477-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>478
</td>

<td>0.645149
</td>

<td>0.00279914
</td>

<td>-0.64235
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-478-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-478-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>479
</td>

<td>0.378397
</td>

<td>0.113306
</td>

<td>-0.265091
</td>

<td>0.90342
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-479-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-479-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>480
</td>

<td>0.524944
</td>

<td>0.00642172
</td>

<td>-0.518522
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-480-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-480-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>481
</td>

<td>0.626224
</td>

<td>0.0328705
</td>

<td>-0.593353
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-481-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-481-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>483
</td>

<td>0.478755
</td>

<td>0.0500903
</td>

<td>-0.428665
</td>

<td>0.99982
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-483-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-483-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>484
</td>

<td>1.09094
</td>

<td>0.215857
</td>

<td>-0.875082
</td>

<td>0.999094
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-484-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-484-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>485
</td>

<td>0.978077
</td>

<td>0.00192465
</td>

<td>-0.976153
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-485-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-485-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>486
</td>

<td>0.630541
</td>

<td>0.292343
</td>

<td>-0.338198
</td>

<td>0.922686
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-486-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-486-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>487
</td>

<td>0.558594
</td>

<td>0.00258691
</td>

<td>-0.556007
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-487-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-487-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>488
</td>

<td>0.581035
</td>

<td>0.00255237
</td>

<td>-0.578483
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-488-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-488-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>489
</td>

<td>0.531946
</td>

<td>0.227629
</td>

<td>-0.304317
</td>

<td>0.957494
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-489-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-489-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>490
</td>

<td>1.52006
</td>

<td>0.0495779
</td>

<td>-1.47048
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-490-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-490-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>491
</td>

<td>1.12661
</td>

<td>0.260078
</td>

<td>-0.866534
</td>

<td>0.997965
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-491-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-491-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>492
</td>

<td>0.721028
</td>

<td>0.00192884
</td>

<td>-0.719099
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-492-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-492-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>494
</td>

<td>0.57543
</td>

<td>0.129309
</td>

<td>-0.44612
</td>

<td>0.999795
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-494-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-494-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>495
</td>

<td>0.5236
</td>

<td>0.0331974
</td>

<td>-0.490403
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-495-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-495-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>496
</td>

<td>0.520026
</td>

<td>0.0516183
</td>

<td>-0.468407
</td>

<td>0.999973
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-496-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-496-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>497
</td>

<td>0.546568
</td>

<td>0.033027
</td>

<td>-0.513541
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-497-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-497-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>500
</td>

<td>0.526181
</td>

<td>0.00265508
</td>

<td>-0.523526
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-500-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-500-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>501
</td>

<td>0.537645
</td>

<td>0.0499803
</td>

<td>-0.487665
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-501-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-501-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>502
</td>

<td>0.624507
</td>

<td>0.0323937
</td>

<td>-0.592113
</td>

<td>0.995164
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-502-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-502-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>503
</td>

<td>0.705742
</td>

<td>0.219862
</td>

<td>-0.48588
</td>

<td>0.9892
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-503-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-503-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>504
</td>

<td>0.795201
</td>

<td>0.00223683
</td>

<td>-0.792964
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-504-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-504-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>505
</td>

<td>0.61753
</td>

<td>0.00242966
</td>

<td>-0.615101
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-505-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-505-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>506
</td>

<td>0.563021
</td>

<td>0.106314
</td>

<td>-0.456707
</td>

<td>0.999981
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-506-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-506-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>507
</td>

<td>0.575288
</td>

<td>0.00274899
</td>

<td>-0.572539
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-507-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-507-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>508
</td>

<td>0.956303
</td>

<td>0.186161
</td>

<td>-0.770142
</td>

<td>0.999878
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-508-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-508-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>509
</td>

<td>0.517463
</td>

<td>0.0460583
</td>

<td>-0.471404
</td>

<td>0.999978
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-509-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-509-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>510
</td>

<td>0.522451
</td>

<td>0.150595
</td>

<td>-0.371855
</td>

<td>0.986539
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-510-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-510-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>511
</td>

<td>0.896667
</td>

<td>0.188095
</td>

<td>-0.708572
</td>

<td>0.999599
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-511-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-511-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>512
</td>

<td>0.580761
</td>

<td>0.117715
</td>

<td>-0.463047
</td>

<td>0.999961
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-512-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-512-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>513
</td>

<td>0.535427
</td>

<td>0.0348822
</td>

<td>-0.500545
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-513-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-513-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>514
</td>

<td>0.553141
</td>

<td>0.0332945
</td>

<td>-0.519847
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-514-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-514-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>515
</td>

<td>0.53765
</td>

<td>0.00290525
</td>

<td>-0.534745
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-515-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-515-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>516
</td>

<td>0.351858
</td>

<td>0.00666219
</td>

<td>-0.345196
</td>

<td>0.999889
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-516-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-516-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>517
</td>

<td>0.712482
</td>

<td>0.00383163
</td>

<td>-0.708651
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-517-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-517-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>518
</td>

<td>1.23588
</td>

<td>0.00154951
</td>

<td>-1.23433
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-518-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-518-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>519
</td>

<td>0.744182
</td>

<td>0.00458281
</td>

<td>-0.7396
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-519-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-519-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>520
</td>

<td>0.625869
</td>

<td>0.0330597
</td>

<td>-0.59281
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-520-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-520-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>521
</td>

<td>0.523339
</td>

<td>0.00290578
</td>

<td>-0.520433
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-521-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-521-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>522
</td>

<td>0.599814
</td>

<td>0.0019687
</td>

<td>-0.597845
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-522-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-522-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>523
</td>

<td>0.866784
</td>

<td>0.129267
</td>

<td>-0.737517
</td>

<td>0.999989
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-523-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-523-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>524
</td>

<td>0.480079
</td>

<td>0.00279352
</td>

<td>-0.477286
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-524-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-524-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>525
</td>

<td>0.516155
</td>

<td>0.00468448
</td>

<td>-0.51147
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-525-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-525-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>526
</td>

<td>1.19011
</td>

<td>0.00321113
</td>

<td>-1.1869
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-526-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-526-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>527
</td>

<td>0.512233
</td>

<td>0.00189562
</td>

<td>-0.510338
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-527-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-527-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>528
</td>

<td>0.560215
</td>

<td>0.00481517
</td>

<td>-0.5554
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-528-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-528-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>529
</td>

<td>0.620091
</td>

<td>0.00619344
</td>

<td>-0.613898
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-529-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-529-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>530
</td>

<td>0.607505
</td>

<td>0.00326871
</td>

<td>-0.604236
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-530-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-530-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>531
</td>

<td>0.627275
</td>

<td>0.00205912
</td>

<td>-0.625216
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-531-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-531-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>532
</td>

<td>0.580957
</td>

<td>0.00235752
</td>

<td>-0.578599
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-532-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-532-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>533
</td>

<td>0.760243
</td>

<td>0.00193355
</td>

<td>-0.75831
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-533-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-533-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>534
</td>

<td>0.544786
</td>

<td>0.0572973
</td>

<td>-0.487489
</td>

<td>0.999966
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-534-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-534-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>535
</td>

<td>0.528206
</td>

<td>0.13446
</td>

<td>-0.393746
</td>

<td>0.997497
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-535-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-535-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>536
</td>

<td>0.527026
</td>

<td>0.201657
</td>

<td>-0.325369
</td>

<td>0.988046
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-536-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-536-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>537
</td>

<td>1.01135
</td>

<td>0.00189629
</td>

<td>-1.00945
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-537-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-537-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>538
</td>

<td>0.546857
</td>

<td>0.150616
</td>

<td>-0.396241
</td>

<td>0.993827
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-538-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-538-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>539
</td>

<td>0.603933
</td>

<td>0.0344818
</td>

<td>-0.569451
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-539-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-539-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>540
</td>

<td>0.317059
</td>

<td>0.00276286
</td>

<td>-0.314296
</td>

<td>0.999933
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-540-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-540-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>541
</td>

<td>0.542015
</td>

<td>0.160297
</td>

<td>-0.381718
</td>

<td>0.997307
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-541-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-541-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>542
</td>

<td>0.671734
</td>

<td>0.00200865
</td>

<td>-0.669725
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-542-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-542-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>543
</td>

<td>0.447194
</td>

<td>0.167535
</td>

<td>-0.279658
</td>

<td>0.941732
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-543-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-543-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>544
</td>

<td>0.761405
</td>

<td>0.0368182
</td>

<td>-0.724587
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-544-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-544-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>545
</td>

<td>0.594865
</td>

<td>0.245801
</td>

<td>-0.349064
</td>

<td>0.983968
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-545-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-545-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>546
</td>

<td>1.28403
</td>

<td>0.0468155
</td>

<td>-1.23722
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-546-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-546-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>547
</td>

<td>0.521064
</td>

<td>0.00291653
</td>

<td>-0.518147
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-547-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-547-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>548
</td>

<td>1.08277
</td>

<td>0.0018354
</td>

<td>-1.08093
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-548-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-548-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>549
</td>

<td>0.5402
</td>

<td>0.142904
</td>

<td>-0.397296
</td>

<td>0.999384
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-549-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-549-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>551
</td>

<td>0.521268
</td>

<td>0.179579
</td>

<td>-0.341689
</td>

<td>0.979976
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-551-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-551-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>552
</td>

<td>0.57501
</td>

<td>0.0361287
</td>

<td>-0.538881
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-552-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-552-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>553
</td>

<td>0.885621
</td>

<td>0.00291782
</td>

<td>-0.882703
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-553-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-553-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>554
</td>

<td>0.638059
</td>

<td>0.0026155
</td>

<td>-0.635444
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-554-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-554-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>555
</td>

<td>0.546325
</td>

<td>0.00539056
</td>

<td>-0.540934
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-555-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-555-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>556
</td>

<td>0.409001
</td>

<td>0.00272243
</td>

<td>-0.406278
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-556-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-556-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>557
</td>

<td>0.613868
</td>

<td>0.0335375
</td>

<td>-0.58033
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-557-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-557-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>558
</td>

<td>0.606282
</td>

<td>0.143592
</td>

<td>-0.46269
</td>

<td>0.999868
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-558-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-558-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>559
</td>

<td>0.486758
</td>

<td>0.0367753
</td>

<td>-0.449982
</td>

<td>0.999789
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-559-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-559-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>560
</td>

<td>0.385382
</td>

<td>0.00273171
</td>

<td>-0.38265
</td>

<td>0.999986
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-560-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-560-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>561
</td>

<td>0.724627
</td>

<td>0.0720709
</td>

<td>-0.652556
</td>

<td>0.999985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-561-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-561-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>562
</td>

<td>0.549729
</td>

<td>0.0856209
</td>

<td>-0.464108
</td>

<td>0.999759
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-562-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-562-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>565
</td>

<td>0.525668
</td>

<td>0.154914
</td>

<td>-0.370754
</td>

<td>0.984136
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-565-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-565-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>566
</td>

<td>0.611888
</td>

<td>0.0831493
</td>

<td>-0.528739
</td>

<td>0.999929
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-566-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-566-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>567
</td>

<td>0.601508
</td>

<td>0.00364427
</td>

<td>-0.597864
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-567-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-567-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>568
</td>

<td>0.52465
</td>

<td>0.00250817
</td>

<td>-0.522142
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-568-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-568-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>571
</td>

<td>0.535352
</td>

<td>0.0027297
</td>

<td>-0.532623
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-571-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-571-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>572
</td>

<td>0.473006
</td>

<td>0.00231126
</td>

<td>-0.470695
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-572-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-572-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>573
</td>

<td>0.489149
</td>

<td>0.00215853
</td>

<td>-0.486991
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-573-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-573-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>574
</td>

<td>0.644201
</td>

<td>0.00433182
</td>

<td>-0.639869
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-574-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-574-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>575
</td>

<td>0.920555
</td>

<td>0.00319615
</td>

<td>-0.917359
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-575-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-575-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>576
</td>

<td>0.509544
</td>

<td>0.00174739
</td>

<td>-0.507797
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-576-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-576-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>577
</td>

<td>0.537809
</td>

<td>0.049346
</td>

<td>-0.488464
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-577-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-577-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>578
</td>

<td>0.374223
</td>

<td>0.0066141
</td>

<td>-0.367609
</td>

<td>0.999905
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-578-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-578-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>579
</td>

<td>0.54141
</td>

<td>0.0347807
</td>

<td>-0.506629
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-579-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-579-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>580
</td>

<td>0.56784
</td>

<td>0.00267919
</td>

<td>-0.56516
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-580-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-580-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>581
</td>

<td>0.971776
</td>

<td>0.180142
</td>

<td>-0.791634
</td>

<td>0.999878
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-581-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-581-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>582
</td>

<td>1.07673
</td>

<td>0.00120477
</td>

<td>-1.07553
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-582-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-582-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>583
</td>

<td>0.379665
</td>

<td>0.00192413
</td>

<td>-0.377741
</td>

<td>0.9997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-583-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-583-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>584
</td>

<td>0.540831
</td>

<td>0.0328521
</td>

<td>-0.507979
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-584-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-584-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>585
</td>

<td>0.61188
</td>

<td>0.00362701
</td>

<td>-0.608253
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-585-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-585-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>586
</td>

<td>0.59654
</td>

<td>0.035459
</td>

<td>-0.561081
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-586-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-586-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>587
</td>

<td>0.538148
</td>

<td>0.00292512
</td>

<td>-0.535222
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-587-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-587-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>588
</td>

<td>0.334265
</td>

<td>0.00275611
</td>

<td>-0.331509
</td>

<td>0.999932
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-588-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-588-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>589
</td>

<td>0.507698
</td>

<td>0.00227201
</td>

<td>-0.505426
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-589-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-589-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>590
</td>

<td>0.564568
</td>

<td>0.136764
</td>

<td>-0.427804
</td>

<td>0.994973
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-590-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-590-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>591
</td>

<td>0.475081
</td>

<td>0.00185839
</td>

<td>-0.473223
</td>

<td>0.999984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-591-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-591-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>592
</td>

<td>0.199152
</td>

<td>0.00531757
</td>

<td>-0.193834
</td>

<td>0.995187
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-592-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-592-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>593
</td>

<td>0.565228
</td>

<td>0.0348081
</td>

<td>-0.53042
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-593-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-593-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>594
</td>

<td>0.589275
</td>

<td>0.00284967
</td>

<td>-0.586426
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-594-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-594-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>595
</td>

<td>0.551171
</td>

<td>0.0331683
</td>

<td>-0.518002
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-595-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-595-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>596
</td>

<td>0.548233
</td>

<td>0.00255411
</td>

<td>-0.545679
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-596-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-596-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>597
</td>

<td>0.529921
</td>

<td>0.042182
</td>

<td>-0.487739
</td>

<td>0.999958
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-597-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-597-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>598
</td>

<td>0.542684
</td>

<td>0.00191984
</td>

<td>-0.540765
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-598-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-598-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>599
</td>

<td>0.615317
</td>

<td>0.00552396
</td>

<td>-0.609793
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-599-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-599-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>600
</td>

<td>0.524637
</td>

<td>0.0354343
</td>

<td>-0.489203
</td>

<td>0.99998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-600-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-600-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>601
</td>

<td>1.09022
</td>

<td>0.00199867
</td>

<td>-1.08822
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-601-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-601-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>602
</td>

<td>0.948477
</td>

<td>0.00436758
</td>

<td>-0.94411
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-602-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-602-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>603
</td>

<td>0.572862
</td>

<td>0.035892
</td>

<td>-0.53697
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-603-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-603-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>604
</td>

<td>0.455481
</td>

<td>0.202116
</td>

<td>-0.253365
</td>

<td>0.916153
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-604-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-604-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>605
</td>

<td>0.652682
</td>

<td>0.0394549
</td>

<td>-0.613227
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-605-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-605-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>606
</td>

<td>0.542102
</td>

<td>0.0599506
</td>

<td>-0.482152
</td>

<td>0.999921
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-606-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-606-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>607
</td>

<td>0.764532
</td>

<td>0.00360936
</td>

<td>-0.760923
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-607-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-607-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>608
</td>

<td>0.583922
</td>

<td>0.148095
</td>

<td>-0.435827
</td>

<td>0.998421
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-608-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-608-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>609
</td>

<td>0.569113
</td>

<td>0.00271628
</td>

<td>-0.566397
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-609-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-609-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>610
</td>

<td>1.1724
</td>

<td>0.00145232
</td>

<td>-1.17095
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-610-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-610-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>611
</td>

<td>1.30788
</td>

<td>0.00119518
</td>

<td>-1.30668
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-611-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-611-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>612
</td>

<td>0.543873
</td>

<td>0.197682
</td>

<td>-0.346191
</td>

<td>0.982846
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-612-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-612-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>613
</td>

<td>0.572004
</td>

<td>0.00692016
</td>

<td>-0.565084
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-613-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-613-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>614
</td>

<td>0.351946
</td>

<td>0.00551678
</td>

<td>-0.34643
</td>

<td>0.999621
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-614-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-614-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>615
</td>

<td>0.559462
</td>

<td>0.145267
</td>

<td>-0.414195
</td>

<td>0.993014
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-615-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-615-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>618
</td>

<td>0.569267
</td>

<td>0.00342512
</td>

<td>-0.565842
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-618-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-618-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>619
</td>

<td>0.401457
</td>

<td>0.0787218
</td>

<td>-0.322735
</td>

<td>0.908776
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-619-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-619-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>620
</td>

<td>0.550281
</td>

<td>0.0402933
</td>

<td>-0.509987
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-620-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-620-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>621
</td>

<td>0.474214
</td>

<td>0.00580606
</td>

<td>-0.468408
</td>

<td>0.999975
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-621-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-621-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>622
</td>

<td>1.13459
</td>

<td>0.00424648
</td>

<td>-1.13034
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-622-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-622-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>623
</td>

<td>0.54556
</td>

<td>0.0022532
</td>

<td>-0.543307
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-623-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-623-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>624
</td>

<td>0.574075
</td>

<td>0.00231621
</td>

<td>-0.571759
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-624-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-624-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>625
</td>

<td>0.512752
</td>

<td>0.00704189
</td>

<td>-0.50571
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-625-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-625-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>626
</td>

<td>0.552909
</td>

<td>0.00345729
</td>

<td>-0.549452
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-626-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-626-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>627
</td>

<td>1.19128
</td>

<td>0.0499997
</td>

<td>-1.14128
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-627-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-627-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>628
</td>

<td>0.659584
</td>

<td>0.00626746
</td>

<td>-0.653316
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-628-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-628-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>629
</td>

<td>0.508545
</td>

<td>0.00310624
</td>

<td>-0.505439
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-629-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-629-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>630
</td>

<td>0.487938
</td>

<td>0.00566814
</td>

<td>-0.48227
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-630-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-630-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>631
</td>

<td>0.733665
</td>

<td>0.0020364
</td>

<td>-0.731629
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-631-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-631-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>632
</td>

<td>0.720247
</td>

<td>0.000672651
</td>

<td>-0.719575
</td>

<td>0.996166
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-632-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-632-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>633
</td>

<td>0.598821
</td>

<td>0.00243377
</td>

<td>-0.596387
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-633-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-633-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>634
</td>

<td>0.534553
</td>

<td>0.00484463
</td>

<td>-0.529708
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-634-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-634-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>635
</td>

<td>0.720247
</td>

<td>0.000672651
</td>

<td>-0.719575
</td>

<td>0.996166
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-635-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-635-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>636
</td>

<td>0.481219
</td>

<td>0.00264669
</td>

<td>-0.478572
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-636-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-636-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>637
</td>

<td>0.554824
</td>

<td>0.150925
</td>

<td>-0.403899
</td>

<td>0.997289
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-637-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-637-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>638
</td>

<td>0.50126
</td>

<td>0.00323637
</td>

<td>-0.498023
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-638-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-638-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>639
</td>

<td>0.64522
</td>

<td>0.00214924
</td>

<td>-0.643071
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-639-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-639-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>640
</td>

<td>0.36959
</td>

<td>0.0465483
</td>

<td>-0.323042
</td>

<td>0.96997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-640-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-640-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>641
</td>

<td>0.620134
</td>

<td>0.037144
</td>

<td>-0.58299
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-641-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-641-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>642
</td>

<td>0.53578
</td>

<td>0.00332017
</td>

<td>-0.53246
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-642-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-642-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>643
</td>

<td>0.393557
</td>

<td>0.0674692
</td>

<td>-0.326088
</td>

<td>0.990332
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-643-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-643-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>644
</td>

<td>0.512981
</td>

<td>0.0843099
</td>

<td>-0.428671
</td>

<td>0.998669
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-644-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-644-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>645
</td>

<td>0.473787
</td>

<td>0.2278
</td>

<td>-0.245988
</td>

<td>0.917558
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-645-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-645-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>646
</td>

<td>0.566063
</td>

<td>0.0588399
</td>

<td>-0.507223
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-646-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-646-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>647
</td>

<td>0.498212
</td>

<td>0.00316471
</td>

<td>-0.495047
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-647-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-647-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>648
</td>

<td>0.564648
</td>

<td>0.129693
</td>

<td>-0.434955
</td>

<td>0.999299
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-648-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-648-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>649
</td>

<td>1.60673
</td>

<td>0.068831
</td>

<td>-1.5379
</td>

<td>0.999359
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-649-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-649-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>650
</td>

<td>0.561209
</td>

<td>0.0360174
</td>

<td>-0.525191
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-650-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-650-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>651
</td>

<td>0.542638
</td>

<td>0.0335632
</td>

<td>-0.509075
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-651-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-651-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>652
</td>

<td>0.836502
</td>

<td>0.199392
</td>

<td>-0.63711
</td>

<td>0.997447
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-652-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-652-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>653
</td>

<td>0.464117
</td>

<td>0.00321327
</td>

<td>-0.460903
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-653-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-653-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>654
</td>

<td>0.720247
</td>

<td>0.000672651
</td>

<td>-0.719575
</td>

<td>0.996166
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-654-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-654-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>655
</td>

<td>0.613502
</td>

<td>0.00314536
</td>

<td>-0.610357
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-655-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-655-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>656
</td>

<td>0.48131
</td>

<td>0.0443296
</td>

<td>-0.436981
</td>

<td>0.998453
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-656-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-656-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>657
</td>

<td>0.627624
</td>

<td>0.00236968
</td>

<td>-0.625255
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-657-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-657-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>658
</td>

<td>0.373307
</td>

<td>0.0563791
</td>

<td>-0.316928
</td>

<td>0.975934
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-658-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-658-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>659
</td>

<td>0.70278
</td>

<td>0.118427
</td>

<td>-0.584354
</td>

<td>0.999754
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-659-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-659-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>660
</td>

<td>0.542743
</td>

<td>0.00543607
</td>

<td>-0.537307
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-660-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-660-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>661
</td>

<td>0.511355
</td>

<td>0.175968
</td>

<td>-0.335387
</td>

<td>0.978949
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-661-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-661-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>662
</td>

<td>0.448813
</td>

<td>0.0390908
</td>

<td>-0.409722
</td>

<td>0.999674
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-662-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-662-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>663
</td>

<td>0.621482
</td>

<td>0.00330259
</td>

<td>-0.618179
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-663-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-663-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>664
</td>

<td>0.534784
</td>

<td>0.218262
</td>

<td>-0.316522
</td>

<td>0.960477
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-664-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-664-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>665
</td>

<td>0.522596
</td>

<td>0.15183
</td>

<td>-0.370766
</td>

<td>0.992582
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-665-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-665-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>666
</td>

<td>0.393592
</td>

<td>0.0598959
</td>

<td>-0.333696
</td>

<td>0.987075
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-666-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-666-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>667
</td>

<td>0.505583
</td>

<td>0.123029
</td>

<td>-0.382554
</td>

<td>0.995086
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-667-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-667-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>668
</td>

<td>0.528312
</td>

<td>0.180865
</td>

<td>-0.347447
</td>

<td>0.978413
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-668-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-668-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>669
</td>

<td>0.547407
</td>

<td>0.0610436
</td>

<td>-0.486364
</td>

<td>0.999921
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-669-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-669-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>670
</td>

<td>0.40667
</td>

<td>0.0345894
</td>

<td>-0.372081
</td>

<td>0.999486
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-670-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-670-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>671
</td>

<td>0.568329
</td>

<td>0.128022
</td>

<td>-0.440307
</td>

<td>0.999408
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-671-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-671-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>672
</td>

<td>0.560923
</td>

<td>0.12399
</td>

<td>-0.436932
</td>

<td>0.999738
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-672-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-672-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>673
</td>

<td>0.541066
</td>

<td>0.098721
</td>

<td>-0.442345
</td>

<td>0.999907
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-673-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-673-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>674
</td>

<td>0.530815
</td>

<td>0.0540681
</td>

<td>-0.476747
</td>

<td>0.999957
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-674-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-674-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>675
</td>

<td>0.745109
</td>

<td>0.0473551
</td>

<td>-0.697754
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-675-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-675-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>676
</td>

<td>0.97138
</td>

<td>0.00246843
</td>

<td>-0.968912
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-676-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-676-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>677
</td>

<td>0.895546
</td>

<td>0.00264336
</td>

<td>-0.892902
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-677-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-677-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>678
</td>

<td>0.522144
</td>

<td>0.142916
</td>

<td>-0.379228
</td>

<td>0.995638
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-678-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-678-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>679
</td>

<td>0.515062
</td>

<td>0.00524462
</td>

<td>-0.509818
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-679-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-679-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>680
</td>

<td>0.562244
</td>

<td>0.133007
</td>

<td>-0.429237
</td>

<td>0.999744
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-680-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-680-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>681
</td>

<td>0.607511
</td>

<td>0.0362622
</td>

<td>-0.571249
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-681-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-681-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>682
</td>

<td>0.546147
</td>

<td>0.00278089
</td>

<td>-0.543366
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-682-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-682-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>683
</td>

<td>1.40333
</td>

<td>0.265638
</td>

<td>-1.1377
</td>

<td>0.999895
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-683-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-683-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>685
</td>

<td>0.503082
</td>

<td>0.0719535
</td>

<td>-0.431129
</td>

<td>0.999417
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-685-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-685-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>686
</td>

<td>0.510604
</td>

<td>0.120241
</td>

<td>-0.390363
</td>

<td>0.997686
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-686-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-686-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>687
</td>

<td>0.52637
</td>

<td>0.0370812
</td>

<td>-0.489289
</td>

<td>0.99998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-687-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-687-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>688
</td>

<td>0.593421
</td>

<td>0.00513912
</td>

<td>-0.588282
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-688-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-688-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>689
</td>

<td>0.678066
</td>

<td>0.149322
</td>

<td>-0.528744
</td>

<td>0.99982
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-689-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-689-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>691
</td>

<td>1.25479
</td>

<td>0.191147
</td>

<td>-1.06364
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-691-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-691-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>694
</td>

<td>0.506936
</td>

<td>0.0359779
</td>

<td>-0.470958
</td>

<td>0.999986
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-694-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-694-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>695
</td>

<td>0.717126
</td>

<td>0.17016
</td>

<td>-0.546966
</td>

<td>0.998701
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-695-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-695-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>696
</td>

<td>0.592844
</td>

<td>0.0496738
</td>

<td>-0.543171
</td>

<td>0.997295
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-696-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-696-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>697
</td>

<td>0.541693
</td>

<td>0.0359252
</td>

<td>-0.505768
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-697-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-697-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>698
</td>

<td>0.743261
</td>

<td>0.166345
</td>

<td>-0.576915
</td>

<td>0.998288
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-698-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-698-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>699
</td>

<td>0.516127
</td>

<td>0.162582
</td>

<td>-0.353544
</td>

<td>0.99264
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-699-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-699-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>700
</td>

<td>0.566354
</td>

<td>0.143749
</td>

<td>-0.422605
</td>

<td>0.998996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-700-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-700-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>703
</td>

<td>0.515665
</td>

<td>0.187711
</td>

<td>-0.327954
</td>

<td>0.975167
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-703-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-703-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>705
</td>

<td>0.524048
</td>

<td>0.125912
</td>

<td>-0.398136
</td>

<td>0.996404
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-705-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-705-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>706
</td>

<td>0.720206
</td>

<td>0.318259
</td>

<td>-0.401947
</td>

<td>0.932466
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-706-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-706-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>707
</td>

<td>0.48404
</td>

<td>0.203681
</td>

<td>-0.280358
</td>

<td>0.949159
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-707-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-707-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>708
</td>

<td>0.960836
</td>

<td>0.239479
</td>

<td>-0.721357
</td>

<td>0.992009
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-708-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-708-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>709
</td>

<td>0.500844
</td>

<td>0.189582
</td>

<td>-0.311262
</td>

<td>0.966272
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-709-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-709-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>710
</td>

<td>0.791858
</td>

<td>0.217917
</td>

<td>-0.573941
</td>

<td>0.995637
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-710-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-710-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>711
</td>

<td>1.12411
</td>

<td>0.215087
</td>

<td>-0.909025
</td>

<td>0.998927
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-711-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-711-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>712
</td>

<td>1.16221
</td>

<td>0.296602
</td>

<td>-0.865608
</td>

<td>0.983667
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-712-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-712-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>713
</td>

<td>0.382715
</td>

<td>0.10674
</td>

<td>-0.275976
</td>

<td>0.949586
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-713-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-713-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>714
</td>

<td>0.528499
</td>

<td>0.153869
</td>

<td>-0.37463
</td>

<td>0.996833
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-714-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-714-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>715
</td>

<td>0.40427
</td>

<td>0.0567655
</td>

<td>-0.347505
</td>

<td>0.997534
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-715-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-715-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>716
</td>

<td>0.539109
</td>

<td>0.164468
</td>

<td>-0.374641
</td>

<td>0.982011
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-716-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-716-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>717
</td>

<td>0.563
</td>

<td>0.0357151
</td>

<td>-0.527284
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-717-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-717-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>718
</td>

<td>0.574044
</td>

<td>0.0551072
</td>

<td>-0.518937
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-718-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-718-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>719
</td>

<td>0.583444
</td>

<td>0.101484
</td>

<td>-0.48196
</td>

<td>0.999984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-719-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-719-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>720
</td>

<td>0.653385
</td>

<td>0.0311573
</td>

<td>-0.622227
</td>

<td>0.993648
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-720-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-720-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>721
</td>

<td>0.534999
</td>

<td>0.106849
</td>

<td>-0.42815
</td>

<td>0.999835
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-721-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-721-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>722
</td>

<td>0.541406
</td>

<td>0.117995
</td>

<td>-0.423411
</td>

<td>0.998706
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-722-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-722-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>723
</td>

<td>0.984077
</td>

<td>0.117506
</td>

<td>-0.866571
</td>

<td>0.999983
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-723-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-723-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>724
</td>

<td>0.578405
</td>

<td>0.204805
</td>

<td>-0.3736
</td>

<td>0.9779
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-724-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-724-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>725
</td>

<td>0.82382
</td>

<td>0.052056
</td>

<td>-0.771764
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-725-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-725-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>726
</td>

<td>0.422988
</td>

<td>0.0400941
</td>

<td>-0.382894
</td>

<td>0.996033
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-726-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-726-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>727
</td>

<td>0.530557
</td>

<td>0.081674
</td>

<td>-0.448883
</td>

<td>0.999792
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-727-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-727-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>728
</td>

<td>0.844847
</td>

<td>0.119696
</td>

<td>-0.725151
</td>

<td>0.99985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-728-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-728-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>729
</td>

<td>0.693982
</td>

<td>0.00262018
</td>

<td>-0.691362
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-729-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-729-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>730
</td>

<td>1.07679
</td>

<td>0.113779
</td>

<td>-0.963007
</td>

<td>0.999978
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-730-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-730-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>731
</td>

<td>0.671579
</td>

<td>0.130188
</td>

<td>-0.541391
</td>

<td>0.999957
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-731-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-731-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>732
</td>

<td>0.497474
</td>

<td>0.0339634
</td>

<td>-0.463511
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-732-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-732-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>733
</td>

<td>0.492866
</td>

<td>0.0636122
</td>

<td>-0.429254
</td>

<td>0.999145
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-733-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-733-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>734
</td>

<td>0.528808
</td>

<td>0.115611
</td>

<td>-0.413197
</td>

<td>0.999365
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-734-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-734-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>736
</td>

<td>0.531434
</td>

<td>0.0357798
</td>

<td>-0.495654
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-736-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-736-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>737
</td>

<td>0.63999
</td>

<td>0.0504862
</td>

<td>-0.589504
</td>

<td>0.999755
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-737-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-737-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>738
</td>

<td>0.636022
</td>

<td>0.058618
</td>

<td>-0.577404
</td>

<td>0.999987
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-738-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-738-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>739
</td>

<td>0.540631
</td>

<td>0.00247066
</td>

<td>-0.538161
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-739-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-739-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>740
</td>

<td>0.701874
</td>

<td>0.00206591
</td>

<td>-0.699808
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-740-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-740-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>741
</td>

<td>0.713453
</td>

<td>0.00203468
</td>

<td>-0.711419
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-741-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-741-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>742
</td>

<td>0.472857
</td>

<td>0.00226437
</td>

<td>-0.470593
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-742-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-742-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>743
</td>

<td>0.44939
</td>

<td>0.00513412
</td>

<td>-0.444256
</td>

<td>0.999988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-743-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-743-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>744
</td>

<td>0.508808
</td>

<td>0.00366314
</td>

<td>-0.505145
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-744-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-744-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>745
</td>

<td>0.822973
</td>

<td>0.00313778
</td>

<td>-0.819836
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-745-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-745-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>746
</td>

<td>0.774372
</td>

<td>0.00302004
</td>

<td>-0.771352
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-746-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-746-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>747
</td>

<td>0.547299
</td>

<td>0.0593958
</td>

<td>-0.487904
</td>

<td>0.999985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-747-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-747-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>748
</td>

<td>0.428097
</td>

<td>0.00477364
</td>

<td>-0.423324
</td>

<td>0.999504
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-748-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-748-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>749
</td>

<td>0.663324
</td>

<td>0.0405404
</td>

<td>-0.622784
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-749-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-749-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>750
</td>

<td>0.518408
</td>

<td>0.0047554
</td>

<td>-0.513653
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-750-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-750-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>751
</td>

<td>0.562152
</td>

<td>0.0593422
</td>

<td>-0.50281
</td>

<td>0.999938
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-751-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-751-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>752
</td>

<td>0.695719
</td>

<td>0.0447081
</td>

<td>-0.651011
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-752-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-752-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>753
</td>

<td>0.577908
</td>

<td>0.137637
</td>

<td>-0.440271
</td>

<td>0.991547
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-753-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-753-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>754
</td>

<td>0.570606
</td>

<td>0.0502889
</td>

<td>-0.520317
</td>

<td>0.999986
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-754-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-754-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>755
</td>

<td>0.542166
</td>

<td>0.144472
</td>

<td>-0.397694
</td>

<td>0.997385
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-755-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-755-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>757
</td>

<td>0.514282
</td>

<td>0.0388926
</td>

<td>-0.475389
</td>

<td>0.999896
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-757-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-757-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>758
</td>

<td>1.1249
</td>

<td>0.218148
</td>

<td>-0.90675
</td>

<td>0.999241
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-758-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-758-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>760
</td>

<td>1.05201
</td>

<td>0.160967
</td>

<td>-0.89104
</td>

<td>0.999914
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-760-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-760-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>761
</td>

<td>0.651353
</td>

<td>0.0752113
</td>

<td>-0.576141
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-761-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-761-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>762
</td>

<td>0.418941
</td>

<td>0.106078
</td>

<td>-0.312864
</td>

<td>0.977209
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-762-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-762-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>763
</td>

<td>0.502216
</td>

<td>0.00471547
</td>

<td>-0.497501
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-763-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-763-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>764
</td>

<td>0.527552
</td>

<td>0.114301
</td>

<td>-0.413251
</td>

<td>0.998467
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-764-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-764-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>765
</td>

<td>0.49039
</td>

<td>0.0424059
</td>

<td>-0.447984
</td>

<td>0.998835
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-765-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-765-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>766
</td>

<td>0.668997
</td>

<td>0.148351
</td>

<td>-0.520646
</td>

<td>0.999796
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-766-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-766-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>767
</td>

<td>0.644918
</td>

<td>0.035395
</td>

<td>-0.609523
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-767-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-767-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>768
</td>

<td>0.732672
</td>

<td>0.0040577
</td>

<td>-0.728615
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-768-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-768-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>769
</td>

<td>0.520941
</td>

<td>0.0435825
</td>

<td>-0.477358
</td>

<td>0.999959
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-769-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-769-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>770
</td>

<td>0.541018
</td>

<td>0.00648043
</td>

<td>-0.534538
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-770-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-770-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>771
</td>

<td>0.576667
</td>

<td>0.00447868
</td>

<td>-0.572189
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-771-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-771-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>772
</td>

<td>0.610366
</td>

<td>0.0352186
</td>

<td>-0.575148
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-772-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-772-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>773
</td>

<td>0.689273
</td>

<td>0.00364144
</td>

<td>-0.685631
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-773-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-773-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>774
</td>

<td>0.684231
</td>

<td>0.00317548
</td>

<td>-0.681055
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-774-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-774-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>775
</td>

<td>0.5073
</td>

<td>0.00471968
</td>

<td>-0.502581
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-775-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-775-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>776
</td>

<td>0.550831
</td>

<td>0.0472594
</td>

<td>-0.503572
</td>

<td>0.999888
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-776-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-776-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>777
</td>

<td>0.556448
</td>

<td>0.00614365
</td>

<td>-0.550305
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-777-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-777-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>778
</td>

<td>0.470836
</td>

<td>0.117987
</td>

<td>-0.352849
</td>

<td>0.987578
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-778-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-778-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>779
</td>

<td>0.471101
</td>

<td>0.00613013
</td>

<td>-0.464971
</td>

<td>0.999695
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-779-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-779-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>780
</td>

<td>0.628534
</td>

<td>0.00554507
</td>

<td>-0.622989
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-780-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-780-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>781
</td>

<td>0.552268
</td>

<td>0.123042
</td>

<td>-0.429227
</td>

<td>0.998769
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-781-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-781-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>782
</td>

<td>0.809223
</td>

<td>0.0867423
</td>

<td>-0.722481
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-782-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-782-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>783
</td>

<td>0.530497
</td>

<td>0.147454
</td>

<td>-0.383043
</td>

<td>0.992247
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-783-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-783-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>784
</td>

<td>0.43408
</td>

<td>0.112206
</td>

<td>-0.321874
</td>

<td>0.940593
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-784-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-784-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>785
</td>

<td>0.61199
</td>

<td>0.037443
</td>

<td>-0.574547
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-785-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-785-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>786
</td>

<td>0.502294
</td>

<td>0.143003
</td>

<td>-0.359292
</td>

<td>0.975338
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-786-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-786-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>787
</td>

<td>0.546634
</td>

<td>0.0511873
</td>

<td>-0.495447
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-787-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-787-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>788
</td>

<td>0.518013
</td>

<td>0.112735
</td>

<td>-0.405278
</td>

<td>0.984192
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-788-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-788-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>789
</td>

<td>0.689275
</td>

<td>0.00394361
</td>

<td>-0.685332
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-789-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-789-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>790
</td>

<td>0.396167
</td>

<td>0.149184
</td>

<td>-0.246984
</td>

<td>0.901309
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-790-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-790-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>791
</td>

<td>1.24096
</td>

<td>0.18089
</td>

<td>-1.06007
</td>

<td>0.999981
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-791-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-791-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>792
</td>

<td>0.540614
</td>

<td>0.113834
</td>

<td>-0.42678
</td>

<td>0.999425
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-792-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-792-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>793
</td>

<td>0.456844
</td>

<td>0.0385342
</td>

<td>-0.41831
</td>

<td>0.996063
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-793-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-793-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>794
</td>

<td>0.719681
</td>

<td>0.00422262
</td>

<td>-0.715459
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-794-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-794-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>795
</td>

<td>0.97295
</td>

<td>0.0578834
</td>

<td>-0.915067
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-795-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-795-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>796
</td>

<td>0.567381
</td>

<td>0.038828
</td>

<td>-0.528553
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-796-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-796-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>797
</td>

<td>0.641528
</td>

<td>0.0345774
</td>

<td>-0.60695
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-797-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-797-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>798
</td>

<td>0.575956
</td>

<td>0.00504174
</td>

<td>-0.570914
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-798-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-798-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>799
</td>

<td>0.554625
</td>

<td>0.00732038
</td>

<td>-0.547305
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-799-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-799-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>800
</td>

<td>0.561239
</td>

<td>0.102243
</td>

<td>-0.458996
</td>

<td>0.998519
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-800-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-800-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>801
</td>

<td>0.745269
</td>

<td>0.0817148
</td>

<td>-0.663555
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-801-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-801-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>802
</td>

<td>0.550675
</td>

<td>0.138469
</td>

<td>-0.412206
</td>

<td>0.992144
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-802-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-802-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>803
</td>

<td>0.505965
</td>

<td>0.0062546
</td>

<td>-0.49971
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-803-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-803-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>804
</td>

<td>0.460935
</td>

<td>0.0421155
</td>

<td>-0.41882
</td>

<td>0.997832
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-804-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-804-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>805
</td>

<td>0.505195
</td>

<td>0.148152
</td>

<td>-0.357043
</td>

<td>0.970984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-805-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-805-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>806
</td>

<td>0.493567
</td>

<td>0.0055276
</td>

<td>-0.48804
</td>

<td>0.999938
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-806-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-806-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>807
</td>

<td>0.733661
</td>

<td>0.0543911
</td>

<td>-0.67927
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-807-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-807-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>808
</td>

<td>0.411499
</td>

<td>0.0642338
</td>

<td>-0.347265
</td>

<td>0.991771
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-808-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-808-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>809
</td>

<td>0.746691
</td>

<td>0.0044345
</td>

<td>-0.742257
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-809-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-809-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>810
</td>

<td>0.635691
</td>

<td>0.0351809
</td>

<td>-0.600511
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-810-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-810-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>811
</td>

<td>0.495803
</td>

<td>0.135698
</td>

<td>-0.360105
</td>

<td>0.984229
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-811-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-811-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>812
</td>

<td>0.655724
</td>

<td>0.168905
</td>

<td>-0.486819
</td>

<td>0.995656
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-812-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-812-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>813
</td>

<td>0.524653
</td>

<td>0.0454229
</td>

<td>-0.47923
</td>

<td>0.999601
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-813-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-813-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>814
</td>

<td>0.563362
</td>

<td>0.00510127
</td>

<td>-0.55826
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-814-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-814-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>815
</td>

<td>0.44714
</td>

<td>0.185675
</td>

<td>-0.261465
</td>

<td>0.915341
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-815-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-815-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>816
</td>

<td>0.54463
</td>

<td>0.0994072
</td>

<td>-0.445223
</td>

<td>0.99921
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-816-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-816-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>817
</td>

<td>0.529155
</td>

<td>0.00935803
</td>

<td>-0.519797
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-817-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-817-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>818
</td>

<td>0.555392
</td>

<td>0.0426931
</td>

<td>-0.512699
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-818-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-818-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>819
</td>

<td>1.07352
</td>

<td>0.00422788
</td>

<td>-1.06929
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-819-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-819-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>820
</td>

<td>0.542479
</td>

<td>0.039514
</td>

<td>-0.502965
</td>

<td>0.99994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-820-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-820-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>821
</td>

<td>0.551357
</td>

<td>0.0082497
</td>

<td>-0.543107
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-821-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-821-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>822
</td>

<td>0.419506
</td>

<td>0.00606098
</td>

<td>-0.413445
</td>

<td>0.999861
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-822-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-822-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>823
</td>

<td>0.857489
</td>

<td>0.00487725
</td>

<td>-0.852612
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-823-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-823-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>824
</td>

<td>0.458746
</td>

<td>0.0406146
</td>

<td>-0.418132
</td>

<td>0.997915
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-824-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-824-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>825
</td>

<td>0.402363
</td>

<td>0.00925422
</td>

<td>-0.393109
</td>

<td>0.999512
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-825-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-825-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>826
</td>

<td>1.20527
</td>

<td>0.00390783
</td>

<td>-1.20136
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-826-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-826-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>827
</td>

<td>0.533296
</td>

<td>0.00407006
</td>

<td>-0.529226
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-827-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-827-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>828
</td>

<td>0.558114
</td>

<td>0.0345178
</td>

<td>-0.523596
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-828-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-828-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>829
</td>

<td>0.570787
</td>

<td>0.00471759
</td>

<td>-0.566069
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-829-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-829-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>830
</td>

<td>0.580464
</td>

<td>0.0405793
</td>

<td>-0.539885
</td>

<td>0.999969
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-830-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-830-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>831
</td>

<td>0.785287
</td>

<td>0.00522945
</td>

<td>-0.780058
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-831-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-831-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>832
</td>

<td>0.589745
</td>

<td>0.00605272
</td>

<td>-0.583692
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-832-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-832-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>833
</td>

<td>1.10144
</td>

<td>0.0477012
</td>

<td>-1.05374
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-833-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-833-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>834
</td>

<td>0.611965
</td>

<td>0.00596344
</td>

<td>-0.606002
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-834-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-834-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>835
</td>

<td>0.562049
</td>

<td>0.00456497
</td>

<td>-0.557484
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-835-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-835-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>836
</td>

<td>0.493958
</td>

<td>0.0112175
</td>

<td>-0.482741
</td>

<td>0.999976
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-836-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-836-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>837
</td>

<td>0.969884
</td>

<td>0.0422659
</td>

<td>-0.927618
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-837-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-837-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>838
</td>

<td>0.610371
</td>

<td>0.00466554
</td>

<td>-0.605705
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-838-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-838-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>839
</td>

<td>0.525863
</td>

<td>0.00462133
</td>

<td>-0.521241
</td>

<td>0.999985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-839-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-839-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>840
</td>

<td>0.52604
</td>

<td>0.00739803
</td>

<td>-0.518642
</td>

<td>0.999942
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-840-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-840-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>841
</td>

<td>0.507246
</td>

<td>0.00606743
</td>

<td>-0.501178
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-841-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-841-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>842
</td>

<td>0.682128
</td>

<td>0.00395572
</td>

<td>-0.678173
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-842-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-842-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>843
</td>

<td>1.25013
</td>

<td>0.0965114
</td>

<td>-1.15362
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-843-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-843-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>844
</td>

<td>0.583067
</td>

<td>0.118148
</td>

<td>-0.464919
</td>

<td>0.999776
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-844-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-844-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>846
</td>

<td>0.386836
</td>

<td>0.0866448
</td>

<td>-0.300191
</td>

<td>0.907073
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-846-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-846-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>847
</td>

<td>0.613618
</td>

<td>0.00617119
</td>

<td>-0.607447
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-847-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-847-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>848
</td>

<td>0.516461
</td>

<td>0.120583
</td>

<td>-0.395878
</td>

<td>0.991631
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-848-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-848-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>849
</td>

<td>0.560478
</td>

<td>0.114573
</td>

<td>-0.445905
</td>

<td>0.998618
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-849-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-849-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>850
</td>

<td>0.435312
</td>

<td>0.0454501
</td>

<td>-0.389862
</td>

<td>0.997635
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-850-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-850-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>851
</td>

<td>0.554716
</td>

<td>0.0406636
</td>

<td>-0.514052
</td>

<td>0.999989
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-851-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-851-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>852
</td>

<td>0.542996
</td>

<td>0.050382
</td>

<td>-0.492614
</td>

<td>0.999682
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-852-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-852-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>853
</td>

<td>0.816065
</td>

<td>0.0070801
</td>

<td>-0.808985
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-853-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-853-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>854
</td>

<td>0.491021
</td>

<td>0.0514048
</td>

<td>-0.439617
</td>

<td>0.997697
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-854-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-854-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>855
</td>

<td>0.52898
</td>

<td>0.00595187
</td>

<td>-0.523028
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-855-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-855-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>856
</td>

<td>0.537644
</td>

<td>0.138304
</td>

<td>-0.39934
</td>

<td>0.992432
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-856-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-856-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>857
</td>

<td>0.595353
</td>

<td>0.090912
</td>

<td>-0.504441
</td>

<td>0.999954
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-857-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-857-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>858
</td>

<td>0.563931
</td>

<td>0.0107324
</td>

<td>-0.553198
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-858-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-858-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>859
</td>

<td>0.627139
</td>

<td>0.036555
</td>

<td>-0.590584
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-859-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-859-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>860
</td>

<td>0.553405
</td>

<td>0.124155
</td>

<td>-0.42925
</td>

<td>0.998681
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-860-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-860-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>861
</td>

<td>0.736487
</td>

<td>0.00444291
</td>

<td>-0.732044
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-861-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-861-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>862
</td>

<td>0.52225
</td>

<td>0.00529859
</td>

<td>-0.516952
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-862-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-862-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>863
</td>

<td>1.0878
</td>

<td>0.0376577
</td>

<td>-1.05015
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-863-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-863-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>864
</td>

<td>0.546947
</td>

<td>0.0862685
</td>

<td>-0.460678
</td>

<td>0.999431
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-864-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-864-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>865
</td>

<td>1.14586
</td>

<td>0.0920406
</td>

<td>-1.05382
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-865-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-865-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>866
</td>

<td>0.474958
</td>

<td>0.00466015
</td>

<td>-0.470298
</td>

<td>0.999829
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-866-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-866-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>867
</td>

<td>0.241621
</td>

<td>0.00625073
</td>

<td>-0.23537
</td>

<td>0.994329
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-867-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-867-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>868
</td>

<td>0.464222
</td>

<td>0.0351997
</td>

<td>-0.429022
</td>

<td>0.999245
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-868-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-868-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>869
</td>

<td>0.551707
</td>

<td>0.00464345
</td>

<td>-0.547064
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-869-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-869-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>870
</td>

<td>0.577708
</td>

<td>0.119145
</td>

<td>-0.458562
</td>

<td>0.998554
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-870-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-870-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>871
</td>

<td>0.497073
</td>

<td>0.00468809
</td>

<td>-0.492385
</td>

<td>0.999964
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-871-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-871-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>872
</td>

<td>0.516256
</td>

<td>0.00569541
</td>

<td>-0.51056
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-872-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-872-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>873
</td>

<td>0.587828
</td>

<td>0.00487929
</td>

<td>-0.582949
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-873-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-873-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>874
</td>

<td>0.670844
</td>

<td>0.0365467
</td>

<td>-0.634297
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-874-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-874-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>875
</td>

<td>0.550618
</td>

<td>0.1529
</td>

<td>-0.397718
</td>

<td>0.993977
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-875-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-875-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>876
</td>

<td>0.490641
</td>

<td>0.0115066
</td>

<td>-0.479135
</td>

<td>0.999937
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-876-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-876-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>877
</td>

<td>0.594588
</td>

<td>0.00470345
</td>

<td>-0.589885
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-877-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-877-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>878
</td>

<td>0.474253
</td>

<td>0.132683
</td>

<td>-0.34157
</td>

<td>0.984841
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-878-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-878-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>879
</td>

<td>0.370105
</td>

<td>0.0103409
</td>

<td>-0.359764
</td>

<td>0.996455
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-879-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-879-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>881
</td>

<td>0.783366
</td>

<td>0.0606255
</td>

<td>-0.72274
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-881-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.8276751973739.1-881-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>
</TABLE></DIV>
</form></DIV><DIV Class='DateStamp'>Page generated on<i> 2016/3/6 1:20 GMT</i></DIV>	<div style = 'text-align:right;background-color:#FF5223;font-size:12px;padding-right:5px;'><i>UCSD Viral Evolution Group 2004-2016</i></div>
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
