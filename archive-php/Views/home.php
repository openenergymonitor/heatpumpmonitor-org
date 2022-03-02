<?php

 $path = "https://heatpumpmonitor.org/";

?>

      <div id="header">
        
        <div id="title">Open Heatpump Monitor (development stage)</div>
            <div id="maintext">
            Demystifying the performance of your heatpump.<br>
            Improving heatpump performance in the zero carbon energy system.
            </div>
        
        

      </div>
      <div id="box" style="background-color:#0699fa; border:0px;">
        <!--
        <div id="maintext">
          <img src="<?php echo $path; ?>Views/pages/images/hpdata.png" style="width:930px; margin-top:20px;"/>-->
      <img src="<?php echo $path; ?>images/hpdata.png" style="width:980px;"/>
        <div id="maintext" style="color:#fff;">
          
          <p style="font-size:16px">Heat-pumps are a key component of zero carbon energy systems making it possible to provide heating efficiently from renewable energy, they are featured in many zero carbon energy scenarios such as <span class="linkB"><a href="https://zerocarbonbritain.org/">ZeroCarbonBritain</a></a> developed by the Centre for Alternative Technology and are also highlighted in David MacKay's book <span class="linkB"><a href="https://withouthotair.com/c21/page_146.shtml">Sustainable Energy without the hot air</a></span>.</p>
             
          <p style="font-size:16px">By monitoring a heat-pump its possible to see how well it is working, diagnose problems and get a better understanding of how a key potentially zero carbon heating solution works, data gathered and shared from well performing systems could help de-mystify heat-pump operation and help improve performance by diagnosing any problems early. </p>
          
          <p style="font-size:16px">This is an initiative to develop a web-connected open source hardware heat-pump monitor that can measure heat-pump electrical input, heat output and system temperatures. Alongside web software for heat-pump data visualisation, analysis and sharing of open heat-pump data.</p>
        </div>
      </div>
      
      <div id="box" style="background-color:#56b6f3; height:200px; color:#fff; border:0px;">
          <table style="width:100%">
              <tr>
                  <td style="padding:40px; width:70%; vertical-align:top">
                  <b>Current status: Development stage</b><br>
                  While still in the development stage, we have now almost 40 units in the field and are in the 4th revision of the hardware unit. An overview of what we are working on can be found in the <a href="https://github.com/openenergymonitor/HeatpumpMonitor">github repository</a>.
                  </td>
                  <td style="padding:40px; width:30%; color:#dff3ff; vertical-align:top">
                  <b>Development Kits</b><br>
                  <a href="https://shop.openenergymonitor.com/esp8266-wifi-heatpump-monitor">Available in the OpenEnergyMonitor Shop</a>
                  </td>
              </tr>
          </table> 
      </div>
      
      <div id="box" style="background-color:#8dcef8; color:#fff;">
          <div style="font-size:20px; padding:20px; text-align:center">To register interest please email: trystanlea@openenergymonitor.org</div>
      </div>
      
      <div id="box">
        <div id="maintext">
        
          <h2>Online tools</h2>
          <div style="float:left; width:420px; padding-right:60px; padding-top:20px; padding-bottom:20px; ">
          <img style="width:420px;" src="<?php echo $path; ?>images/heatpump_front.png"/>
          
          <a href="http://energy.emoncms.org" style="margin-left:135px"><button style="font-size:16px; padding:10px;">Dashboard Login</button></a>
          </div>
          <ul>
            <li><b>Real time readings:</b><br>Power input, heat output, flow, return, outside temperature, total energy, COP last 30, 60 and 120 minutes.<br><br></li>
            <li><b>Heating period viewer:</b><br>Detailed zoomable historical graphs of system values for exploring heating periods. Compare measured COP with the theoretical carnot COP for the heating period.<br><br></li>
            <li><b>Daily view:</b><br>Longer term trends viewable on daily kwh electricity input, kwh heat output and daily COP graph.<br><br></li>
            <li><b>Powered by Emoncms.org:</b><br>This site uses emoncms.org for data storage. You can explore your data with emoncms by logging in with the same account here: <a href="https://emoncms.org">emoncms.org login</a><br><br></li>
            <li><b>Open source software:</b><br><a href="https://github.com/openenergymonitor/HeatpumpMonitor">View on github</a></li>
          </ul>
          
        <div style="clear:both;"></div>
        </div>
      </div>
      
      <div id="box">
        <div id="maintext">
        <img src="<?php echo $path; ?>images/HPgraphic.png" style="float:right; width:500px; padding-left:20px; padding-top:20px"/>
          <h2>The Hardware</h2>
          <ul>
            <li><b>Electricity input:</b><br>The electricity consumption of the heat-pump can be measured with either clip-on CT sensors and an AC-AC adapter for real power measurement or/and via a pulse counting input to a billing grade electricity meter.<br><br></li>
            <li><b>Heat output:</b><br>The heat-pump monitor can interface with either a MBUS kamstrup multical 402 heat meter or Grundfos or Sika Vortex Flow Meter.<br><br></li>
            <li><b>System temperatures:</b><br>Additional system temperature measurements can be made with DS18B20 digital one-wire temperature sensors. There are 6x connectors on the board for easy sensor installation.<br><br></li>
            <li><b>Open Hardware:</b><br><a href="https://github.com/openenergymonitor/HeatpumpMonitor/tree/master/Hardware">View on github</a></li>
          </ul>
          
        <div style="clear:both;"></div>
        </div>
      </div>
      
      <div id="box">
        <div id="maintext">
        <h2>About us</h2>
        <p>This initiative is collaboration between OpenEnergyMonitor.org and John Cantor of heatpumps.co.uk.</p>
        </div>
      </div>
        
