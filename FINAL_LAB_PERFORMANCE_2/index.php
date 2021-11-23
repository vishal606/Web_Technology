<html>
   <head>
    <meta charset="utf-8">
    <title>Simple Calculator using HTML, CSS and JavaScript</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="script.js"></script>
   
    </head>
    <body>
<table class="calculator">
        <tr>
            <td colspan="3"><input class="display-box" type="text" id="result" disabled /></td>
       
         
        </tr>
        <tr>
             <td><input class="button" type="button" value="CE" onclick="clearScreen()" style="background-color: palevioletred;" /> 
                 <td><input class="button" type="button" value="C" onclick="clearScreen()" style="background-color: lightsalmon;" /> </td>
                  <td><input class="button" type="button" value="<" onclick="clearScreen()" style="background-color: darkred;" /> </td>
                    <td><input class="button" type="button" value="/" onclick="display('/')" /> </td>
             </td>
        </tr>
        <tr>
            <!-- display() function display the value of clicked button -->
            <td><input class="button" type="button" value="7" onclick="display('7')" /> </td>
            <td><input class="button" type="button" value="8" onclick="display('8')" /> </td>
            <td><input class="button" type="button" value="9" onclick="display('9')" /> </td>
            <td><input class="button" type="button" value="*" onclick="display('*')" /> </td>
        </tr>
        <tr>
            <td><input class="button" type="button" value="4" onclick="display('4')" /> </td>
            <td><input class="button" type="button" value="5" onclick="display('5')" /> </td>
            <td><input class="button" type="button" value="6" onclick="display('6')" /> </td>
            <td><input class="button" type="button" value="-" onclick="display('-')" /> </td>
        </tr>
        <tr>
            <td><input class="button" type="button" value="1" onclick="display('1')" /> </td>
            <td><input class="button" type="button" value="2" onclick="display('2')" /> </td>
            <td><input class="button" type="button" value="3" onclick="display('3')" /> </td>
            <td><input class="button" type="button" value="+" onclick="display('+')" /> </td>
        </tr>
        <tr>
            <td><input class="button" type="button" value="+/-" onclick="display('+/-')" /> </td>
            <td><input class="button" type="button" value="0" onclick="display('0')" /> </td>
             <td><input class="button" type="button" value="." onclick="display('.')" /> </td>
            <!-- calculate() function evaluate the mathematical expression -->
            <td><input class="button" type="button" value="=" onclick="calculate()" style="background-color:green;" /> </td>
          
        </tr>
    </table>
     
    </body>
</html>

