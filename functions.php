
<script>

window.onload = function(){
 
    // БЛОК 1
    {
     var date = new Date();
     var curr_date = new Date();
    date.setMonth(8);
    date.setDate(1);
    date.setHours(0);
    date.setMinutes(0);
 
    var ost_date = new Date(),
        ost_hours,
        ost_minuts;
    
    ost_date = Math.floor((date - curr_date)/(3600000*24));
    ost_hours = Math.floor((date - curr_date)/3600000) - (ost_date * 24);
    ost_minuts = Math.floor(((date - curr_date)/60000) - (ost_date * 24 * 60) - (ost_hours * 60));
  
    document.getElementById('promo_1_Day_1').innerHTML = (ost_date - ost_date % 10) / 10;
        document.getElementById('promo_1_Day_2').innerHTML = ost_date % 10;
    
    // ЧАСЫ
        document.getElementById('promo_1_Hours_1').innerHTML = (ost_hours - ost_hours % 10) / 10;
        document.getElementById('promo_1_Hours_2').innerHTML = ost_hours % 10;
        
    // Минуты
        document.getElementById('promo_1_Minuts_1').innerHTML = (ost_minuts - ost_minuts % 10) / 10;
        document.getElementById('promo_1_Minuts_2').innerHTML = ost_minuts % 10;
    
    setInterval(function(){
        var curr_date2 = new Date();
        ost_date = Math.floor((date - curr_date2)/(3600000*24));
    ost_hours = Math.floor((date - curr_date2)/3600000) - (ost_date * 24);
    ost_minuts = Math.floor(((date - curr_date2)/60000) - (ost_date * 24 * 60) - (ost_hours * 60));
        
    // ДНИ
        
        document.getElementById('promo_1_Day_1').innerHTML = (ost_date - ost_date % 10) / 10;
        document.getElementById('promo_1_Day_2').innerHTML = ost_date % 10;
    
    // ЧАСЫ
        document.getElementById('promo_1_Hours_1').innerHTML = (ost_hours - ost_hours % 10) / 10;
        document.getElementById('promo_1_Hours_2').innerHTML = ost_hours % 10;
        
    // Минуты
        document.getElementById('promo_1_Minuts_1').innerHTML = (ost_minuts - ost_minuts % 10) / 10;
        document.getElementById('promo_1_Minuts_2').innerHTML = ost_minuts % 10;
       
        console.log(ost_minuts % 10);
       
    }, 60000);}
    // БЛОК 3
     {
     var date3 = new Date();
     var curr_date = new Date();
    date3.setMonth(07);
    date3.setDate(02);
    date3.setHours(20);
    date3.setMinutes(00);
 
    var ost_date3 = new Date(),
        ost_hours3,
        ost_minuts3;
    
    ost_date3 = Math.floor((date3 - curr_date)/(3600000*24));
    ost_hours3 = Math.floor((date3 - curr_date)/3600000) - (ost_date3 * 24);
    ost_minuts3 = Math.floor(((date3 - curr_date)/60000) - (ost_date3 * 24 * 60) - (ost_hours3 * 60));
   
    // ДНИ
            
        document.getElementById('promo_3_Day_1').innerHTML = (ost_date3 - ost_date3 % 10) / 10;
        document.getElementById('promo_3_Day_2').innerHTML = ost_date3 % 10;
    
    // ЧАСЫ
        document.getElementById('promo_3_Hours_1').innerHTML = (ost_hours3 - ost_hours3 % 10) / 10;
        document.getElementById('promo_3_Hours_2').innerHTML = ost_hours3 % 10;
        
    // Минуты
        document.getElementById('promo_3_Minuts_1').innerHTML = (ost_minuts3 - ost_minuts3 % 10) / 10;
        document.getElementById('promo_3_Minuts_2').innerHTML = ost_minuts3 % 10;
    
    setInterval(function(){
        var curr_date2 = new Date();
        ost_date3 = Math.floor((date3 - curr_date2)/(3600000*24));
    ost_hours3 = Math.floor((date3 - curr_date2)/3600000) - (ost_date3 * 24);
    ost_minuts3 = Math.floor(((date3 - curr_date2)/60000) - (ost_date3 * 24 * 60) - (ost_hours3 * 60));
        
    // ДНИ
            
        document.getElementById('promo_3_Day_1').innerHTML = (ost_date3 - ost_date3 % 10) / 10;
        document.getElementById('promo_3_Day_2').innerHTML = ost_date3 % 10;
    
    // ЧАСЫ
        document.getElementById('promo_3_Hours_1').innerHTML = (ost_hours3 - ost_hours3 % 10) / 10;
        document.getElementById('promo_3_Hours_2').innerHTML = ost_hours3 % 10;
        
    // Минуты
        document.getElementById('promo_3_Minuts_1').innerHTML = (ost_minuts3 - ost_minuts3 % 10) / 10;
        document.getElementById('promo_3_Minuts_2').innerHTML = ost_minuts3 % 10;
    }, 60000);}
    // БЛОК 4
     {
     var date4 = new Date();
     var curr_date = new Date();
    date4.setMonth(7);
    date4.setDate(15);
    date4.setHours(18);
    date4.setMinutes(30);
 
    var ost_date4 = new Date(),
        ost_hours4,
        ost_minuts4;
    
    ost_date4 = Math.floor((date4 - curr_date)/(3600000*24));
    ost_hours4 = Math.floor((date4 - curr_date)/3600000) - (ost_date4 * 24);
    ost_minuts4 = Math.floor(((date4 - curr_date)/60000) - (ost_date4 * 24 * 60) - (ost_hours4 * 60));
   
    // ДНИ
            
        document.getElementById('promo_4_Day_1').innerHTML = (ost_date4 - ost_date4 % 10) / 10;
        document.getElementById('promo_4_Day_2').innerHTML = ost_date4 % 10;
    
    // ЧАСЫ
        document.getElementById('promo_4_Hours_1').innerHTML = (ost_hours4 - ost_hours4 % 10) / 10;
        document.getElementById('promo_4_Hours_2').innerHTML = ost_hours4 % 10;
        
    // Минуты
        document.getElementById('promo_4_Minuts_1').innerHTML = (ost_minuts4 - ost_minuts4 % 10) / 10;
        document.getElementById('promo_4_Minuts_2').innerHTML = ost_minuts4 % 10;
    
    setInterval(function(){
        var curr_date2 = new Date();
        ost_date4 = Math.floor((date4 - curr_date2)/(3600000*24));
    ost_hours4 = Math.floor((date4 - curr_date2)/3600000) - (ost_date4 * 24);
    ost_minuts4 = Math.floor(((date4 - curr_date2)/60000) - (ost_date4 * 24 * 60) - (ost_hours4 * 60));
        
    // ДНИ
            
        document.getElementById('promo_4_Day_1').innerHTML = (ost_date4 - ost_date4 % 10) / 10;
        document.getElementById('promo_4_Day_2').innerHTML = ost_date4 % 10;
    
    // ЧАСЫ
        document.getElementById('promo_4_Hours_1').innerHTML = (ost_hours4 - ost_hours4 % 10) / 10;
        document.getElementById('promo_4_Hours_2').innerHTML = ost_hours4 % 10;
        
    // Минуты
        document.getElementById('promo_4_Minuts_1').innerHTML = (ost_minuts4 - ost_minuts4 % 10) / 10;
        document.getElementById('promo_4_Minuts_2').innerHTML = ost_minuts4 % 10;
    }, 60000);}
 };
    
    
</script>
