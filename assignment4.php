<!DOCTYPE html>
<html>
      
<head>
    <title>
        assignment-4 (kaushik kumar giri)
    </title>
    <style>
        table,td
        {
            /* display: inline-block; */
           
            border: 2px black solid;
        }
     .internal_table 
        {
          
            border-collapse: collapse;
        }
    </style>

</head>
  
<body style="text-align:center;">
      
    <h1 style="color:green;">
        ASSIGNMENT-4
    </h1>
      
    <form method="post">
        <TABLE>

        <!-- ####################################### md5  ################################################## -->
            <tr>
                <td>
                    <h5>ENTER A STRING FOR Md5()</h5>
                </td>
                <td >
                    <input type="text" name="string1" placeholder="enter your string">
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
                    <h5>ENTER A STRING FOR Ord()</h5>
                </td>
                <td>
                    <input type="text" name="string3" placeholder="enter your string">
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
                    <h5>ENTER A STRING FOR Rtrim()</h5>
                </td>
                <td>
                <table class="internal_table">
                        <tr>
                            <td><input type="text" name="string4" placeholder="enter your string"></td>
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
                    <h5>ENTER A STRING FOR Str_replace()</h5>
                </td>
                <td>
                    <input type="text" name="string5" placeholder="enter your string">
                </td>
                <td>
                    <input type="submit" name="button5"value="CLICK ME"/>
                </td>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string5'];
                if(isset($_POST['button5'])) 
                     {
                        echo md5($stri);

                     }
                     ?>
                </td>
            </tr>





            <!-- #######################################  Str_len() ################################################## -->
            <tr>
                <td>
                    <h5>ENTER A STRING FOR Str_len()</h5>
                </td>
                <td>
                    <input type="text" name="string6" placeholder="enter your string">
                </td>
                <td>
                    <input type="submit" name="button6"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string6'];
                if(isset($_POST['button6'])) 
                     {
                        echo md5($stri);
                        

                     }
                     ?>
                </td>
            </tr>




            <!-- ####################################### Strcasecmp()  ################################################## -->
            <tr>
                <td>
                    <h5>ENTER A STRING FOR Strcasecmp()</h5>
                </td>
                <td>
                    <input type="text" name="string7" placeholder="enter your string">
                </td>
                <td>
                    <input type="submit" name="button7"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string7'];
                if(isset($_POST['button7'])) 
                     {
                        echo md5($stri);
                     }
                     ?>
                </td>
            </tr>





            <!-- #######################################  Strrpos() ################################################## -->
            <tr>
                <td>
                    <h5>ENTER A STRING FOR  Strrpos()</h5>
                </td>
                <td>
                    <input type="text" name="string8" placeholder="enter your string">
                </td>
                <td>
                    <input type="submit" name="button8"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string8'];
                if(isset($_POST['button8'])) 
                     {
                        echo md5($stri);
                     }
                     ?>
                </td>
            </tr>






            <!-- ####################################### Substr()  ################################################## -->
            <tr>
                <td>
                    <h5>ENTER A STRING FOR Substr()</h5>
                </td>
                <td>
                    <input type="text" name="string9" placeholder="enter your string">
                </td>
                <td>
                    <input type="submit" name="button9"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string9'];
                if(isset($_POST['button9'])) 
                     {
                        echo md5($stri);
                     }
                     ?>
                </td>
            </tr>




            <!-- #######################################  Strtolower() ################################################## -->
            <tr>
                <td>
                    <h5>ENTER A STRING FOR  Strtolower()</h5>
                </td>
                <td>
                    <input type="text" name="string10" placeholder="enter your string">
                </td>
                <td>
                    <input type="submit" name="button10"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string10'];
                if(isset($_POST['button10'])) 
                     {
                        echo md5($stri);
                     }
                     ?>
                </td>
            </tr>





            <!-- #######################################   Bintohex() ################################################## -->
            <tr>
                <td>
                    <h5>ENTER A STRING FOR Bintohex()</h5>
                </td>
                <td>
                    <input type="text" name="string11" placeholder="enter your string">
                </td>
                <td>
                    <input type="submit" name="button11"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string11'];
                if(isset($_POST['button11'])) 
                     {
                        echo md5($stri);
                     }
                     ?>
                </td>
            </tr>






            <!-- #######################################  Chop() ################################################## -->
            <tr>
                <td>
                    <h5>ENTER A STRING FOR Chop()</h5>
                </td>
                <td>
                    <input type="text" name="string12" placeholder="enter your string">
                </td>
                <td>
                    <input type="submit" name="button12"value="CLICK ME"/>
                </td>
                <td style="width:500px">
                <?php
      
                $stri=$_POST['string12'];
                if(isset($_POST['button12'])) 
                     {
                        echo md5($stri);
                     }
                     ?>
                </td>
            </tr>
        </TABLE>
    </form>   
  


</head>
  
</html>