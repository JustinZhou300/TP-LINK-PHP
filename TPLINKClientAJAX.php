<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TPLINK Client</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="normalize.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="skeleton.css" />
</head>
<body>
<div class="container container_margin">
    <h1>TP-LINK Client</h1>
    <p>An api for controlling the TP-Link Devices written in PHP  </p> 
    <form id="clientForm" >
        <div class ="row">
            <div class ="three columns">
                        <label for ="transport">Protocol</label>
                        <select class="u-full-width" name = "transport">
                            <option value="0">TCP</option>
                            <option value="1">UDP</option>
                        </select>
            </div>  
            <div class ="six columns">    
                <label for="IP">IP Address</label>
                <input class="u-full-width" type ="text" name="IP" placeholder="eg: 192.168.0.2" >
            </div>
        </div>

        <div class="row">
            <div class ="three columns">
                    <label for ="Device">Device</label>
                    <select class="u-full-width" name = "Device" id="device" onchange = "changeCommands()">
                        <option value="0">Plug</option>
                        <option value="1">Bulb</option>
                    </select>
            </div> 
            <div class ="six columns">
            <label for = "Commands"> Command </label>
                <select class="u-full-width" name = "Commands" id ="commands" onchange = "checkcustomInput()">
                    <option value="info">Get Info</option>
                    <option value="on">On</option>
                    <option value="off">Off</option>
                    <option value="emeter">Check Energy Usage</option>
                    <option value="light_info">Get Light Information</option>
                    <option value="transition_light">Change Light State</option> 
                    <option value="custom">Custom</option>
                </select>
            </div> 
        </div>

        <div class ="row" id="customInputRow">
            <div class ="six columns">    
                <label for="customInput">Custom Command</label>
                <input class="u-full-width" type ="text" placeholder ='eg: {"system":{"get_sysinfo":null}}' name="customInput">
            </div>
        </div>

        <div class ="row" id="lightSliderRow">
            <div class ="six columns"> 
                    <label for="brightnessRange" id ="labelBrightness">Brightness: 50</label>
                    <div class="slidecontainer">
                            <input type="range" min="1" max="100" value= "50" class="slider" name="Brightness" id="brightnessRange" onchange ="showBrightnessValue()">           
                    </div>
            </div>
        </div>
        <div class ="row" >
            <button class="button-primary" type="submit"> Submit </button>
            
        </div>
    </form>
 </div>

<div class="container text container_margin">
    <h5> Responses</h5>
    <button type="button" onclick="resetTable()">Delete Responses</button>
    <table class="u-full-width" id="table">
        <thead >
            <tr>
            <th style ="width: 120px"> IP Address</th>
            <th>Message</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</body>
</html>
<script type="text/javascript" src="TKLINKClient.js"></script> 
<style>
.text{
  word-break:break-all;
}
.container_margin{ 
margin-top: 30px
}
.slidecontainer {
    width: 100%; /* Width of the outside container */
}
.slider {
    -webkit-appearance: none;  /* Override default CSS styles */
    appearance: none;
    width: 100%; /* Full-width */
    height: 10px; /* Specified height */
    background: #d3d3d3; /* Grey background */
    outline: none; /* Remove outline */
    opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
    -webkit-transition: .2s; /* 0.2 seconds transition on hover */
    transition: opacity .2s;
}
</style>