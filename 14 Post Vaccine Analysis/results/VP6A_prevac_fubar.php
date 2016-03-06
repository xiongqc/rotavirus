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
<H1 CLASS='SuccessCap'>FUBAR analysis results</H1><DIV CLASS='RepClassCT'><b>Reports</b> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.25495904033911.1&task=13&format=0'>[HTML]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.25495904033911.1&task=13&format=1' target = '_blank'>[CSV]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.25495904033911.1&task=13&format=2'>[Plots]</a></DIV><DIV Class='RepClassBox'><b>Job ID:</b>upload.25495904033911.1 <a class = 'InfoLink' href='http://www.datamonkey.org/cgi-bin/datamonkey/jobStatus.pl?file=upload.25495904033911.1' TARGET = '_top'>[Information:Other analyses]</a></DIV><DIV CLASS='RepClassSM'><b>Data summary</b><p><b>315</b> sequences with <b>1</b> partition<DIV CLASS = 'ErrorTagSM'>These sequences have not been screened for recombination. Selection analyses of alignments with recombinants in them using a single tree may generate <u>misleading</u> results.</DIV><br clear=all><span style = 'font-size: x-small; margin-left:10px;'>Partition <b>1</b>: 402 codons 0 subs/site</span>
</DIV><DIV CLASS='RepClassSM'>FUBAR was run on a grid with <b>20</b> synonymous rates and <b>20</b> non-synonymous rates, yielding <b>400</b> total points, of which <b>190</b> represented <i>negative</i> selection, <b>20</b> - <i>neutral</i> evolution, and <b>190</b> - <i>positive</i> selection.<div style='width:650px;height:260px;spacing:10px;background-color:white;border: 1px solid black;'>
                   <span style='text-align:right; width:100%'>MCMC trace</span>
                   <div id="fubar_mcmc_trace" style = 'width:625px;height:225px;'></div></div><script type="text/javascript">
$(function () {
    var d1 = [];
    var mcmc = [
[1,-19132.1],
[2,-19130.8],
[3,-19133.7],
[4,-19115.8],
[5,-19133.0],
[6,-19127.5],
[7,-19121.6],
[8,-19137.6],
[9,-19121.0],
[10,-19128.9],
[11,-19122.4],
[12,-19132.0],
[13,-19120.8],
[14,-19124.2],
[15,-19132.7],
[16,-19122.5],
[17,-19115.5],
[18,-19116.7],
[19,-19126.4],
[20,-19130.9],
[21,-19097.0],
[22,-19114.1],
[23,-19109.9],
[24,-19114.8],
[25,-19103.0],
[26,-19103.8],
[27,-19113.0],
[28,-19111.4],
[29,-19100.6],
[30,-19110.2],
[31,-19104.6],
[32,-19122.0],
[33,-19118.7],
[34,-19116.5],
[35,-19113.7],
[36,-19111.0],
[37,-19115.6],
[38,-19119.0],
[39,-19103.9],
[40,-19112.7],
[41,-19121.5],
[42,-19111.7],
[43,-19110.3],
[44,-19125.6],
[45,-19130.9],
[46,-19117.8],
[47,-19144.6],
[48,-19110.4],
[49,-19139.9],
[50,-19111.8],
[51,-19125.1],
[52,-19109.9],
[53,-19135.8],
[54,-19119.2],
[55,-19124.6],
[56,-19129.2],
[57,-19116.2],
[58,-19110.6],
[59,-19121.9],
[60,-19129.1],
[61,-19125.1],
[62,-19117.3],
[63,-19132.2],
[64,-19133.3],
[65,-19111.5],
[66,-19125.0],
[67,-19116.3],
[68,-19108.3],
[69,-19121.4],
[70,-19120.8],
[71,-19126.6],
[72,-19120.4],
[73,-19137.9],
[74,-19109.1],
[75,-19127.3],
[76,-19118.5],
[77,-19115.2],
[78,-19107.8],
[79,-19134.9],
[80,-19119.3],
[81,-19117.9],
[82,-19124.1],
[83,-19129.2],
[84,-19126.9],
[85,-19126.6],
[86,-19129.7],
[87,-19110.3],
[88,-19124.4],
[89,-19116.5],
[90,-19117.0],
[91,-19110.1],
[92,-19122.3],
[93,-19114.6],
[94,-19121.0],
[95,-19124.6],
[96,-19116.7],
[97,-19124.9],
[98,-19121.8],
[99,-19110.9],
[100,-19113.5],];    
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
                    <dt class = 'DT1'> <b>Mean values.</b> &beta; = 0.71,  &beta;-&alpha; = -0.29, &omega; =  4.48</dt>
                    <dt class = 'DT2'> <b>Weights.</b> Pr[&alpha; &gt; &beta;] = 0.823, Pr[&alpha; = &beta;] = 0.019, Pr[&alpha; &lt; &beta;] = 0.158</dt>
                 </dl><IMG SRC = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-0-png&mode=5' WIDTH = '640' HEIGHT = '480' BORDER = '1'><p><a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-0-svg&mode=4'>[SVG]</a>&nbsp;<a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-grid-svg&mode=4'>[FUBAR grid]</a>&nbsp;</p></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found no sites with evidence of pervasive diversifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.25495904033911.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'></form></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found <b>395</b> sites with evidence of pervasive purifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.25495904033911.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'><p><DIV CLASS = 'HelpfulTips'>This summary table reports the means of posterior distribution of synonymous (&alpha;) and non-synonymous (&beta;) substitution rates over <b>sites</b>, as well as the mean posterior probability for &omega; (=&beta;/&alpha;) &lt; 1 at a site.</DIV><DIV CLASS='RepClassSM'>
<TABLE BORDER = '0'><TR CLASS='TRReport' style = 'font-size:small'><td>Codon</td>
<td>&alpha;</td>
<td>&beta;</td>
<td>&beta;-&alpha;</td>
<td>Posterior Prob &beta;&lt;&alpha;</td>
<td>3D rate plot<span class = 'INFO' onmouseover = "Tip('The SVG format may not display correctly in all browsers')">?</span></td></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>1
</td>

<td>0.533834
</td>

<td>0.000758545
</td>

<td>-0.533076
</td>

<td>0.997991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-1-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-1-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>2
</td>

<td>0.293251
</td>

<td>0.118644
</td>

<td>-0.174607
</td>

<td>0.907788
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-2-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-2-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>3
</td>

<td>0.17044
</td>

<td>0.0333071
</td>

<td>-0.137133
</td>

<td>0.978475
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-3-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-3-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>4
</td>

<td>0.177187
</td>

<td>0.00354154
</td>

<td>-0.173645
</td>

<td>0.999575
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-4-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-4-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>5
</td>

<td>0.375041
</td>

<td>0.0320706
</td>

<td>-0.34297
</td>

<td>0.999533
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-5-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-5-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>6
</td>

<td>0.43883
</td>

<td>0.00228731
</td>

<td>-0.436543
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-6-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-6-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>7
</td>

<td>0.43944
</td>

<td>0.0319317
</td>

<td>-0.407508
</td>

<td>0.999911
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-7-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-7-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>8
</td>

<td>0.473918
</td>

<td>0.0276829
</td>

<td>-0.446235
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-8-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-8-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>9
</td>

<td>0.365144
</td>

<td>0.0457535
</td>

<td>-0.31939
</td>

<td>0.984037
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-9-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-9-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>10
</td>

<td>0.333055
</td>

<td>0.0294169
</td>

<td>-0.303638
</td>

<td>0.995441
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-10-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-10-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>11
</td>

<td>0.45904
</td>

<td>0.0279196
</td>

<td>-0.43112
</td>

<td>0.999982
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-11-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-11-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>12
</td>

<td>0.413223
</td>

<td>0.0335531
</td>

<td>-0.37967
</td>

<td>0.997537
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-12-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-12-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>13
</td>

<td>0.377519
</td>

<td>0.0296162
</td>

<td>-0.347902
</td>

<td>0.993986
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-13-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-13-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>14
</td>

<td>0.455493
</td>

<td>0.00165576
</td>

<td>-0.453837
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-14-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-14-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>15
</td>

<td>0.443397
</td>

<td>0.00227283
</td>

<td>-0.441124
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-15-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-15-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>16
</td>

<td>0.428054
</td>

<td>0.0286792
</td>

<td>-0.399375
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-16-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-16-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>17
</td>

<td>0.846891
</td>

<td>0.035956
</td>

<td>-0.810935
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-17-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-17-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>18
</td>

<td>0.44492
</td>

<td>0.00193835
</td>

<td>-0.442981
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-18-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-18-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>19
</td>

<td>0.258922
</td>

<td>0.0306348
</td>

<td>-0.228287
</td>

<td>0.998965
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-19-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-19-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>20
</td>

<td>0.367878
</td>

<td>0.00230569
</td>

<td>-0.365572
</td>

<td>0.999912
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-20-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-20-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>21
</td>

<td>0.159661
</td>

<td>0.00130608
</td>

<td>-0.158355
</td>

<td>0.999692
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-21-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-21-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>22
</td>

<td>0.454116
</td>

<td>0.00162959
</td>

<td>-0.452486
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-22-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-22-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>23
</td>

<td>0.458872
</td>

<td>0.0282665
</td>

<td>-0.430605
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-23-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-23-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>24
</td>

<td>0.426589
</td>

<td>0.00322526
</td>

<td>-0.423363
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-24-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-24-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>25
</td>

<td>0.435176
</td>

<td>0.00172512
</td>

<td>-0.433451
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-25-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-25-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>26
</td>

<td>0.42984
</td>

<td>0.00245114
</td>

<td>-0.427389
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-26-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-26-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>27
</td>

<td>0.444781
</td>

<td>0.0362973
</td>

<td>-0.408484
</td>

<td>0.999959
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-27-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-27-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>28
</td>

<td>0.375525
</td>

<td>0.0308803
</td>

<td>-0.344644
</td>

<td>0.999092
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-28-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-28-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>29
</td>

<td>0.452355
</td>

<td>0.0398885
</td>

<td>-0.412467
</td>

<td>0.99967
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-29-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-29-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>30
</td>

<td>0.447205
</td>

<td>0.0303268
</td>

<td>-0.416878
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-30-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-30-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>31
</td>

<td>0.41773
</td>

<td>0.00177367
</td>

<td>-0.415956
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-31-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-31-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>32
</td>

<td>0.80467
</td>

<td>0.0368799
</td>

<td>-0.76779
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-32-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-32-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>33
</td>

<td>0.42701
</td>

<td>0.0328175
</td>

<td>-0.394193
</td>

<td>0.998879
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-33-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-33-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>34
</td>

<td>0.42534
</td>

<td>0.00162911
</td>

<td>-0.42371
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-34-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-34-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>35
</td>

<td>0.437381
</td>

<td>0.00250675
</td>

<td>-0.434874
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-35-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-35-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>36
</td>

<td>0.300118
</td>

<td>0.00534695
</td>

<td>-0.294771
</td>

<td>0.996907
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-36-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-36-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>37
</td>

<td>0.533273
</td>

<td>0.000527585
</td>

<td>-0.532746
</td>

<td>0.998061
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-37-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-37-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>38
</td>

<td>0.327555
</td>

<td>0.0528297
</td>

<td>-0.274726
</td>

<td>0.924815
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-38-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-38-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>39
</td>

<td>0.446243
</td>

<td>0.0354378
</td>

<td>-0.410805
</td>

<td>0.999942
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-39-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-39-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>40
</td>

<td>0.450884
</td>

<td>0.0016339
</td>

<td>-0.449251
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-40-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-40-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>41
</td>

<td>0.533273
</td>

<td>0.000527585
</td>

<td>-0.532746
</td>

<td>0.998061
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-41-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-41-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>42
</td>

<td>0.418761
</td>

<td>0.00245301
</td>

<td>-0.416308
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-42-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-42-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>43
</td>

<td>0.380185
</td>

<td>0.00200044
</td>

<td>-0.378184
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-43-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-43-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>44
</td>

<td>0.418717
</td>

<td>0.00242089
</td>

<td>-0.416296
</td>

<td>0.99998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-44-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-44-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>45
</td>

<td>0.716668
</td>

<td>0.100146
</td>

<td>-0.616522
</td>

<td>0.999951
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-45-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-45-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>46
</td>

<td>0.457254
</td>

<td>0.00171473
</td>

<td>-0.45554
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-46-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-46-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>47
</td>

<td>0.523675
</td>

<td>0.00520091
</td>

<td>-0.518474
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-47-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-47-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>48
</td>

<td>0.189601
</td>

<td>0.00108491
</td>

<td>-0.188516
</td>

<td>0.998842
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-48-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-48-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>49
</td>

<td>0.325852
</td>

<td>0.00185602
</td>

<td>-0.323996
</td>

<td>0.999944
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-49-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-49-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>50
</td>

<td>0.299464
</td>

<td>0.00178326
</td>

<td>-0.29768
</td>

<td>0.999918
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-50-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-50-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>51
</td>

<td>0.363257
</td>

<td>0.00161287
</td>

<td>-0.361644
</td>

<td>0.99998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-51-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-51-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>52
</td>

<td>0.458151
</td>

<td>0.00207664
</td>

<td>-0.456074
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-52-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-52-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>53
</td>

<td>0.470311
</td>

<td>0.0296558
</td>

<td>-0.440655
</td>

<td>0.999982
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-53-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-53-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>54
</td>

<td>0.446876
</td>

<td>0.00395548
</td>

<td>-0.442921
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-54-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-54-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>55
</td>

<td>0.45967
</td>

<td>0.0276364
</td>

<td>-0.432033
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-55-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-55-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>57
</td>

<td>0.434584
</td>

<td>0.00210989
</td>

<td>-0.432474
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-57-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-57-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>58
</td>

<td>0.486768
</td>

<td>0.0279444
</td>

<td>-0.458823
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-58-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-58-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>59
</td>

<td>0.550623
</td>

<td>0.00506342
</td>

<td>-0.54556
</td>

<td>0.995847
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-59-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-59-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>60
</td>

<td>0.432998
</td>

<td>0.0294944
</td>

<td>-0.403504
</td>

<td>0.999856
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-60-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-60-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>61
</td>

<td>0.426885
</td>

<td>0.00163029
</td>

<td>-0.425255
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-61-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-61-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>62
</td>

<td>0.432138
</td>

<td>0.0335648
</td>

<td>-0.398573
</td>

<td>0.999815
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-62-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-62-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>63
</td>

<td>0.561099
</td>

<td>0.00155048
</td>

<td>-0.559548
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-63-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-63-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>64
</td>

<td>0.457427
</td>

<td>0.00211923
</td>

<td>-0.455308
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-64-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-64-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>65
</td>

<td>0.45227
</td>

<td>0.00397098
</td>

<td>-0.448299
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-65-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-65-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>66
</td>

<td>0.441526
</td>

<td>0.00241929
</td>

<td>-0.439107
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-66-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-66-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>67
</td>

<td>0.44644
</td>

<td>0.00209824
</td>

<td>-0.444341
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-67-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-67-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>68
</td>

<td>0.475592
</td>

<td>0.00161117
</td>

<td>-0.473981
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-68-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-68-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>69
</td>

<td>0.469239
</td>

<td>0.00162483
</td>

<td>-0.467614
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-69-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-69-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>70
</td>

<td>0.455072
</td>

<td>0.027986
</td>

<td>-0.427086
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-70-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-70-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>71
</td>

<td>0.406026
</td>

<td>0.00356421
</td>

<td>-0.402462
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-71-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-71-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>72
</td>

<td>0.473993
</td>

<td>0.00246902
</td>

<td>-0.471524
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-72-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-72-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>73
</td>

<td>0.467054
</td>

<td>0.0280252
</td>

<td>-0.439029
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-73-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-73-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>74
</td>

<td>0.44906
</td>

<td>0.00241593
</td>

<td>-0.446644
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-74-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-74-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>75
</td>

<td>0.442506
</td>

<td>0.0274894
</td>

<td>-0.415017
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-75-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-75-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>76
</td>

<td>0.394262
</td>

<td>0.00241521
</td>

<td>-0.391846
</td>

<td>0.99999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-76-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-76-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>77
</td>

<td>0.465579
</td>

<td>0.00321916
</td>

<td>-0.46236
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-77-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-77-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>78
</td>

<td>0.44385
</td>

<td>0.00181946
</td>

<td>-0.44203
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-78-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-78-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>79
</td>

<td>0.456792
</td>

<td>0.0291243
</td>

<td>-0.427667
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-79-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-79-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>80
</td>

<td>1.00968
</td>

<td>0.0470595
</td>

<td>-0.962619
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-80-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-80-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>81
</td>

<td>0.463823
</td>

<td>0.00153926
</td>

<td>-0.462284
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-81-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-81-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>82
</td>

<td>0.838099
</td>

<td>0.00141214
</td>

<td>-0.836686
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-82-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-82-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>83
</td>

<td>0.440518
</td>

<td>0.028991
</td>

<td>-0.411527
</td>

<td>0.999981
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-83-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-83-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>84
</td>

<td>0.552674
</td>

<td>0.00150811
</td>

<td>-0.551166
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-84-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-84-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>85
</td>

<td>0.357618
</td>

<td>0.00166169
</td>

<td>-0.355956
</td>

<td>0.999975
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-85-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-85-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>86
</td>

<td>0.394847
</td>

<td>0.0292489
</td>

<td>-0.365598
</td>

<td>0.99919
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-86-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-86-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>87
</td>

<td>0.444739
</td>

<td>0.0287043
</td>

<td>-0.416035
</td>

<td>0.999959
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-87-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-87-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>88
</td>

<td>0.478863
</td>

<td>0.00164491
</td>

<td>-0.477218
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-88-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-88-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>89
</td>

<td>0.44663
</td>

<td>0.0307677
</td>

<td>-0.415862
</td>

<td>0.99998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-89-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-89-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>90
</td>

<td>0.433322
</td>

<td>0.00230408
</td>

<td>-0.431018
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-90-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-90-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>91
</td>

<td>0.689263
</td>

<td>0.00138937
</td>

<td>-0.687874
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-91-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-91-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>92
</td>

<td>0.474543
</td>

<td>0.0273781
</td>

<td>-0.447165
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-92-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-92-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>93
</td>

<td>0.470878
</td>

<td>0.00232549
</td>

<td>-0.468553
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-93-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-93-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>94
</td>

<td>0.467747
</td>

<td>0.0024987
</td>

<td>-0.465249
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-94-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-94-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>95
</td>

<td>0.480978
</td>

<td>0.00179765
</td>

<td>-0.479181
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-95-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-95-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>96
</td>

<td>0.630698
</td>

<td>0.00195431
</td>

<td>-0.628744
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-96-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-96-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>97
</td>

<td>0.493605
</td>

<td>0.0300594
</td>

<td>-0.463546
</td>

<td>0.981802
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-97-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-97-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>98
</td>

<td>0.509611
</td>

<td>0.00225862
</td>

<td>-0.507352
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-98-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-98-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>99
</td>

<td>0.459475
</td>

<td>0.00256102
</td>

<td>-0.456914
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-99-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-99-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>100
</td>

<td>0.453351
</td>

<td>0.0275482
</td>

<td>-0.425802
</td>

<td>0.98694
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-100-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-100-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>101
</td>

<td>0.458232
</td>

<td>0.0297164
</td>

<td>-0.428515
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-101-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-101-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>102
</td>

<td>0.447055
</td>

<td>0.00224819
</td>

<td>-0.444807
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-102-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-102-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>103
</td>

<td>0.456402
</td>

<td>0.00262772
</td>

<td>-0.453774
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-103-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-103-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>104
</td>

<td>0.459926
</td>

<td>0.00185181
</td>

<td>-0.458075
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-104-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-104-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>105
</td>

<td>0.413333
</td>

<td>0.00548214
</td>

<td>-0.407851
</td>

<td>0.999865
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-105-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-105-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>106
</td>

<td>0.502893
</td>

<td>0.00237641
</td>

<td>-0.500516
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-106-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-106-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>107
</td>

<td>0.584529
</td>

<td>0.00227482
</td>

<td>-0.582255
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-107-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-107-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>108
</td>

<td>0.294542
</td>

<td>0.00176933
</td>

<td>-0.292773
</td>

<td>0.999912
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-108-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-108-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>109
</td>

<td>0.414101
</td>

<td>0.0472524
</td>

<td>-0.366849
</td>

<td>0.999147
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-109-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-109-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>110
</td>

<td>0.462172
</td>

<td>0.0272967
</td>

<td>-0.434875
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-110-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-110-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>111
</td>

<td>0.470229
</td>

<td>0.00132981
</td>

<td>-0.468899
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-111-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-111-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>112
</td>

<td>0.373198
</td>

<td>0.00547744
</td>

<td>-0.36772
</td>

<td>0.999391
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-112-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-112-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>113
</td>

<td>0.431813
</td>

<td>0.00178254
</td>

<td>-0.430031
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-113-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-113-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>114
</td>

<td>0.554208
</td>

<td>0.0403052
</td>

<td>-0.513903
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-114-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-114-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>115
</td>

<td>0.596583
</td>

<td>0.028908
</td>

<td>-0.567675
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-115-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-115-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>116
</td>

<td>0.456577
</td>

<td>0.00247818
</td>

<td>-0.454099
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-116-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-116-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>117
</td>

<td>1.03715
</td>

<td>0.00123573
</td>

<td>-1.03592
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-117-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-117-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>118
</td>

<td>0.467747
</td>

<td>0.00296713
</td>

<td>-0.46478
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-118-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-118-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>119
</td>

<td>0.450863
</td>

<td>0.00407831
</td>

<td>-0.446785
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-119-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-119-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>120
</td>

<td>0.45508
</td>

<td>0.0282028
</td>

<td>-0.426877
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-120-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-120-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>121
</td>

<td>0.659868
</td>

<td>0.0335675
</td>

<td>-0.626301
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-121-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-121-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>122
</td>

<td>0.433427
</td>

<td>0.0278666
</td>

<td>-0.40556
</td>

<td>0.999977
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-122-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-122-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>123
</td>

<td>0.391773
</td>

<td>0.0686257
</td>

<td>-0.323147
</td>

<td>0.993764
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-123-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-123-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>124
</td>

<td>0.484547
</td>

<td>0.00165798
</td>

<td>-0.482889
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-124-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-124-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>125
</td>

<td>0.475789
</td>

<td>0.00285758
</td>

<td>-0.472932
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-125-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-125-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>126
</td>

<td>0.468319
</td>

<td>0.00214209
</td>

<td>-0.466177
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-126-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-126-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>127
</td>

<td>0.488094
</td>

<td>0.0273214
</td>

<td>-0.460773
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-127-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-127-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>128
</td>

<td>0.449961
</td>

<td>0.00255687
</td>

<td>-0.447404
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-128-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-128-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>129
</td>

<td>0.530529
</td>

<td>0.00158364
</td>

<td>-0.528945
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-129-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-129-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>130
</td>

<td>0.683286
</td>

<td>0.0438683
</td>

<td>-0.639418
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-130-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-130-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>131
</td>

<td>0.488523
</td>

<td>0.0024624
</td>

<td>-0.48606
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-131-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-131-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>132
</td>

<td>0.447711
</td>

<td>0.00192308
</td>

<td>-0.445788
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-132-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-132-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>133
</td>

<td>0.623683
</td>

<td>0.00164621
</td>

<td>-0.622037
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-133-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-133-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>134
</td>

<td>0.391384
</td>

<td>0.0471954
</td>

<td>-0.344189
</td>

<td>0.994803
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-134-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-134-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>135
</td>

<td>0.550301
</td>

<td>0.00300395
</td>

<td>-0.547297
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-135-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-135-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>136
</td>

<td>0.455672
</td>

<td>0.00134968
</td>

<td>-0.454322
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-136-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-136-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>137
</td>

<td>0.442673
</td>

<td>0.0281891
</td>

<td>-0.414484
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-137-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-137-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>138
</td>

<td>0.488437
</td>

<td>0.0025173
</td>

<td>-0.485919
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-138-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-138-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>139
</td>

<td>0.550623
</td>

<td>0.00506342
</td>

<td>-0.54556
</td>

<td>0.995847
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-139-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-139-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>140
</td>

<td>0.456998
</td>

<td>0.00246663
</td>

<td>-0.454531
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-140-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-140-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>141
</td>

<td>0.451971
</td>

<td>0.00399138
</td>

<td>-0.44798
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-141-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-141-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>142
</td>

<td>0.447539
</td>

<td>0.00563874
</td>

<td>-0.4419
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-142-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-142-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>143
</td>

<td>0.443296
</td>

<td>0.0297652
</td>

<td>-0.413531
</td>

<td>0.999965
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-143-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-143-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>144
</td>

<td>0.45283
</td>

<td>0.0277226
</td>

<td>-0.425107
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-144-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-144-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>145
</td>

<td>0.459102
</td>

<td>0.0021675
</td>

<td>-0.456935
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-145-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-145-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>146
</td>

<td>0.455889
</td>

<td>0.0306569
</td>

<td>-0.425232
</td>

<td>0.999966
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-146-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-146-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>147
</td>

<td>0.765863
</td>

<td>0.00162376
</td>

<td>-0.764239
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-147-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-147-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>148
</td>

<td>0.658011
</td>

<td>0.00136108
</td>

<td>-0.65665
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-148-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-148-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>149
</td>

<td>0.257091
</td>

<td>0.00162508
</td>

<td>-0.255466
</td>

<td>0.99968
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-149-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-149-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>150
</td>

<td>0.710001
</td>

<td>0.00134574
</td>

<td>-0.708655
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-150-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-150-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>151
</td>

<td>0.513611
</td>

<td>0.0420935
</td>

<td>-0.471517
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-151-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-151-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>152
</td>

<td>0.612672
</td>

<td>0.00148352
</td>

<td>-0.611189
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-152-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-152-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>153
</td>

<td>0.456891
</td>

<td>0.0276887
</td>

<td>-0.429202
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-153-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-153-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>154
</td>

<td>0.372354
</td>

<td>0.0341031
</td>

<td>-0.338251
</td>

<td>0.993681
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-154-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-154-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>155
</td>

<td>0.445687
</td>

<td>0.0013246
</td>

<td>-0.444362
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-155-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-155-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>156
</td>

<td>0.44303
</td>

<td>0.00259892
</td>

<td>-0.440432
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-156-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-156-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>157
</td>

<td>0.405467
</td>

<td>0.00150375
</td>

<td>-0.403963
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-157-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-157-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>158
</td>

<td>0.448155
</td>

<td>0.0275053
</td>

<td>-0.420649
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-158-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-158-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>159
</td>

<td>0.379003
</td>

<td>0.00121265
</td>

<td>-0.37779
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-159-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-159-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>160
</td>

<td>0.429967
</td>

<td>0.00322439
</td>

<td>-0.426742
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-160-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-160-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>161
</td>

<td>0.317764
</td>

<td>0.00161807
</td>

<td>-0.316146
</td>

<td>0.99995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-161-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-161-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>162
</td>

<td>0.472031
</td>

<td>0.0294005
</td>

<td>-0.442631
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-162-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-162-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>163
</td>

<td>0.409377
</td>

<td>0.00184808
</td>

<td>-0.407529
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-163-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-163-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>164
</td>

<td>0.462505
</td>

<td>0.00173842
</td>

<td>-0.460767
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-164-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-164-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>165
</td>

<td>0.387752
</td>

<td>0.00151013
</td>

<td>-0.386242
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-165-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-165-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>166
</td>

<td>0.457492
</td>

<td>0.00397787
</td>

<td>-0.453514
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-166-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-166-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>167
</td>

<td>0.452692
</td>

<td>0.00258944
</td>

<td>-0.450103
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-167-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-167-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>168
</td>

<td>0.464292
</td>

<td>0.00232853
</td>

<td>-0.461964
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-168-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-168-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>169
</td>

<td>0.466541
</td>

<td>0.00186844
</td>

<td>-0.464672
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-169-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-169-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>170
</td>

<td>0.32151
</td>

<td>0.0055207
</td>

<td>-0.315989
</td>

<td>0.998625
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-170-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-170-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>171
</td>

<td>0.421791
</td>

<td>0.00128941
</td>

<td>-0.420501
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-171-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-171-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>172
</td>

<td>0.428227
</td>

<td>0.111479
</td>

<td>-0.316748
</td>

<td>0.991296
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-172-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-172-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>173
</td>

<td>0.435733
</td>

<td>0.00200432
</td>

<td>-0.433729
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-173-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-173-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>174
</td>

<td>0.585763
</td>

<td>0.0282568
</td>

<td>-0.557506
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-174-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-174-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>175
</td>

<td>0.457748
</td>

<td>0.0278111
</td>

<td>-0.429937
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-175-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-175-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>176
</td>

<td>0.462988
</td>

<td>0.00391399
</td>

<td>-0.459074
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-176-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-176-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>177
</td>

<td>0.533273
</td>

<td>0.000527585
</td>

<td>-0.532746
</td>

<td>0.998061
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-177-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-177-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>178
</td>

<td>0.244439
</td>

<td>0.00158122
</td>

<td>-0.242858
</td>

<td>0.999624
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-178-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-178-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>179
</td>

<td>0.936259
</td>

<td>0.00100411
</td>

<td>-0.935254
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-179-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-179-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>180
</td>

<td>0.592529
</td>

<td>0.0271193
</td>

<td>-0.56541
</td>

<td>0.990304
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-180-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-180-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>181
</td>

<td>0.550623
</td>

<td>0.00506342
</td>

<td>-0.54556
</td>

<td>0.995847
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-181-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-181-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>182
</td>

<td>0.46843
</td>

<td>0.0292855
</td>

<td>-0.439145
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-182-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-182-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>183
</td>

<td>0.479908
</td>

<td>0.0278367
</td>

<td>-0.452072
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-183-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-183-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>184
</td>

<td>0.486166
</td>

<td>0.0015064
</td>

<td>-0.48466
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-184-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-184-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>185
</td>

<td>0.323307
</td>

<td>0.00183339
</td>

<td>-0.321473
</td>

<td>0.999946
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-185-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-185-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>186
</td>

<td>0.402598
</td>

<td>0.00183523
</td>

<td>-0.400763
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-186-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-186-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>187
</td>

<td>0.752029
</td>

<td>0.00198042
</td>

<td>-0.750048
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-187-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-187-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>188
</td>

<td>0.432181
</td>

<td>0.0318074
</td>

<td>-0.400374
</td>

<td>0.999796
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-188-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-188-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>189
</td>

<td>0.394548
</td>

<td>0.00576087
</td>

<td>-0.388787
</td>

<td>0.999852
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-189-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-189-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>190
</td>

<td>0.601782
</td>

<td>0.00161101
</td>

<td>-0.600171
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-190-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-190-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>191
</td>

<td>0.437252
</td>

<td>0.00151148
</td>

<td>-0.435741
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-191-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-191-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>192
</td>

<td>0.405417
</td>

<td>0.00206985
</td>

<td>-0.403348
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-192-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-192-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>193
</td>

<td>0.556368
</td>

<td>0.00158014
</td>

<td>-0.554788
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-193-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-193-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>194
</td>

<td>0.565028
</td>

<td>0.00222863
</td>

<td>-0.5628
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-194-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-194-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>195
</td>

<td>0.904435
</td>

<td>0.00218399
</td>

<td>-0.902251
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-195-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-195-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>196
</td>

<td>0.933364
</td>

<td>0.00119289
</td>

<td>-0.932171
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-196-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-196-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>197
</td>

<td>0.876287
</td>

<td>0.00152772
</td>

<td>-0.874759
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-197-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-197-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>198
</td>

<td>0.512941
</td>

<td>0.00147081
</td>

<td>-0.51147
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-198-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-198-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>199
</td>

<td>0.470592
</td>

<td>0.0941985
</td>

<td>-0.376393
</td>

<td>0.999233
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-199-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-199-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>200
</td>

<td>0.859473
</td>

<td>0.0017605
</td>

<td>-0.857712
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-200-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-200-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>201
</td>

<td>0.478121
</td>

<td>0.00151702
</td>

<td>-0.476604
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-201-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-201-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>202
</td>

<td>0.241873
</td>

<td>0.00095047
</td>

<td>-0.240923
</td>

<td>0.999816
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-202-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-202-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>203
</td>

<td>0.865983
</td>

<td>0.00102182
</td>

<td>-0.864961
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-203-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-203-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>204
</td>

<td>0.801172
</td>

<td>0.00186649
</td>

<td>-0.799305
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-204-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-204-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>205
</td>

<td>0.481782
</td>

<td>0.060164
</td>

<td>-0.421618
</td>

<td>0.999899
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-205-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-205-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>206
</td>

<td>0.44605
</td>

<td>0.00564217
</td>

<td>-0.440408
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-206-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-206-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>207
</td>

<td>0.472775
</td>

<td>0.00545068
</td>

<td>-0.467324
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-207-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-207-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>208
</td>

<td>0.463628
</td>

<td>0.00165902
</td>

<td>-0.461969
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-208-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-208-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>209
</td>

<td>0.529627
</td>

<td>0.00243951
</td>

<td>-0.527188
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-209-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-209-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>210
</td>

<td>0.53624
</td>

<td>0.0019577
</td>

<td>-0.534283
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-210-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-210-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>211
</td>

<td>0.442541
</td>

<td>0.0306323
</td>

<td>-0.411909
</td>

<td>0.999966
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-211-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-211-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>212
</td>

<td>1.03677
</td>

<td>0.00100202
</td>

<td>-1.03577
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-212-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-212-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>213
</td>

<td>0.437787
</td>

<td>0.0720064
</td>

<td>-0.365781
</td>

<td>0.998417
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-213-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-213-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>214
</td>

<td>0.459914
</td>

<td>0.0022957
</td>

<td>-0.457618
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-214-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-214-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>215
</td>

<td>0.763669
</td>

<td>0.00218787
</td>

<td>-0.761481
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-215-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-215-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>216
</td>

<td>0.481363
</td>

<td>0.00195364
</td>

<td>-0.479409
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-216-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-216-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>217
</td>

<td>0.458483
</td>

<td>0.0293218
</td>

<td>-0.429161
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-217-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-217-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>218
</td>

<td>0.991924
</td>

<td>0.00216486
</td>

<td>-0.989759
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-218-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-218-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>219
</td>

<td>0.467365
</td>

<td>0.0016175
</td>

<td>-0.465747
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-219-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-219-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>220
</td>

<td>0.437488
</td>

<td>0.0285857
</td>

<td>-0.408902
</td>

<td>0.999982
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-220-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-220-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>221
</td>

<td>0.323188
</td>

<td>0.00128009
</td>

<td>-0.321908
</td>

<td>0.999969
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-221-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-221-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>222
</td>

<td>0.466916
</td>

<td>0.00162724
</td>

<td>-0.465289
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-222-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-222-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>223
</td>

<td>0.457035
</td>

<td>0.00137068
</td>

<td>-0.455664
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-223-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-223-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>224
</td>

<td>0.342718
</td>

<td>0.00140878
</td>

<td>-0.341309
</td>

<td>0.999975
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-224-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-224-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>225
</td>

<td>0.464981
</td>

<td>0.027686
</td>

<td>-0.437295
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-225-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-225-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>226
</td>

<td>0.460237
</td>

<td>0.0035349
</td>

<td>-0.456702
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-226-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-226-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>227
</td>

<td>0.459394
</td>

<td>0.00133302
</td>

<td>-0.458061
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-227-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-227-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>228
</td>

<td>0.441365
</td>

<td>0.00233591
</td>

<td>-0.439029
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-228-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-228-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>229
</td>

<td>0.376867
</td>

<td>0.00139579
</td>

<td>-0.375471
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-229-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-229-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>230
</td>

<td>0.407834
</td>

<td>0.00242039
</td>

<td>-0.405414
</td>

<td>0.999986
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-230-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-230-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>231
</td>

<td>0.459058
</td>

<td>0.00213544
</td>

<td>-0.456922
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-231-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-231-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>232
</td>

<td>0.508725
</td>

<td>0.00165426
</td>

<td>-0.50707
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-232-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-232-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>233
</td>

<td>0.449263
</td>

<td>0.0276329
</td>

<td>-0.42163
</td>

<td>0.999984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-233-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-233-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>234
</td>

<td>0.504976
</td>

<td>0.0302979
</td>

<td>-0.474678
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-234-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-234-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>235
</td>

<td>0.453084
</td>

<td>0.00133269
</td>

<td>-0.451751
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-235-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-235-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>236
</td>

<td>0.250907
</td>

<td>0.00164426
</td>

<td>-0.249262
</td>

<td>0.999137
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-236-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-236-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>237
</td>

<td>0.573496
</td>

<td>0.0277581
</td>

<td>-0.545738
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-237-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-237-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>238
</td>

<td>0.444537
</td>

<td>0.0309164
</td>

<td>-0.413621
</td>

<td>0.999975
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-238-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-238-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>239
</td>

<td>0.491237
</td>

<td>0.00244836
</td>

<td>-0.488789
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-239-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-239-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>240
</td>

<td>0.440424
</td>

<td>0.00189571
</td>

<td>-0.438528
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-240-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-240-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>241
</td>

<td>0.541516
</td>

<td>0.0274617
</td>

<td>-0.514055
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-241-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-241-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>242
</td>

<td>0.520598
</td>

<td>0.0294735
</td>

<td>-0.491125
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-242-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-242-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>243
</td>

<td>0.331929
</td>

<td>0.0301362
</td>

<td>-0.301793
</td>

<td>0.999736
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-243-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-243-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>244
</td>

<td>0.514872
</td>

<td>0.0505409
</td>

<td>-0.464331
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-244-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-244-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>245
</td>

<td>0.45599
</td>

<td>0.00163247
</td>

<td>-0.454358
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-245-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-245-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>246
</td>

<td>0.292573
</td>

<td>0.00129938
</td>

<td>-0.291273
</td>

<td>0.999947
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-246-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-246-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>247
</td>

<td>0.550623
</td>

<td>0.00506342
</td>

<td>-0.54556
</td>

<td>0.995847
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-247-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-247-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>248
</td>

<td>0.450991
</td>

<td>0.0391
</td>

<td>-0.411891
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-248-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-248-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>249
</td>

<td>0.561669
</td>

<td>0.00156608
</td>

<td>-0.560102
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-249-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-249-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>250
</td>

<td>0.57486
</td>

<td>0.0300509
</td>

<td>-0.54481
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-250-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-250-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>251
</td>

<td>0.23865
</td>

<td>0.000944445
</td>

<td>-0.237705
</td>

<td>0.999806
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-251-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-251-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>252
</td>

<td>0.467461
</td>

<td>0.0296588
</td>

<td>-0.437802
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-252-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-252-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>253
</td>

<td>0.436548
</td>

<td>0.028922
</td>

<td>-0.407626
</td>

<td>0.999985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-253-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-253-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>254
</td>

<td>0.490751
</td>

<td>0.038987
</td>

<td>-0.451764
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-254-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-254-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>255
</td>

<td>0.459637
</td>

<td>0.00213984
</td>

<td>-0.457497
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-255-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-255-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>256
</td>

<td>0.364955
</td>

<td>0.00118739
</td>

<td>-0.363767
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-256-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-256-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>258
</td>

<td>0.928646
</td>

<td>0.0319958
</td>

<td>-0.896651
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-258-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-258-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>259
</td>

<td>0.455229
</td>

<td>0.00258443
</td>

<td>-0.452644
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-259-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-259-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>260
</td>

<td>0.447072
</td>

<td>0.00181647
</td>

<td>-0.445256
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-260-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-260-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>261
</td>

<td>0.595761
</td>

<td>0.00228421
</td>

<td>-0.593477
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-261-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-261-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>262
</td>

<td>0.451001
</td>

<td>0.0302021
</td>

<td>-0.420799
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-262-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-262-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>263
</td>

<td>0.454863
</td>

<td>0.0026183
</td>

<td>-0.452245
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-263-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-263-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>264
</td>

<td>0.449165
</td>

<td>0.00165599
</td>

<td>-0.447509
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-264-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-264-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>265
</td>

<td>0.450237
</td>

<td>0.00367888
</td>

<td>-0.446558
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-265-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-265-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>266
</td>

<td>0.447767
</td>

<td>0.00399357
</td>

<td>-0.443774
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-266-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-266-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>267
</td>

<td>0.558343
</td>

<td>0.00234837
</td>

<td>-0.555995
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-267-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-267-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>268
</td>

<td>0.449491
</td>

<td>0.0021273
</td>

<td>-0.447364
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-268-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-268-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>269
</td>

<td>0.450212
</td>

<td>0.00567607
</td>

<td>-0.444536
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-269-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-269-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>270
</td>

<td>0.451894
</td>

<td>0.0295495
</td>

<td>-0.422344
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-270-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-270-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>271
</td>

<td>0.476125
</td>

<td>0.00153016
</td>

<td>-0.474595
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-271-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-271-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>272
</td>

<td>0.922849
</td>

<td>0.00165077
</td>

<td>-0.921198
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-272-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-272-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>273
</td>

<td>0.428815
</td>

<td>0.027788
</td>

<td>-0.401027
</td>

<td>0.999975
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-273-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-273-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>274
</td>

<td>0.429975
</td>

<td>0.00321297
</td>

<td>-0.426762
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-274-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-274-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>275
</td>

<td>0.463943
</td>

<td>0.00543586
</td>

<td>-0.458507
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-275-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-275-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>276
</td>

<td>0.448957
</td>

<td>0.00152651
</td>

<td>-0.447431
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-276-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-276-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>277
</td>

<td>0.437586
</td>

<td>0.00243006
</td>

<td>-0.435156
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-277-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-277-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>278
</td>

<td>0.403447
</td>

<td>0.00157937
</td>

<td>-0.401868
</td>

<td>0.999981
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-278-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-278-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>279
</td>

<td>0.461923
</td>

<td>0.00212731
</td>

<td>-0.459796
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-279-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-279-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>280
</td>

<td>0.490307
</td>

<td>0.0273399
</td>

<td>-0.462967
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-280-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-280-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>281
</td>

<td>0.452811
</td>

<td>0.0274619
</td>

<td>-0.425349
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-281-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-281-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>282
</td>

<td>0.596339
</td>

<td>0.143123
</td>

<td>-0.453216
</td>

<td>0.99889
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-282-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-282-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>283
</td>

<td>0.455581
</td>

<td>0.00153255
</td>

<td>-0.454049
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-283-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-283-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>284
</td>

<td>0.385154
</td>

<td>0.00198899
</td>

<td>-0.383165
</td>

<td>0.999984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-284-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-284-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>285
</td>

<td>0.484248
</td>

<td>0.00249576
</td>

<td>-0.481753
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-285-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-285-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>286
</td>

<td>0.454796
</td>

<td>0.00165005
</td>

<td>-0.453146
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-286-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-286-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>287
</td>

<td>0.45442
</td>

<td>0.00239441
</td>

<td>-0.452025
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-287-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-287-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>288
</td>

<td>0.902963
</td>

<td>0.00104451
</td>

<td>-0.901918
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-288-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-288-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>289
</td>

<td>0.418386
</td>

<td>0.00176746
</td>

<td>-0.416618
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-289-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-289-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>290
</td>

<td>0.691108
</td>

<td>0.00171575
</td>

<td>-0.689392
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-290-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-290-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>291
</td>

<td>0.614993
</td>

<td>0.00355507
</td>

<td>-0.611438
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-291-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-291-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>292
</td>

<td>0.454156
</td>

<td>0.0302347
</td>

<td>-0.423922
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-292-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-292-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>293
</td>

<td>0.459928
</td>

<td>0.00173314
</td>

<td>-0.458195
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-293-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-293-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>294
</td>

<td>0.444068
</td>

<td>0.00580944
</td>

<td>-0.438258
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-294-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-294-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>295
</td>

<td>0.456777
</td>

<td>0.00392344
</td>

<td>-0.452854
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-295-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-295-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>296
</td>

<td>0.738485
</td>

<td>0.030348
</td>

<td>-0.708137
</td>

<td>0.999927
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-296-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-296-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>297
</td>

<td>0.447778
</td>

<td>0.0021272
</td>

<td>-0.44565
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-297-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-297-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>300
</td>

<td>0.371114
</td>

<td>0.00119863
</td>

<td>-0.369916
</td>

<td>0.999996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-300-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-300-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>301
</td>

<td>0.420579
</td>

<td>0.0286862
</td>

<td>-0.391893
</td>

<td>0.999937
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-301-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-301-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>302
</td>

<td>0.748435
</td>

<td>0.00198561
</td>

<td>-0.74645
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-302-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-302-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>303
</td>

<td>0.533273
</td>

<td>0.000527592
</td>

<td>-0.532746
</td>

<td>0.998061
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-303-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-303-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>304
</td>

<td>0.519834
</td>

<td>0.0015549
</td>

<td>-0.518279
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-304-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-304-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>305
</td>

<td>0.314221
</td>

<td>0.00108924
</td>

<td>-0.313131
</td>

<td>0.999973
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-305-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-305-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>306
</td>

<td>0.417965
</td>

<td>0.0709149
</td>

<td>-0.34705
</td>

<td>0.999678
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-306-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-306-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>307
</td>

<td>0.477872
</td>

<td>0.00180322
</td>

<td>-0.476069
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-307-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-307-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>308
</td>

<td>0.485433
</td>

<td>0.0346291
</td>

<td>-0.450803
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-308-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-308-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>309
</td>

<td>0.446694
</td>

<td>0.0406823
</td>

<td>-0.406012
</td>

<td>0.999974
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-309-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-309-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>310
</td>

<td>0.453446
</td>

<td>0.0283981
</td>

<td>-0.425048
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-310-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-310-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>311
</td>

<td>0.595157
</td>

<td>0.0278155
</td>

<td>-0.567341
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-311-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-311-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>312
</td>

<td>0.454121
</td>

<td>0.00134369
</td>

<td>-0.452778
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-312-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-312-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>313
</td>

<td>0.439609
</td>

<td>0.032461
</td>

<td>-0.407148
</td>

<td>0.999583
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-313-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-313-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>314
</td>

<td>0.471879
</td>

<td>0.00152775
</td>

<td>-0.470352
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-314-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-314-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>315
</td>

<td>0.462827
</td>

<td>0.0333539
</td>

<td>-0.429473
</td>

<td>0.99996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-315-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-315-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>316
</td>

<td>0.468751
</td>

<td>0.00132545
</td>

<td>-0.467426
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-316-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-316-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>317
</td>

<td>0.497483
</td>

<td>0.00165362
</td>

<td>-0.495829
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-317-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-317-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>318
</td>

<td>0.730057
</td>

<td>0.0586439
</td>

<td>-0.671413
</td>

<td>0.999949
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-318-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-318-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>319
</td>

<td>0.529449
</td>

<td>0.159198
</td>

<td>-0.370251
</td>

<td>0.976996
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-319-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-319-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>320
</td>

<td>0.52752
</td>

<td>0.00196094
</td>

<td>-0.525559
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-320-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-320-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>321
</td>

<td>0.604303
</td>

<td>0.00134886
</td>

<td>-0.602954
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-321-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-321-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>322
</td>

<td>0.406346
</td>

<td>0.00155234
</td>

<td>-0.404793
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-322-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-322-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>323
</td>

<td>0.255545
</td>

<td>0.00137112
</td>

<td>-0.254174
</td>

<td>0.999744
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-323-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-323-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>324
</td>

<td>0.352922
</td>

<td>0.00193096
</td>

<td>-0.350991
</td>

<td>0.999984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-324-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-324-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>325
</td>

<td>0.457059
</td>

<td>0.0284734
</td>

<td>-0.428586
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-325-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-325-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>326
</td>

<td>1.03233
</td>

<td>0.000893138
</td>

<td>-1.03143
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-326-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-326-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>327
</td>

<td>0.453027
</td>

<td>0.00311087
</td>

<td>-0.449916
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-327-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-327-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>328
</td>

<td>0.515685
</td>

<td>0.0289236
</td>

<td>-0.486761
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-328-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-328-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>329
</td>

<td>0.403375
</td>

<td>0.00176122
</td>

<td>-0.401613
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-329-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-329-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>330
</td>

<td>0.554946
</td>

<td>0.0406932
</td>

<td>-0.514253
</td>

<td>0.999992
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-330-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-330-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>331
</td>

<td>0.445199
</td>

<td>0.00173749
</td>

<td>-0.443462
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-331-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-331-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>332
</td>

<td>0.473938
</td>

<td>0.00152069
</td>

<td>-0.472418
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-332-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-332-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>333
</td>

<td>0.404509
</td>

<td>0.065064
</td>

<td>-0.339445
</td>

<td>0.998287
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-333-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-333-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>334
</td>

<td>0.478342
</td>

<td>0.00220078
</td>

<td>-0.476141
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-334-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-334-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>335
</td>

<td>0.401944
</td>

<td>0.00244001
</td>

<td>-0.399504
</td>

<td>0.999984
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-335-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-335-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>336
</td>

<td>0.47247
</td>

<td>0.0274239
</td>

<td>-0.445046
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-336-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-336-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>337
</td>

<td>0.453428
</td>

<td>0.00183407
</td>

<td>-0.451594
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-337-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-337-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>338
</td>

<td>0.469808
</td>

<td>0.00180154
</td>

<td>-0.468006
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-338-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-338-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>339
</td>

<td>0.432732
</td>

<td>0.0286663
</td>

<td>-0.404066
</td>

<td>0.999997
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-339-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-339-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>340
</td>

<td>0.560261
</td>

<td>0.00222248
</td>

<td>-0.558039
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-340-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-340-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>341
</td>

<td>0.478434
</td>

<td>0.0279139
</td>

<td>-0.45052
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-341-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-341-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>342
</td>

<td>0.423449
</td>

<td>0.0529665
</td>

<td>-0.370482
</td>

<td>0.999341
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-342-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-342-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>343
</td>

<td>0.448766
</td>

<td>0.0280353
</td>

<td>-0.420731
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-343-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-343-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>344
</td>

<td>0.487144
</td>

<td>0.0273439
</td>

<td>-0.459801
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-344-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-344-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>345
</td>

<td>0.433061
</td>

<td>0.0331256
</td>

<td>-0.399935
</td>

<td>0.999934
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-345-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-345-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>346
</td>

<td>0.45684
</td>

<td>0.00386617
</td>

<td>-0.452974
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-346-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-346-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>347
</td>

<td>0.457346
</td>

<td>0.00154017
</td>

<td>-0.455805
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-347-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-347-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>348
</td>

<td>0.536726
</td>

<td>0.00239179
</td>

<td>-0.534335
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-348-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-348-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>349
</td>

<td>0.438562
</td>

<td>0.00181325
</td>

<td>-0.436748
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-349-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-349-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>350
</td>

<td>0.343778
</td>

<td>0.00143309
</td>

<td>-0.342345
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-350-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-350-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>351
</td>

<td>0.450628
</td>

<td>0.0300755
</td>

<td>-0.420552
</td>

<td>0.999994
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-351-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-351-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>352
</td>

<td>0.405587
</td>

<td>0.048445
</td>

<td>-0.357142
</td>

<td>0.998803
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-352-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-352-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>353
</td>

<td>0.462331
</td>

<td>0.00200435
</td>

<td>-0.460326
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-353-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-353-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>354
</td>

<td>0.468286
</td>

<td>0.00544544
</td>

<td>-0.46284
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-354-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-354-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>355
</td>

<td>0.455408
</td>

<td>0.00263529
</td>

<td>-0.452772
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-355-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-355-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>356
</td>

<td>0.458456
</td>

<td>0.00323556
</td>

<td>-0.455221
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-356-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-356-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>357
</td>

<td>0.598371
</td>

<td>0.00135722
</td>

<td>-0.597013
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-357-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-357-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>358
</td>

<td>0.423135
</td>

<td>0.0344926
</td>

<td>-0.388642
</td>

<td>0.998568
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-358-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-358-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>359
</td>

<td>0.123261
</td>

<td>0.000836896
</td>

<td>-0.122424
</td>

<td>0.995475
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-359-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-359-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>360
</td>

<td>0.265746
</td>

<td>0.00139531
</td>

<td>-0.264351
</td>

<td>0.999772
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-360-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-360-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>361
</td>

<td>0.313798
</td>

<td>0.00182421
</td>

<td>-0.311974
</td>

<td>0.999933
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-361-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-361-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>362
</td>

<td>0.303349
</td>

<td>0.0010688
</td>

<td>-0.30228
</td>

<td>0.999968
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-362-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-362-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>363
</td>

<td>0.944604
</td>

<td>0.00111928
</td>

<td>-0.943485
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-363-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-363-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>364
</td>

<td>0.750193
</td>

<td>0.0012951
</td>

<td>-0.748898
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-364-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-364-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>365
</td>

<td>0.452836
</td>

<td>0.00133793
</td>

<td>-0.451498
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-365-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-365-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>366
</td>

<td>0.122685
</td>

<td>0.000836975
</td>

<td>-0.121848
</td>

<td>0.995436
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-366-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-366-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>367
</td>

<td>0.444943
</td>

<td>0.00206699
</td>

<td>-0.442876
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-367-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-367-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>368
</td>

<td>0.533273
</td>

<td>0.000527585
</td>

<td>-0.532746
</td>

<td>0.998061
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-368-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-368-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>369
</td>

<td>0.472038
</td>

<td>0.0279072
</td>

<td>-0.444131
</td>

<td>0.999998
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-369-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-369-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>370
</td>

<td>0.550623
</td>

<td>0.00506342
</td>

<td>-0.54556
</td>

<td>0.995847
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-370-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-370-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>371
</td>

<td>0.467155
</td>

<td>0.00167783
</td>

<td>-0.465477
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-371-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-371-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>372
</td>

<td>0.452586
</td>

<td>0.0294015
</td>

<td>-0.423184
</td>

<td>0.999991
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-372-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-372-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>373
</td>

<td>0.453052
</td>

<td>0.0318844
</td>

<td>-0.421167
</td>

<td>0.999981
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-373-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-373-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>374
</td>

<td>0.170689
</td>

<td>0.00126822
</td>

<td>-0.169421
</td>

<td>0.999784
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-374-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-374-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>375
</td>

<td>0.427904
</td>

<td>0.031297
</td>

<td>-0.396607
</td>

<td>0.999914
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-375-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-375-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>376
</td>

<td>0.492951
</td>

<td>0.00262257
</td>

<td>-0.490328
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-376-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-376-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>379
</td>

<td>0.472631
</td>

<td>0.00325679
</td>

<td>-0.469374
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-379-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-379-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>380
</td>

<td>0.381335
</td>

<td>0.0018388
</td>

<td>-0.379497
</td>

<td>0.999993
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-380-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-380-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>381
</td>

<td>0.27339
</td>

<td>0.00105066
</td>

<td>-0.272339
</td>

<td>0.999867
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-381-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-381-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>382
</td>

<td>0.468778
</td>

<td>0.00183522
</td>

<td>-0.466942
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-382-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-382-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>383
</td>

<td>0.478911
</td>

<td>0.00215834
</td>

<td>-0.476753
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-383-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-383-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>384
</td>

<td>0.443932
</td>

<td>0.00270786
</td>

<td>-0.441224
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-384-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-384-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>385
</td>

<td>0.492177
</td>

<td>0.0279424
</td>

<td>-0.464234
</td>

<td>0.999999
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-385-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-385-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>386
</td>

<td>0.520017
</td>

<td>0.00254445
</td>

<td>-0.517473
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-386-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-386-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>387
</td>

<td>0.373183
</td>

<td>0.00426069
</td>

<td>-0.368922
</td>

<td>0.999995
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-387-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-387-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>388
</td>

<td>0.875425
</td>

<td>0.00436866
</td>

<td>-0.871057
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-388-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-388-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>389
</td>

<td>0.492806
</td>

<td>0.00185011
</td>

<td>-0.490956
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-389-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-389-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>390
</td>

<td>0.459542
</td>

<td>0.0273646
</td>

<td>-0.432177
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-390-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-390-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>391
</td>

<td>0.753614
</td>

<td>0.00133254
</td>

<td>-0.752281
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-391-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-391-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>392
</td>

<td>0.461705
</td>

<td>0.00168571
</td>

<td>-0.460019
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-392-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-392-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>393
</td>

<td>0.191966
</td>

<td>0.0316864
</td>

<td>-0.16028
</td>

<td>0.986488
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-393-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-393-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>394
</td>

<td>0.136468
</td>

<td>0.000979819
</td>

<td>-0.135488
</td>

<td>0.997596
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-394-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-394-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>395
</td>

<td>0.0754233
</td>

<td>0.00137686
</td>

<td>-0.0740465
</td>

<td>0.984817
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-395-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-395-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>396
</td>

<td>0.188612
</td>

<td>0.00131303
</td>

<td>-0.187299
</td>

<td>0.99934
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-396-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-396-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>397
</td>

<td>0.174003
</td>

<td>0.00155435
</td>

<td>-0.172449
</td>

<td>0.995435
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-397-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-397-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>398
</td>

<td>0.0566816
</td>

<td>0.00196092
</td>

<td>-0.0547206
</td>

<td>0.962647
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-398-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-398-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>399
</td>

<td>0.53334
</td>

<td>0.000555943
</td>

<td>-0.532784
</td>

<td>0.998053
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-399-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-399-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>400
</td>

<td>0.445292
</td>

<td>0.00252565
</td>

<td>-0.442767
</td>

<td>1
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-400-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-400-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>402
</td>

<td>0.12687
</td>

<td>0.00222641
</td>

<td>-0.124644
</td>

<td>0.992563
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-402-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.25495904033911.1-402-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>
</TABLE></DIV>
</form></DIV><DIV Class='DateStamp'>Page generated on<i> 2016/3/6 2:0 GMT</i></DIV>	<div style = 'text-align:right;background-color:#FF5223;font-size:12px;padding-right:5px;'><i>UCSD Viral Evolution Group 2004-2016</i></div>
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
