<html>
<head>
<title>Template1</title>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href=  "t2.css">
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        


</head>
<body>


<?php

class BanglaConverter {
   public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
   public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
   
   public static function bn2en($number) {
       return str_replace(self::$bn, self::$en, $number);
   }
   
   public static function en2bn($number) {
       return str_replace(self::$en, self::$bn, $number);
   }
}
?>


<div class="w" >

           

        
<div class="row">
    <div class="column address">

        <strong>পরীক্ষা নিয়ন্ত্রকের অফিস</strong><br>
        <strong>ঢাকা বিশ্ববিদ্যালয়</strong><br>
        ঢাকা-১০০০,বাংলাদেশ।<br>
        ফোনঃ(অফিস)৮৬১৩২৮০<br>
        ৯৬৬১৯০০-৫৯/৪০৭৫<br>
        (বাসা)৯৬৬৬১৩৫<br>
        ফ্যাক্সঃ৮৮০-২-৯৬৬৭২২২<br>
        <p>Email:<a href="https:examcontroller@du.ac.bd">examcontroller@du.ac.bd</a></p>

    </div>

    <div class="column image">
         <img src="DhakaUniversity.jpg" width="80" height="100">
    </div>
</div>



<div class="row">
        

        <div class="column right">

                <p>মেমো নংঃ<?php echo BanglaConverter::en2bn( $_POST["memo"]);?>শা-৫/প</p>

        
        </div>

        <div class="column left">

        <p>তারিখঃ <?php 
                      $orgDate = $_POST["birthday"];  
                      $newDate = date("d-m-Y", strtotime($orgDate));  
                     
                      echo BanglaConverter::en2bn($newDate);
                      echo"<br>";
                   

?></p>

        </div>
</div>


<div class="row">

        <div class="column p1">

            <p>প্রাপকঃ</p>
            

        </div>

        <div class="column p2">

                <?php echo $_POST["teacher"];
                echo "<br>";
                $a=$_POST["teacher"];


                $conn=mysqli_connect("localhost","root","","faculty");

                        $sql="SELECT * FROM teacher WHERE t_name='" . $a . "'";
                        $result=mysqli_query($conn,$sql);
                    // $resultCheck=mysqli_num_rows($result);

                    // if($resultCheck>0)
                    // {
                        if (mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result)) 
                            {
                            echo "" . $row["designation"]. "<br>";
                            echo "" . $row["department"]. "<br>";
                            }

                        }  

                        
                        mysqli_close($conn);
                    

                
                ?>
        
        </div>
    
</div>

<div class="intro">
<p>
<br>
জনাব,<br>
আপনাকে জানাইতেছি যে, <?php echo BanglaConverter::en2bn($_POST["year"]);?> সনের............................... <?php echo $_POST["hj"];?> .....................................    পরীক্ষার<br>
.................................................................................................<?php echo $_POST["country"];?>  .....................................................................................................................বিষয়ে <br>কোর্স/পত্র নং .................................................................................................<?php echo $_POST["state"];?>.................................................................................................  <br>
এর বাংলা ও ইংরেজি উভয় ভাষার প্রশ্নপত্র প্রণয়ন করার জন্য আপনাকে যুগ্ম প্রশ্নপত্র প্রণেতা ও পরীক্ষক নিয়োগ করা হইয়াছে।<br>
</p>

</div>



<div class="start">

<strong>বিশেষ নির্দেশনাবলীঃ</strong>

</div>


<div class="a">

<p> উল্লেখিত প্রশ্নপত্র প্রণয়ন প্রসঙ্গে আনুসাঙ্গিক তথ্যাবলী সম্বলিত নিম্নলিখিত কাগজপত্র এতদসঙ্গে গ্রথিত হইলঃ(১)প্রশ্নপত্র প্রণেতাদের <br>
প্রতি নির্দেশনাবলী (২) নির্ধারিত পাঠ্যসূচী (৩) সংশ্লিষ্ট পত্রের পূর্ববর্তী  বৎসরের প্রশ্নপত্র (৪) প্রশ্নপত্র প্রণয়নের জন্য রেখাঙ্কিত কাগজ (৫) ঠিকানা<br>
যুক্ত ছোট বড় প্রয়োজনীয় খাম।<br></p>

</div>


<div class="b">
<p>
প্রনীত প্রশ্নপত্র গ্রথিত খামে সিলমোহর পূর্বক  বীমাকৃত ডাকে অথবা ব্যক্তিগতভাবে
<?php 
                      $orgDate = $_POST["birthday1"];  
                      $newDate1 = date("d-m-Y", strtotime($orgDate));  
                     
                      echo BanglaConverter::en2bn($newDate1);
                      
                   

?> ইং তারিখের মদ্ধে ঢাকা বিশ্ববিদ্যালয়ের<br>
সংশ্লিষ্ট বিষয়ের  পরীক্ষা কমিটির চেয়ারম্যান প্রফেসর/ড/জনাব..................................................................................................................................................<br>
এর নিকট জমা দেয়ার জন্য আপনাকে সবিনয় অনুরোধ করিতেছি।সরবরাহকৃত ছোট খামের শূন্যস্থানগুলি যথাযথভাবে পূরন করা প্রয়োজনীয়।<br>
</p>
</div>

<div class="c">

<p>
আপনার প্রণীত  প্রশ্নপত্র নির্ধারিত তারিখের মধ্যে পাওয়া না গেলে বিশ্ববিদ্যালয় করতিপক্ষ বিকল্প ব্যবস্থা গ্রহণ করিতে বাধ্য হইবে।<br>
নিযুক্তিপত্র গ্রহণে অপারগ হইলে অবশ্যই ইহার কারণ জানাইয়া সঙ্গে এতদসংলগ্ন কাগজপত্রাদিও ফেরত পাঠানোর জন্য আপনাকে অনুরোধ <br>
করতেছি।<br>
</p>

</div>

<div class="d">

<p> প্রণয়নকৃত প্রশ্নপত্রের পান্ডুলিপি পরিষ্কার পরিচ্ছন্ন ও সুস্পষ্ট  হওয়া  একান্ত বাঞ্ছনীয়। কোন ছক বা অন্য কোন তথ্যাদি প্রশ্নপত্রের সঙ্গে <br>
সরবরাহ করার প্রয়োজন হইলে তাহা পৃথকভাবে সংশ্লিষ্ট  চেয়ারম্যানকে সঠিক নির্দেশিকা প্রদান করিতে অনুরোধ করিতেছি।<br></p>

</div>
    
<div class="e">

<p> আপনার কোনো নিকট আত্মীয় যেমনঃ (১) ভাই  (২) বোন  (৩) স্ত্রী/স্বামীর  (ক) ভাই/বোন  (৪) ছেলে  (৫) মেয়ে  (৬) ভ্রাতৃবধূ  (৭) ভগ্নিপতি <br>
(৮) স্ত্রী (৯) স্বামী (১০) ভাই ও বোনের সন্তানের (১১) পুত্রবধূ  (১২) জামাতা  (১৩) আপন চাচা-চাচী  (১৪) আপন মামা-মামী  (১৫) আপন ফুফা-ফুফু<br>
এবং (১৬) আপন খালা-খালু এই পরীক্ষায় যদি পরীক্ষার্থীর/পরীক্ষার্থিনী থাকে ,তবে তাহা নিয়োগপত্র গ্রহণের পূর্বে  অত্র অফিসে জানানোর জন্য <br>
অনুরোধ করতেছি।<br>
</p>

</div>



<div class="f">

<p>আপনি যদি শিক্ষা প্রতিষ্ঠান/বিভাগ ছাড়া অন্য কোন সরকারী দপ্তরের কর্মকর্তা হন,তবে আপনাকে এই কাজের পারিশ্রমিক গ্রহণের<br>
জন্য সরকারী অনুমোদন পত্র বিলের সহিত গ্রথিত করিয়া দিতে হইবে।সরকারী কর্মচারীদের নিযুক্ত
গ্রহণের পূর্বে  অবশ্যই কর্তৃপক্ষের অনুমতি<br>নিতে হইবে।</p>

</div >


<div class="g">

<p>উক্ত বিষয়ে আপনার সম্মতি যথাশীঘ্র জানাইবার জন্য অনুরোধ করিতেছি।<p>

</div>    

<div class="h">

<p>আপনার বিশ্বস্ত</p>
<img id="myImage" src="Signature.jpg" style="width:100px">

</div>

<div class="row">


   <div class="column i">
        <p>ঢবপ-৪৮১-০২-২০১৯-২০,০০০ কপি</p>
    </div>    


    <div class="column j">
        
        <p>পরীক্ষা নিয়ন্ত্রকের পক্ষে<br>
        পরীক্ষা উপ-নিয়ন্ত্রক<br>
        ঢাকা বিশ্ববিদ্যালয়।<br>
        </p>

    </div>
    
   
</div>

</div>



</body>
</html>





