<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="C:\xampp2\htdocs\LOGIN\1.css">
        <style>
            div.a 
            {
               text-indent: 50px;
            }

            div.Name
            {
                background-position: 10px 12px;
            }

            div.c
            {
               text-indent: 50px;
            }

            div.d 
            {
               text-indent: 50px;
            }

            div.e
             {
                text-indent: 50px;
             }

             div.f
             {
                text-indent: 50px;
             }
             div.g
             {
                text-indent: 650px;
             }
        </style>
    </head>

    <body>

   
    
</form>
    <div class="address">
        <strong>পরীক্ষা নিয়ন্ত্রকের অফিস</strong><br>
        <strong>ঢাকা বিশ্ববিদ্যালয়</strong><br>
        ফোনঃ(অফিস)৮৬১৩২৮০<br>
        ৯৬৬১৯০০-৫৯/৪০৭৫<br>
        (বাসা)৯৬৬৬১৩৫<br>
        ফ্যাক্সঃ৮৮০-২-৯৬৬৭২২২<br>
        <p>Email:<a href="https:examcontroller@du.ac.bd">examcontroller@du.ac.bd</a></p>

    </div> 

    <div class="date">
        <form action="/action_page.php">
        <label for="Date">তারিখঃ</label>
        <input type="date" id="Date" name="Date">  
    
    </div>
    
    <div class="Name">
        <p>প্রাপকঃ</p>
        <?php
                $hostname="localhost";
                $dbname1="teacher";
                $username="root";
                $password="";
                

                $conn=mysqli_connect("$hostname","$username","","$dbname1");

                if(mysqli_connect_errno())

                {
                    echo "Connection Failed" .mysqli_connect_error();
                }

                $result=mysqli_query($conn,"SELECT * FROM info");
                echo"<left>";
                echo"<select>";
                echo"<option> Select Teacher name</option>";

                while($row=mysqli_fetch_array($result))
                {
                    echo "<option>$row[Name]</option>";
                }
                echo "</select>";
                echo "</left>";

               

                mysqli_close($conn);
 ?>
    </div>

    <form>
        <br>
         <input type="text" id="designation" name="designation"><br><br>
         <input type="text" id="department" name="designation"><br><br>
         <input type="submit" value="Submit"><br><br>
         </form>

         <strong>বিশেষ নির্দেশনাবলীঃ</strong>
    
         
   <div class="a">
         <p> উল্লেখিত প্রশ্নপত্র প্রণয়ন প্রসঙ্গে আনুসাঙ্গিক তথ্যাবলী সম্বলিত নিম্নলিখিত কাগজপত্র এতদসঙ্গে গ্রথিত হইলঃ(১)প্রশ্নপত্র প্রণেতাদের <br>
       প্রতি নির্দেশনাবলী (২) নির্ধারিত পাঠ্যসূচী (৩) সংশ্লিষ্ট পত্রের পূর্ববর্তী  বৎসরের প্রশ্নপত্র (৪) প্রশ্নপত্র প্রণয়নের জন্য রেখাঙ্কিত কাগজ (৫) ঠিকানা<br>
        যুক্ত ছোট বড় প্রয়োজনীয় খাম।<br></p>
   </div>
        
   <div class="b">

            </div>

   <div class="c">
       <p>আপনার প্রণয়নকৃত প্রশ্নপত্রের পান্ডুলিপি পরিষ্কার পরিচ্ছন্ন ও সুস্পষ্ট  হওয়া  একান্ত বাঞ্ছনীয়। কোন ছক বা অন্য কোন তথ্যাদি প্রশ্নপত্রের সঙ্গে <br>
           সরবরাহ করার প্রয়োজন হইলে তাহা পৃথকভাবে সংশ্লিষ্ট  চেয়ারম্যানকে সঠিক নির্দেশিকা প্রদান করিতে অনুরোধ করিতেছি।<br></p>
    </div>
        
   <div class="d">
         <p> আপনার কোনো নিকট আত্মীয় যেমনঃ (১) ভাই  (২) বোন  (৩) স্ত্রী/স্বামীর  (ক) ভাই/বোন  (৪) ছেলে  (৫) মেয়ে  (৬) ভ্রাতৃবধূ  (৭) ভগ্নিপতি <br>
(৮) স্ত্রী (৯) স্বামী (১০) ভাই ও বোনের সন্তানের (১১) পুত্রবধূ  (১২) জামাতা  (১৩) আপন চাচা-চাচী  (১৪) আপন মামা-মামী  (১৫) আপন ফুফা-ফুফু<br>
 এবং (১৬) আপন খালা-খালু এই পরীক্ষায় যদি পরীক্ষার্থীর/পরীক্ষার্থিনী থাকে ,তবে তাহা নিয়োগপত্র গ্রহণের পূর্বে  অত্র অফিসে জানানোর জন্য <br>
অনুরোধ করতেছি।<br>

   </p>
            </div>

    

   <div class="e">
         <p>আপনি যদি শিক্ষা প্রতিষ্ঠান/বিভাগ ছাড়া অন্য কোন সরকারী দপ্তরের কর্মকর্তা হন,তবে আপনাকে এই কাজের পারিশ্রমিক গ্রহণের<br>
            জন্য সরকারী অনুমোদন পত্র বিলের সহিত গ্রথিত করিয়া দিতে হইবে।সরকারী কর্মচারীদের নিযুক্ত
            গ্রহণের পূর্বে  অবশ্যই কর্তৃপক্ষের অনুমতি<br>নিতে হইবে।</p>
    
   </div >
        
    <div class="f">
        <p>উক্ত বিষয়ে আপনার সম্মতি যথাশীঘ্র জানাইবার জন্য অনুরোধ করিতেছি।<p>
    </div>    

    <div class="g">
        <p>আপনার বিশ্বস্ত</p>
    </div>

    <div class="h">
        
        <p>পরীক্ষা নিয়ন্ত্রকের পক্ষে<br>
        পরীক্ষা উপ-নিয়ন্ত্রক<br>
        ঢাকা বিশ্ববিদ্যালয়।<br>
        </p>
    </div>
    
    <div>
        <p>ঢবপ-৪৮১-০২-২০১৯-২০,০০০ কপি</p>
    </div>
        
    

    </body>
</html>
