<!DOCTYPE html>

      
<head>
    <title>
        assignment-4 (kaushik kumar giri)
    </title>
    <style>
        table,td,TH
        {
            /* display: inline-block; */
            color: white;
            background-color: rgb(97, 93, 93);
            border: 2px black solid;
        }
        td,input
        {
            
            background-color: rgba(145, 229, 240, 0.63);
        }
     .internal_table 
        {
          
            border-collapse: collapse;
        }
        h1
        {
            padding: 20px;
            background-color: cornflowerblue;
        }
    </style>
 
</head>
  
<body style="text-align:center;">
      
    <h1 style="color:rgb(245, 245, 245);">
        ASSIGNMENT-4
    </h1>
      
    <form method="post">
        <TABLE>
            <tr>
                <th>
                   <h2> S.no. </h2>
                </th>
                <th>
                    <h2>Functions</h2>
                </th>
                <TH>
                    <H2>ARGUMENTS</H2>
                </TH>
                <th>
                    <H2> BUTTON</H2>
                </th>
                <TH>
                    <H2>OUTPUT</H2>
                </TH>
            </tr>
 
        <!-- ####################################### md5  ################################################## -->
            <tr>
                <td>
                    <h5>1</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Md5()</h5>
                </td>
                <td >
                    <input type="text" name="string1" placeholder="Enter Your String">
                </td>
                <td>
                    <input type="submit" name="button1"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string1'];
                if(isset($_POST['button1'])) 
                     {
                        echo md5($stri);
                     }
                     ?>
                </td>
            </tr>
 
 
 
             <!-- ####################################### Number_format()  ################################################## -->
            <tr>
                <td>
                    <h5>2</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Number_format()</h5>
                </td>
                <td >
                    <table class="internal_table">
                        <tr>
                            <td ><input type="number" name="string2" placeholder="number"></td>
                            <td ><input type="text" name="string21" placeholder="decimals"></td>
                    </TR>
                    <TR>
                            <td ><input type="text" name="string22" placeholder="decimalpoint"></td>
                            <td ><input type="text" name="string23" placeholder="seperator"></td>
 
                        </tr>
                    </table>
                </td>
                <td>
                    <input type="submit" name="button2"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri1=$_POST['string2'];
                $stri2=$_POST['string21'];
                $stri3=$_POST['string22'];
                $stri4=$_POST['string23'];
                if(isset($_POST['button2'])) 
                     {
                        echo number_format($stri1,$stri2,$stri3,$stri4);
                     }
                     ?>
                </td>
            </tr>
 
 
 
            <!-- #######################################  Ord() ################################################## -->
            <tr>
                <td>
                    <h5>3</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Ord()</h5>
                </td>
                <td>
                    <input type="text" name="string3" placeholder="Enter Your String">
                </td>
                <td>
                    <input type="submit" name="button3"value="CLICK ME"/>
                </td>
                </td>
                <td style="width:500px">
                <?php
      
                $stri31=$_POST['string3'];
                if(isset($_POST['button3'])) 
                     {
                        echo ord($stri31);
                     }
                     ?>
                </td>
            </tr>
 
 
 
            <!-- #######################################  Rtrim() ################################################## -->
            <tr>
                <td>
                    <h5>4</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Rtrim()</h5>
                </td>
                <td>
                <table class="internal_table">
                        <tr>
                            <td><input type="text" name="string4" placeholder="Enter Your String"></td>
                            <td><input type="text" name="string41" placeholder="enter string to be trimmed"></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <input type="submit" name="button4"value="CLICK ME"/>
                </td>
                </td>
                <td style="width:500px">
                <?php
      
                $stri4=$_POST['string4'];
                $stri41=$_POST['string41'];
                if(isset($_POST['button4'])) 
                     {
                        echo rtrim($stri4,$stri41);
                     }
                     ?>
                </td>
            </tr>
 
 
 
            <!-- #######################################  Str_replace() ################################################## -->
            <tr>
                <td>
                    <h5>5</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Str_replace()</h5>
                </td>
                <td>
                <table class="internal_table">
                        <tr>
                           <td colspan="2"> <input type="text" name="string5" placeholder="Enter Your String"></td>
                           
                    </tr>
                    <tr>
                            <td> <input type="text" name="string51" placeholder="old word"></td>
                           <td> <input type="text" name="string52" placeholder="new word"></td>
                     </tr>
                    </table>
                   
                </td>
                <td>
                    <input type="submit" name="button5"value="CLICK ME"/>
                </td>
                </td>
                <td style="width:500px">
                <?php
      
                $stri5=$_POST['string5'];
                $stri51=$_POST['string51'];
                $stri52=$_POST['string52'];
                if(isset($_POST['button5'])) 
                     {
                        echo str_replace($stri51,$stri52,$stri5);
 
                     }
                     ?>
                </td>
            </tr>
 
 
 
 
 
            <!-- #######################################  Strlen() ################################################## -->
            <tr>
                 <td>
                    <h5>6</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Strlen()</h5>
                </td>
                <td>
                    <input type="text" name="string6" placeholder="Enter Your String">
                </td>
                <td>
                    <input type="submit" name="button6"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri6=$_POST['string6'];
                if(isset($_POST['button6'])) 
                     {
                        echo strlen($stri6);
                        
 
                     }
                     ?>
                </td>
            </tr>
 
 
 
 
            <!-- ####################################### Strcasecmp()  ################################################## -->
            <tr>
                <td>
                    <h5>7</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Strcasecmp()</h5>
                </td>
                <td>
                    <table class="internal_table">
                    <tr>
                            <td> <input type="text" name="string71" placeholder="enter first string"></td>
                           <td> <input type="text" name="string72" placeholder="enter second string"></td>
                     </tr>
                    </table>
                </td>
                <td>
                    <input type="submit" name="button7"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri71=$_POST['string71'];
                $stri72=$_POST['string72'];
                if(isset($_POST['button7'])) 
                     {
                        if (strcasecmp($stri71,$stri72))
                            echo " the two strings are not equal.";
                        else
                            echo " the two strings are equal.";
                     }
                     ?>
                </td>
            </tr>
 
 
 
 
 
            <!-- #######################################  Strrpos() ################################################## -->
            <tr>
                <td>
                    <h5>8</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR  Strrpos()</h5>
                </td>
                <td>
                <table class="internal_table">
                    <tr>
                            <td> <input type="text" name="string81" placeholder="Enter Your String"></td>
                           <td> <input type="text" name="string82" placeholder="enter word to find position"></td>
                     </tr>
                    </table>
                </td>
                <td>
                    <input type="submit" name="button8"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri81=$_POST['string81'];
                $stri82=$_POST['string82'];
                if(isset($_POST['button8'])) 
                     {
                        echo "position of $stri82 from last :".strrpos($stri81,$stri82);
                     }
                     ?>
                </td>
            </tr>
 
 
 
 
 
 
            <!-- ####################################### Substr()  ################################################## -->
            <tr>
                <td>
                    <h5>9</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Substr()</h5>
                </td>
                <td>
                <table class="internal_table">
                    <tr>
                            <td> <input type="text" name="string91" placeholder="Enter Your String"></td>
                           <td> <input type="number" name="string92" placeholder="enter  position"></td>
                           
                     </tr>
                    </table>
                </td>
                <td>
                    <input type="submit" name="button9"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri91=$_POST['string91'];
                $stri932=$_POST['string92'];
                if(isset($_POST['button9'])) 
                     {
                        echo substr($stri91,$stri932);
                     }
                     ?>
                </td>
            </tr>
 
 
 
 
            <!-- #######################################  Strtolower() ################################################## -->
            <tr>
                <td>
                    <h5>10</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR  Strtolower()</h5>
                </td>
                <td>
                    <input type="text" name="string10" placeholder="Enter Your String">
                </td>
                <td>
                    <input type="submit" name="button10"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri10=$_POST['string10'];
                if(isset($_POST['button10'])) 
                     {
                        echo strtolower($stri10);
                     }
                     ?>
                </td>
            </tr>
 
 
 
 
 
            <!-- #######################################   Bintohex() ################################################## -->
            <tr>
                 <td>
                    <h5>11</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Bintohex()</h5>
                </td>
                <td>
                    <input type="text" name="string11" placeholder="Enter Your String">
                </td>
                <td>
                    <input type="submit" name="button11"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri11=$_POST['string11'];
                if(isset($_POST['button11'])) 
                     {
                        echo bin2hex($stri11);
                     }
                     ?>
                </td>
            </tr>
 
 
 
 
 
 
            <!-- #######################################  Chop() ################################################## -->
            <tr>
            <td>
                    <h5>12</h5>
                </td>
                <td>
                    <h5>ENTER A STRING FOR Chop()</h5>
                </td>
                <td>
                    <table class="internal_table">
                        <tr>
                            <td>
                            <input type="text" name="string121" placeholder="Enter Your String">
                            <input type="text" name="string122" placeholder="enter string to chop">
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <input type="submit" name="button12"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri121=$_POST['string121'];
                $stri122=$_POST['string122'];
                if(isset($_POST['button12'])) 
                     {
                        echo chop($stri121,$stri122);
                     }
                     ?>
                </td>
            </tr>
        </TABLE>
    </form>   
  
 
 

