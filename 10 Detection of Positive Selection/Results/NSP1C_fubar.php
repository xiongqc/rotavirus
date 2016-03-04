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
<H1 CLASS='SuccessCap'>FUBAR analysis results</H1><DIV CLASS='RepClassCT'><b>Reports</b> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.78207918922695.1&task=13&format=0'>[HTML]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.78207918922695.1&task=13&format=1' target = '_blank'>[CSV]</a> <a href='http://www.datamonkey.org/cgi-bin/datamonkey/slacreport.pl?file=upload.78207918922695.1&task=13&format=2'>[Plots]</a></DIV><DIV Class='RepClassBox'><b>Job ID:</b>upload.78207918922695.1 <a class = 'InfoLink' href='http://www.datamonkey.org/cgi-bin/datamonkey/jobStatus.pl?file=upload.78207918922695.1' TARGET = '_top'>[Information:Other analyses]</a></DIV><DIV CLASS='RepClassSM'><b>Data summary</b><p><b>27</b> sequences with <b>1</b> partition<DIV CLASS = 'ErrorTagSM'>These sequences have not been screened for recombination. Selection analyses of alignments with recombinants in them using a single tree may generate <u>misleading</u> results.</DIV><br clear=all><span style = 'font-size: x-small; margin-left:10px;'>Partition <b>1</b>: 396 codons 0 subs/site</span>
</DIV><DIV CLASS='RepClassSM'>FUBAR was run on a grid with <b>20</b> synonymous rates and <b>20</b> non-synonymous rates, yielding <b>400</b> total points, of which <b>190</b> represented <i>negative</i> selection, <b>20</b> - <i>neutral</i> evolution, and <b>190</b> - <i>positive</i> selection.<div style='width:650px;height:260px;spacing:10px;background-color:white;border: 1px solid black;'>
                   <span style='text-align:right; width:100%'>MCMC trace</span>
                   <div id="fubar_mcmc_trace" style = 'width:625px;height:225px;'></div></div><script type="text/javascript">
$(function () {
    var d1 = [];
    var mcmc = [
[1,-5284.18],
[2,-5276.17],
[3,-5267.45],
[4,-5271.97],
[5,-5275.78],
[6,-5270.38],
[7,-5271.49],
[8,-5267.51],
[9,-5277.38],
[10,-5278.07],
[11,-5285.54],
[12,-5272.22],
[13,-5269.72],
[14,-5282.54],
[15,-5268.72],
[16,-5284.01],
[17,-5271.48],
[18,-5280.32],
[19,-5270.18],
[20,-5284.67],
[21,-5287.9],
[22,-5262.63],
[23,-5272.74],
[24,-5277.69],
[25,-5273.19],
[26,-5264.27],
[27,-5293.76],
[28,-5273.04],
[29,-5273.35],
[30,-5274.63],
[31,-5279.26],
[32,-5274.6],
[33,-5269.57],
[34,-5272.69],
[35,-5275.97],
[36,-5281.73],
[37,-5277.97],
[38,-5287.09],
[39,-5270.44],
[40,-5288.38],
[41,-5278.58],
[42,-5287.3],
[43,-5281.43],
[44,-5271.18],
[45,-5266.93],
[46,-5270.73],
[47,-5275.8],
[48,-5278.71],
[49,-5282.0],
[50,-5293.35],
[51,-5271.76],
[52,-5272.53],
[53,-5281.71],
[54,-5282.41],
[55,-5274.37],
[56,-5276.1],
[57,-5291.18],
[58,-5279.59],
[59,-5264.31],
[60,-5279.0],
[61,-5267.81],
[62,-5272.44],
[63,-5271.9],
[64,-5276.16],
[65,-5285.42],
[66,-5278.84],
[67,-5287.81],
[68,-5265.15],
[69,-5271.95],
[70,-5279.47],
[71,-5269.8],
[72,-5307.3],
[73,-5276.62],
[74,-5289.05],
[75,-5277.63],
[76,-5295.71],
[77,-5278.87],
[78,-5279.41],
[79,-5292.15],
[80,-5276.68],
[81,-5273.57],
[82,-5277.45],
[83,-5287.25],
[84,-5278.0],
[85,-5268.93],
[86,-5274.33],
[87,-5273.04],
[88,-5287.9],
[89,-5257.57],
[90,-5262.48],
[91,-5278.41],
[92,-5271.38],
[93,-5266.84],
[94,-5275.82],
[95,-5275.64],
[96,-5272.41],
[97,-5273.77],
[98,-5274.55],
[99,-5259.67],
[100,-5277.47],];    
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
                    <dt class = 'DT1'> <b>Mean values.</b> &beta; = 0.43,  &beta;-&alpha; = -0.57, &omega; =  3.01</dt>
                    <dt class = 'DT2'> <b>Weights.</b> Pr[&alpha; &gt; &beta;] = 0.746, Pr[&alpha; = &beta;] = 0.033, Pr[&alpha; &lt; &beta;] = 0.221</dt>
                 </dl><IMG SRC = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-0-png&mode=5' WIDTH = '640' HEIGHT = '480' BORDER = '1'><p><a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-0-svg&mode=4'>[SVG]</a>&nbsp;<a href='http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-grid-svg&mode=4'>[FUBAR grid]</a>&nbsp;</p></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found no sites with evidence of pervasive diversifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.78207918922695.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'></form></DIV><DIV CLASS='RepClassSM' style = 'font-size:12px'><form action='http://www.datamonkey.org/cgi-bin/datamonkey/slacpvalue.pl' method = 'GET'>Found <b>215</b> sites with evidence of pervasive purifying selection at posterior probability &ge;<input type = 'hidden' name = 'file' value = 'upload.78207918922695.1'><input type = 'text' name = 'pvalue' value = '0.9' size = '5'> <input type = 'hidden' value = '13' name = 'task'><input type = 'submit' value = 'Retabulate'><p><DIV CLASS = 'HelpfulTips'>This summary table reports the means of posterior distribution of synonymous (&alpha;) and non-synonymous (&beta;) substitution rates over <b>sites</b>, as well as the mean posterior probability for &omega; (=&beta;/&alpha;) &lt; 1 at a site.</DIV><DIV CLASS='RepClassSM'>
<TABLE BORDER = '0'><TR CLASS='TRReport' style = 'font-size:small'><td>Codon</td>
<td>&alpha;</td>
<td>&beta;</td>
<td>&beta;-&alpha;</td>
<td>Posterior Prob &beta;&lt;&alpha;</td>
<td>3D rate plot<span class = 'INFO' onmouseover = "Tip('The SVG format may not display correctly in all browsers')">?</span></td></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>1
</td>

<td>0.66452
</td>

<td>0.0145604
</td>

<td>-0.64996
</td>

<td>0.972824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-1-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-1-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>2
</td>

<td>0.37856
</td>

<td>0.0151283
</td>

<td>-0.363431
</td>

<td>0.991705
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-2-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-2-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>7
</td>

<td>0.298437
</td>

<td>0.0291782
</td>

<td>-0.269259
</td>

<td>0.960335
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-7-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-7-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>8
</td>

<td>0.66452
</td>

<td>0.0145604
</td>

<td>-0.64996
</td>

<td>0.972824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-8-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-8-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>9
</td>

<td>0.345768
</td>

<td>0.0211725
</td>

<td>-0.324596
</td>

<td>0.988776
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-9-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-9-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>11
</td>

<td>0.741611
</td>

<td>0.0500011
</td>

<td>-0.69161
</td>

<td>0.914988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-11-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-11-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>13
</td>

<td>0.355664
</td>

<td>0.0947757
</td>

<td>-0.260889
</td>

<td>0.907952
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-13-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-13-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>14
</td>

<td>0.294606
</td>

<td>0.0366541
</td>

<td>-0.257952
</td>

<td>0.944939
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-14-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-14-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>17
</td>

<td>0.474391
</td>

<td>0.0207647
</td>

<td>-0.453626
</td>

<td>0.988948
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-17-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-17-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>21
</td>

<td>0.282159
</td>

<td>0.0126495
</td>

<td>-0.26951
</td>

<td>0.985077
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-21-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-21-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>23
</td>

<td>0.349876
</td>

<td>0.0248347
</td>

<td>-0.325041
</td>

<td>0.983167
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-23-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-23-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>24
</td>

<td>0.443199
</td>

<td>0.026084
</td>

<td>-0.417115
</td>

<td>0.984338
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-24-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-24-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>26
</td>

<td>0.388519
</td>

<td>0.0254571
</td>

<td>-0.363062
</td>

<td>0.987136
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-26-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-26-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>28
</td>

<td>0.741611
</td>

<td>0.0500011
</td>

<td>-0.69161
</td>

<td>0.914988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-28-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-28-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>29
</td>

<td>0.485069
</td>

<td>0.019789
</td>

<td>-0.46528
</td>

<td>0.995341
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-29-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-29-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>38
</td>

<td>0.370194
</td>

<td>0.0206189
</td>

<td>-0.349575
</td>

<td>0.983372
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-38-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-38-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>40
</td>

<td>0.361649
</td>

<td>0.0235821
</td>

<td>-0.338066
</td>

<td>0.986058
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-40-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-40-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>41
</td>

<td>0.25842
</td>

<td>0.0189419
</td>

<td>-0.239479
</td>

<td>0.913252
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-41-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-41-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>42
</td>

<td>0.628439
</td>

<td>0.0222128
</td>

<td>-0.606226
</td>

<td>0.997008
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-42-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-42-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>43
</td>

<td>0.86898
</td>

<td>0.0202169
</td>

<td>-0.848763
</td>

<td>0.997521
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-43-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-43-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>44
</td>

<td>0.520913
</td>

<td>0.0377741
</td>

<td>-0.483139
</td>

<td>0.988123
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-44-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-44-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>46
</td>

<td>1.41734
</td>

<td>0.0249665
</td>

<td>-1.39237
</td>

<td>0.999165
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-46-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-46-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>47
</td>

<td>0.655017
</td>

<td>0.0192722
</td>

<td>-0.635745
</td>

<td>0.998061
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-47-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-47-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>52
</td>

<td>2.40736
</td>

<td>0.0249382
</td>

<td>-2.38242
</td>

<td>0.998767
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-52-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-52-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>55
</td>

<td>1.64964
</td>

<td>0.0239863
</td>

<td>-1.62565
</td>

<td>0.999558
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-55-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-55-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>56
</td>

<td>0.526113
</td>

<td>0.0172721
</td>

<td>-0.508841
</td>

<td>0.996436
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-56-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-56-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>57
</td>

<td>0.428976
</td>

<td>0.0254756
</td>

<td>-0.4035
</td>

<td>0.982154
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-57-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-57-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>58
</td>

<td>0.68832
</td>

<td>0.113749
</td>

<td>-0.574571
</td>

<td>0.978659
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-58-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-58-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>59
</td>

<td>0.570015
</td>

<td>0.0116154
</td>

<td>-0.558399
</td>

<td>0.998936
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-59-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-59-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>61
</td>

<td>0.344307
</td>

<td>0.0256956
</td>

<td>-0.318611
</td>

<td>0.929607
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-61-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-61-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>62
</td>

<td>0.292306
</td>

<td>0.0296312
</td>

<td>-0.262674
</td>

<td>0.90193
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-62-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-62-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>64
</td>

<td>0.42661
</td>

<td>0.0207281
</td>

<td>-0.405882
</td>

<td>0.994649
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-64-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-64-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>68
</td>

<td>0.558415
</td>

<td>0.102738
</td>

<td>-0.455677
</td>

<td>0.956696
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-68-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-68-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>69
</td>

<td>0.443825
</td>

<td>0.0220005
</td>

<td>-0.421825
</td>

<td>0.988424
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-69-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-69-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>70
</td>

<td>0.46043
</td>

<td>0.0245411
</td>

<td>-0.435889
</td>

<td>0.988193
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-70-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-70-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>73
</td>

<td>0.324142
</td>

<td>0.0796846
</td>

<td>-0.244457
</td>

<td>0.930052
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-73-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-73-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>75
</td>

<td>0.341011
</td>

<td>0.0309294
</td>

<td>-0.310082
</td>

<td>0.917852
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-75-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-75-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>76
</td>

<td>0.403711
</td>

<td>0.0244001
</td>

<td>-0.379311
</td>

<td>0.984959
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-76-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-76-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>77
</td>

<td>0.416301
</td>

<td>0.0255058
</td>

<td>-0.390795
</td>

<td>0.983434
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-77-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-77-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>78
</td>

<td>2.46157
</td>

<td>0.0308883
</td>

<td>-2.43069
</td>

<td>0.999532
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-78-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-78-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>81
</td>

<td>0.661694
</td>

<td>0.0200835
</td>

<td>-0.64161
</td>

<td>0.995946
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-81-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-81-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>82
</td>

<td>0.741611
</td>

<td>0.0500011
</td>

<td>-0.69161
</td>

<td>0.914988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-82-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-82-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>85
</td>

<td>0.340646
</td>

<td>0.0305784
</td>

<td>-0.310068
</td>

<td>0.918105
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-85-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-85-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>86
</td>

<td>0.344553
</td>

<td>0.0249657
</td>

<td>-0.319587
</td>

<td>0.931132
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-86-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-86-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>88
</td>

<td>0.491166
</td>

<td>0.0224987
</td>

<td>-0.468668
</td>

<td>0.992926
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-88-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-88-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>89
</td>

<td>0.393408
</td>

<td>0.00991235
</td>

<td>-0.383496
</td>

<td>0.997975
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-89-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-89-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>90
</td>

<td>0.347001
</td>

<td>0.0216714
</td>

<td>-0.325329
</td>

<td>0.938402
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-90-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-90-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>91
</td>

<td>0.285686
</td>

<td>0.0450771
</td>

<td>-0.240609
</td>

<td>0.919942
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-91-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-91-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>92
</td>

<td>0.66452
</td>

<td>0.0145604
</td>

<td>-0.64996
</td>

<td>0.972824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-92-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-92-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>93
</td>

<td>0.371892
</td>

<td>0.024012
</td>

<td>-0.34788
</td>

<td>0.982112
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-93-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-93-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>94
</td>

<td>0.694395
</td>

<td>0.0325267
</td>

<td>-0.661868
</td>

<td>0.995138
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-94-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-94-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>96
</td>

<td>0.479855
</td>

<td>0.0223228
</td>

<td>-0.457532
</td>

<td>0.993406
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-96-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-96-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>98
</td>

<td>0.741611
</td>

<td>0.0500011
</td>

<td>-0.69161
</td>

<td>0.914988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-98-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-98-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>99
</td>

<td>0.472493
</td>

<td>0.0255142
</td>

<td>-0.446979
</td>

<td>0.991165
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-99-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-99-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>102
</td>

<td>0.581233
</td>

<td>0.0268269
</td>

<td>-0.554406
</td>

<td>0.993746
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-102-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-102-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>105
</td>

<td>0.442388
</td>

<td>0.0256508
</td>

<td>-0.416737
</td>

<td>0.984354
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-105-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-105-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>107
</td>

<td>0.687499
</td>

<td>0.139878
</td>

<td>-0.547621
</td>

<td>0.956342
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-107-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-107-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>108
</td>

<td>1.04267
</td>

<td>0.12717
</td>

<td>-0.915502
</td>

<td>0.951862
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-108-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-108-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>109
</td>

<td>0.351624
</td>

<td>0.0256328
</td>

<td>-0.325991
</td>

<td>0.983667
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-109-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-109-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>110
</td>

<td>0.341011
</td>

<td>0.0309294
</td>

<td>-0.310082
</td>

<td>0.917852
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-110-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-110-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>116
</td>

<td>0.822149
</td>

<td>0.0346033
</td>

<td>-0.787546
</td>

<td>0.991111
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-116-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-116-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>119
</td>

<td>0.433679
</td>

<td>0.0236873
</td>

<td>-0.409992
</td>

<td>0.984829
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-119-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-119-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>120
</td>

<td>0.359356
</td>

<td>0.11299
</td>

<td>-0.246367
</td>

<td>0.925592
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-120-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-120-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>121
</td>

<td>2.49759
</td>

<td>0.179392
</td>

<td>-2.3182
</td>

<td>0.938144
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-121-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-121-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>122
</td>

<td>0.66452
</td>

<td>0.0145604
</td>

<td>-0.64996
</td>

<td>0.972824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-122-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-122-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>123
</td>

<td>0.527213
</td>

<td>0.0218268
</td>

<td>-0.505386
</td>

<td>0.996561
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-123-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-123-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>124
</td>

<td>0.515901
</td>

<td>0.0278089
</td>

<td>-0.488092
</td>

<td>0.992052
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-124-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-124-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>125
</td>

<td>0.477486
</td>

<td>0.0233662
</td>

<td>-0.45412
</td>

<td>0.993747
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-125-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-125-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>128
</td>

<td>0.442388
</td>

<td>0.0256508
</td>

<td>-0.416737
</td>

<td>0.984354
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-128-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-128-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>130
</td>

<td>0.476411
</td>

<td>0.146383
</td>

<td>-0.330027
</td>

<td>0.906139
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-130-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-130-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>131
</td>

<td>0.341011
</td>

<td>0.0309294
</td>

<td>-0.310082
</td>

<td>0.917852
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-131-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-131-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>132
</td>

<td>0.324137
</td>

<td>0.0274862
</td>

<td>-0.29665
</td>

<td>0.969892
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-132-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-132-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>133
</td>

<td>0.360879
</td>

<td>0.0964626
</td>

<td>-0.264417
</td>

<td>0.94148
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-133-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-133-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>135
</td>

<td>0.412961
</td>

<td>0.0297777
</td>

<td>-0.383183
</td>

<td>0.984379
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-135-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-135-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>137
</td>

<td>0.458099
</td>

<td>0.0132629
</td>

<td>-0.444836
</td>

<td>0.998342
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-137-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-137-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>138
</td>

<td>0.33629
</td>

<td>0.0446635
</td>

<td>-0.291627
</td>

<td>0.959915
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-138-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-138-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>139
</td>

<td>0.562286
</td>

<td>0.0187249
</td>

<td>-0.543561
</td>

<td>0.996109
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-139-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-139-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>140
</td>

<td>0.5301
</td>

<td>0.0212407
</td>

<td>-0.508859
</td>

<td>0.994023
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-140-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-140-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>141
</td>

<td>1.42834
</td>

<td>0.00970189
</td>

<td>-1.41864
</td>

<td>0.999978
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-141-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-141-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>142
</td>

<td>0.461737
</td>

<td>0.02389
</td>

<td>-0.437847
</td>

<td>0.99535
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-142-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-142-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>143
</td>

<td>0.259659
</td>

<td>0.0224571
</td>

<td>-0.237202
</td>

<td>0.904087
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-143-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-143-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>145
</td>

<td>0.577033
</td>

<td>0.0336683
</td>

<td>-0.543364
</td>

<td>0.988584
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-145-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-145-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>146
</td>

<td>0.457953
</td>

<td>0.0328942
</td>

<td>-0.425059
</td>

<td>0.980553
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-146-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-146-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>149
</td>

<td>0.360344
</td>

<td>0.0262995
</td>

<td>-0.334044
</td>

<td>0.982655
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-149-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-149-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>153
</td>

<td>0.805938
</td>

<td>0.154261
</td>

<td>-0.651677
</td>

<td>0.94883
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-153-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-153-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>154
</td>

<td>0.327684
</td>

<td>0.0344227
</td>

<td>-0.293261
</td>

<td>0.957449
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-154-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-154-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>157
</td>

<td>0.228936
</td>

<td>0.0379214
</td>

<td>-0.191015
</td>

<td>0.91007
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-157-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-157-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>159
</td>

<td>0.442388
</td>

<td>0.0256508
</td>

<td>-0.416737
</td>

<td>0.984354
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-159-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-159-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>160
</td>

<td>0.289376
</td>

<td>0.0219892
</td>

<td>-0.267387
</td>

<td>0.972735
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-160-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-160-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>161
</td>

<td>1.00349
</td>

<td>0.0159115
</td>

<td>-0.987582
</td>

<td>0.999955
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-161-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-161-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>163
</td>

<td>0.260605
</td>

<td>0.053496
</td>

<td>-0.207109
</td>

<td>0.90975
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-163-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-163-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>164
</td>

<td>0.259659
</td>

<td>0.0224571
</td>

<td>-0.237202
</td>

<td>0.904087
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-164-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-164-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>166
</td>

<td>0.854053
</td>

<td>0.0285224
</td>

<td>-0.82553
</td>

<td>0.994226
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-166-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-166-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>167
</td>

<td>1.30779
</td>

<td>0.0270289
</td>

<td>-1.28076
</td>

<td>0.999564
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-167-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-167-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>169
</td>

<td>0.38342
</td>

<td>0.0103111
</td>

<td>-0.373109
</td>

<td>0.995478
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-169-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-169-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>170
</td>

<td>0.741611
</td>

<td>0.0500011
</td>

<td>-0.69161
</td>

<td>0.914988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-170-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-170-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>172
</td>

<td>0.32363
</td>

<td>0.0414925
</td>

<td>-0.282137
</td>

<td>0.945054
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-172-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-172-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>176
</td>

<td>0.299254
</td>

<td>0.0499826
</td>

<td>-0.249271
</td>

<td>0.938245
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-176-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-176-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>179
</td>

<td>0.476304
</td>

<td>0.0149925
</td>

<td>-0.461311
</td>

<td>0.998837
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-179-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-179-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>180
</td>

<td>0.696199
</td>

<td>0.0315954
</td>

<td>-0.664604
</td>

<td>0.990664
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-180-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-180-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>182
</td>

<td>0.601164
</td>

<td>0.0336936
</td>

<td>-0.567471
</td>

<td>0.988863
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-182-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-182-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>183
</td>

<td>0.441235
</td>

<td>0.0212872
</td>

<td>-0.419948
</td>

<td>0.993428
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-183-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-183-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>185
</td>

<td>0.884796
</td>

<td>0.0244284
</td>

<td>-0.860367
</td>

<td>0.995205
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-185-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-185-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>187
</td>

<td>0.72085
</td>

<td>0.104205
</td>

<td>-0.616645
</td>

<td>0.967583
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-187-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-187-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>189
</td>

<td>0.679413
</td>

<td>0.0215355
</td>

<td>-0.657878
</td>

<td>0.990306
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-189-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-189-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>190
</td>

<td>0.411014
</td>

<td>0.014609
</td>

<td>-0.396405
</td>

<td>0.992712
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-190-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-190-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>192
</td>

<td>0.346198
</td>

<td>0.0461074
</td>

<td>-0.30009
</td>

<td>0.954273
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-192-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-192-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>194
</td>

<td>0.828483
</td>

<td>0.147094
</td>

<td>-0.681389
</td>

<td>0.965766
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-194-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-194-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>195
</td>

<td>0.259659
</td>

<td>0.0224571
</td>

<td>-0.237202
</td>

<td>0.904087
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-195-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-195-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>197
</td>

<td>0.377376
</td>

<td>0.0201828
</td>

<td>-0.357193
</td>

<td>0.985322
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-197-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-197-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>199
</td>

<td>0.46043
</td>

<td>0.0245411
</td>

<td>-0.435889
</td>

<td>0.988193
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-199-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-199-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>202
</td>

<td>0.601501
</td>

<td>0.0253831
</td>

<td>-0.576118
</td>

<td>0.987861
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-202-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-202-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>208
</td>

<td>0.372356
</td>

<td>0.0226962
</td>

<td>-0.349659
</td>

<td>0.988611
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-208-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-208-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>209
</td>

<td>0.352852
</td>

<td>0.0292886
</td>

<td>-0.323564
</td>

<td>0.974862
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-209-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-209-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>211
</td>

<td>0.407785
</td>

<td>0.116531
</td>

<td>-0.291254
</td>

<td>0.917949
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-211-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-211-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>212
</td>

<td>0.468057
</td>

<td>0.0247484
</td>

<td>-0.443309
</td>

<td>0.985339
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-212-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-212-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>216
</td>

<td>0.371329
</td>

<td>0.0226517
</td>

<td>-0.348678
</td>

<td>0.984929
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-216-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-216-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>217
</td>

<td>0.357057
</td>

<td>0.0107243
</td>

<td>-0.346332
</td>

<td>0.994889
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-217-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-217-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>218
</td>

<td>0.463972
</td>

<td>0.0243881
</td>

<td>-0.439584
</td>

<td>0.993985
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-218-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-218-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>222
</td>

<td>0.344553
</td>

<td>0.0249657
</td>

<td>-0.319587
</td>

<td>0.931132
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-222-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-222-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>223
</td>

<td>0.545871
</td>

<td>0.0294806
</td>

<td>-0.51639
</td>

<td>0.993177
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-223-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-223-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>226
</td>

<td>0.292306
</td>

<td>0.0296312
</td>

<td>-0.262674
</td>

<td>0.90193
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-226-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-226-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>227
</td>

<td>0.37856
</td>

<td>0.0151283
</td>

<td>-0.363431
</td>

<td>0.991705
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-227-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-227-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>229
</td>

<td>0.457556
</td>

<td>0.0372273
</td>

<td>-0.420329
</td>

<td>0.986349
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-229-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-229-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>231
</td>

<td>0.428881
</td>

<td>0.116393
</td>

<td>-0.312488
</td>

<td>0.916377
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-231-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-231-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>232
</td>

<td>3.0357
</td>

<td>0.247997
</td>

<td>-2.7877
</td>

<td>0.990815
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-232-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-232-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>237
</td>

<td>0.292306
</td>

<td>0.0296312
</td>

<td>-0.262674
</td>

<td>0.90193
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-237-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-237-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>238
</td>

<td>0.741611
</td>

<td>0.0500011
</td>

<td>-0.69161
</td>

<td>0.914988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-238-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-238-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>239
</td>

<td>0.345278
</td>

<td>0.0327955
</td>

<td>-0.312482
</td>

<td>0.968198
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-239-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-239-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>240
</td>

<td>0.54116
</td>

<td>0.0229912
</td>

<td>-0.518169
</td>

<td>0.994088
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-240-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-240-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>241
</td>

<td>0.322364
</td>

<td>0.0916049
</td>

<td>-0.230759
</td>

<td>0.904592
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-241-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-241-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>242
</td>

<td>0.262549
</td>

<td>0.0189182
</td>

<td>-0.243631
</td>

<td>0.914006
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-242-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-242-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>245
</td>

<td>0.374911
</td>

<td>0.0188389
</td>

<td>-0.356072
</td>

<td>0.991479
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-245-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-245-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>248
</td>

<td>0.510523
</td>

<td>0.0303659
</td>

<td>-0.480157
</td>

<td>0.977918
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-248-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-248-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>249
</td>

<td>0.319721
</td>

<td>0.0252952
</td>

<td>-0.294426
</td>

<td>0.932415
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-249-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-249-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>250
</td>

<td>0.29758
</td>

<td>0.0624391
</td>

<td>-0.235141
</td>

<td>0.95368
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-250-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-250-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>251
</td>

<td>0.369252
</td>

<td>0.0239776
</td>

<td>-0.345275
</td>

<td>0.986169
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-251-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-251-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>252
</td>

<td>0.323278
</td>

<td>0.0818215
</td>

<td>-0.241457
</td>

<td>0.923353
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-252-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-252-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>256
</td>

<td>0.537676
</td>

<td>0.0878083
</td>

<td>-0.449868
</td>

<td>0.97281
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-256-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-256-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>257
</td>

<td>0.66452
</td>

<td>0.0145604
</td>

<td>-0.64996
</td>

<td>0.972824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-257-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-257-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>260
</td>

<td>0.442388
</td>

<td>0.0256508
</td>

<td>-0.416737
</td>

<td>0.984354
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-260-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-260-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>265
</td>

<td>2.31489
</td>

<td>0.12482
</td>

<td>-2.19007
</td>

<td>0.994173
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-265-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-265-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>266
</td>

<td>0.348646
</td>

<td>0.0992961
</td>

<td>-0.24935
</td>

<td>0.917626
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-266-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-266-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>267
</td>

<td>0.292306
</td>

<td>0.0296312
</td>

<td>-0.262674
</td>

<td>0.90193
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-267-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-267-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>268
</td>

<td>0.362297
</td>

<td>0.0446961
</td>

<td>-0.317601
</td>

<td>0.962771
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-268-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-268-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>269
</td>

<td>1.75415
</td>

<td>0.0265181
</td>

<td>-1.72764
</td>

<td>0.996755
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-269-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-269-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>270
</td>

<td>0.417495
</td>

<td>0.0323912
</td>

<td>-0.385104
</td>

<td>0.983867
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-270-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-270-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>271
</td>

<td>0.544435
</td>

<td>0.0333248
</td>

<td>-0.51111
</td>

<td>0.979074
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-271-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-271-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>273
</td>

<td>0.352172
</td>

<td>0.0159318
</td>

<td>-0.33624
</td>

<td>0.950645
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-273-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-273-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>276
</td>

<td>0.454258
</td>

<td>0.0205616
</td>

<td>-0.433696
</td>

<td>0.9942
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-276-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-276-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>277
</td>

<td>0.542568
</td>

<td>0.0129409
</td>

<td>-0.529628
</td>

<td>0.995728
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-277-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-277-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>280
</td>

<td>0.37496
</td>

<td>0.0239766
</td>

<td>-0.350983
</td>

<td>0.980304
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-280-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-280-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>282
</td>

<td>1.71797
</td>

<td>0.024669
</td>

<td>-1.6933
</td>

<td>0.999821
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-282-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-282-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>283
</td>

<td>0.486164
</td>

<td>0.0087428
</td>

<td>-0.477421
</td>

<td>0.999225
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-283-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-283-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>285
</td>

<td>0.741611
</td>

<td>0.0500011
</td>

<td>-0.69161
</td>

<td>0.914988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-285-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-285-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>286
</td>

<td>0.543235
</td>

<td>0.0225751
</td>

<td>-0.52066
</td>

<td>0.99541
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-286-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-286-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>287
</td>

<td>0.59332
</td>

<td>0.0332394
</td>

<td>-0.56008
</td>

<td>0.989969
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-287-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-287-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>290
</td>

<td>0.556981
</td>

<td>0.0184201
</td>

<td>-0.538561
</td>

<td>0.997827
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-290-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-290-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>294
</td>

<td>0.563618
</td>

<td>0.134784
</td>

<td>-0.428834
</td>

<td>0.944456
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-294-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-294-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>295
</td>

<td>0.343282
</td>

<td>0.0200984
</td>

<td>-0.323184
</td>

<td>0.985582
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-295-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-295-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>296
</td>

<td>0.564591
</td>

<td>0.0145604
</td>

<td>-0.550031
</td>

<td>0.998713
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-296-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-296-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>297
</td>

<td>0.480549
</td>

<td>0.135696
</td>

<td>-0.344853
</td>

<td>0.907085
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-297-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-297-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>298
</td>

<td>0.60192
</td>

<td>0.0996965
</td>

<td>-0.502224
</td>

<td>0.965175
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-298-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-298-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>299
</td>

<td>0.319721
</td>

<td>0.0252952
</td>

<td>-0.294426
</td>

<td>0.932415
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-299-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-299-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>300
</td>

<td>0.769612
</td>

<td>0.156104
</td>

<td>-0.613507
</td>

<td>0.96696
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-300-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-300-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>301
</td>

<td>1.03294
</td>

<td>0.0241055
</td>

<td>-1.00884
</td>

<td>0.995311
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-301-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-301-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>303
</td>

<td>0.538406
</td>

<td>0.0167433
</td>

<td>-0.521663
</td>

<td>0.997731
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-303-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-303-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>304
</td>

<td>0.399776
</td>

<td>0.0373597
</td>

<td>-0.362416
</td>

<td>0.97452
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-304-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-304-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>305
</td>

<td>0.442388
</td>

<td>0.0256508
</td>

<td>-0.416737
</td>

<td>0.984354
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-305-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-305-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>306
</td>

<td>0.66452
</td>

<td>0.0145604
</td>

<td>-0.64996
</td>

<td>0.972824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-306-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-306-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>307
</td>

<td>0.341011
</td>

<td>0.0309294
</td>

<td>-0.310082
</td>

<td>0.917852
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-307-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-307-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>308
</td>

<td>0.34891
</td>

<td>0.0261017
</td>

<td>-0.322809
</td>

<td>0.978076
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-308-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-308-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>310
</td>

<td>0.914361
</td>

<td>0.107902
</td>

<td>-0.806459
</td>

<td>0.991007
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-310-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-310-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>311
</td>

<td>0.292306
</td>

<td>0.0296312
</td>

<td>-0.262674
</td>

<td>0.90193
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-311-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-311-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>312
</td>

<td>0.741611
</td>

<td>0.0500011
</td>

<td>-0.69161
</td>

<td>0.914988
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-312-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-312-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>313
</td>

<td>0.442388
</td>

<td>0.0256508
</td>

<td>-0.416737
</td>

<td>0.984354
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-313-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-313-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>314
</td>

<td>0.292306
</td>

<td>0.0296312
</td>

<td>-0.262674
</td>

<td>0.90193
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-314-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-314-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>317
</td>

<td>0.514732
</td>

<td>0.099424
</td>

<td>-0.415308
</td>

<td>0.957246
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-317-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-317-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>318
</td>

<td>0.290724
</td>

<td>0.0441317
</td>

<td>-0.246593
</td>

<td>0.929543
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-318-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-318-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>321
</td>

<td>0.514562
</td>

<td>0.0158698
</td>

<td>-0.498692
</td>

<td>0.997983
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-321-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-321-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>323
</td>

<td>0.542568
</td>

<td>0.0129409
</td>

<td>-0.529628
</td>

<td>0.995728
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-323-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-323-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>326
</td>

<td>0.416301
</td>

<td>0.0255058
</td>

<td>-0.390795
</td>

<td>0.983434
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-326-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-326-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>327
</td>

<td>0.468057
</td>

<td>0.0247484
</td>

<td>-0.443309
</td>

<td>0.985339
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-327-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-327-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>328
</td>

<td>0.556159
</td>

<td>0.102847
</td>

<td>-0.453312
</td>

<td>0.954486
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-328-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-328-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>330
</td>

<td>0.695679
</td>

<td>0.0189896
</td>

<td>-0.676689
</td>

<td>0.998209
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-330-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-330-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>333
</td>

<td>0.420234
</td>

<td>0.100222
</td>

<td>-0.320012
</td>

<td>0.913767
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-333-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-333-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>335
</td>

<td>1.59049
</td>

<td>0.235656
</td>

<td>-1.35483
</td>

<td>0.957015
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-335-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-335-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>337
</td>

<td>0.721548
</td>

<td>0.130949
</td>

<td>-0.590599
</td>

<td>0.937766
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-337-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-337-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>341
</td>

<td>0.385985
</td>

<td>0.111396
</td>

<td>-0.274589
</td>

<td>0.920714
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-341-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-341-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>342
</td>

<td>0.40064
</td>

<td>0.0306973
</td>

<td>-0.369942
</td>

<td>0.977585
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-342-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-342-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>343
</td>

<td>0.567018
</td>

<td>0.0219229
</td>

<td>-0.545095
</td>

<td>0.994804
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-343-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-343-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>345
</td>

<td>0.324137
</td>

<td>0.0274862
</td>

<td>-0.29665
</td>

<td>0.969892
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-345-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-345-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>347
</td>

<td>0.705093
</td>

<td>0.0341374
</td>

<td>-0.670956
</td>

<td>0.979261
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-347-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-347-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>348
</td>

<td>0.526347
</td>

<td>0.0227443
</td>

<td>-0.503602
</td>

<td>0.993583
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-348-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-348-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>351
</td>

<td>0.511279
</td>

<td>0.0163126
</td>

<td>-0.494966
</td>

<td>0.996732
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-351-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-351-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>352
</td>

<td>0.600927
</td>

<td>0.0268991
</td>

<td>-0.574028
</td>

<td>0.993804
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-352-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-352-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>354
</td>

<td>0.319721
</td>

<td>0.0252952
</td>

<td>-0.294426
</td>

<td>0.932415
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-354-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-354-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>356
</td>

<td>0.474949
</td>

<td>0.0350662
</td>

<td>-0.439883
</td>

<td>0.991394
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-356-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-356-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>358
</td>

<td>0.542358
</td>

<td>0.0174977
</td>

<td>-0.524861
</td>

<td>0.99669
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-358-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-358-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>361
</td>

<td>0.375148
</td>

<td>0.0106166
</td>

<td>-0.364532
</td>

<td>0.993786
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-361-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-361-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>363
</td>

<td>0.535675
</td>

<td>0.0983639
</td>

<td>-0.437311
</td>

<td>0.973141
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-363-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-363-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>364
</td>

<td>0.577987
</td>

<td>0.0106564
</td>

<td>-0.567331
</td>

<td>0.999668
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-364-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-364-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>365
</td>

<td>0.322821
</td>

<td>0.0166845
</td>

<td>-0.306136
</td>

<td>0.985037
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-365-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-365-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>370
</td>

<td>0.368647
</td>

<td>0.0277514
</td>

<td>-0.340896
</td>

<td>0.984965
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-370-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-370-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>373
</td>

<td>0.39046
</td>

<td>0.0424103
</td>

<td>-0.348049
</td>

<td>0.973641
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-373-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-373-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>374
</td>

<td>0.870344
</td>

<td>0.0189883
</td>

<td>-0.851356
</td>

<td>0.999412
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-374-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-374-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>376
</td>

<td>0.372763
</td>

<td>0.0220677
</td>

<td>-0.350696
</td>

<td>0.982965
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-376-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-376-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>377
</td>

<td>0.503144
</td>

<td>0.0243855
</td>

<td>-0.478759
</td>

<td>0.995459
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-377-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-377-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>378
</td>

<td>0.66452
</td>

<td>0.0145604
</td>

<td>-0.64996
</td>

<td>0.972824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-378-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-378-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>380
</td>

<td>0.302945
</td>

<td>0.0174112
</td>

<td>-0.285534
</td>

<td>0.988134
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-380-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-380-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>382
</td>

<td>0.344553
</td>

<td>0.0249657
</td>

<td>-0.319587
</td>

<td>0.931132
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-382-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-382-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>384
</td>

<td>0.43459
</td>

<td>0.0136664
</td>

<td>-0.420923
</td>

<td>0.997257
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-384-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-384-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>385
</td>

<td>0.390375
</td>

<td>0.042868
</td>

<td>-0.347507
</td>

<td>0.97224
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-385-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-385-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport2' style = 'font-size:x-small'>
<td>390
</td>

<td>0.406228
</td>

<td>0.0975427
</td>

<td>-0.308685
</td>

<td>0.94313
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-390-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-390-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>

<tr CLASS='TRReport1' style = 'font-size:x-small'>
<td>393
</td>

<td>0.66452
</td>

<td>0.0145604
</td>

<td>-0.64996
</td>

<td>0.972824
</td>
<TD><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-393-svg&mode=4' target = '_blank'>[SVG]</a><a href = 'http://www.datamonkey.org/cgi-bin/datamonkey/wrapHyPhyBF.pl?file=fubar_plotter&arguments=upload.78207918922695.1-393-png&mode=5' target = '_blank'>[PNG]</a></TD></tr>
</TABLE></DIV>
</form></DIV><DIV Class='DateStamp'>Page generated on<i> 2016/3/4 14:55 GMT</i></DIV>	<div style = 'text-align:right;background-color:#FF5223;font-size:12px;padding-right:5px;'><i>UCSD Viral Evolution Group 2004-2016</i></div>
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
