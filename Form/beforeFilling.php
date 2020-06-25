<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="C:\xampp2\htdocs\LOGIN\1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <style>
            

            div.container {
                    margin: auto;
                    width: 120%;
                    padding: 25px 1500px 25px 0px;
                    text-align: left;
                    float:left;
                    }

            div.intro
            {

                text-indent: 50px;
            }


            div.a 
            {
               text-indent: 50px;
            }

            

            div.b
            {
               text-indent: 50px;
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
                text-indent: 50px;
             }

            
        </style>
    </head>

    <body>
    <img src="DhakaUniversity.jpg" alt="Girl in a jacket"> 
   
    <form action="Afterfilling.php" method="post">
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
        
        <label for="Date">তারিখঃ</label>
        <input type="date" id="birthday" name="birthday" required>
    
    </div>
    <strong>প্রাপকঃ</strong>
    <div class="Name">
        
        <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:16px;  
           }  
           </style>  
       
          
           <div class="container">  
              
               
                
                <input type="text" name="teacher" id="teacher" class="form-control" placeholder="Enter tecaher's Name" required >  
               

                <div id="teacherList"></div>  
                
            </div>
          
          
         
           
     
 <script>  
 $(document).ready(function()
 {  
      $('#teacher').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#teacherList').fadeIn();  
                          $('#teacherList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function()
      {  
           $('#teacher').val($(this).text());  
           
           $('#teacherList').fadeOut();  
           
           
            
            
        
      });  

      

      

     
 });  
 
 </script>  


    </div>
    
    <div class="intro">
    <p>
    <br>
    জনাব,<br>
    আপনাকে জানাইতেছি যে,  সনের  পরীক্ষার বিষয়ে কোর্স/পত্র নং  <br>
    এর বাংলা ও ইংরেজি উভয় ভাষার প্রশ্নপত্র প্রণয়ন করার জন্য আপনাকে যুগ্ম প্রশ্নপত্র প্রণেতা ও পরীক্ষক নিয়োগ করা হইয়াছে।<br>
    </p>

    </div>
    
         <strong>বিশেষ নির্দেশনাবলীঃ</strong>
    
         
   <div class="a">
         <p> উল্লেখিত প্রশ্নপত্র প্রণয়ন প্রসঙ্গে আনুসাঙ্গিক তথ্যাবলী সম্বলিত নিম্নলিখিত কাগজপত্র এতদসঙ্গে গ্রথিত হইলঃ(১)প্রশ্নপত্র প্রণেতাদের <br>
       প্রতি নির্দেশনাবলী (২) নির্ধারিত পাঠ্যসূচী (৩) সংশ্লিষ্ট পত্রের পূর্ববর্তী  বৎসরের প্রশ্নপত্র (৪) প্রশ্নপত্র প্রণয়নের জন্য রেখাঙ্কিত কাগজ (৫) ঠিকানা<br>
        যুক্ত ছোট বড় প্রয়োজনীয় খাম।<br></p>
   </div>
     
   <div class="a1">
   <select name="year" id="ddlYears"></select>
      
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script type="text/javascript">
          $(function () {
              //Reference the DropDownList.
              var ddlYears = $("#ddlYears");
      
              //Determine the Current Year.
              var currentYear = (new Date()).getFullYear();
      
              //Loop and add the Year values to DropDownList.
              for (var i =currentYear ; i <=2100 ; i++) {
                  var option = $("<option />");
                  option.html(i);
                  option.val(i);
                  ddlYears.append(option);
              }
          });
      </script>
    </div>
   <div class="b">
         <p>
         প্রনীত প্রশ্নপত্র গ্রথিত খামে সিলমোহর পূর্বক  বীমাকৃত ডাকে অথবা ব্যক্তিগতভাবে    ইং তারিখের মদ্ধে ঢাকা বিশ্ববিদ্যালয়ের<br>
         সংশ্লিষ্ট বিষয়ের  পরীক্ষা কমিটির চেয়ারম্যান প্রফেসর/ড/জনাব...........................................................<br>
         এর নিকট জমা দেয়ার জন্য আপনাকে সবিনয় অনুরোধ করিতেছি।সরবরাহকৃত ছোট খামের শূন্যস্থানগুলি যথাযথভাবে পূরন করা প্রয়োজনীয়।<br>
         </p>
    </div>

    <div class="c">
        <p>
        আপনার প্রণীত  প্রশ্নপত্র নির্ধারিত তারিখের মধ্যে পাওয়া না গেলে বিশ্ববিদ্যালয় করতিপক্ষ বিকল্প ব্যবস্থা গ্রহণ কক্রিতে বাধ্য হইবে।<br>
        নিযুক্তিপত্র গ্রহণে অপারগ হইলে অবশ্যই ইহার কারণ জানাইয়া সঙ্গে এতদসংলগ্ন কাগজপত্রাদিও ফেরত পাঠানোর জন্য আপনাকে অনুরোধ <br>
        করতেছি।<br>
        </p>
    </div>

   <div class="d">
       <p>আপনার প্রণয়নকৃত প্রশ্নপত্রের পান্ডুলিপি পরিষ্কার পরিচ্ছন্ন ও সুস্পষ্ট  হওয়া  একান্ত বাঞ্ছনীয়। কোন ছক বা অন্য কোন তথ্যাদি প্রশ্নপত্রের সঙ্গে <br>
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
    </div>

    <div class="i">
        
        <p>পরীক্ষা নিয়ন্ত্রকের পক্ষে<br>
        পরীক্ষা উপ-নিয়ন্ত্রক<br>
        ঢাকা বিশ্ববিদ্যালয়।<br>
        </p>
    </div>
    
    <div>
        <p>ঢবপ-৪৮১-০২-২০১৯-২০,০০০ কপি</p>
    </div>

    <br>

    <input type="submit" value="Submit">
        
        </form> 

    </body>
</html>
