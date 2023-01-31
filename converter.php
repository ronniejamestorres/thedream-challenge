<!DOCTYPE html>
<html lang="en">
<head>
    <title>A simple converter</title>
    <link rel="stylesheet" href="build/css/style.css">
</head>



<body class=" bg-purple-900 flex items-center justify-center   "
    >

    <div class="  gap-4 h-screen items-center justify-center flex ">

      <!--first square-->
      <form action="converter.php" method="post"  class=" bg-purple-400 border-b-8 border-r-8  border-black      p-3 rounded rounded-bl shadow-2xl border-2  ">
   

            <div class="grid grid-cols-1  gap-4">
        <div class="text-3xl bold col-span-3 border bg-black text-white border-black p-3 rounded justify-center flex ">Currency Converter</div>
        <div class="col-span-2 border border-black p-3 rounded justify-center flex"> Enter Amount:  <span style='font-size:50px;'>&#8608;</span></div>
        <input type="text" name="amount" placeholder="Enter Amount" class="col-span-1 border border-black p-3 rounded">
        <div class="col-span-2 border border-black p-3 rounded justify-center flex"> Convert from:  <span style='font-size:50px;'>&#8608;</span></div>
        <div class="col-span-1 bg-white border border-black p-3 rounded"> 
            <select name="from" >
                <option>Select a currency</option>
                <option>EURO</option>
                <option>USD</option>
                <option>AUD</option>
                <option>JPY</option>
                <option>GBP</option>
                <option>CHF</option>
            </select>        
        </div>
        
        <div class="col-span-2 border border-black p-3 rounded justify-center flex"> Convert to: <span style='font-size:50px;'>&#8608;</span> </div>
        <div class="col-span-1 bg-white border border-black p-3 rounded">
        <select name="to" >
                        <option>Select a currency</option>
                        <option>EURO</option>
                        <option>USD</option>
                        <option>AUD</option>
                        <option>JPY</option>
                        <option>GBP</option>
                        <option>CHF</option>
                    </select>
        </div>


                    <input class="col-span-2 bg-yellow-400 border-2 border-black border-b-4  border-r-4 p-5 rounded hover:bg-cyan-400  "  type="submit" name="convert" value="Convert Currency">
       
    </form>

    
    <div class="col-span-1 bg-yellow-400 border border-black p-5 rounded justify-center flex">  

<?php
if(isset($_POST['convert']))
{
    $amount = $_POST['amount'];
    $from = $_POST['from'];
    $to = $_POST['to'];
        /* EURO USD */
    if($from=='EURO' AND $to=='USD')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1.08;
        echo " $</b></center>";
    }
    if($from=='USD' AND $to=='EURO')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*.92;
        echo " €</b></center>";
    }
        /* EURO AUD */
    if($from=='EURO' AND $to=='AUD')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1.55;
        echo " A$</b></center>";
    }
    if($from=='AUD' AND $to=='EURO')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*.65;
        echo " €</b></center>";
    }
        /* EURO JPY */
    if($from=='EURO' AND $to=='JPY')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*141.32;
        echo " ¥</b></center>";
    }
    if($from=='JPY' AND $to=='EURO')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*0.0071; 
        echo " €</b></center>";
        
    }
        /* EURO GBP */
    if($from=='EURO' AND $to=='GBP')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*.88;
        echo " £</b></center>";
    }
    if($from=='GBP' AND $to=='EURO')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1.14; 
        echo " €</b></center>";
        
    }
        /* EURO CHF */
    if($from=='EURO' AND $to=='CHF')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1;
        echo " CHF</b></center>";
    }
    if($from=='CHF' AND $to=='EURO')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1; 
        echo " €</b></center>";
        
    }
 /*----------------------------------------------------*/   
       /* USD AUD */
       if($from=='USD' AND $to=='AUD')
       {
           echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
           echo $amount*1.55;
           echo " A$</center>";
       }
       if($from=='AUD' AND $to=='USD')
       {
           echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
           echo $amount*.65;
           echo " $</center>";
       }
           /* USD JPY */
       if($from=='USD' AND $to=='JPY')
       {
           echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
           echo $amount*141.32;
           echo " ¥</center>";
       }
       if($from=='JPY' AND $to=='USD')
       {
           echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
           echo $amount*0.0071; 
           echo " $</center>";
           
       }
           /* USD GBP */
       if($from=='USD' AND $to=='GBP')
       {
           echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
           echo $amount*.88;
           echo " £</center>";
       }
       if($from=='GBP' AND $to=='USD')
       {
           echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
           echo $amount*1.14; 
           echo " $</center>";
           
       }
           /* USD CHF */
       if($from=='USD' AND $to=='CHF')
       {
           echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
           echo $amount*1;
           echo " CHF</center>";
       }
       if($from=='CHF' AND $to=='USD')
       {
           echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
           echo $amount*1; 
           echo " $</center>";
       }
    /*----------------------------------------------------*/
    
              /* AUD JPY */
    if($from=='AUD' AND $to=='JPY')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*141.32;
        echo " ¥</b></center>";
    }
    if($from=='JPY' AND $to=='AUD')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*0.0071; 
        echo " €</b></center>";
        
    }
        /* AUD GBP */
    if($from=='AUD' AND $to=='GBP')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*.88;
        echo " £</b></center>";
    }
    if($from=='GBP' AND $to=='AUD')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1.14; 
        echo " €</b></center>";
        
    }
        /* AUD CHF */
    if($from=='AUD' AND $to=='CHF')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1;
        echo " CHF</b></center>";
    }
    if($from=='CHF' AND $to=='AUD')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1; 
        echo " €</b></center>";
        
    }
       
      /*----------------------------------------------------*/

    
            /* JPY GBP */
        if($from=='JPY' AND $to=='GBP')
        {
            echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
            echo $amount*.88;
            echo " £</b></center>";
        }
        if($from=='GBP' AND $to=='JPY')
        {
            echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
            echo $amount*1.14; 
            echo " €</b></center>";
            
        }
            /* JPY CHF */
        if($from=='JPY' AND $to=='CHF')
        {
            echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
            echo $amount*1;
            echo " CHF</b></center>";
        }
        if($from=='CHF' AND $to=='JPY')
        {
            echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
            echo $amount*1; 
            echo " €</b></center>";
            
        }
           /*----------------------------------------------------*/
                /* GBP CHF */
    if($from=='GBP' AND $to=='CHF')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1;
        echo " CHF</b></center>";
    }
    if($from=='CHF' AND $to=='GBP')
    {
        echo "<br><center><b style='background: #FACC14;border-radius: 5px;  padding: 10px;'>   ";
        echo $amount*1; 
        echo " €</b></center>";
        
    }
}
?>
</div>
</div>
</div>
</body>
</html>